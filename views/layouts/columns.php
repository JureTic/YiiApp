<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="../../web/css/site.css">

</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>

</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <?php
                NavBar::begin([
                    'brandLabel' => Yii::$app->name,
                    'brandUrl' => Yii::$app->homeUrl,
                    'options' => [
                        'class' => 'navbar navbar-light',
                    ],
                ]);
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav'],
                    'items' => [
                        ['label' => \Yii::t('app','Progress'), 'url' => ['site/index']],
                        ['label' => \Yii::t('app','Your reports'), 'url' => Url::to('?r=report%2Findex')],
                        ['label' => \Yii::t('app','Dummy site'), 'url' => ['#']],
                        ['label' => \Yii::t('app','Dummy site'), 'url' => ['#']],
                    ],
                ]);
                NavBar::end();
                ?>
            </div>
            <div class="col-lg-4">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
            <div class="col-lg-4">
                <h3><?php echo \Yii::t('app','Introduction')?></h3>
                <p><?php echo \Yii::t('app',"The site calculates completion percantage from the combined normalized percantage of all reports assigned to tasks of project 1 in the database. (calculation located in query in ReportModel.php) CRUD operations on these reports can be executed by selecting 'Your Reports' item in the menu and than editing the desired report. ")?></p>
                <br>
                <p><?php echo \Yii::t('app',"Input validation is used when editing report, so that percantage can not be greater than 100. All strings are wrapped in \Yii::t('','') function for trainslation and i18n component is configured in we.php. ")?></p>

            </div>
        </div>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; My Company <?= date('Y') ?></p>
        <p class="float-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
