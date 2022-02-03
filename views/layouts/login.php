<?php

/* @var $this \yii\web\View */
/* @var $content string */
/* @var $model app\models\LoginForm */

use app\assets\NewAsset;
use \yii\bootstrap4\ActiveForm;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

NewAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="bg-pattern">
<?php $this->beginBody() ?>

    <div class="bg-overlay"></div>
    <div class="account-pages my-5 pt-5">
        <div class="container">

            <?= $content ?>

        </div>
    </div>
    <!-- end Account pages -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
