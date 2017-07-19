
<script src="<?= Yii::app()->theme->baseUrl ?>/js/form/index.js"></script>

<?=
	CHtml::dropDownList('field-name', 'option2', 
		array('option1' => 'Option 1', 'option2' => 'Option 2', 'option3' => 'Option 3', 'option4' => 'Option 4'), 
		array(
			'class' => 'mydropdown',
			'options' => array(
				'option1' => array('class' => 'text-danger'),
				'option2' => array('class' => 'bg-warning'),
			)
		)
	)
?>

<style type="text/css">
	.dropdown .text-danger{ color: #a94442 !important; }
</style>