<?php
/**********************
 *      File: app/mongodb.php
 *      Description: MongoDB utilities.
 *      Date: 3/4/2014
 *      Author: Jason Nugent
 */

// connect
$m = new MongoClient();
$canbydb = $m->canbytel;

function mdb_get_all() {
	global $app, $canbydb;

	// Get users //
	get_data_from_mdb('users');

	//// Getting Canby Telcom Services ///
	get_service_from_mdb('speedpackages');
	get_service_from_mdb('telephoneservices');
	get_data_from_mdb('channels');
	get_service_from_mdb('channelpackages');
	get_service_from_mdb('serviceaddons');
	get_data_from_mdb('featuresets');
	get_service_from_mdb('bundles');
	get_service_from_mdb('promos');

	/// Getting Canbytel.com data //
	get_data_from_mdb('canbytelPages');

	/////// Getting Mt Angel Services /////
	// get_service_from_mdb('mta_speedpackages', true);
	// get_service_from_mdb('mta_serviceaddons', true);
	// get_service_from_mdb('mta_telephoneservices', true);
	// get_service_from_mdb('mta_longdistanceservices', true);
	// get_service_from_mdb('mta_callingfeatures', true);
	// get_service_from_mdb('mta_telephoneaddons', true);
	// get_service_from_mdb('mta_bundles', true);
	// get_service_from_mdb('mta_bundleaddons', true);
	//get_data_from_mdb('mta_promos');

	/// Getting other data sets //
	get_data_from_mdb('ctaservicecounts');
	get_data_from_mdb('admin_logs');

	/////////////// Files Data ////////////////
	get_data_from_mdb('prod_media');
	// Getting all the tags
	foreach($app['prod_media'] as $key => $file) {
		if($file['tags']) {
			foreach($file['tags'] as $ki => $tag) {
				$app['all-tags'][$tag]['files'][] = $key;
			}
		}
	}
}

// put all objects into mongo db.
function mdb_insert_all() {
	//global app object
	global $app;

	foreach($app as $key => $item) {
		if(is_array($item) and !startsWith($key, "_") and 
			$key != "lookup" and $key != "services" and 
			$key != "pages" and $key != "page_lst") {
			insert_data_mdb($item, $key);
		}
	}
}

// Getting non-service obj from mongo db. put's it into global app obect and lookup array.
function get_data_from_mdb($dataname) {
	global $app, $canbydb;

	// Get cursor for specific service in database
	$cursor = $canbydb->$dataname->find();
	foreach($cursor as $key => $object) {
		$collection = $object;
	}

	if($collection) {
		foreach($collection as $key => $item) {
			if($key !== "_id") {
				$app[$dataname][$key] = $item;
				if(empty($app['lookup'][$key])) {
					//$app['lookup'][$key] = $item;
				} else {
					//$app['lookup'][$key."-alt"] = $item;
				}
			}
		}
		return true;
	} else {
		return false;
	}
}

// Getting service obj from mongo db. put's it into global app obect and service list and lookup array. mta variable sets the corresponding service list.
function get_service_from_mdb($servicename, $mta = false) {
	global $app, $canbydb;

	// Get cursor for specific service in database
	$cursor = $canbydb->$servicename->find();
	foreach($cursor as $key => $object) {
		$collection = $object;
	}

	// Flag for adding to Mt. Angel Services list
	if($mta) {
		$serviceslist = 'mta_services';
	} else {
		$serviceslist = 'services';
	}

	foreach($collection as $key => $service) {
		if($key != "_id") {
			$app[$servicename][$key] = $service;
			if(empty($app[$serviceslist][$key])) {
				$app[$serviceslist][$key] = $service;
				//$app['lookup'][$key] = $service;
			} else {
				$app[$serviceslist][$key."-alt"] = $service;
				//$app['lookup'][$key."-alt"] = $service;
			}
		}
	}
}

// Insert data into mongo db. $dataobject = data to be inserted. $name is the name of the collection in the mongo db.
function insert_data_mdb($dataobject, $name) {
	global $canbydb;
	$db_object = $canbydb->$name;
	if(!empty($dataobject)) {
		$db_object->insert($dataobject);
	}
}

function mdb_drop_all() {
	//global mongodb object
	global $canbydb;

	$db_bundles = $canbydb->bundles;
	$db_bundles->drop();

	$db_cyclebanners = $canbydb->cyclebanners;
	$db_cyclebanners->drop();

	$db_telephoneservices = $canbydb->telephoneServices;
	$db_telephoneservices->drop();

	$db_pages = $canbydb->canbytelPages;
	$db_pages->drop();

	$db_movies = $canbydb->movies;
	$db_movies->drop();

	$db_channels = $canbydb->channels;
	$db_channels->drop();

	$db_channelpackages = $canbydb->channelPackages;
	$db_channelpackages->drop();

	$db_speedpackages = $canbydb->speedPackages;
	$db_speedpackages->drop();

	$db_featuresets = $canbydb->featureSets;
	$db_featuresets->drop();

	$db_serviceaddons = $canbydb->serviceAddons;
	$db_serviceaddons->drop();

	$db_employment = $canbydb->employment;
	$db_employment->drop();

	$db_newsfeed = $canbydb->newsfeed;
	$db_newsfeed->drop();

	$db_amp_history = $canbydb->AMPHistory;
	$db_amp_history->drop();
}

?>