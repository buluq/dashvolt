<?php

/**
 * Router handler class file
 *
 * Copyright (C) 2016 Sunu Haeriadi <haeriadi@limavolt.web.id>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package   Dashvolt
 * @author    Sunu Haeriadi
 * @copyright 2016, Sunu Haeriadi <haeriadi@limavolt.web.id>
 * @license   http://www.gnu.org/licenses/gpl-3.0.txt GNU General Public License v3
 */

/**
 * Route handler class.
 *
 * Parses URIs and determines routing.
 *
 * @since 0.0.1
 */
class Router {
	/**
	 * Call post-route hook.
	 *
	 * @since  0.0.1
	 * @return string Generated HTML document.
	 */
	public function afterRoute() {
		echo Template::instance()->render('base.php');
	}

	/**
	 * Prepare HTML document to be generated.
	 *
	 * @since 0.0.1
	 */
	public function getRoute() {
		$route = Base::instance()->get('PATTERN');

		switch ($route) {
			case '/forum/@url':
				$service_name = 'forum';
			break;

			case '/file/@url':
				$service_name = 'file';
			break;

			default:
				$service_name = 'home';
			break;
		}

		$this->getService($service_name);
	}

	public function getService($service_name) {
		$presenter = new Presenter();

		$presenter->setCopyrightYear();

		if ($service_name == 'home') {
			$presenter->setView($service_name, 'home');
		}
		else {
			$url  = Base::instance()->get('PARAMS.url');
			$ref  = 'site.files.' . $url;
			$file = Base::instance()->get($ref);

			$presenter->setView($service_name, $file);
		}
	}
}

/* End of file: router.php */
