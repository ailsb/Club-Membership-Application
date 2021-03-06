<?php
/* @var $this AdminController */
/* @var $mailout MailoutForm */
/* @var $search SearchForm */
/* @var $form ExtendedForm */

$baseUrl = Yii::app()->baseUrl; 
Yii::app()->clientScript->registerScriptFile($baseUrl.'/ckeditor/ckeditor.js');
Yii::app()->clientScript->registerCssFile($baseUrl.'/css/mailout.css');
Yii::app()->clientScript->registerScriptFile($baseUrl.'/scripts/mailout.js');

$this->breadcrumbs=array(
	'Mailout',
);
?>
<div id="templatemo_main">
<div class="form" id="properties">

<?php $form = $this->beginWidget('ExtendedForm', array(
	'id'=>'mailout-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="toggle-options">
		<?php echo CHtml::label("What would you like to do?", 'MailoutForm[type]'); ?><br/><br/>
		<?php echo $form->radioButtonList($mailout, 'type', array(
							'csv' => 'Generate CSV of the emails',
							'email' => 'Compose and send batch email'
						),
						array ('uncheckValue' => NULL)
					); 
		?>
	</div>
	<div id="csvOption">
		<div class="row buttons"><?php echo CHtml::submitButton("Generate CSV"); ?></div>
	</div>
	<div id="emailOption">
		<?php echo $form->labelEx($mailout, "emailSubject"); ?>
		<?php echo $form->textField($mailout, "emailSubject", array("size" => 60)); ?>
		<?php echo $form->textArea($mailout, 'emailContent', array("class" => "ckeditor")); ?>
		<div class="row buttons"><?php echo CHtml::submitButton("Send emails"); ?></div>
	</div>
	
	<h3 class="results"> Search Results</h3>
	<a class="backlink" href="mailout" title="Run another search">(run another search)</a>
<?php
// Run the search criteria
$results = $search->runSearch();
if (count($results)) 
{ ?>
	<table class="searchresults">
		<thead>
			<tr>
				<th scope="col">Membership Name</th>
				<th scope="col">Family Name</th>
				<th scope="col">Email Address</th>
			</tr>
		</thead>
		<tbody><?php
		foreach($results as $row)
		{ ?>
			<tr>
				<td><?php echo CHtml::encode($row->name); ?></td>
				<td><?php echo CHtml::encode($row->familyName); ?></td>
				<td><?php echo CHtml::encode($row->emailAddress); ?></td>
			</tr>
<?php	}?>
		</tbody>
	</table>
<?php
} 
else 
{ ?>
	<p>Your search criteria yielded no results</p> <?php
} ?>
<?php $this->endWidget(); ?>
</div>
</div>