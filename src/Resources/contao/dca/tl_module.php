<?php

// Add palette to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['ymbPageimage'] = '{title_legend},name,headline,type;{ymbPIH_legend},ymbPIcheck,imgSize,ymbPIdescription;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';




use Contao\CoreBundle\DataContainer\PaletteManipulator;



$GLOBALS['TL_DCA']['tl_module']['fields']['ymbPIcheck'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['ymbPIcheck'],
	'default'                 => '',
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('doNotCopy'=>true, 'tl_class'=>'long clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['ymbPIdescription'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['ymbPIdescription'],
	'default'                 => '',
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('doNotCopy'=>true, 'tl_class'=>'long clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);


PaletteManipulator::create()
	
	->addLegend('ymbPI_legend', 'nav_legend', PaletteManipulator::POSITION_AFTER)
	->addLegend('ymbPIH_legend', 'title_legend', PaletteManipulator::POSITION_AFTER)
	
	->addField('ymbPIcheck', 'ymbPI_legend', PaletteManipulator::POSITION_APPEND)
	->addField('imgSize', 'ymbPI_legend', PaletteManipulator::POSITION_APPEND)
	->addField('ymbPIdescription', 'ymbPI_legend', PaletteManipulator::POSITION_APPEND)
	
	->addField('ymbPIcheck', 'ymbPIH_legend', PaletteManipulator::POSITION_APPEND)
	->addField('imgSize', 'ymbPIH_legend', PaletteManipulator::POSITION_APPEND)
	->addField('ymbPIdescription', 'ymbPIH_legend', PaletteManipulator::POSITION_APPEND)

	->applyToPalette('navigation', 'tl_module') 
    ->applyToPalette('customnav', 'tl_module')
;

