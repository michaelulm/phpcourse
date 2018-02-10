<?php
	/*
		outputs html head tag with predefined css files, also switchable between light or dark theme
	*/
	function htmlhead($pageTitle, $theme = "light"){
		$head = "
		<head> 
			<title>{$pageTitle}</title>
			<link rel='stylesheet' type='text/css' href='css/theme.css'>
			<link rel='stylesheet' type='text/css' href='css/theme_{$theme}.css'>
		</head>";
		
		echo $head;
	}
	
	/*
		outputs standard html declaration
		details at: https://www.w3schools.com/tags/tag_doctype.asp
	*/
	function html($startEnd = 1){
		if($startEnd)
			echo "<!DOCTYPE html>".
				"<html>";
		else
			echo "</html>";
	}
	
	
	/*
		outputs start or end of body
	*/
	function htmlbody($startEnd = 1){
		if($startEnd)
			echo "<body>";
		else
			echo "</body>";
			
	}
	
	/*
		defines classname by call-by-reference
	*/
	function setClassName(&$className, $class){
		$className = "";
		if($class != "")
			$className = " class='$class'"; 
	}

	/*
		outputs different headlines in html, e.g. h1, h2, ...
	*/
	function headline($header, $order = 1, $class = ""){
		setClassName($className, $class);
		
		echo "<h{$order}{$className}>$header</h{$order}>";
		
		// will also work :)
		// echo "<h1>".$header."</h1>";

		// this line will also work :)
		//echo "<h".$order.">".$header."</h".$order.">";
		
		// will NOT work :/ => because single quotes NOT interpret variables
		// echo '<h1>$header</h1>';
	}
	
	/*
		outputs different types of html lists
		e.g. unordered or ordered list
	*/
	function htmllist($items, $listtype = "ul"){
		echo "<{$listtype}>"; // start tag
		foreach($items as $item){
			echo "<li>$item</li>";
		}
		echo "</{$listtype}>"; // end tag
	}
	
	/*
		creates html link for later usage, NOT displays link!
	*/
	function htmllink($text, $link, $alt = ""){
		return "<a href='$link' alt='$alt'>$text</a>";
	}
	
	/*
		outputs table rows 
		you can choice between header rows and data rows
	*/
	function htmlrow($row, $cellType = "td"){
		// starts row with tr
		$output = "<tr>";
		
		// adds each string as td OR th, only single line => no {} needed
		foreach($row as $data){
			
			if(is_array($data)){
				foreach($data as $key => $value){
					/*
						call method dynamically be name through variables
						e.g. to call createEditLink(...)
						$methodName(...) => variable will be replace
						and so $methodName = "createEditLink" and createEditLink( ... ) will be called
					*/
					$methodName = "create{$key}Link";
					$cellOutput = $methodName($value);
				}
			} else {
				$cellOutput = $data;
			}
			
			$output = $output . "<{$cellType}>$cellOutput</{$cellType}>";	
		}
		// ends rows with tr
		$output .= "</tr>";
		
		echo $output;
	}
	
	/*
		set current edit link in this example => general link
	*/
	function setEditLink($file, $param){
		global $editLink;
		
		$editLink = "{$file}?{$param}=";
	}
	
	/*
		created current needed edit link => detail page = form page
	*/
	function createEditLink($value){
		global $editLink;
		return "<a href='{$editLink}{$value}'>Bearbeiten</a>";
	}
	
	/*
		outputs table and call table row function to create rows
	*/
	function htmltable($tableData, $tableHeader, $class = ''){
		
		setClassName($className, $class);
		
		echo "<table{$className}>";		
		htmlrow($tableHeader, "th"); 
		
		foreach($tableData as $row)
			htmlrow($row); 
			
		echo "</table>";
	}
	
	/*
		outputs html form start or end 
	*/
	function htmlform($startEnd = 1, $method = "post", $action = ""){
		
		if($action != "")
			$action = " action='$action'";
		
		if($startEnd)
			$form = "<form method='$method' {$action}>";
		else
			$form = "</form>";
		
		echo $form;
	}
	
	/*
		outputs html fieldset with legend at start or end 
	*/
	function htmlfieldset($startEnd = 1, $legend = ""){
		
		if($startEnd)
			$fieldset = "<fieldset>
			  <legend>$legend</legend>";
		else
			$fieldset = "</fieldset>";
		
		echo $fieldset;
	}
	
	/*
		outputs html input form field
	*/
	function htmlinput($fieldname, $displayname, $default = "", $placeholder = "", $inputtype = "text"){
		$field = "
			   <div class=\"block\">
				<label for=\"title\">{$displayname}</label>			
				<input type=\"$inputtype\" name=\"$fieldname\" placeholder=\"$placeholder\" value=\"$default\"/>
			   </div>";
			   
		echo $field;
	}
	
	/*
		outputs html submit button
	*/
	function htmlsubmit($text){
		$field = "
			<input type='submit' value='$text' />";
		echo $field;
	}