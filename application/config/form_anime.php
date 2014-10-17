<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['form_add_anime'] = array(	'name_fr' => array(
														'function' => 'form_input',
														'label'		=> 'Titre français:',
										            	'name'        => 'name_fr',
										            	'id'          => 'name_fr',
										            	'value'       => '',
										            	'maxlength'   => '100',
											            ),
									'name_en' => array(
														'function' => 'form_input',
														'label'		=> 'Titre englais:',
										            	'name'        => 'name_en',
										            	'id'          => 'name_en',
										            	'value'       => '',
										            	'maxlength'   => '100',
										            ),
									'name_jp' => array(
														'function' => 'form_input',
														'label'		=> 'Titre japonais:',
										            	'name'        => 'name_jp',
										            	'id'          => 'name_jp',
										            	'value'       => '',
										            	'maxlength'   => '100',
										            ),
									'resume' => array(
														'function' => 'form_textarea',
														'label'		=> 'Synopsis:',
										            	'name'        => 'resume',
										            	'id'          => 'resume',
										            	'value'       => '',
										            	'cols'   => '50',
										            	'rows'	=>'6'
										            ),
);

?>