<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Archive');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index">
  <div class="container bg-light">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
      <?php foreach($model as $oneblog){ ?>
      <div class="container bg-danger" style="margin:10px; color:white; border-radius:20px;">
        <div class="row">
          <div class="container" style="padding:10px">
            <div class="col-12">
      <h2><?php echo $oneblog->title?></h2>
           </div>
           <div class="col-12">
      <a><?php echo substr($oneblog->content,0,100)?></a>

      <a href="<?= \yii\helpers\Url::to(['archview', 'id' => $oneblog->id, 'slug'=>$oneblog->slug]) ?>" style="color:#fff; ">
          Read more...</a>
            </div>
          </div>
        </div>
      </div>
            <br>
      <?php } ?>





    </div>
  </div>
</div>
