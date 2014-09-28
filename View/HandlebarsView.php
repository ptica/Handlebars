<?php
App::uses('View', 'View');

class HandlebarsView extends View {
	function element($name, $params = array(), $loadHelpers = false) {
		if (preg_match('/\.hbs$/', $name)) {
			// TODO use plugin path
			require_once(ROOT . DS . APP_DIR . '/Vendor/zordius/lightncandy/src/lightncandy.php');

			$plain_name = preg_replace('/\.hbs$/', '', $name);
			$path = $this->_getElementFilename($plain_name);
			$path = preg_replace('/\.ctp$/', '.hbs', $path);

			$template = file_get_contents($path);
			$phpStr = LightnCandy::compile($template);
			$renderer = LightnCandy::prepare($phpStr);

			return $renderer($params);
		} else {
			return parent::element($name, $params, $loadHelpers);
		}
	}
}
