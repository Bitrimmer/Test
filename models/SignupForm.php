<?php
/**
 * Created by PhpStorm.
 * User: dis
 * Date: 11.09.2019
 * Time: 17:59
 */

namespace app\models;


use Yii;
use yii\base\Model;

class SignupForm extends Model
{

    public $login;
    public $password;


    public function rules(){

        return [
        [['login','password'], 'required'],
        [['login'], 'string'],
        [['login'],'unique', 'targetClass' => 'app\models\User','targetAttribute' => 'login']
        /*Запретили одинаковые логины =)*/
        ];
    }

      public function signup(){

        if($this->validate()){
            $user = new User();
            $user->login = $this->login;
            $user->password = md5($this->password);
            return $user->create();
        }

      }
}