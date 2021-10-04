<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Blogs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="blog-view">

    <h1 style="border-bottom:solid 3px #111;"><?= Html::encode($this->title) ?></h1>
    <br>
    <h2>Intro:</h2>
    <h5><?php echo $model->intro ?></h5>
    <h2>Content:</h2>
    <h5><?php echo $model->content ?></h5>

</div>
