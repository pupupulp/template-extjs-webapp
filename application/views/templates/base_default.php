<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?= $_init ?>

<script type="text/javascript">
	
	Ext.tip.QuickTipManager.init();

	Ext.onReady(function(params) {

		Ext.create('Ext.container.Viewport', {
			layout: 'border',
			items: [
				{
					region: 'north',
					html: '<h1 id="landing-header" class="x-panel-header">'
						+ 	_app.getName()
						+ '</h1>',
					border: false,
					margin: '0 0 1 0',
					bodyStyle: {
						color: '#157fcc'
					},
					bodyPadding: 5
				},
				Ext.create('<?= $_js_view ? $_js_view : 'App.defaults.LandingPage' ?>'),
				{
					region: 'south',
					html: '<h4>&copy' + _app.getCopyrightYear() + '</h4>',
					border: false,
					margin: '0 0 1 0',
					bodyStyle: {
						color: '#157fcc',
						textAlign: 'center',
						fontWeight: 'bold'
					},
					bodyPadding: 2
				}
			]
		})

	})

</script>