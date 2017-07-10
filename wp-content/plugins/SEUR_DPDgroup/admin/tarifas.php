<?php
class SEUR_tarifas { public $sClassName = 'SEUR_admin' ; public $sPageSlug   = 'seur_tarifas' ; public $sTabSecID    = 'tarifas' ; public function __construct( $sClassName='', $sPageSlug='', $sTabSecID='' ) { $this->sClassName   = $sClassName ? $sClassName : $this->sClassName ; $this->sPageSlug    = $sPageSlug ? $sPageSlug : $this->sPageSlug ; $this->sTabSecID     = $sTabSecID ? $sTabSecID : $this->sTabSecID ; add_action( 'load_' . $this->sPageSlug, array( $this, 'Load_Event' ) ) ; add_action( 'do_' . $this->sPageSlug , array( $this, 'Do_Event' ) ) ; return $this ;  } public function Load_Event( $oAdminPage ) { SEUR()->API->Is_Config_Ok() ; $paises = new WC_Countries ; $paises_envio = $paises->get_shipping_countries() ; $oAdminPage->addSettingSections( $this->sPageSlug , array ( 'section_id'    	=>  $this->sTabSecID ,                       'section_tab_slug'  => 'tabbed_tarifas_1' , 'title'        		=> __( 'Calculadora de tarifas', 'seur' ) , 'description'  		=> __( 'Consulte el coste de un envío según su tarifa contratada con SEUR.', 'seur' ) ,  ) ) ; $oAdminPage->addSettingFields(	$this->sTabSecID , array ( 'field_id'      => 'html' , 'title'         => __( 'Instrucciones:', 'seur' ) , 'type'          => 'instrucciones' , 'save'			=> false , 'value'			=> 	'<hr>' . __('El tipo de servicio producto considerado sera el establecido en los datos de la configuracion y según el destino.', 'seur') . '<br>' . __('Si el envio es contrarrembolso, introduzca el valor SOLO si desea considerar que los gastos de gestión de reembolso son a cargo del remitente.', 'seur') . '<br>' . __('Si el envío es a Canarias, se considerarán las Aduanas y tipo de envio conforme a los datos de configuración establecidos, lo mismo para envíos a Andorra, Ceuta y Melilla.', 'seur') . '<br>' . __('Los envíos CLASSIC TERRESTRE y PREDICT CROSSBORDER deben ser monobulto.', 'seur') . '<hr>' )  , array ( 'field_id'      => 'CP' , 'title'         => __( 'Código postal', 'seur' ) , 'type'          => 'text' , ) , array ( 'field_id'      => 'poblacion' , 'title'         => __( 'Población', 'seur' ) , 'type'          => 'text' , ) , array ( 'field_id'      => 'pais' , 'title'         => __( 'Pais', 'seur' ) , 'type'          => 'select2' , 'label'			=> $paises_envio , 'is_multiple'   => false , 'default'		=>'ES' )  , array ( 'field_id'      => 'bultos' , 'title'         => __( 'Bultos', 'seur' ) , 'type'          => 'number' , 'default'			=> 1 , 'attributes'    => array ( 'min'   => 1 , 'step'  => 1 , ) , ) , array ( 'field_id'      => 'kilos' , 'title'         => __( 'Kilos', 'seur' ) , 'type'          => 'number' , 'default'			=> 1 , 'attributes'    => array ( 'min'   => 0.01 , 'step'  => 0.01 , ) , ) , array ( 'field_id'      => 'valor_reembolso' , 'title'         => __( 'Valor de reembolso', 'seur' ) , 'type'          => 'number' , 'default'		=> 1 , 'attributes'    => array ( 'min'   => 0 , 'step'  => 0.01 , ) , ) , array ( 'field_id'      => 'submit' , 'type'          => 'submit' , 'save'			=> false , 'label'         => __( 'Consultar', 'seur' ) , ) , array ( 'field_id'      => 'result' , 'type'          => 'html' , 'title'         => __( 'Resultado de la consulta:', 'seur' ) , 'width' => '100%' ,  ) ) ; add_filter( 'validation_' . $this->sPageSlug, array( $this, 'Validate' ), 10, 3  ) ;  } public function Do_Event ($content) { return  $content ;  } public function Validate( $aInput, $aOldInput, $oFactory) { $_fIsValid = true ; $_aErrors = array() ; $_return_old_inputs = false ; $rev_campos ='' ; $aInput['tarifas']['result'] = '<table class="Tabla_SEUR">
<tr bgcolor=#EEEEEE style="text-align: center;font-weight: bold;">
<td>' . __('Fecha de consulta','seur'). ': '. date('d-m-Y H:i:s', current_time( 'timestamp' )) . '</td>
<tr>
</table>' . SEUR()->SOAP->Tarifa_str ( trim($aInput['tarifas']['CP']) , trim($aInput['tarifas']['poblacion']) , $aInput['tarifas']['pais'] , $aInput['tarifas']['bultos'] , $aInput['tarifas']['kilos'] , $aInput['tarifas']['valor_reembolso'] )  ; if ( !$_fIsValid ) { $oFactory->setFieldErrors( $_aErrors ) ; $oFactory->setSettingNotice( SEUR()->API->div_class ( __( 'Se han producido errores en la introducción de datos, por favor, revise los datos introducidos en:', 'seur' ) ) . $rev_campos ,  'SEUR_Error' ) ; if($_return_old_inputs) return $aOldInput ;  } return $aInput ;  }  } new SEUR_tarifas() ; ?>
