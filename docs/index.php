<?php
$curPage = "docs";

include '../app/init_page.php';

if(isset($_GET['f'])) {
	$i = $_GET['f'];
	$file = $app['prod_media'][$i];
	$smarty->assign('file', $file);
}

if($_GET['upload'] == 1) {
	$smarty->assign('upload', 'true');
}

if($_POST['submit-button'] == "upload-doc") {

	if($_POST['file-type'] == "file-document") {
		$type = "doc";
	} else {
		$type = "img";
	}

	// Upload the file.
	$file_obj = upload_file($type);

	if($file_obj) {
		// Get metadata and add it to the database.
		$file_obj['company']  = $_POST['input-company'];
		$file_obj['category'] = $_POST['input-category'];
		$file_obj['services'] = $_POST['input-services'];
		$file_obj['tags']     = $_POST['file-tags'];
		if($app['prod_media'][$file_obj['prefix']]) {
			$app['_success'] .= "Updated file <strong>".$file_obj['name']."</strong>.<br>";
		} else {
			$app['_success'] .= "Added file <strong>".$file_obj['name']."</strong>.<br>";
		}

		// Insert into app opject and put into mongo db.
		$app['prod_media'][] = $file_obj;
		end($app['prod_media']);
		$last_id = key($app['prod_media']);
		$app['prod_media'][$last_id]['id'] = $last_id;
		mdb_insert_all();
	}
	safe_redirect();

} else if($_POST['submit-button'] == "update-file") {
	k($file);
	k($_POST);

	if($file_obj) {
		// Get metadata and add it to the database.
		$file_obj['company']  = $_POST['input-company'];
		$file_obj['category'] = $_POST['input-category'];
		$file_obj['services'] = $_POST['input-services'];
		$file_obj['tags']     = $_POST['file-tags'];
		if($app['prod_media'][$file_obj['prefix']]) {
			$app['_success'] .= "Updated file <strong>".$file_obj['name']."</strong>.<br>";
		} else {
			$app['_success'] .= "Added file <strong>".$file_obj['name']."</strong>.<br>";
		}

		// Insert into app opject and put into mongo db.
		//$app['prod_media'][$file_obj['prefix']] = $file_obj;
		//mdb_insert_all();
	}
	//safe_redirect();

} else if($_POST['action'] == "delete-file") {
	$key = $_POST['fileKey'];
	$app['_warning'] .= "Deleted file " . $app['prod_media'][$key]['name'] . "<br>";

	unset($app['prod_media'][$key]);
	$db_media = $canbydb->prod_media;
	$db_media->drop();
	mdb_insert_all();
	safe_redirect();
}

// Drop all media.
// unset($app['prod_media'][$key]);
// $db_media = $canbydb->prod_media;
// $db_media->drop();

include '../app/display_begin.php';

$smarty->display('page.tpl');

include '../app/end_page.php';

// k($app['prod_media']);
// k($app['services']);


?>