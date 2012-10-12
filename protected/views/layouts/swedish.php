<?php 
/* @var $this Controller */ 
Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/jquery.easing.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/ddsmoothmenu.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/lofslidernews.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/core.js');
//Yii::app()->clientScript->registerScriptFile((!empty($_SERVER['HTTPS']) ? 'https://ssl.microsofttranslator.com' : 'http://www.microsofttranslator.com') . '/ajax/v2/widget.aspx?mode=manual&from=en&layout=ts');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
		<meta name="language" content="en" />
		
		<!-- blueprint CSS framework -->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/screen.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/print.css" media="print" />
		<!--[if lt IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/ie.css" media="screen, projection" />
		<![endif]-->
		
		<!-- custom CSS styles --->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/main.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/form.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/ddsmoothmenu.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/swedish.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/slider.css" />
		
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>
	<body>
		<div id="page_wrapper">
			<div id="page_header">
				<a href="<?php echo Yii::app()->baseUrl; ?>" title="Swedish Club of WA">
					<img alt="Swedish Club of WA" src="<?php echo Yii::app()->baseUrl; ?>/images/banner-image.png">
				</a>
			</div>
			<div id="page_nav">
				<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'Home', 				'url'=>array('/site/')),
						array('label'=>'About Us',			'url'=>array('/site/?view=aboutus'), 
							'items' => array(
								array('label'=>'History', 	'url'=>array('/site/?view=aboutus')),
								array('label'=>'Contact Us','url'=>array('/site/contact'))
							)
						),
						array('label'=>'Swedish Classes',	'url'=>array('/site/?view=adultclasses'),
							'items' => array(
								array('label'=>'Adult Classes','url'=>array('/site/?view=adultclasses')),
								array('label'=>'Kids Classes','url'=>array('/site/?view=kidsclasses'))
							)
						),
						array('label'=>'Emigration',		'url'=>array('/site/?view=emigration'),
							'items' => array(
								array('label'=>'Visas', 	'url'=>array('/site/?view=emigration#Visas')),
								array('label'=>'Jobs',		'url'=>array('/site/?view=emigration#Jobs')),
								array('label'=>'Additional Help','url'=>array('/site/?view=emigration#Help'))
							)
						),
						array('label'=>'Coming Events',		'url'=>array('/site/?view=comingevents')),
						array('label'=>'['.Yii::app()->user->name.']', 'url'=>array(Yii::app()->user->hasRoles('admin') ? '/admin/' : '/members/'), 'visible'=> !Yii::app()->user->isGuest,
							'items' => array(
								array('label'=>'Search Members', 'url'=>array('/admin/search'), 'visible'=>Yii::app()->user->hasRoles('admin')),
								array('label'=>'Email Members', 'url'=>array('/admin/mailout'), 'visible'=>Yii::app()->user->hasRoles('admin')),
								array('label'=>'Edit Details', 'url'=>array('/members/edit'), 'visible'=>Yii::app()->user->hasRoles('member')),
								array('label'=>'Logout', 'url'=>array('/site/logout'))
							)
						),
						array('label'=>'Members', 			'url'=>array('/site/login'), 	'visible'=>Yii::app()->user->isGuest, 
							'items' => array(
								array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
								array('label'=>'Register', 'url'=>array('/members/register'), 'visible'=>Yii::app()->user->isGuest)
							)
						)
					),
				)); ?>
			</div>
			<?php 
			if(isset($this->breadcrumbs)) 
			{ 
				$this->widget('zii.widgets.CBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				)); 
			}?><!-- breadcrumbs -->
			<div id="page_content">
				<?php echo $content; ?>
			</div>
			<div class="cleaner"></div>
			<div id="page_footer">
				<div class="col one_third">
					<h4>Website Translation</h4>
					<div id="MicrosoftTranslatorWidget" style="width: 200px; min-height: 83px; border-color: #3A5770; background-color: #78ADD0;">
						<noscript>
							<a href="http://www.microsofttranslator.com/bv.aspx?a=http%3a%2f%2fwww.svenskaklubben.org.au%2f">Translate this page</a>
							<br />
							Powered by <a href="http://www.bing.com/translator">Microsoft® Translator</a>
						</noscript>
					</div> 
					<script type="text/javascript" language="javascript" src="<?php echo (!empty($_SERVER['HTTPS']) ? 'https://ssl.microsofttranslator.com' : 'http://www.microsofttranslator.com') . '/ajax/v2/widget.aspx?mode=manual&from=en&layout=ts'; ?>"></script> 				
				</div>
				<div class="col one_third">
					<h4>Copyright</h4>
					<p>All thje copyright are belong to swedish club of WA</p>
				</div>
				<div class="col one_third">
					<h4>Follow Us</h4>
					<p>Follow The Swedish Club of WA on Klotterplank and Facebook by clicking on the icons below.</p>
					
					<div class="cleaner h20"></div>
					<div class="footer_social_button">
						<a href="http://www.facebook.com/groups/169714974189/" title="Swedish Club of WA on Facebook" target="_blank"><img src="<?php echo Yii::app()->baseUrl; ?>/images/facebook.png" title="Facebook" alt="Facebook" /></a>
						<a href="http://users3.smartgb.com/g/g.php?a=s&i=g34-04058-76" title="Swedish Club of WA on Klotterplank" target="_blank"><img src="<?php echo Yii::app()->baseUrl; ?>/images/klotterplank.jpg" title="Klotterplank" alt="Klotterplank" /></a>
					</div>				
				</div>
			</div>
			<div class="cleaner"></div>
		</div>
	</body>
</html>
