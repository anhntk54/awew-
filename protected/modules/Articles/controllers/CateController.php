<?php

class CateController extends Controller
{
	public function actionViewListArticle($cate_id)
	{
        $this->render('index');
	}
}