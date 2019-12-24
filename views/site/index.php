<?php

/* @var $this yii\web\View */

$this->title = 'Test App';

use yii\helpers\Html;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">Допро пожаловать в тестовое приложение для Прокопьева Ивана</p>


    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2>Пользователи</h2>

                <p>Вы можете зарегистрироватся и авторизоватся - после чего вас перекинет на страницу компаний</p>
                <?= Html::a('Пользователи','/users/index',[
                        'class'=> 'btn-success btn-lg',
                ])?>

            </div>
            <div class="col-lg-6">
                <h2>Компании</h2>

                <p>Компании может редактировать только администратор а попасть на страницу могут все пользователи</p>
                <?= Html::a('Компании','/company/index',[
                    'class'=> 'btn-warning btn-lg',
                ])?>

            </div>

        </div>

    </div>
</div>
