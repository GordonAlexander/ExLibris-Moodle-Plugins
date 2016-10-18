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
 * Plugin settings
 *
 * @package    ombiel_webservices
 * @copyright  2016 ExLibris Group
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {
    $settings = new admin_settingpage('local_ombiel_webservices', get_string('pluginname', 'local_ombiel_webservices'));

    $ADMIN->add('localplugins', $settings);
    
    $settings->add(new admin_setting_configtext('local_ombiel_webservices/campusmhostname',
                        get_string('campusmhostname_key', 'local_ombiel_webservices'),
                        get_string('campusmhostname', 'local_ombiel_webservices'), '', PARAM_LOCALURL));
                        
    $settings->add(new admin_setting_configtext('local_ombiel_webservices/campusmaekscreen',
                        get_string('campusmaekscreen_key', 'local_ombiel_webservices'),
                        get_string('campusmaekscreen', 'local_ombiel_webservices'), '', PARAM_ALPHANUM));

}