<?php

// Add palette to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['ymbPageimage'] = '{title_legend},name,headline,type;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';




use Contao\CoreBundle\DataContainer\PaletteManipulator;



$GLOBALS['TL_DCA']['tl_module']['fields']['ymbPIcheck'] = array
(
	'label'                   => array('Pageimage', 'Pageimage hinzufügen'),
	'default'                 => '',
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('doNotCopy'=>true, 'tl_class'=>'long clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);


PaletteManipulator::create()
	
	->addField('ymbPIcheck', 'nav_legend', PaletteManipulator::POSITION_APPEND)
	->addField('imgSize', 'nav_legend', PaletteManipulator::POSITION_APPEND)

    ->applyToPalette('customnav', 'tl_module') 
;

