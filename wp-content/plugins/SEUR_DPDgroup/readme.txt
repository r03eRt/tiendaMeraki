=== SEUR DPDgroup ===
Contributors: SEUR, SUGO
Tags: SEUR, ecommerce, e-commerce, commerce, woothemes, wordpress ecommerce,  store, sales, sell, shop, shopping, cart, checkout, configurable, variable, widgets, reports, download, downloadable, digital, inventory, stock, reports, shipping, tax
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=paypal@go-skate.eu&item_name=Donar+para+plugin+SEUR+woocommerce
Requires at least: 4.2
Tested up to: 4.7.2
Stable tag: 1.0.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

== Descripción ==

SEUR DPDgroup es un plugin que le dara todo lo necesario para la creación y envío de pedidos a traves de SEUR DPDgrop.

= Extensiones premiun =

Estemos preparando una versión premium con la que tendrá más servicios y opciones.

== Installation ==

= Requerimientos mínimos =

* WordPress 4.2 o superior
* PHP version 5.6 o superior
* MySQL version 5.0 o superior
* WooComerce 2.6 o superior

= Instalación automatica =

Descargue su copia del plugin a su ordenador y instale el plugin desde su back end.

= Instalación manual =

El método de instalación manual implica descargar nuestro plugin y subirlo a su servidor web a través de su aplicación FTP preferida. El codex WordPress contiene [instrucciones sobre cómo hacer esto aquí] (http://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).

= Actualizaciones =

Las actualizaciones automáticas aun no están implementadas, de momento, solo las instalaciones manuales están implementadas.

== Log de cambios ==

= 1.1.2

	Arreglado - Debug interno activado en metabox.

= 1.1.1

	Arreglado - Id de pedido incorrecto al crear envíos en versión WC 3.0.4
	Arreglado - No guarda correctamente los envíos al ser creados en WC 3.0.4

= 1.1.0

	Añadido - Gestión de estados de pedido, el plugin gestiona automáticamente los estados ( En paquetería, Esperando datos, Envíos en transito y Entregados al cliente ).
	Añadido - Menú en la parte frontal cuando se esta logueado como gestor.
	Añadido - Acceso a pedidos desde el menú tollbar.
	Añadido - Actualizaciones desde su panel de control->plugins y avisos de actualización.
	Actualizado - Compatibilidad con WooCommerce 3.0.1.
	Añadido - Cuando se cancela un envío, este pasa a estado "en paquetería".
	
= 1.0.35

	Actualizado - Se cambia a versión de producción 1.0.35
	Arreglado - Las tarifas no indicaban bien el precio del cliente al pedir las tarifas por una fecha en concreto.
	Añadido - Escritorio de plugin donde se notifica el estado de este.
	Añadido - Menú en barra de estado con estado de red SEUR y acceso al plugin.
	
= 0.0.34

	Actualizado - Framework APF a versión 3.8.15.
	Mejora - Notificaciones cuando el servicio de SEUR está caído.
	Mejora - Varios de optimización de código.

= 0.0.33

	Corregido - Actualizaciones con número de seguimiento no actualizan correctamente.
	Mejora - Seguimiento de envíos.
	Añadido - Compatibilidad con SEUR-PRO.

= 0.0.32
	
	Corregido - Recogidas siempre trata la recogida como FRIO.
	Actualizado - Framework APF a versión 3.8.13.
	Añadido - Posibilidad de introducir un número de seguimiento conseguido por 'SEUR -> Seguimientos' para pedidos que SEUR no tenga añadido una referencia de envío, estén envíados por otros medios, seguimiento de devoluciones, etc.
	Añadido - Albarán de entrega se abre en nueva ventana a tamaño completo para su impresión.
	Corregido - Aviso cuando no existe albarán de entrega para el envío una vez finalizado.

= 0.0.31

	Añadido - Creación de envíos internacionales de refrigerados SEUR FRESH CLASIC.
	Corregido - Recogidas siempre trata la recogida como FRIO.

= 0.0.30

	Añadido - Creación de envíos nacionales de refrigerados SEUR 13:30 FRIO.
	Añadido - Observaciones en recogidas y tipo de recogida.

= 0.0.29

	Corregido - Sincronización de envíos mediante Cron de wordpress optimizado.

= 0.0.28
	
	Corregido - Compatibilidad con wordpress 4.7.

= 0.0.27
	
	Corregido - Fallo en sincronización con SEUR, si habia algun error en las comunicaciones, a sincronización quedaba anulada.

= 0.0.26

	Corregido - En pedidos con dirección de envío distinta a la de facturación no recogía bien el email para B2C.
	
= 0.0.25

	Corregido - Error en tipo de envío en metabox cuando el CP o Población no es correcto. Tipo de envío sin valor de clave.

= 0.0.24

	Corregido - Error en metadatox al no tener metodo de envio por defecto.

= 0.0.23

	Añadido - Posibilidad de cambiar el metodo de envío en el metabox al crear este.
	Actualizado - Framework APF a versión 3.8.8

= 0.0.22
	
	Corregido - Formato de dirección en recogidas y horario de recogida concertado.
	Corregido - Erratas de texto en avisos metabox de pedidos

= 0.0.21

	Añadido - Formato de dirección en recogidas y horario de recogida concertado.
	Corregido - Avisos cliente en solo en envíos B2C

= 0.0.20

	Actualizado - Framework APF a versión 3.8.3
	Corregido - Metabox de pedidos no enseña correctamente los datos si el plugin aun no está configurado.
	Corregido - Envíos a canarias no establecian bien los pagos de aduanas.

= 0.0.19

	Añadido - Albaran de entrega una vez completado el envío.

= 0.0.18	

	Corregido - Notificaciones al ordenar una recogida en cabecera de página.
	Corregido - Campos de escalera, piso y puerta mal en configuración.
	Corregido - Textos en nomenclator.
	Añadido - Texto explicativo a bultos en tarifas -> Los envíos CLASSIC TERRESTRE y PREDICT CROSSBORDER deben ser monobulto.
	Añadido - Aviso en manifiestos de que este es de un día anterior.
	Corregido - Lógica de código para que actualice correctamente y enseñe el último manifiesto.
	Cambiado - Nombre del menú de Seur - DPDgroup a SEUR nada más.

= 0.0.17	

	Corregido - Cuando se crea un pedido de nuevo para reenviar un paquete no deja imprimir etiqueta.
	Corregido - Varios de ortografía.
	Añadido	  - Anulación de recogidas.
	Añadido   - Enlace a GeoPostcodes para nomenclator internacional.

= 0.0.16	
	
	Corregido - Imagen no aparece en impresión de etiquetas cuando se genera envío.

= 0.0.15

	Corregido - Ordenar Recogidas, textos y petición.

= 0.0.14

	Corregido - Abrir etiquetas en DPF en Chrome directamente, Firefox y IE en tablilla nueva.  

= 0.0.13

	Corregido - Ordenar recogidas.
	Actualizado - Framework APF a 3.8.1, desabilitadas opciones que no se usan para hacer más reducido el plugin.
	
= 0.0.12
	
	Corregido - Añadidos estados de envío por defecto para crear, sincronizar y ver seguimiento de pedidos en SEUR.
	Corregido - Cambiada logica del plugin, ahora se pude imprimir etiqueta mientras no se reciban datos de seur.
	Corregido - Adaptado para instalaciones en las que no hay estados de pedido personalizados.
	
= 0.0.11
   
   	Corregido - Se pone un flag en la conexión con SEUR para evitar consultas concurrentes cuando hay varias peticiones simultaneas.
   	Corregido - Varios para guardar compatibilidad hacia atrás hasta PHP 5.4.
	Corregido - Textos y opciones por defecto en paneles de configuración.

= 0.0.10

	Corregido - Se siguen configurando tiempo en tomas para ahorrar las máximas posibles.
   	Añadido - Si no se encuentra referencia la primera vez para buscar ID_EXPEDICION se buscara añadiendo una o dos _ a la referencia hasta conseguir el ID_EXPEDICION.
   	Añadido - Si al pedir un envió por referencia tiene más de una expedición cogerá la primera, que es la última generada.
   	Añadido - Corregido fallo XML en respuesta de trama SEUR que inserta varios cierres '</EXPEDICIONES>' indebidos.
   	Corregido - openfile.php retorna cero bites de contenido en archivos bajo https://, se cambia la forma de llamar al archivo de etiquetas térmicas.
   	Corregido - Varios arreglos de optimización de código.

= 0.0.9

	Cambios - Reprogramada funcion de seguimiento para un mayor control de consultas, intentando conseguir seguimiento normal con 5 o 6 consultas.
	Añadido - Se retrasa la primera sincronización en pedidos nuevos hasta las 22:00+- que es cuando SEUR empieza a tener datos.
  	Corregido - Se cambia la fecha limite del sabado a las 14 horas, despues me encuentro SOAP siempre caido.
	Corregido - El domingo manda el siguiente pedido al martes, corregido que manda al lunes a las 8:30.
	Corregido - Textos en manifiestos y seguimiento.
	Corregido - Se pone Fecha y hora en el manifiesto.
	Añadido - Se pide confirmación en envio de datos a SEUR para crear envíos y recivir etiqueta, para prevenir peticiones accidentales.

= 0.0.8 - BETA

	Corregido - Decimales en importes deben ser enviados con punto no con coma.
	Corregido - Texto en la configuración de woocommerce y servicios.
	Corregido - Descarga e impresión de etiquetas térmicas con el programa de escritorio de SEUR
	Añadido - Pedidos nuevos no empiezan a sincronizarse hasta las 21:45.
	Añadido - Si son más de las 23H la siguiente petición de envío se hará a partir de las 8:30.
	Añadido - Si son más de las 14H del sábado la siguiente petición de envío se hará a partir de las 8:30 el siguiente lunes.
	Cambios - Se recorta a 4 horas el cache de pedido de tarifa y otros a SEUR en el metabox a no ser que cambie algún datos de envío.
	Cambios - Se dejan datos imprescindibles en la columna de listado de productos.
	Cambios - Varios de diseño, css.

= 0.0.7 - BETA

	Añadido - Referencia de envío se coge del número de pedido y se guarda para poder cambiar por otra y poder sincronizar con una distinta o creada por otro medio.
   	Añadido - Tipos de estado de pedido en los cuales se puede ver el histórico de seguimiento (Independientemente del seguimiento con SEUR).
	Añadido - La impresión de etiquetas para TÉRMICA ya produce un archivo descargable.
	Añadido - Cuando no cambia el estado del envió se le pregunta cada hora a SEUR, si el envió cambia de estado se retrasa a 3 horas.
   
= 0.0.6 - BETA

	Añadido - El pedido se puede cancelar cuando se envía a SEUR y se deja imprimir etiquetas.
	Añadido - La impresión de etiquetas por PDF se hace directamente a impresora.
  	Añadido - Fecha de consulta en seguimiento, manifiesto, y tarifas para saber cuando se hizo la consulta
   
   	Error - Se han retocado algunas cosas para hacer compatible con versiones de PHP antiguas.
   
	Cambios - Se ha movido la creación de envíos al la clase SOAP para poder reutilizar.
	Cambios - Se ha verificado el funcionamiento para entrega en Sábados de pedidos nacionales si son de servicios 3 ó 9.

= 0.0.4 - BETA

	Retocado - En el metabox de la edición de pedidos ahora enseña en que estados de pedido se puede enviar o hacer seguimiento.

= 0.0.5 - BETA

	Error - En PHP 5.4.6 habian funciones que daban error, versión mínima de funcionamiento PHP 5.6.