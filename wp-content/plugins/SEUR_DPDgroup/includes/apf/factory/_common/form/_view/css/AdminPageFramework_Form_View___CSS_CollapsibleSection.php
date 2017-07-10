<?php 
/**
	Admin Page Framework v3.8.15 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/seur>
	Copyright (c) 2013-2017, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
abstract class SEUR_AdminPageFramework_Form_View___CSS_Base extends SEUR_AdminPageFramework_FrameworkUtility {
    public $aAdded = array();
    public function add($sCSSRules) {
        $this->aAdded[] = $sCSSRules;
    }
    public function get() {
        $_sCSSRules = $this->_get() . PHP_EOL;
        $_sCSSRules.= $this->_getVersionSpecific();
        $_sCSSRules.= implode(PHP_EOL, $this->aAdded);
        return $_sCSSRules;
    }
    protected function _get() {
        return '';
    }
    protected function _getVersionSpecific() {
        return '';
    }
}
class SEUR_AdminPageFramework_Form_View___CSS_CollapsibleSection extends SEUR_AdminPageFramework_Form_View___CSS_Base {
    protected function _get() {
        return $this->_getCollapsibleSectionsRules();
    }
    private function _getCollapsibleSectionsRules() {
        $_sCSSRules = ".seur-collapsible-sections-title.seur-collapsible-type-box, .seur-collapsible-section-title.seur-collapsible-type-box{font-size:13px;background-color: #fff;padding: 1em 2.6em 1em 2em;border-top: 1px solid #eee;border-bottom: 1px solid #eee;}.seur-collapsible-sections-title.seur-collapsible-type-box.collapsed.seur-collapsible-section-title.seur-collapsible-type-box.collapsed {border-bottom: 1px solid #dfdfdf;margin-bottom: 1em; }.seur-collapsible-section-title.seur-collapsible-type-box {margin-top: 0;}.seur-collapsible-section-title.seur-collapsible-type-box.collapsed {margin-bottom: 0;}#poststuff .seur-collapsible-sections-title.seur-collapsible-type-box.seur-section-title > .section-title-outer-container > .section-title-container > .section-title,#poststuff .seur-collapsible-section-title.seur-collapsible-type-box.seur-section-title > .section-title-outer-container > .section-title-container > .section-title{font-size: 1em;margin: 0 1em 0 0; }#poststuff .seur-collapsible-section-title.seur-collapsible-type-box.seur-section-title > .section-title-outer-container > .section-title-container > fieldset {line-height: 0; }#poststuff .seur-collapsible-section-title.seur-collapsible-type-box.seur-section-title > .section-title-outer-container > .section-title-container > fieldset .seur-field {margin: 0;padding: 0;}.seur-collapsible-sections-title.seur-collapsible-type-box.accordion-section-title:after,.seur-collapsible-section-title.seur-collapsible-type-box.accordion-section-title:after {top: 0.88em;top: 34%;right: 15px;}right: 15px;}}*/.seur-collapsible-sections-title.seur-collapsible-type-box.accordion-section-title:after,.seur-collapsible-section-title.seur-collapsible-type-box.accordion-section-title:after {content: '\\f142';}.seur-collapsible-sections-title.seur-collapsible-type-box.accordion-section-title.collapsed:after,.seur-collapsible-section-title.seur-collapsible-type-box.accordion-section-title.collapsed:after {content: '\\f140';} .seur-collapsible-sections-content.seur-collapsible-content.accordion-section-content,.seur-collapsible-section-content.seur-collapsible-content.accordion-section-content,.seur-collapsible-sections-content.seur-collapsible-content-type-box, .seur-collapsible-section-content.seur-collapsible-content-type-box{border: 1px solid #dfdfdf;border-top: 0;background-color: #fff;}tbody.seur-collapsible-content {display: table-caption; padding: 10px 20px 15px 20px;}tbody.seur-collapsible-content.table-caption {display: table-caption; }.seur-collapsible-toggle-all-button-container {margin-top: 1em;margin-bottom: 1em;width: 100%;display: table; }.seur-collapsible-toggle-all-button.button {height: 36px;line-height: 34px;padding: 0 16px 6px;font-size: 20px;width: auto;}.flipped > .seur-collapsible-toggle-all-button.button.dashicons {-moz-transform: scaleY(-1);-webkit-transform: scaleY(-1);transform: scaleY(-1);filter: flipv; }.seur-collapsible-section-title.seur-collapsible-type-box .seur-repeatable-section-buttons {margin: 0; }.seur-collapsible-section-title.seur-collapsible-type-box .seur-repeatable-section-buttons.section_title_field_sibling {margin-top: 0;}.seur-collapsible-section-title.seur-collapsible-type-box .repeatable-section-button {background: none; line-height: 1.8em; margin: 0;padding: 0;width: 2em;height: 2em;text-align: center;}.seur-collapsible-sections-title.seur-collapsible-type-box .section-title-height-fixer, .seur-collapsible-section-title.seur-collapsible-type-box .section-title-height-fixer {height: 100%;width: 0;display: inline-block;vertical-align: middle;}.seur-collapsible-sections-title.seur-collapsible-type-box .section-title-outer-container, .seur-collapsible-section-title.seur-collapsible-type-box .section-title-outer-container {width: 88%;display: inline-block;text-align: left;vertical-align: middle;}.seur-collapsible-sections-title.seur-collapsible-type-box .seur-repeatable-section-buttons-outer-container,.seur-collapsible-section-title.seur-collapsible-type-box .seur-repeatable-section-buttons-outer-container {width: 10.88%;min-width: 60px; display: inline-block;text-align: right;vertical-align: middle;}@media only screen and ( max-width: 782px ) {.seur-collapsible-sections-title.seur-collapsible-type-box .section-title-outer-container, .seur-collapsible-section-title.seur-collapsible-type-box .section-title-outer-container {width: 87.8%;}}.accordion-section-content.seur-collapsible-content-type-button {background-color: transparent;}.seur-collapsible-button {color: #888;margin-right: 0.4em;font-size: 0.8em;}.seur-collapsible-button-collapse {display: inline;} .collapsed .seur-collapsible-button-collapse {display: none;}.seur-collapsible-button-expand {display: none;}.collapsed .seur-collapsible-button-expand {display: inline;}.seur-collapsible-section-title .seur-fields {display: inline;vertical-align: middle; line-height: 1em; }.seur-collapsible-section-title .seur-field {float: none;}.seur-collapsible-section-title .seur-fieldset {display: inline;margin-right: 1em;vertical-align: middle; }#poststuff .seur-collapsible-title.seur-collapsible-section-title .section-title-container.has-fields .section-title{width: auto;display: inline-block;margin: 0 1em 0 0.4em;vertical-align: middle;}";
        if (version_compare($GLOBALS['wp_version'], '3.8', '<')) {
            $_sCSSRules.= ".seur-collapsible-sections-title.seur-collapsible-type-box.accordion-section-title:after,.seur-collapsible-section-title.seur-collapsible-type-box.accordion-section-title:after {content: '';top: 18px;}.seur-collapsible-sections-title.seur-collapsible-type-box.accordion-section-title.collapsed:after,.seur-collapsible-section-title.seur-collapsible-type-box.accordion-section-title.collapsed:after {content: '';} .seur-collapsible-toggle-all-button.button {font-size: 1em;}.seur-collapsible-section-title.seur-collapsible-type-box .seur-repeatable-section-buttons {top: -8px;}";
        }
        return $_sCSSRules;
    }
}
