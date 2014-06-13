<?php

/**
	*
	* Form creation class
	*
	* usage   : Static
	* @version : 1
	* @author  : Nick Sheffield
**/

class Form{
	/**
	* Creates a <form> open tag.
	* @param  string $action The url for the form to post to the database.
	* @param  string $method Either "post" or "get"
	*
	* @return string $html   The completed <form> tag.
	* 
	**/

	public static function open($action = '', $method = 'post'){
		$html = "<form action='$action' method='$method'>";
		return $html;
	}

	/**
	* Creates a <form> open tag.
	* @param  string $action The url for the form to post to the database.
	* @param  string $method Either "post" or "get"
	*
	* @return string $html   The completed <form> tag.
	* 
	**/

	public static function open_multipart($action = ''){
		$html = "<form action='$action' method='post' enctype='multipart/form-data'>";
		return $html;
	}

	/**
	* Creates a <form> close tag.
	*
	* @return string $html   The completed </form> tag.
	* 
	**/

	public static function close(){
		$html = '</form>';
		return $html;
	}

	/**
	* Creates a <input> open tag.
	*	
	* @param string $type   The type of input that will be taken.
	* @param string $name   A name given to the input tag.
	* @param string $value  Sets a value to the input.
	* @param string $extras 
	*
	* @return string $html   The completed <input> tag.
	* 
	**/

	public static function input($type, $name, $value = '', $extras = ''){
		$html = "<input type='$type' id='$name' name='$name' value='$value' $extras>";
		return $html;
	}

	/**
	* Creates a <label> open tag.
	*	
	* @param string $for  States what the label is for.
	* @param string $text Variable to store the text which is going to be inside the label.
	* 
	* @return string $html   The completed <label> tag.
	* 
	**/

	public static function label($for, $text){
		$html = "<label for='$for'>$text</label>";
		return $html;
	}

	public static function textarea($name, $value = ''){
		$html = "<textarea id='$name' name='$name'>$value</textarea>";
		return $html;
	}

	public static function options($values, $pre_selected){
		$html = '';
		foreach($values as $value => $text){
			
			$selected = $pre_selected == $value ? 'selected' : '';
			
			$html .= "<option value='$value' $selected>$text</option>";
		}
		return $html;
	}

	public static function select($name, $values, $pre_selected){
		$html = "<select name='$name' id='$name'>";
		$html .= self::options($values. $pre_selected);
		$html .= '</select>';
		return $html;
	}

	/* Shortcut functions for common input types */

	public static function hidden($name, $value){
		$html = self::input('hidden', $name, $value);
		return $html;
	}

	public static function text($name, $value = ''){
		$html = self::input('text', $name, $value);
		return $html;
	}

	public static function password($name, $value = ''){
		$html = self::input('password', $name, $value);
		return $html;
	}

	public static function file($name = 'file'){
		$html = self::input('file', $name.'[]', '', 'multiple');
		return $html;
	}

	public static function submit($text = 'Submit'){
		$html = self::input('submit', '', $text);
		return $html;
	}

	public static function max_file_size($size = '4194304'){
		$html = self::hidden('MAX_FILE_SIZE', $size);
		return $html;
	}

	public static function number($name, $value = '', $extras = ''){
		$html = self::input('number', $name, $value, $extras);
		return $html;
	}
}