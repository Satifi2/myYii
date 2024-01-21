<?php
/**
 *  Team: BaoSha
 *  Coding by 杜怡兴 2112847 1/15
 *  NuclearPollution backend
 */
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Suggestion $model */

$this->title = 'Create Suggestion';
$this->params['breadcrumbs'][] = ['label' => 'Suggestions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suggestion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
