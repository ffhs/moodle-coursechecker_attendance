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
 * Strings for component 'coursechecker_attendance'.
 *
 * @package    coursechecker_attendance
 * @copyright  2025 Simon Gisler, Fernfachhochschule Schweiz (FFHS) <simon.gisler@ffhs.ch>
 * @copyright  based on work by 2019 Liip SA <elearning@liip.ch>
 * @copyright  based on work by 2019 Adrian Perez, Fernfachhochschule Schweiz (FFHS) <adrian.perez@ffhs.ch>
 * @copyright  based on work by 2020 Christoph Karlen, Fernfachhochschule Schweiz (FFHS) <christoph.karlen@ffhs.ch>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Attendance sessions check';
$string['pluginname_help'] = 'This plugin checks whether a course contains exactly one visible attendance activity and that it does not contain any preconfigured sessions. It ensures consistent setup of attendance tracking across courses.';
$string['privacy:metadata'] = 'The attendance sessions check does not store any personal data. The check results are stored in the course checker plugin.';
// String specific for the attendance checker.
$string['attendance_missingplugin'] = 'Skip this testcase because mod_attendance is not installed';
$string['attendance_missingattendanceactivity'] = 'Check attendance failed - no attendance activity in this course';
$string['attendance_onlyoneattendenceactivityallowed'] = 'Check attendance failed - only one attendance activity is allowed';
$string['attendance_sessionsnotemty'] = 'Check attendance failed - it\'s not allowed to have any attendance sessions';
$string['attendance_success'] = 'The attendance activity is configured correctly';
