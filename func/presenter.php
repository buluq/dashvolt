<?php

/**
 * Presenter/view handler class file
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
 * Presenter/view handler class
 *
 * @since 0.0.1
 */
class Presenter {
	/**
	 * Set google's url source for embeding to our page.
	 *
	 * @param string $url
	 */
	public function getGoogleFile($url) {
		Base::instance()->set('url', $url);
	}

	/**
	 * Set page layout to be displayed.
	 *
	 * @param string $page
	 */
	public function getPage($page) {
		Base::instance()->set('page', $page);
	}

	/**
	 * Prepare the page to be displayed.
	 *
	 * Choose the page layout to be displayed based on the type of site services.
	 *
	 * @param string $type Type of site services.
	 * @param string $url  Document to be embeded.
	 */
	public function setView($type, $url = '') {
		$this->getPage($type);

		if (isset($url)) {
			$this->getGoogleFile($url);
		}
	}

	public function setCopyrightYear() {
		$year = Base::instance()->get('site.year');

		if (intval($year) == 'auto') {
			Base::instance()->set('site.copyyear', date('Y'));
		}

		if (intval($year) == date('Y')) {
			Base::instance()->set('site.copyyear', intval($year));
		}

		if (intval($year) < date('Y')) {
			Base::instance()->set('site.copyyear', intval($year) . ' - ' . date('Y'));
		}

		if (intval($year) > date('Y')) {
			Base::instance()->set('site.copyyear', date('Y'));
		}
	}
}

/* End of file: presenter.php */
