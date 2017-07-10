<?php
class SEUR_import_export { public $sClassName = 'SEUR_admin' ; public $sPageSlug   = 'seur_import_export' ; public $sTabSecID    = 'seur_import_export' ; public function __construct( $sClassName='', $sPageSlug='', $sTabSecID='' ) { $this->sClassName   = $sClassName ? $sClassName : $this->sClassName ; $this->sPageSlug    = $sPageSlug ? $sPageSlug : $this->sPageSlug ; $this->sTabSecID     = $sTabSecID ? $sTabSecID : $this->sTabSecID ; add_action( 'load_' . $this->sPageSlug, array( $this, 'Load_Event' ) ) ; return $this ;  } public function Load_Event( $oAdminPage ) { $oAdminPage->addSettingSections( $this->sPageSlug , array ( 'section_id'        => 'import_export' , 'section_tab_slug'  => 'tabbed_config_1' , 'title'             => __( 'Importar/Exportar', 'seur' ) , 'save' 				=> FALSE , 'description'       => __( 'Importe o exporte la configuración de SEUR.', 'seur' ). '<hr>' ,  ) ) ; $oAdminPage->addSettingFields('import_export' , array ( 'field_id'      => 'seur_export' , 'value'      	=> __( 'Exportar', 'seur' ) , 'title'         => __( 'Exportar', 'seur' ) , 'type'          => 'export' , 'label'         => __( 'Exportar', 'seur' ) , 'file_name'     => 'SEUR_' . preg_replace('/^www\./','',$_SERVER['SERVER_NAME']) . '_' .date("Y_m_d") . '.set' , 'format'        => 'json' , 'description' => __( 'Guarde sus configuración para poder restaurarlas.', 'seur' ) .'<hr>' , ) , array ( 'field_id'      => 'seur_import' , 'value'      	=> __( 'Importar', 'seur' ) , 'title'         => __( 'Importar', 'seur' ) , 'type'          => 'import' , 'label'         => __( 'Importar', 'seur' ) , 'format'        => 'json' , 'description' => __( 'Importe archivo de opciones para restaurarlas.', 'seur' ) . '<hr>' ,  ) ) ; add_filter( 'import_'. $this->sPageSlug . '_import' , array( $this, 'replyToModifyImportData' ), 5, 6 ) ;  } public function replyToModifyImportData( $vData, $aOldOptions, $sFieldID, $sInputID, $sImportFormat, $sOptionKey ) { $this->oFactory->setSettingNotice ( __( 'Opciones Importación fueron validadas.', 'xtend' ) , 'updated' )  ; return $vData ;  }  } new SEUR_import_export() ; 