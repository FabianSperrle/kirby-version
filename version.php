<?php

return array(
		'title' => 'Kirby Versions',
		'html'  => function() {
		// any data for the template
		$kirby = kirby();
		$panel = panel();
		$data = array(
			'kirby' => $kirby::$version,
			'panel' => $panel::$version,
		);
		return tpl::load(__DIR__ . DS . 'template.php', $data);
		}
		);
