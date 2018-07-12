<?php
use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->label('测试的文本框')->hint('错误提示') ?>

<?= $form->field($model, 'email'), [
    'inputTemplate' => '<div class="input-group"><span class="input-group-addon test">@</span>{input}</div>',
]; ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>


<?= $form->field($model, 'test3')->input('text')?>

<?= $form->field($model, 'test3')->textInput(['maxlength' => true])?>

<?= $form->field($model, 'test3')->passwordInput() ?>


<?= $form->field($model, 'test3')->textarea(['rows'=>'3']) ?>

<?= $form->field($model, 'test3')->dropDownList(
    ['1'=>'下拉选项1','2'=>'下拉选项2'],
    ['prompt' => '请选择']
) ?>

<?= $form->field($model,'test3')->widget(yii\captcha\Captcha::className())?>




























































<?php ActiveForm::end(); ?>