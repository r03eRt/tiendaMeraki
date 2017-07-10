<?php
class SEUR_nomenclator { public $sClassName = 'SEUR_admin' ; public $sPageSlug   = 'seur_nomenclator' ; public $sTabSecID    = 'nomenclator' ; public function __construct( $sClassName='', $sPageSlug='', $sTabSecID='' ) { $this->sClassName   = $sClassName ? $sClassName : $this->sClassName ; $this->sPageSlug    = $sPageSlug ? $sPageSlug : $this->sPageSlug ; $this->sTabSecID     = $sTabSecID ? $sTabSecID : $this->sTabSecID ; add_action( 'load_' . $this->sPageSlug, array( $this, 'Load_Event' ) ) ; add_action( 'do_' . $this->sPageSlug , array( $this, 'Do_Event' ) ) ; return $this ;  } public function Load_Event( $oAdminPage ) { SEUR()->API->Is_Config_Ok() ; $paises = new WC_Countries ; $paises_envio = $paises->get_shipping_countries() ; $oAdminPage->addSettingSections( $this->sPageSlug , array ( 'section_id'    	=>  $this->sTabSecID ,                       'section_tab_slug'  => 'tabbed_nomenclator_1' , 'title'        		=> __( 'Busqueda de Poblaciones', 'seur' ) , 'description'  		=> __( 'Diganos un código postal o una población y buscaremos los códigos postales de la población o las poblaciones del código postal.', 'seur' ) . '<br/>' . __( 'Para envíos internacionales puede comprobar sus datos en el siguiente enlace:', 'seur') . ' <a target="_blank"  href="http://www.geopostcodes.com/">GeoPostcodes</a>' ,  ) ) ; $oAdminPage->addSettingFields(	$this->sTabSecID , array ( 'field_id'      => 'nombre' , 'title'         => __( 'Nombre población', 'seur' ) , 'type'          => 'text' , ) , array ( 'field_id'      => 'cp' , 'title'         => __( 'Código postal', 'seur' ) , 'type'          => 'text' , ) , array ( 'field_id'      => 'submit' , 'type'          => 'submit' , 'label'         => __( 'Consultar', 'seur' ) , ) , array ( 'field_id'      => 'result' , 'type'          => 'html' , 'title'         => __( 'Resultado de la consulta', 'seur' ) , 'width' => '100%' ,  ) ) ; add_filter( 'validation_' . $this->sPageSlug, array( $this, 'Validate' ), 10, 3  ) ;  } public function Do_Event ($content) { return  $content ;  } public function Validate( $aInput, $aOldInput, $oFactory) { $_fIsValid = true ; $_aErrors = array() ; $_return_old_inputs = false ; $rev_campos ='' ; $aInput['nomenclator']['result'] = SEUR()->SOAP->nomenclator_str( $aInput['nomenclator']['nombre'] , $aInput['nomenclator']['cp'] ) ; if ( !$_fIsValid ) { $oFactory->setFieldErrors( $_aErrors ) ; $oFactory->setSettingNotice( __( 'Se han producido errores en la introducción de datos, por favor, revise los datos introducidos en:', 'seur' ) . $rev_campos) ; if($_return_old_inputs) return $aOldInput ;  } return $aInput ;  }  } new SEUR_nomenclator() ; ?>