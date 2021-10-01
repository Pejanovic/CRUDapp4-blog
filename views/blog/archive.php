<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Archive');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <table class="table table-light">

  <tbody>

      <?php foreach($model as $oneblog){ ?>

    <tr class="table-light">

      <td style="width:15px;"><?php echo $oneblog->slug?></td>
      <td> 
          <a href="<?= \yii\helpers\Url::to(['view', 'slug' => $oneblog->slug]) ?>">
          <?php echo $oneblog->title ?></a></td>

    </tr>
    <?php } ?>
    
  </tbody>
</table>




</div>
