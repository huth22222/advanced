<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTest1()
    {
       // echo 'ทดสอบ 1';
        $a=3;$b=5;
        $sum=$a+$b;
        $param = ['sum'=>$sum,'a1'=>10,'b1'=>11];
        return $this->render('test1',$param);
    }//จบ test1
    
    public function actionTest2($fname=null,$lname=null)
    {
        $info = "Your name is $fname $lname";
         return $this->render('test2',['info'=>$info]);
    }

}

