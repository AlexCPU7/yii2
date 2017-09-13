<?php
/**
 * Created by PhpStorm.
 * User: AlexCPU7
 * Date: 30.08.2017
 * Time: 22:01
 */

namespace app\modules\controllers;
use yii\web\Controller;
use yii\filters\AccessControl;

class AppAdminController extends Controller
{

    public function behaviors(){

        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ]
        ];
    }

}