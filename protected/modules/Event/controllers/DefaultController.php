<?php

class DefaultController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	// public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('deleteimage','saveimage','image','place','create','index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	public function actionDeleteImage()
	{
		if (isset($_POST['name'])) {
			$name = $_POST['name'];
			$pathTemp = Yii::app()->basePath .'/../'.TEMP_IMAGE;
			$file = $pathTemp.$name;
			if (is_file($file)) {
				unlink($file);
			}
		}
	}
	public function actionSaveImage()
	{
		if(isset($_POST['id'])){
			header('Content-Type: application/json');
			$id = $_POST['id'];
			$name = $_POST['name'];
			$model = Event::model()->findByPk($id);
			if ($model != null) {
				checkdirectory(DATE_EVENT);
				$pathTemp = Yii::app()->basePath .'/../'.TEMP_IMAGE;
				$path = Yii::app()->basePath .'/../'.DATE_EVENT_PATH;
				$image = EventImage::model()->findByAttributes(array('event_id'=>$id,'status'=>1));
				$status = 0;
				$nameOld = '';
				if ($image == null) {
					$image = new EventImage;
					$image->event_id = $id;
					$image->image = $name;
					$image->path = DATE_EVENT_PATH;					
					$image->style = $_POST['style'];
					$image->status = 1;
					$image->save(false);
				}else{
					if ($image->image != $name) {
						$image->status = 0;
						$image->save(false);
						$image = new EventImage;
						$image->event_id = $id;
						$image->image = $name;
						$image->path = DATE_EVENT_PATH;					
						$image->style = $_POST['style'];
						$image->status = 1;
						$image->save(false);
					}else{
						$image->style = $_POST['style'];
						$image->save(false);
					}	
				}
				if (is_file($pathTemp.$name)) {
					rename($pathTemp.$name, $path.$image->image);
				}
				$link =  Yii::app()->baseUrl.$image->path.$image->image;
				$arr = array(
					'linkI'=>$link,
					'name' =>$name,
				);
				echo json_encode($arr);
			}

		}	
	}
	public function actionImage()
	{
		if(isset($_POST['data'])){
			header('Content-Type: application/json');
			$rows = json_decode($_POST['data'],true);
			$img = $rows[0]['image'];
			$typeImage = strtolower($rows[0]['type']);
			if($typeImage == 'jpg' || $typeImage == 'jpeg'){
            	$img = str_replace('data:image/jpeg;base64', '', $img);
            }
			if($typeImage == 'png' || $typeImage == 'PNG'){
				$img = str_replace('data:image/png;base64', '', $img);
			}
			if($typeImage == 'gif' || $typeImage == 'GIF'){
				$img = str_replace('data:image/gif;base64', '', $img);
			}
			// $img = str_replace(' ', '+', $img);
			$data = base64_decode($img);
			$path = Yii::app()->basePath .'/../'.TEMP_IMAGE;
			$name = strtotime(date('y-m-d H:i:s')).uniqid() . '.jpg';
			$nameNew = strtotime(date('y-m-d H:i:s')).uniqid() . '.jpg';
            $file = $path.$name;
            $fileNew =$path. $nameNew;
			$success = file_put_contents($file, $data);
			if ($success) {
				$status = compress($file,$fileNew);
				if ($status == null) {
					$link =  Yii::app()->baseUrl.TEMP_IMAGE.$name;
				}else{
					$link =  Yii::app()->baseUrl.TEMP_IMAGE.$nameNew;
					$name = $nameNew;
					unlink($file);
					$file = $fileNew;
				}		
				$info = getimagesize($file);
				$arr = array(
					'linkI'=>$link,
					'name' =>$name,
					'height' => $info[1],
					'width' => $info[0],
				);
				echo json_encode($arr);
			}
		}
	}
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$model = $this->loadModel($id);
		$this->render('view',array(
			'model' =>$model
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Event;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Event']))
		{
			$model->attributes=$_POST['Event'];
			if ($model->validate()) {
				echo $_POST['longitude'].'aksj';
				if (isset($_POST['longitude'])) {
					$location = Location::model()->findByAttributes(array('longitude'=>$_POST['longitude'],'latitude'=>$_POST['latitude']));
					if ($location == null) {
						$location = new Location;
						$location->longitude = $_POST['longitude'];	
						$location->latitude = $_POST['latitude'];	
						$location->title = $model->nameLocation;
						$location->url = toSlug(stripVietnamese($model->nameLocation));
						$location->save(false);
					}
					$model->location_id = $location->id;
					if($model->save())
						$this->redirect(array('view','id'=>$model->id));
				}else{
					$model->addError('nameLocation','Chưa nhập thông tin địa điểm');
				}
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Event']))
		{
			$model->attributes=$_POST['Event'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->render('index');
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Event('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Event']))
			$model->attributes=$_GET['Event'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Event the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Event::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Event $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='event-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
