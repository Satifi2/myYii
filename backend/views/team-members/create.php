<?php
/**
 *  Team: BaoSha
 *  Coding by 杜怡兴 2112847 1/18
 *  NuclearPollution backend
 */
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\TeamMembers $model */

$this->title = 'Create Team Members';
$this->params['breadcrumbs'][] = ['label' => 'Team Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-members-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
