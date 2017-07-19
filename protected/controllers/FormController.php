<?php

class FormController extends CController
{
	public function actionIndex()
	{		
		$this->layout = 'home';
		$this->render('index');

		$orderId = rand(0,100000);

		Yii::log('BankController->actionIndex() : Start create order', 'application', 'order-'.$orderId);

		echo 'Okay';

		sleep(3);

		Yii::log('BankController->actionIndex() : order completed', 'anyname', 'order-'.$orderId);

		Yii::app()->end();
	}
}