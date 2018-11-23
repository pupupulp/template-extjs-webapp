<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Web App</title>
	<meta charset="utf-8">

	<!-- Defined Styles -->
	<link rel="stylesheet" type="text/css" 
		href="<?= base_url('public/css/extjs-mod.css') ?>"/>
	<link rel="stylesheet" type="text/css" 
		href="<?= base_url('public/css/application.css') ?>"/>
	
	<!-- ExtJS Styles -->
	<link rel="stylesheet" type="text/css" 
		href="<?= base_url('assets/extjs/classic/theme-crisp/resources/theme-crisp-all.css') ?>"/>
	<link rel="stylesheet" type="text/css" 
		href="<?= base_url('assets/extjs/packages/charts/classic/crisp/resources/charts-all.css') ?>"/>
	<link rel="stylesheet" type="text/css" 
		href="<?= base_url('assets/extjs/packages/ux/classic/crisp/resources/ux-all.css') ?>"/>

	<!-- Dependencies -->
	<link rel="stylesheet" type="text/css" 
		href="<?= base_url('vendor/font-awesome/css/font-awesome.min.css') ?>"/>
</head>
<body>
	<!-- ExtJS Scripts -->
	<script type="text/javascript" src="<?= base_url('assets/extjs/ext-all.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/extjs/classic/theme-crisp/theme-crisp.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/extjs/packages/charts/classic/charts.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/extjs/packages/ux/classic/ux.js') ?>"></script>

	<!-- Defined Scripts / Dependencies -->
	<script type="text/javascript"></script>

	<!-- Page Content -->
	<?= $_page_content ?>

</body>
