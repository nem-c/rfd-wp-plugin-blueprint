<?php

return [
	'css' => [
		'rfd_wp_plugin_blueprint_admin' => [
			'src'     => RFD_WP_PLUGIN_BLUEPRINT_ASSETS_URL . 'css/admin.css',
			'deps'    => [],
			'version' => RFD_WP_PLUGIN_BLUEPRINT_VERSION,
		],
	],
	'js'  => [
		'rfd_wp_plugin_blueprint_admin' => [
			'src'       => RFD_WP_PLUGIN_BLUEPRINT_ASSETS_URL . 'js/admin.js',
			'deps'      => [
				'jquery',
			],
			'version'   => RFD_WP_PLUGIN_BLUEPRINT_VERSION,
			'in_footer' => true,
		],
	],
];