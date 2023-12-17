<?php

// contao/dca/tl_page.php

use Contao\CoreBundle\DataContainer\PaletteManipulator;



$GLOBALS['TL_DCA']['tl_page']['fields']['ymbPageimage'] = [
	'label'                   => &$GLOBALS['TL_LANG']['tl_page']['ymbPageimage'],
	'exclude'                 => true,
	'inputType'               => 'fileTree',
	'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>'%contao.image.valid_extensions%'),
	'sql'                     => "binary(16) NULL"
];


PaletteManipulator::create()
	
	->addLegend('ymbPageimage_legend', 'meta_legend', PaletteManipulator::POSITION_BEFORE)

	->addField('ymbPageimage', 'ymbPageimage_legend', PaletteManipulator::POSITION_APPEND)

    ->applyToPalette('regular', 'tl_page') 
;

