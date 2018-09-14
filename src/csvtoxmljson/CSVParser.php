<?php

namespace Csvtoxmljson;

use Csvtoxmljson\CSVToJsonParser;
use Csvtoxmljson\CSVToXmlParser;
//include_once("CSVToJsonParser.php");
//include_once("CSVToXmlParser.php");

/**
 * Static Factory for creation of classes
 * 
 * Only include this file in the consuming code and use the provided factory
 */
class CSVParser {
	
	public static function Create($type, $maxLenght = 1000, $separator = ',') {
		switch ($type) {
			case 'json':
				return new CSVToJsonParser($maxLenght, $separator);
			case 'xml':
				return new CSVToXmlParser($maxLenght, $separator);
		}
	}
}
