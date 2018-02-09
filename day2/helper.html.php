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
		outputs table rows 
		you can choice between header rows and data rows
	*/
	function htmlrow($row, $cellType = "td"){
		// starts row with tr
		$output = "<tr>";
		
		// adds each string as td OR th, only single line => no {} needed
		foreach($row as $data)
			$output = $output . "<{$cellType}>$data</{$cellType}>";
			
		// ends rows with tr
		$output .= "</tr>";
		
		echo $output;
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