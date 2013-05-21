<?php 
/**
 * Tool for Toolbox
 * @package Toolbox
 */

require_once 'class.builder.php';
require_once 'vendor/WideImage/WideImage.php';

/**
* Wrapper for Wideimage
*
* @package Toolbox
* @author 	Sergi Juanola 
* @copyright	Sergi Juanola 2012-2013
* @see Builder
*/
class Wideimagetool extends Builder {
	/**
	* Default properties.
	*/
	public static $default = array();

	/**
	* Building method
	* @param array $config The config array
	* @see Builder::build()
	*/
	public static function build($config = array()) {
		$tool = new self($config);
		if(!empty($config['image']))
			return WideImage::load($config['image']);
		else
			return $tool;
	}

	public function load($image)
	{
		return WideImage::load($image);
	}
}