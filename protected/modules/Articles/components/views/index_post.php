<div id="primary-left">
    <?php foreach($model as $row){?>
    <?php   $this->widget('Articles.components.Article_Cate',array('model'=>$row));?>
    <?php }?>
</div>