<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<script type="text/javascript">
	
	const _app = (function() {
		const name = '<?= APP_NAME ?>';
		const mainClass = '<?= EXTJS_APP_CLASS ?>';
		const baseUrl = '<?= base_url() ?>';
		const url = '<?= site_url() ?>';
		const urlSuffix = '<?= url_suffix() ?>';
		const copyrightYear = '<?= date("Y") ?>';
		const serverDate = '<?= date('m/d/Y') ?>';

		return {
			getName: function() { return name; }
			getMainClass: function() { return mainClass; }
			getBaseUrl: function() { return baseUrl; }
			getUrl: function() { return url; }
			getUrlSuffix: function() { return urlSuffix; }
			getCopyrightYear: function() { return copyrightYear; }
			getServerDate: function() { return serverDate; }
		}
	}());

	Ext.Loader.setPath({ _app.getMainClass(): _app.getBaseUrl() + 'public/js' });
</script>

<script type="text/javascript" src="<?= base_url('assets/ejs/EJS.js') ?>"></script>