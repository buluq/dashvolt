<?php

/*
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
 * Get the framework's functions and features available for the application.
 */
$framework = require_once dirname(__FILE__) . '/lib/base.php';

/**
 * Parse the configuration files.
 */
$framework->config('app.ini');

/**
 * Match routes against incoming URI and call their route handler.
 */
$framework->run();

/* End of file: index.php */