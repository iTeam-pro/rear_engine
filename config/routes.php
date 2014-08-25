<?php
/**
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) iTeam s.r.o. (http://iteam-pro.com)
 * @link          http://iteam-pro.com RearEngine CakePHP 3 Plugin
 * @since         0.0.1
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Routing\Router;

/* Front default routes */
Router::scope('/', function($routes) {
	$routes->plugin('RearEngine', function($routes) {
		$routes->fallbacks();
	});
});

/* Admin default routes */
Router::prefix('admin', function($routes) {
	//enable app default admin routes
	$routes->fallbacks();
	//RearEngine default routes
	$routes->plugin('RearEngine', function($routes) {
		$routes->fallbacks();
	});
	//RearEngine custom routes
	$routes->connect('/', ['plugin' => 'RearEngine', 'controller' => 'Dashboards', 'action' => 'index']);
	$routes->connect('/settings', ['plugin' => 'RearEngine', 'controller' => 'Settings', 'action' => 'index']);
});
