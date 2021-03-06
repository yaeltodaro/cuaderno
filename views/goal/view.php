<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\data\ArrayDataProvider;
use yii\grid\GridView;
use kartik\widgets\DatePicker;
use app\models\GoalObjective;

$this->title = Yii::t('goal', 'Goal - ') . $goal->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('user', 'My Coachees'), 'url' => ['/coachee']];
$this->params['breadcrumbs'][] = ['label' => $goal->coachee->fullname, 'url' => ['/coachee/view', 'id' => $goal->coachee->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goal-view">
    <h1><?= Html::encode($this->title) ?></h1>
     <p>
        <?= Yii::t('user', 'Coach') ?>: <?= Html::label($goal->coachee->coach->fullname) ?><br />
        <?= Yii::t('user', 'Coachee') ?>: <?= Html::label($goal->coachee->fullname) ?><br />
    </p>
    <h2><?= Yii::t('goal', 'Resources') ?></h2>
    <?=
    $this->render('_resources', [
        'goal' => $goal,
    ])
    ?>
    <?= Html::a(Yii::t('goal', 'Edit resources'), Url::to(['/goal/resources', 'id' => $goal->id]), ['class' => 'btn btn-primary']) ?>
    <h2><?= Yii::t('goal', 'Objectives') ?></h2>
    <?=
    $this->render('_objectives', [
        'goal' => $goal,
    ])
    ?>
    <br />
    <?= Html::a(Yii::t('goal', 'New objective'), Url::to(['/goal/new-objective', 'id' => $goal->id]), ['class' => 'btn btn-primary']) ?>
</div>