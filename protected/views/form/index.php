
<script src="<?= Yii::app()->theme->baseUrl ?>/js/form/index.js"></script>

<?=
	/*
	CHtml::dropDownList('field-name', 'option2',
		array('option1' => 'Option 1 <span>(No stock)</span>', 'option2' => 'Option 2', 'option3' => 'Option 3', 'option4' => 'Option 4'),
		array(
			'class' => 'mydropdown', 'data-value' => 'outlet3',
			'options' => array(
				'option1' => array('class' => 'text-danger', 'disabled'=>'disabled'),
				'option2' => array('class' => 'bg-warning'),
			)
		)
	);
	*/
	CHtml::dropDownList('field-name', 'option2',
		array(0),
		array(
			'class' => 'mydropdown', 'data-value' => 'outlet3',
			'options' => array(
				'option1' => array('class' => 'text-danger', 'disabled'=>'disabled'),
				'option2' => array('class' => 'bg-warning'),
			)
		)
	);
?>

<button id="clickme">Click Me</button>
<hr>

<!--
<select class="mydropdown" name="field-name" id="field-name">
	<option value="option1" class="text-danger" disabled="disabled">Option 1 (No stock)</option>
	<option value="option2" selected="selected" class="bg-warning">Option 2</option>
	<option value="option3">Option 3</option>
	<option value="option4">Option 4</option>
</select>
-->

<style type="text/css">
	.dropdown{ width: 500px }
	.dropdown.disabled{ background: #808080; }
	.dropdown .text-danger{ color: #a94442 !important; }
	.dropdown span{ color: green; }
</style>