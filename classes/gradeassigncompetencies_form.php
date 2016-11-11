<?php
// This file is NOT part of Moodle - http://moodle.org/
//
/**
 * Script for automatic competency grading.
 *
 * @package    local_autocompetencygrade
 * @copyright  2016 Instituto Infnet
*/

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir.'/formslib.php');

class gradeassigncompetencies_form extends moodleform {
	public function definition()
	{
		$selectoptions = $this->_customdata['selectoptions'];

		$mform = $this->_form;

		$hier = $mform->addElement('hierselect', 'avaliacoes', get_string('gradeassigncompetencies_selectassigngrading', 'local_autocompetencygrade'));
		$hier->setOptions(array($selectoptions['modalidades'], $selectoptions['escolas'], $selectoptions['programas'], $selectoptions['classes'], $selectoptions['blocos'], $selectoptions['disciplinas'], $selectoptions['avaliacoes'], $selectoptions['correcoes']));

		$this->add_action_buttons(false, get_string('gradeassigncompetencies_submit', 'local_autocompetencygrade'));
	}
}
