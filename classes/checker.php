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
 * Checking the attendance settings on
 * assignments for a course.
 *
 * @package    checker_attendance
 * @copyright  2025 Simon Gisler, Fernfachhochschule Schweiz (FFHS) <simon.gisler@ffhs.ch>
 * @copyright  based on work by 2019 Liip SA <elearning@liip.ch>
 * @copyright  based on work by 2019 Christoph Karlen, Fernfachhochschule Schweiz (FFHS) <christoph.karlen@ffhs.ch>
 * @copyright  based on work by 2019 Adrian Perez, Fernfachhochschule Schweiz (FFHS) <adrian.perez@ffhs.ch>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace checker_attendance;

use dml_exception;
use local_course_checker\mod_type_interface;
use local_course_checker\model\check_plugin_interface;
use local_course_checker\db\model\check;
use local_course_checker\translation_manager;
use local_course_checker\resolution_link_helper;
use stdClass;

/**
 * {@inheritDoc}
 */
class checker implements check_plugin_interface, mod_type_interface {

    /**
     * @var check The result of the check.
     */
    protected check $check;

    /**
     * {@inheritDoc}
     */
    public function run(stdClass $course, check $check): void {
        // ToDo: Investigate if we skip activities that are not visible and if we should add uservisible.
        // Initialize check result array.
        $this->check = $check;
        // List of all attendance activities in the course.
        $attendances = [];
        // Get all attendance activities for the course.
        $modinfo = get_fast_modinfo($course);
        $cms = $modinfo->get_instances_of(self::MOD_TYPE_ATTENDANCE);
        foreach ($cms as $cm) {
            // Skip activities that are not visible.
            if (!$cm->uservisible || !$cm->has_view()) {
                continue;
            }
            $attendances[] = $cm;
        }
        // If there is no attendance activity in the course.
        if (empty($attendances)) {
            $message = translation_manager::generate(
                'attendance_missingattendanceactivity',
                'checker_attendance'
            );
            $this->check->add_failed('', '', $message);
            $this->check->set('status', 'failed');
            return;
        }
        // If there is more then one attendance activity.
        if (count($attendances) > 1) {
            $message = translation_manager::generate(
                'attendance_onlyoneattendenceactivityallowed',
                'checker_attendance'
            );
            $this->check->add_failed('', '', $message);
            $this->check->set('status', 'failed');
            return;
        }
        // Link to activity.
        $cm = $attendances[0];
        $title = resolution_link_helper::get_target($cm, 'checker_attendance');
        $link = resolution_link_helper::get_link_to_modedit_or_view_page($cm->modname, $cm->id);
        // If there are sessions in the attendance activity.
        if (count($this->get_attendance_sessions($course)) > 0) {
            $message = translation_manager::generate(
                'attendance_sessionsnotemty',
                'checker_attendance'
            );
            $this->check->add_failed($title, $link, $message);
            $this->check->set('status', 'failed');
            return;
        }
        // When there are no problems.
        $message = translation_manager::generate(
            'attendance_success',
            'checker_attendance'
        );
        $this->check->add_successful($title, $link, $message);
    }

    /**
     *
     * Get all attendancesessions in a course.
     *
     * @param stdClass $course
     * @return array
     * @throws dml_exception
     */
    protected function get_attendance_sessions(stdClass $course): array {
        global $DB;
        return $DB->get_records_sql("SELECT DISTINCT (ats.id), a.course, cm.course
                FROM {attendance_sessions} ats
                LEFT JOIN {attendance} a ON ats.attendanceid = a.id
                LEFT JOIN {course_modules} cm ON ats.attendanceid = cm.instance
                GROUP BY a.id,cm.course
                HAVING a.course = ? AND cm.course = ?",
                [$course->id, $course->id]);
    }
}
