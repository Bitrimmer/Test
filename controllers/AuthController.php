<?php
/**
 * Created by PhpStorm.
 * User: dis
 * Date: 11.09.2019
 * Time: 12:34
 */

namespace app\controllers;
use app\models\SignupForm;
use yii\helpers\Url;
use Yii;
use yii\web\Controller;
use app\models\LoginForm;



class AuthController extends Controller
{
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
         return $this->redirect(Url::to('site/company'));

        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
        return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    public function actionSignup(){

        $model = new SignupForm();

        if(Yii::$app->request->isPost){

            $model->load(Yii::$app->request->post());
            if($model->signup()){
                $this->redirect(['auth/login']);
            }

        }

        return $this->render('singup', ['model'=> $model]);


    }













}