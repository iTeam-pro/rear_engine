<?php
/**
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Mindforce Team (http://mindforce.me)
 * @link          http://mindforce.me RearEngine CakePHP 3 Plugin
 * @since         0.0.1
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$config = [
	'App' => [
		'admin' => [
			'menu' => [
				'top' => [
					/*
					'add' => [
						'title' => __d('rear_engine', 'Add...'),
						'weight' => 10,
						'options' => [
							'dropdown' => 'dropdown-quick-actions',
							'icon' => 'fa fa-plus'
						],
						'children' => [
							'users' => [
								'title' => __d('rear_engine', 'Add User'),
								'weight' => 999,
								'url' => [
									'plugin' => 'rear_engine',
									'admin' => true,
									'controller' => 'users',
									'action' => 'add'
								],
								'options' => [
									'icon' => 'fa fa-user'
								]
							]
						]
					],
					'notifications' => [
						'title' => '',
						'weight' => 10,
						'options' => [
							'dropdown' => 'dropdown-quick-actions',
							'icon' => 'fa fa-bell'
						],
						'children' => [
							'notifications-list' => [
								'type' => 'cell',
								'weight' => 999,
								'cell' => 'RearEngine.Notifications',
							]
						]
					],
					*/
				],
				'main' => [
					'dashboard' => [
						'title' => __d('rear_engine', 'Dashboard'),
						'url' => [
							'prefix' => 'admin',
							'plugin' => 'RearEngine',
							'controller' => 'Dashboards',
							'action' => 'index'
						],
						'weight' => 10,
						'options' => [
							'icon' => 'fa fa-home'
						]
					],
					'tools' => [
						'title' => __d('rear_engine', 'Tools'),
						'weight' => 9999,
						'options' => [
							'icon' => 'fa fa-wrench'
						],
						'children' => [
							'settings' => [
								'title' => __d('rear_engine', 'Settings'),
								'url' => [
									'prefix' => 'admin',
									'plugin' => 'RearEngine',
									'controller' => 'Settings',
									'action' => 'index'
								],
								'weight' => 0,
								'options' => [
									'icon' => 'fa fa-cogs'
								]
							]
						]
					]
				]
			]
		]
	]
];
