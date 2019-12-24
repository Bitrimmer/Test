<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;


/* @var $this yii\web\View */
/* @var $model app\models\company */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

    <?php
    $this->registerJs(
        '$("document").ready(function(){
            $("#update_company").on("pjax:end", function() {
            $.pjax.reload({container:"#company"});  //Reload GridView
        });
    });'
    );
    ?>
    <div class="row">





    <div class="col-lg-8">
    <?php Pjax::begin(['id' => 'company']) ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'inn',
            'ceo',
            'address',

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}' //я отключил лишние кнопки
            ],

        ],
    ]); ?>
</div>
        <?php Pjax::end() ?>



    <? if (!Yii::$app->user->isGuest):?>
        <div class="col-lg-4">
        <div class="company-update">

            <h1><?= Html::encode($this->title) ?></h1>



            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>

        </div>
        </div>
    <? endif;?>

    </div>

