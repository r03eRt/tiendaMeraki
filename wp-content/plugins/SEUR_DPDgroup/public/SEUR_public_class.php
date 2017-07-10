<?php
if ( ! defined( 'ABSPATH' ) ) exit ; class SEUR_public { public function __construct() { return $this ;  } public function SEUR_after_shipping_rate ( $method, $index) { if(SEUR()->API->is_shop_manager()) { if( $method->method_id  == 'flat_rate' && strpos($method->label, 'SEUR') !== false) { echo '<hr>Puntos Pickup SEUR:' ; echo '<ul id="shipping_method">
<li>
<input type="radio" name="casa-pepito" data-index="4" id="casa-pepito" value="casa-pepito" class="shipping_method">
<label for="shipping_method_0_free_shipping10">Recogeré en casa Pepito</label>					
</li>
<li>
<input type="radio" name="casa-menganito" data-index="4" id="casa-menganito" value="casa-menganito" class="shipping_method">
<label for="casa-menganito">Recogeré en casa Menganito</label>
</li>
</ul>' , SEUR()->XD( array('SEUR_after_shipping_rate', $method , $index)) ;  } if ( WC()->cart->subtotal < 100 ) {  }  }  } function SEUR__package_rates ( $rates, $package) { if(SEUR()->API->is_shop_manager()) { $pais = $package['destination']['country'] ; echo 'Pais de destino ' . $pais ;  } return $rates ;  }  } 