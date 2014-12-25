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

use Cake\Core\Configure;

?>
<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset(); ?>
	<title>
		<?= $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
	?>
		<!-- Core CSS - Include with every page -->
	<?php
		echo $this->Html->css([
			'bootstrap',
			'bootstrap-theme',
			'font-awesome',
			'RearEngine.admin'
		]);
		echo $this->fetch('css');
	?>
	<!-- Core Scripts - Include with every page -->
	<?php
		echo $this->Html->script([
			'jquery',
			'bootstrap',
			'RearEngine.plugins/jquery.metisMenu',
			'RearEngine.plugins/bootstrap.confirmation',
			'RearEngine.admin'
		]);
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="wrapper">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
					<span class="sr-only"><?= __d('rear_engine', 'Toggle navigation') ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><?= __d('rear_engine', 'RearEngine Admin') ?></a>
			</div>
			<?= $this->cell('RearEngine.Navigation', ['block' => 'top']); ?>
			<?= $this->cell('RearEngine.Navigation', ['block' => 'main']); ?>
		</nav>

		<div id="page-wrapper">
			<?= $this->Session->flash(); ?>

			<?= $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<div class="pull-right">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => 'test', 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
			</div>
		</div>
	</div>
</body>
</html>
