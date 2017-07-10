<?php 
/**
	Admin Page Framework v3.8.15 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/seur>
	Copyright (c) 2013-2017, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class SEUR_AdminPageFramework_View__PageMataBoxRenderer extends SEUR_AdminPageFramework_FrameworkUtility {
    public function render($sContext) {
        if (!$this->doesMetaBoxExist()) {
            return;
        }
        $this->_doRender($sContext, ++self::$_iContainerID);
    }
    private static $_iContainerID = 0;
    private function _doRender($sContext, $iContainerID) {
        echo "<div id='postbox-container-{$iContainerID}' class='postbox-container'>";
        do_meta_boxes('', $sContext, null);
        echo "</div>";
    }
}
