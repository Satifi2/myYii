<?php
/**
 *  Team: BaoSha
 *  Coding by 杨淇 2112893 1/12
 *  NuclearPollution backend
 */
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\TeamMembers $model */

$this->title = $model->Student_id;
$this->params['breadcrumbs'][] = ['label' => 'Team Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="team-members-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Student_id' => $model->Student_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Student_id' => $model->Student_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'm_name',
            'Student_id',
            'Login',
            'pass_word',
        ],
    ]) ?>

</div>
