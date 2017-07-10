// ********************************************************************************* //
//  MODULO de WooCommerce para MRW
// ********************************************************************************* //

1.  El módulo hace el uso de la libreria SOAP de PHP5 para conexion y generacion
    de envios entre WooCommerce y el WebService SAGEC de MRW

// ********************************************************************************* //
//  CHANGELOG - REGISTRO DE CAMBIOS
// ********************************************************************************* //


18/04/2017: 2.6.0 	Se añaden tramos horarios.
					Etiquetas marketplaces opcionales.
					Traducciones completas para ES, PT, EN, CA. 
					Se incluyen los servicios Marítimo baleares, Marítimo canarias y marítimo interinsular.

12/04/2017: 2.5 Corrección para calcular el peso de productos variables correctamente

06/04/2017: 2.4 Módulo compatible con todas las versiones de WooCommerce hasta la versión 3.

30/01/2017: 2.3 Se soluciona el problema para guardar gran cantidad de tasas utilizando un JSON.

18/01/2017: 2.2 Se añade compatibilidad con el módulo de cupones de WooCommerce para realizar envíos gratuitos.

16/01/2017:	2.1 Corregimos excepción no controlada al añadir metaboxes si la variable no está definida.

22/11/2016: 2.0 Número de rangos ampliado a 25

02/11/2016: 1.9   Mejoras para admitir cualquier medida de peso. Se incluye el teléfono obligatorio en los envíos terceras plazas.

04/10/2016: 1.8.4 Se añade el segundo campo de dirección. Se concatenan los dos campos de dirección para generar la etiqueta.

03/10/2016: 1.8.3 Corrección campo contacto y eliminación ALaAtencion de. Eliminación de rango de horas por defecto.

22/09/2016: 1.8.2 Corrección desglose de bultos para servicios en los que es obligatorio. Si no existe teléfono de envío enviar cadena vacía.

23/08/2016: 1.8.1 Se adapta el módulo para productos variables con diferente peso siempre y cuando la variable se llame "peso"

19/07/2016: Se compatibiliza el módulo con la versión de WooCommerce 2.6.2