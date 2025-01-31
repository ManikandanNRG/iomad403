<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * iomadmoon.
 *
 * @package   theme_iomadmoon
 * @copyright 2023 Marcin Czaja (https://rosea.io)
 * @license   Commercial https://themeforest.net/licenses
 */

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

// This is the component name of the plugin - it always starts with 'theme_'
// for themes and should be the same as the name of the folder.
$plugin->component = 'theme_iomadmoon';

// This is the version of the plugin.
$plugin->version = 2024010101.01;

// This is the named version.
$plugin->release = 'v1.3 for 4.2 (Moodle Build: 20221209)';

// This is a stable release.
$plugin->maturity = MATURITY_STABLE;

// This is the version of Moodle this plugin requires.
// Moodle 4.2.
$plugin->requires = 2022112800;
