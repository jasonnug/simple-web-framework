<?php
/*
  File: include.php
  Description: Application utility functions.
  Author: Jason Nugent
  Date: 9/2/2015
*/

// set the messages in session for a post form refresh.
function set_messages_session() {
	global $app;
	if(strlen($app['_error']) > 0) {
		$_SESSION['_error'] = $app['_error'];
	}
	if(strlen($app['_warning']) > 0) {
		$_SESSION['_warning'] = $app['_warning'];
	}
	if(strlen($app['_success']) > 0) {
		$_SESSION['_success'] = $app['_success'];
	}
}

// Clear out the messages in SESSION.
function unset_messages_session() {
	global $app, $smarty;
	$app['_error'] = "";
	$app['_warning'] = "";
	$app['_success'] = "";
	unset($_SESSION['_error']);
	unset($_SESSION['_warning']);
	unset($_SESSION['_success']);
}

// Redirect to a specified url or refresh the current page while keeping messages in the session.
function safe_redirect($send_url=null) {
	global $app, $curPage;
	set_messages_session();

	if($send_url == null) {
		//echo "<br><br>$curPage";
		if($curPage == "/") {
			header('Location: /');
			exit;
		} else {
			header('Location: /' . $curPage);
			exit;
		}
	} else {
		$self = $app['_root_url'] . $_SERVER['PHP_SELF'];
		if($send_url != $self) {
			header('location: ' . $send_url);
			exit;
		}
	}
}

// Uploads file of type $type, from a Post Form data into directory $dir. Returns url.
function upload_file($type='img', $dir='/media/') {
	global $app;

	if($type == "img") {
		$file_form    = $_FILES['img-file'];
	} else if($type == "doc") {
		$file_form    = $_FILES['doc-file'];
	}

	$maxSize      = 25000000;
	$imgExts = array("gif", "jpeg", "jpg", "png");
	$docExts = array("pdf", "doc", "docx", "xls", "xlsx", "csv");
	$allowedExts  = array_merge($imgExts, $docExts);
	$allowedTypes = array("image/gif", "image/jpeg", "image/jpg", "image/pjpeg", "image/x-png", "image/png",
			"application/pdf", 
			"application/vnd.openxmlformats-officedocument.spreadsheetml.sheet", 
			"application/vnd.openxmlformats-officedocument.wordprocessingml.document", 
			"application/vnd.ms-excel", 
			"application/msword");

	$file_obj             = array();
	$file_obj['name']     = str_replace(" ", "_", $file_form['name']);
	$temp                 = explode(".", $file_obj['name']);
	$file_obj['ext']      = strtolower(end($temp));
	$file_obj['prefix']   = implode("", array_slice($temp, 0, -1));
	$file_obj['error']    = $file_form["error"];
	$file_obj['app_type']  = $file_form["type"];
	$file_obj['size']     = $file_form["size"];
	$file_obj['tmp_name'] = $file_form["tmp_name"];

	// Check for errors 
	// File exists
	if(empty($file_form) or empty($file_obj['name'])) {
		$app['_error'] .= "Missing file or filename.<br>";
		return false;
	}
	// Allowed extension
	if(!in_array($file_obj['ext'], $allowedExts)) {
		k($allowedExts);
		$app['_error'] .= "<strong>" . $file_obj['ext'] . "</strong> is not an allowed extension.<br>";
		return false;
	} else {
		// Get file type from extension
		if(in_array($file_obj['ext'], $imgExts)) {
			$file_obj['type'] = "file-image";
		} else {
			$file_obj['type'] = "file-document";
		}
	}
	// Allowed type
	if(!in_array($file_obj['app_type'], $allowedTypes)) {
		$app['_error'] .= "<strong>" . $file_obj['app_type'] . "</strong> is not an allowed file type.<br>";
		return false;
	}
	// Size limit
	if($file_obj['size'] > $maxSize) {
		$megs        = number_format(($file_obj['size'] / 1000000), 2);
		$allowedMegs = number_format(($maxSize / 1000000), 2);
		$app['_error'] .= "<strong>$megs MB</strong> is too large. The maximum size allowed is $allowedMegs MB.<br>";
		return false;
	}
	// Other file upload errors
	if ($file_obj['error'] > 0) {
		$app['_error'] .= "Upload file error: " . $file_obj['error'] . "<br>";
		return false;
	}

	if($app['_error'] === "") {
		$file_obj['path'] = $app['_root_url'] . $dir . $file_obj['name'];
		$file_obj['root_path'] = $app['_web_root'] . $dir . $file_obj['name'];
		if (file_exists($app['_web_root'] . $dir . $file_obj['name'])) {
			$app['_warning'] .= "<strong>Warning: </strong>" . $file_obj['name'] . " already exists. Updating file. <br>";
		}
		if(move_uploaded_file($file_obj['tmp_name'], $file_obj['root_path'])){
			$app['_success'] .= "Uploaded file to <strong><a href='" . $file_obj['path'] . "' target='_blank'>" . $file_obj['path'] . "</a></strong>.<br>";
		} else {
			$app['_error'] .= "Error moving uploaded file to requested directory. <br>";
		}
		return $file_obj;
	} else {
		return false;
	}
}

// checks if string "haystack" starts with "needle"
function startsWith($haystack, $needle)
{
	return !strncmp($haystack, $needle, strlen($needle));
}

function endsWith($haystack, $needle)
{
	$length = strlen($needle);
	if ($length == 0) {
		return true;
	}

	return (substr($haystack, -$length) === $needle);
}

function returnArraysFromXMLData($xmldata) {
	$array = array();
	foreach($xmldata as $key => $item) {
		if(is_array($item)) {
			$array[$item['name']] = returnArraysFromXMLData($item);
		} else if ($key != 'name') {
			$array[$key] = $item;
		}
	}
	return $array;
}

function clean_string($string) {
	$bad = array("content-type","bcc:","to:","cc:","href");
	return str_replace($bad,"",$string);
}

// returns an object from XML Data
function returnObjectFromXMLData($xmldata) {
	$object = new Object();
	foreach($xmldata as $key =>$item) {
		if(is_array($item)) {
			$object->{$item['name']} = returnArraysFromXMLData($item);
		} else {
			if(startsWith($key, "featureSet")) {
				global $featureSets;
				foreach($featureSets as $key => $featureSet) {
					if($item == $featureSet->setName) {
						$object = $featureSet;
					}
				}
			} else if($key != 'name') {
				$object->$key = $item;
			}
		}
	}
	return $object;
}

// grab XML data
function xmldata($file) {
	global $web_root;
	$path = $web_root . "/data/" . $file . ".xml";
	
	if(file_exists($path)) {
		$xmlObject = simplexml_load_file($path);
		$array = xmlutils::xml_to_array($xmlObject);
		array_splice($array, 0, 1);
		return $array;
	} else {
		exit('Failed to open ' . $file . '.xml');
	}
}

/**
* Converts phone numbers to the formatting standard
*
* @param   String   $num   A unformatted phone number
* @return  String   Returns the formatted phone number
*/
function formatPhone($num) {
	$num = preg_replace('/[^0-9]/', '', $num);

	$len = strlen($num);
	if($len == 7) {
		$num = preg_replace('/([0-9]{3})([0-9]{4})/', '$1-$2', $num);
	} else if ($len >= 10) {
		$num = preg_replace('/([0-9]{3})([0-9]{3})([0-9]{4})/', '($1) $2-$3', $num);
	}

	return $num;
}

// get current url..
function getUrl() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
  return $url;
}

// remove first element from ALL THE ARRAYS...
function spliceArrays($array) {
	foreach($array as &$subarray) {
		if(is_array($subarray)) {
			$subarray = spliceArrays($subarray);
		}
	}
	return $array;
}

/**
 * This class contains mothods to convert a xml tree into a complex array with nested properties and to convert a complex array object into an xml tree.
 * @package xml-utils
 * @author Jeremy Pyne <jeremy.pyne@gmail.com>
 * @license CC:BY/NC/SA  http://creativecommons.org/licenses/by-nc-sa/3.0/
 * @lastupdate February 16 2010
 * @version 1.5
 */
final class xmlutils {
	// Add a levels attributes directly to the levels node instead of into an attributes array.*
	const XML_MERGE_ATTRIBUTES = 1;
	// Merge the attribures of a level into the parent level that they belong to.
	const XML_MERGE_VALUES = 2;
	// Add a levels children directly to the levels node instead of into a children array.
	const XML_MERGE_CHIILDREN = 4;
	// Process value as a lone entry under their level and ignore the other attributes and children.
	const XML_VALUE_PAIRS = 8;
	// Split the value of a node into an array on newlines.
	const XML_SPLIT_VALUES = 16;
	// If a value is an array with a single item, just use the item.
	const XML_SPLIT_SHIFT = 32;
	/* This function will convert an XML tree into a multi-dimentional array.
	* @param SimpleXMLElement $xml
	* @param bitfield $ops
	* @return array
	*/
	public static function xml_to_array($xml, $ops=63) {
		// Store the name of this level.
		$level = array();
		$level["name"] = $xml->getName();
		// Grab the value of this level.
		$value = trim((string)$xml);
		// If we have a value, process it.
		if($value) {
			// Split the value into an array on newlines.
			if($ops & self::XML_SPLIT_VALUES) {
				$value = explode("\n", $value);
			}
			// If the value is an array with one item, remove the array.
			if($ops & self::XML_SPLIT_SHIFT) {
				if(sizeof($value) == 1) {
					$value = array_shift($value);
				}
			}

			// Store the value of this level.
			$level["value"] = $value;
		}
		// If this level had a value just return the name/value as an array.
		if($ops & self::XML_VALUE_PAIRS && array_key_exists("value", $level)){
			return array($level["name"] => $level["value"]);
		}

		// Loop through each atribute of this level.
		foreach($xml->attributes() as $attribute) {
			// Add each attribure directly to this level in the array.
			if($ops & self::XML_MERGE_ATTRIBUTES){
				$level[$attribute->getName()] = (string)$attribute;
				// Add all the attributes to an attributes array under this level in the array.
			} else {
				$level["attributes"][$attribute->getName()] = (string)$attribute;
			}
		}

		// Loop through each child of this level.
		foreach($xml->children() as $children) {
			// Get an array of this childs data.
			$child = self::xml_to_array($children, $ops);
			if($ops & self::XML_MERGE_VALUES) {
				// Add each child directly to this level  or to the children array of this level in the array.
					if(sizeof($child) == 1) {
						// If there is only one child then merge it up.
						if($ops & self::XML_MERGE_CHIILDREN)
							$level[array_shift(array_keys($child))] = $child[array_shift(array_keys($child))];
						else
							$level["children"][array_shift(array_keys($child))] = $child[array_shift(array_keys($child))];
					} elseif(array_key_exists("value", $child)) {
						// If there is a value key then merge it up.
						if($ops & self::XML_MERGE_CHIILDREN)
							$level[$child["name"]] = $child["value"];
						else
							$level["children"][$child["name"]] = $child["value"];
					} elseif(array_key_exists("children", $child)) {
						// If there are children, then merge them up.
						if($ops & self::XML_MERGE_CHIILDREN)
							$level[] = $child;
						else
							$level["children"][] = $child;
					} else {
						// Otherwise just assigne yourself.
						if($ops & self::XML_MERGE_CHIILDREN)
							$level[] = $child;
						else
							$level["children"][] = $child;
					}
			} else {
				$level["children"][] = $child;
			}
		}
		return $level;
	}
	/**
	* The main function for converting to an XML document.
	* Pass in a multi dimensional array and this recrusively loops through and builds up an XML document.
	*
	* @param array $data
	* @param string $rootNodeName - what you want the root node to be - defaultsto data.
	* @param SimpleXMLElement $xml - should only be used recursively
	* @return string XML
	*/
	public static function array_to_xml($data, $rootNodeName = 'data', $xml=null, $parentXml=null) {
		// turn off compatibility mode as simple xml throws a wobbly if you don't.
		if (ini_get('zend.ze1_compatibility_mode') == 1) {
			ini_set ('zend.ze1_compatibility_mode', 0);
		}
		if ($xml == null) {
			$xml = simplexml_load_string("<?xml version='1.0' encoding='utf-8'?><$rootNodeName />");
		}

		// loop through the data passed in.
		foreach($data as $key => $value)
		{
			// Create a name for this item based off the attribute name or if this is a item in an array then the parent nodes name.
			$nodeName = is_numeric($key) ? $rootNodeName . '-item' : $key;
			$nodeName = preg_replace('/[^a-z1-9_-]/i', '', $nodeName);

			// If this item is an array then we will be recursine to the logic is more complex.
			if (is_array($value)) {
				// If this node is part of an array we have to proccess is specialy.
				if (is_numeric($key)) {
					// Another exception if this is teh root node and is an array.  In this case we don't have a parent node to use so we must use the current node and not update the reference. 
					if($parentXml == null) {
						$childXml = $xml->addChild($nodeName);
						self::array_to_xml($value, $nodeName, $childXml, $xml);
						// If this is a array node then we want to add the item under the parent node instead of out current node. Also we have to update $xml to reflect the change.
					} else {
						$xml = $parentXml->addChild($nodeName);
						self::array_to_xml($value, $nodeName, $xml, $parentXml);
					}
				} else {
					// For a normal attribute node just add it to the parent node.
					$childXml = $xml->addChild($nodeName);
					self::array_to_xml($value, $nodeName, $childXml, $xml);
				}
			// If not then it is a simple value and can be directly appended to the XML tree.
			} else {
				$value = htmlentities($value);
				$xml->addChild($nodeName, $value);
			}
		}
		// Pass back as string or simple xml object.
		return $xml->asXML();
	}
}