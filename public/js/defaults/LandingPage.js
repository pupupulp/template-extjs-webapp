Ext.define(EJS.class.defaults('LandingPage'), {
	extend: 'Ext.panel.Panel',
	alias: 'widget.default-landing',
	
	region: 'center',
	
	initComponent: function() {
		var self = this;

		Ext.apply(this, {
			layout:{
				type: 'vbox',
				align: 'center',
				pack: 'center'
			},
			items:[
				{
					xtype: 'box',
					html: '<h1>Welcome</h1>',
					style: 'color: #0091EA;',
					itemId: 'home-message'
				}
			],
		});
		this.callParent();
	}
});