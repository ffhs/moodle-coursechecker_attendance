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

$string['pluginname'] = 'Anwesenheitsaktivitäten Überprüfung';
$string['pluginname_help'] = 'Dieses Plugin prüft alle Kursaktivitäten anhand einer konfigurierbaren Sperrliste auf ungültige oder nicht autorisierte Namen. Es unterstützt die Durchsetzung kursübergreifender Namenskonventionen und gewährleistet Konsistenz durch die Kennzeichnung problematischer Aktivitätstitel.';
$string['privacy:metadata'] = 'Das Plugin „Anwesenheitsaktivitäten Überprüfung“ speichert keine personenbezogenen Daten. Die Prüfergebnisse werden im Haupt-Plugin „Course Checker“ gespeichert.';
// String specific for the attendance checker.
$string['attendance_missingplugin'] = 'Check übersprungen, da das Plugin "mod_attendance" nicht installiert ist';
$string['attendance_missingattendanceactivity'] = 'Anwesenheits-Check fehlgeschlagen - keine Anwesenheitsaktivität in diesem Kurs';
$string['attendance_onlyoneattendenceactivityallowed'] = 'Anwesenheits-Check fehlgeschlagen – es ist nur eine Anwesenheitsaktivität erlaubt';
$string['attendance_sessionsnotemty'] = 'Anwesenheits-Check fehlgeschlagen – es dürfen keine Anwesenheitsaktivitäten vorhanden sein';
$string['attendance_success'] = 'Die Anwesenheitsaktivität ist korrekt konfiguriert.';
