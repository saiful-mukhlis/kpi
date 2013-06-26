<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="id"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>{$this->page.title}</title>
<meta name="description" content="{$this->page.description}">
<meta name="keywords" content="{$this->page.keywords}">
<meta name="language" content="id" />
<meta name="generator" content="WordPress 2.9.1"/>
<meta name="author" content="{$this->page.author}"/>
<meta name="robots" content="index, follow"/>
<meta content="1 days" name="revisit-after"/>

<link rel="shortcut icon"	href="{$Yii->baseUrl}/favicon.ico"	type="image/x-icon" />
</head>
<body>
{include file='themes/classic/views/global/upgrade_browser.tpl'}
{$content}
 {$page['menu']|@debug_print_var}
{include file='themes/classic/views/global/backtop.tpl'}
</body>