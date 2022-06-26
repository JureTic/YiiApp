<?php

/** @var yii\web\View $this */
$this->params['breadcrumbs'][] = $this->title;

$this->title = \Yii::t('app','My Job Application');
?>
<h1><?php echo \Yii::t('app',  "Status")?></h1>
<?php echo $progress ." %". \Yii::t('app',"completion") ?>
<div class="progress">
    <div class="progress-bar" role="progressbar" style="<?php echo "width:". $progress . "%"?>"  aria-valuenow="<?php echo $progress?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>

