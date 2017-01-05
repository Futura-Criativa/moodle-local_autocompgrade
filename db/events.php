<?php
/**
 * Plugin version info
 *
 * @package    local_autocompgrade
 * @copyright  2016 Instituto Infnet
 */

defined('MOODLE_INTERNAL') || die();

$observers = array (
	array (
		'eventname' => '\mod_assign\event\submission_graded',
		'callback'  => 'local_autocompgrade\autocompgrade::gradeassigncompetencies_event',
	),
	array (
		'eventname' => '\mod_quiz\event\attempt_submitted',
		'callback'  => 'local_autocompgrade\autocompgrade::gradeassigncompetencies_event',
	)
);
