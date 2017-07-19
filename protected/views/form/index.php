
<script src="<?= Yii::app()->theme->baseUrl ?>/js/form/index.js"></script>

<?=
	CHtml::dropDownList('field-name', 'option2', 
		array('option1' => 'Option 1 (No stock)', 'option2' => 'Option 2', 'option3' => 'Option 3', 'option4' => 'Option 4'),
		array(
			'class' => 'mydropdown',
			'options' => array(
				'option1' => array('class' => 'text-danger', 'disabled'=>'disabled'),
				'option2' => array('class' => 'bg-warning'),
			)
		)
	);
?>

<!--
<select class="mydropdown" name="field-name" id="field-name">
	<option value="option1" class="text-danger" disabled="disabled">Option 1 (No stock)</option>
	<option value="option2" selected="selected" class="bg-warning">Option 2</option>
	<option value="option3">Option 3</option>
	<option value="option4">Option 4</option>
</select>
-->

<style type="text/css">
	.dropdown.disabled{ background: #808080; }
	.dropdown .text-danger{ color: #a94442 !important; }
</style>