# 📚 Checker Attendance for Moodle: Subplugin of the Local Course Checker Plugin

This plugin checks whether a course contains exactly one visible attendance activity and that it does not contain any preconfigured sessions. It ensures consistent setup of attendance tracking across courses.

---

## 📁Installing via uploaded ZIP file ##

1. Log in to your Moodle site as an admin and go to _Site administration >
   Plugins > Install plugins_.
2. Upload the ZIP file with the plugin code. You should only be prompted to add
   extra details if your plugin type is not automatically detected.
3. Check the plugin validation report and finish the installation.

## 📁Installing manually ##

The plugin can be also installed by putting the contents of this directory to

    {your/moodle/dirroot}/local/course_checker

Afterwards, log in to your Moodle site as an admin and go to _Site administration >
Notifications_ to complete the installation.

Alternatively, you can run

    $ php admin/cli/upgrade.php

to complete the installation from the command line.

## 📦 Installing via GitHub

Clone the plugin into your Moodle instance:

```bash
cd /path/to/moodle
git clone https://github.com/ffhs/moodle-local_course_checker.git local/course_checker
```

Run the upgrade script:

```bash
php admin/cli/upgrade.php
```

Or complete the installation via the Moodle web interface: **Site administration > Notifications**

---

## ⚙️ Requirements

- Moodle **4.0 or higher**
- A working **cron job**
- PHP extension `curl` (required for the Broken Links checker)

---

## 🧠 Authors

**Simon Gisler**\
[simon.gisler@ffhs.ch](mailto:simon.gisler@ffhs.ch)\
<a href="https://www.ffhs.ch" target="_blank">Swiss Distance University of Applied Sciences (FFHS)</a>

**Stefan Dani**\
[stefan.dani@ffhs.ch](mailto:stefan.dani@ffhs.ch)\
<a href="https://www.ffhs.ch" target="_blank">Swiss Distance University of Applied Sciences (FFHS)</a>

---

## 📝 License

This plugin is licensed under the [GNU GPL v3](https://www.gnu.org/licenses/gpl-3.0.html).
