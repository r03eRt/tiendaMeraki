<?php
if ( ! defined( 'ABSPATH' ) ) exit ; class SEUR_admin extends SEUR_AdminPageFramework { public function start_SEUR_admin() { new SEUR_Select2CustomFieldType() ; $this->oMsg->aMessages['option_updated'] = __('Los datos se han guardado correctamente.','seur') ; $this->oMsg->aMessages['option_cleared'] = __('Los datos se han borrado correctamente.','seur') ; $this->oMsg->aMessages['export'] = __('Exportar','seur') ; $this->oMsg->aMessages['export_options'] = __('Opciones de exportación','seur') ; $this->oMsg->aMessages['import_options'] = __('Opciones de importación','seur') ; $this->oMsg->aMessages['submit'] = __('Enviar','seur') ; $this->oMsg->aMessages['import_error'] = __('Un error ha ocurrido mientras se cargaba el archivo de importación.','seur') ; $this->oMsg->aMessages['uploaded_file_type_not_supported'] = __('El archivo a cargar no es está soportado: %1$s','seur') ; $this->oMsg->aMessages['could_not_load_importing_data'] = __('No se pudo cargar los datos de importación.','seur') ; $this->oMsg->aMessages['imported_data'] = __('El archivo subido ha sido importado.','seur') ; $this->oMsg->aMessages['not_imported_data'] = __('No hay datos que puedan ser importados.','seur') ; $this->oMsg->aMessages['upload_image'] = __('Cargar Imagen','seur') ; $this->oMsg->aMessages['use_this_image'] = __('Usar esta imagen','seur') ; $this->oMsg->aMessages['insert_from_url'] = __('Insertar desde una URL','seur') ; $this->oMsg->aMessages['reset_options'] = __('¿Seguro que desea restablecer las opciones?','seur') ; $this->oMsg->aMessages['confirm_perform_task'] = __('Por favor, confirme la acción.','seur') ; $this->oMsg->aMessages['specified_option_been_deleted'] = __('Se han eliminado las opciones especificadas.','seur') ; $this->oMsg->aMessages['nonce_verification_failed'] = __('Se produjo un problema al procesar los datos del formulario. Por favor, vuelva a intentarlo.','seur') ; $this->oMsg->aMessages['send_email'] = __('¿Está todo correcto para enviar el correo electrónico?','seur') ; $this->oMsg->aMessages['email_sent'] = __('El correo electrónico ha sido enviado.','seur') ; $this->oMsg->aMessages['email_scheduled'] = __('El correo electrónico ha sido programado.','seur') ; $this->oMsg->aMessages['email_could_not_send'] = __('Hubo un problema al enviar el correo electrónico.','seur') ; $this->oMsg->aMessages['title'] = __('Titulo','seur') ; $this->oMsg->aMessages['author'] = __('Autor','seur') ; $this->oMsg->aMessages['categories'] = __('Categorías','seur') ; $this->oMsg->aMessages['tags'] = __('Etiquetas','seur') ; $this->oMsg->aMessages['comments'] = __('Comentarios','seur') ; $this->oMsg->aMessages['date'] = __('Fecha','seur') ; $this->oMsg->aMessages['show_all'] = __('Mostrar todo','seur') ; $this->oMsg->aMessages['powered_by'] = __('Desarrollado bajo','seur') ; $this->oMsg->aMessages['settings'] = __('Ajustes','seur') ; $this->oMsg->aMessages['manage'] = __('Administrar','seur') ; $this->oMsg->aMessages['select_image'] = __('Seleccione imagen','seur') ; $this->oMsg->aMessages['upload_file'] = __('Cargar archivo','seur') ; $this->oMsg->aMessages['use_this_file'] = __('Usar este archivo','seur') ; $this->oMsg->aMessages['select_file'] = __('Seleccione archivo','seur') ; $this->oMsg->aMessages['remove_value'] = __('Borrar valor','seur') ; $this->oMsg->aMessages['select_all'] = __('Seleccionar todo','seur') ; $this->oMsg->aMessages['select_none'] = __('Deseleccionar todo','seur') ; $this->oMsg->aMessages['no_term_found'] = __('Term no encontrado.','seur') ; $this->oMsg->aMessages['select'] = __('Selecciona','seur') ; $this->oMsg->aMessages['insert'] = __('Inserta','seur') ; $this->oMsg->aMessages['use_this'] = __('Usar este','seur') ; $this->oMsg->aMessages['return_to_library'] = __('Regresar a la Biblioteca','seur') ; $this->oMsg->aMessages['queries_in_seconds'] = __('%1$s consultas en %2$s segundos.','seur') ; $this->oMsg->aMessages['out_of_x_memory_used'] = __('Usados %1$s de %2$s MB (%3$s) de memoria.','seur') ; $this->oMsg->aMessages['peak_memory_usage'] = __('Pico de memoria usada %1$s MB.','seur') ; $this->oMsg->aMessages['initial_memory_usage'] = __('Uso de memoria inicial %1$s MB.','seur') ; $this->oMsg->aMessages['allowed_maximum_number_of_fields'] = __('El número máximo permitido de campos es {0}.','seur') ; $this->oMsg->aMessages['allowed_minimum_number_of_fields'] = __('El número mínimo permitido de campos es {0}.','seur') ; $this->oMsg->aMessages['add'] = __('Añadir','seur') ; $this->oMsg->aMessages['remove'] = __('Borrar','seur') ; $this->oMsg->aMessages['allowed_maximum_number_of_sections'] = __('El número máximo permitido de secciones es {0}','seur') ; $this->oMsg->aMessages['allowed_minimum_number_of_sections'] = __('El número mínimo permitido de secciones es {0}','seur') ; $this->oMsg->aMessages['add_section'] = __('Añadir sección','seur') ; $this->oMsg->aMessages['remove_section'] = __('Borrar sección','seur') ; $this->oMsg->aMessages['toggle_all'] = __('Alternar todo','seur') ; $this->oMsg->aMessages['toggle_all_collapsible_sections'] = __('Alterne todas las secciones colapsables','seur') ; $this->oMsg->aMessages['reset'] = __('Reset','seur') ; $this->oMsg->aMessages['yes'] = __('Sí','seur') ; $this->oMsg->aMessages['no'] = __('No','seur') ; $this->oMsg->aMessages['on'] = __('On','seur') ; $this->oMsg->aMessages['off'] = __('Off','seur') ; $this->oMsg->aMessages['enabled'] = __('Habilitado','seur') ; $this->oMsg->aMessages['disabled'] = __('Deshabilitado','seur') ; $this->oMsg->aMessages['supported'] = __('Soportado','seur') ; $this->oMsg->aMessages['not_supported'] = __('No soportado','seur') ; $this->oMsg->aMessages['functional'] = __('Functional','seur') ; $this->oMsg->aMessages['not_functional'] = __('No Functional','seur') ; $this->oMsg->aMessages['too_long'] = __('Muy largo','seur') ; $this->oMsg->aMessages['acceptable'] = __('Aceptable','seur') ; $this->oMsg->aMessages['no_log_found'] = __('No se encontró registro.','seur') ; if(isset($_GET['page'])) { if( $_GET['page'] == 'seur_dashboard' ) require_once (SEUR()->plugin_local . '/admin/panel_control.php') ; if( $_GET['page'] == 'seur_recogidas' ) require_once (SEUR()->plugin_local . '/admin/recogidas.php') ; if( $_GET['page'] == 'seur_manifiestos' ) require_once (SEUR()->plugin_local . '/admin/manifiesto.php') ; if( $_GET['page'] == 'seur_configuracion' ) require_once (SEUR()->plugin_local . '/admin/configuracion.php') ; if( $_GET['page'] == 'seur_nomenclator' ) require_once (SEUR()->plugin_local . '/admin/nomenclator.php') ; if( $_GET['page'] == 'seur_seguimientos' ) require_once (SEUR()->plugin_local . '/admin/seguimientos.php') ; if( $_GET['page'] == 'seur_tarifas' ) require_once (SEUR()->plugin_local . '/admin/tarifas.php') ; if( $_GET['page'] == 'seur_import_export' ) require_once (SEUR()->plugin_local . '/admin/import_export.php') ;  }  } public function setUp() { wp_enqueue_style( 'SEUR_admin_apf', SEUR()->plugin_url . 'assets/css/apf.css' , array(), SEUR()->VERSION ) ; $this->setRootMenuPage( 'SEUR', SEUR()->plugin_url .'assets/images/seur.png', 59	) ; $this->addSubMenuItems(array( 'title' => __('Escritorio','seur'), 'page_slug' => 'seur_dashboard' )) ; $this->addSubMenuItems(array( 'title' => __('Manifiesto','seur'), 'page_slug' => 'seur_manifiestos' )) ; $this->addSubMenuItems(array( 'title' => __('Seguimiento','seur'), 'page_slug' => 'seur_seguimientos' )) ; $this->addSubMenuItems(array( 'title' => __('Recogida','seur'), 'page_slug' => 'seur_recogidas' )) ; $this->addSubMenuItems(array( 'title' => __('Nomenclator','seur'), 'page_slug' => 'seur_nomenclator' )) ; $this->addSubMenuItems(array( 'title' => __('Tarifas','seur'), 'page_slug' => 'seur_tarifas' )) ; $this->addSubMenuItems(array( 'title' => __('Configuracion','seur'), 'page_slug' => 'seur_configuracion' )) ; $this->addSubMenuItems(array( 'title' => __('Importar-Exportar','seur'), 'page_slug' => 'seur_import_export' )) ; $this->setPageHeadingTabsVisibility( false );            $this->setInPageTabTag( 'h2' ) ;  } public function content_top_SEUR_admin( $sContent ) { return 	'<div class="seur_cabecera"><img src="' .  SEUR()->plugin_url .'assets/images/logoSEURdpd.png' . '"></img></div>' . $sContent ;  } public function footer_left_SEUR_admin( $sHTML ) { return $sHTML ;  } public function footer_right_SEUR_admin( $sHTML ) { return  "<span>" . sprintf ( __( 'Gracias a <a href="//sugo.es"><img src="//sugo.es/wp-content/uploads/2015/06/Logo-sugo.png" class="header-image" width="40" alt=""></a> por su colaboración.', 'SEUR' )  ) . "</span>" ;  }  } 