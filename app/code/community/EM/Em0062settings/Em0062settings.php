<?php
/**
 * @deprecated use Mage::helper('em0062settings') instead
 * @methods:
 * - get[Section]_[ConfigName]($defaultValue = '')
 */
class EM_Em0062settings_Em0062settings
{
	static function __callStatic($name, $args) {
		if (method_exists(self, $name))
			call_user_func_array(array(self, $name), $args);
			
		elseif (preg_match('/^get([^_][a-zA-Z0-9_]+)$/', $name, $m)) {
			$segs = explode('_', $m[1]);
			foreach ($segs as $i => $seg)
				$segs[$i] = strtolower(preg_replace('/([^A-Z])([A-Z])/', '$1_$2', $seg));

			$value = Mage::getStoreConfig('em0062/'.implode('/', $segs));
			if (!$value) $value = @$args[0];
			return $value;
		}
		
		else 
			call_user_func_array(array(self, $name), $args);
	}

	
	/**
	 * @return array
	 */
	public static function getAllCssConfig() {
		return array(
			'general_color' => Mage::getStoreConfig('em0062/typography/general_color'),
			'primary_color' => Mage::getStoreConfig('em0062/typography/primary_color'),
			'secondary_color' => Mage::getStoreConfig('em0062/typography/secondary_color'),
			'secondary2_color' => Mage::getStoreConfig('em0062/typography/secondary2_color'),
			'negative_color' => Mage::getStoreConfig('em0062/typography/negative_color'),
			'negative2_color' => Mage::getStoreConfig('em0062/typography/negative2_color'),
			'line_color' => Mage::getStoreConfig('em0062/typography/line_color'),
			'primary_bgcolor' => Mage::getStoreConfig('em0062/typography/primary_bgcolor'),
			'secondary_bgcolor' => Mage::getStoreConfig('em0062/typography/secondary_bgcolor'),
			'page_bg_image' => Mage::getStoreConfig('em0062/typography/page_bg_image'),
			'page_bg_file' => Mage::getStoreConfig('em0062/typography/page_bg_file'),
			'border_color' => Mage::getStoreConfig('em0062/typography/border_color'),
			'border2_color' => Mage::getStoreConfig('em0062/typography/border2_color'),
			'button1' => Mage::getStoreConfig('em0062/typography/button1'),
			'button2' => Mage::getStoreConfig('em0062/typography/button2'),
			'button3' => Mage::getStoreConfig('em0062/typography/button3'),
			'button4' => Mage::getStoreConfig('em0062/typography/button4'),
			'google_fonts' => Mage::getStoreConfig('em0062/typography/google_fonts'),
			'general_font' => Mage::getStoreConfig('em0062/typography/general_font'),
			'h1_font' => Mage::getStoreConfig('em0062/typography/h1_font'),
			'h2_font' => Mage::getStoreConfig('em0062/typography/h2_font'),
			'h3_font' => Mage::getStoreConfig('em0062/typography/h3_font'),
			'h4_font' => Mage::getStoreConfig('em0062/typography/h4_font'),
			'h5_font' => Mage::getStoreConfig('em0062/typography/h5_font'),
			'box_shadow' => Mage::getStoreConfig('em0062/typography/box_shadow'),
			'rounded_corner' => Mage::getStoreConfig('em0062/typography/rounded_corner'),
			'additional_css_file' => Mage::getStoreConfig('em0062/typography/additional_css_file'),
			'custom_css' => Mage::getStoreConfig('em0062/typography/custom_css'),
		);
	}   
}