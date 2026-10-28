<?php
// This file is part of Moodle - https://moodle.org/
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
$string['pluginname_help'] = 'This check verifies that a course contains exactly one visible and viewable attendance activity and that no attendance sessions are configured.';
$string['privacy:metadata'] = 'This check does not store any personal data. Its results are stored by the Course Checker plugin.';
// String specific for the attendance checker.
$string['attendance_missingplugin'] = 'Skip this testcase because mod_attendance is not installed';
$string['attendance_missingattendanceactivity'] = 'No visible, viewable attendance activity was found in this course.';
$string['attendance_onlyoneattendenceactivityallowed'] = 'Only one visible, viewable attendance activity is allowed.';
$string['attendance_sessionsnotemty'] = 'Attendance sessions must not be configured in this course.';
$string['attendance_success'] = 'The attendance activity is configured correctly.';
