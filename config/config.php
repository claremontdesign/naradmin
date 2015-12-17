<?php

return [
	'backend' => [
		'access' => [
			'minimum' => 'moderator',
		],
		'design' => [
			'header' => [
				'logo' => cd_naradmin_asset('img/backendlogo.png'),
			],
			'footer' => [
				'text' => '&copy Copyright ' . date('Y') . ' Natural Area Rugs. All rights reserved.',
			],
		],
	],
	'widgets' => [
	],
	'database' => [
	],
	'routes' => [
	],
];
