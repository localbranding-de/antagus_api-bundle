<?php
// dca/tl_module.php
$GLOBALS['TL_DCA']['tl_module']['fields']['bundle'] = array
(
    'label'                 => &$GLOBALS['TL_LANG']['tl_module']['bundle'],
    'exclude'               => true,
    'inputType'             => 'select',
    //'options'               => $GLOBALS['TL_LANG'][$table]['myselect']['options'],
    'foreignKey'            => 'tl_lb_productBundle.bundleName',
    //'options_callback'      => ['CLASS', 'METHOD'],
    'eval'                  => ['includeBlankOption'=>true, 'tl_class'=>'w50'],
    'sql'                   => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['headlineSearch'] = array
(
    'label' => array('Überschrift', 'Geben Sie die Überschrift für ihre Domainsuche ein.'),
    'inputType' => 'textarea',
    'eval' => array('tl_class' => 'w100'),
    'sql'                     => "mediumtext NULL"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['placeholder'] = array
(
    'label' => array('Platzhaltertext', 'Geben Sie den Platzhaltertext für das Suchfeld ein.'),
    'inputType' => 'text',
    'sql'                   => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['buttonLabel'] = array
(
    'label' => array('Button Text', 'Bitte Beschriftung des Buttons eingeben.'),
    'inputType' => 'text',
    'sql'                   => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['buttonColor'] = array
(
    'label' => array('Buttonfarbe', 'Bitte Buttonstil wählen.'), 
    'inputType' => 'radio',
    'options' => array(
        'btn-primary' => 'farbig',
        'button-secondary' => 'hell',
        'btn-black' => 'dunkel',
    ),
    'sql'                   => "varchar(255) NOT NULL default 'btn-primary'"
);

// dca/tl_module.phpy

$GLOBALS['TL_DCA']['tl_module']['palettes']['bundleButton'] = '{type_legend},name,type;';
$GLOBALS['TL_DCA']['tl_module']['palettes']['bundleButton'].= '{template_legend:hide},customTpl;';
$GLOBALS['TL_DCA']['tl_module']['palettes']['bundleButton'].= '{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_module']['palettes']['domainCheckListe'] = '{type_legend},name,type,headlineSearch,placeholder,buttonLabel;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop;';