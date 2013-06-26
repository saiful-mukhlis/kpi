<style type="text/css">
body {
	padding-top: 40px;
	padding-bottom: 40px;
	background-color: #f5f5f5;
}

.form-signin {
	max-width: 500px;
	padding: 19px 29px 29px;
	margin: 0 auto 20px;
	background-color: #fff;
	border: 1px solid #e5e5e5;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	-webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
	-moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
	box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
}

.form-signin .form-signin-heading,.form-signin .checkbox {
	margin-bottom: 10px;
}

.form-signin input[type="text"],.form-signin input[type="password"] {
	font-size: 16px;
	height: auto;
	margin-bottom: 15px;
	padding: 7px 9px;
}
</style>

<div class="container">

<?php 


$form = $this->beginWidget ( 'bootstrap.widgets.TbActiveForm', array (
		'id' => 'login-form',
		'enableAjaxValidation' => false,
		'clientOptions' => array (
				'validateOnSubmit' => true 
		) 
) );
?>
	<div class="form-signin">
		<h2 class="form-signin-heading">Please sign in</h2>
		<?php echo $form->textFieldRow($model,'username',array('class'=>'span3','maxlength'=>100)); ?>
		<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span3','maxlength'=>255)); ?>

	<div class="control-group ">
			<label class="checkbox">
			<?php echo $form->checkBox($model,'rememberMe'); ?> Remember me
			<?php echo $form->error($model,'rememberMe'); ?>
        </label>
		</div>


		<div style="text-align: right;">
			<button type="submit" class="btn btn-primary">Login</button>
		</div>
	</div>
	
<?php $this->endWidget(); ?>


</div>
<!-- /container -->