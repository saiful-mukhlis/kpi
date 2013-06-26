<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="id"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $this->page['title'];?></title>
<meta name="description" content="<?php echo $this->page['description'];?>">
<meta name="keywords" content="<?php echo $this->page['keywords'];?>">
<meta name="language" content="id" />
<meta name="generator" content="WordPress 2.9.1"/>
<meta name="author" content="beon"/>
<meta name="robots" content="index, follow"/>
<meta content="1 days" name="revisit-after"/>

<link rel="shortcut icon"	href="<?php echo Yii::app()->baseUrl;?>/favicon.ico"	type="image/x-icon" />
</head>
<body>
<?php echo $this->renderPartial('/global/upgrade_browser'); ?>
<?php 
if (!Yii::app()->user-> isGuest) {
	echo $this->renderPartial('/global/header');
}
?>
<div class="row-fluid mt50">
<?php echo $content;?>
<?php echo $this->renderPartial('/global/backtop'); ?>
</body>