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
		'e' => [
			'product' => [
				'table' => [
					'name' => 'e_product',
					'primary' => 'product_id',
				],
				'model' => [
					'class' => Claremontdesign\Naradmin\Model\Product::class,
					'fillable' => ['title', 'description', 'status', 'xnar_id'],
				],
				'repository' => [
					'class' => Claremontdesign\Naradmin\Model\Repository\Product::class
				]
			],
			'productCategory' => [
				'table' => [
					'name' => 'e_category',
					'primary' => 'category_id',
				],
				'model' => [
					'class' => Claremontdesign\Naradmin\Model\Category::class,
					'fillable' => ['title', 'description', 'status'],
				],
				'repository' => [
					'class' => Claremontdesign\Naradmin\Model\Repository\Category::class
				]
			]
		]
	],
	'routes' => [
	],
];
