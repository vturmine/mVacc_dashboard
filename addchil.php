
<?php
/*********** Adding new child ***************/
setlocale(LC_TIME, "en_EN");
//if(!empty($_REQUEST['action_add']) && isset($_REQUEST['action_add'])) {
if ($_SERVER['REQUEST_METHOD'] === 'GET') {	
	
	// connection to database
	require_once("inc/nix.php");
	// $val variable label
	$uuid         = $_GET['uuid'];
        $under5_id   = $_GET['under5_id']; 
        $birth       = $_GET['birth'];
        $dob         = $_GET['dob'];
        $sex         = $_GET['sex'];
        $province    = $_GET['province'];
        $district    = $_GET['district'];
        $health_facility    = $_GET['health_facility'];
        $location    = $_GET['location'];
        $chw_phone    = $_GET['chw_phone'];
        $mother_phone    = $_GET['mother_phone'];
        $zone    = $_GET['zone'];
        $id    = $_GET['id'];
	

	$affectedRows = $connection->exec("INSERT INTO zambia_children(uuid, under5_id, dob, sex, province, district, health_facility, location, chw_phone, mother_phone, zone, Birth, id) VALUES('" . $uuid . "', '" . $under5_id . "', '" . $dob . "', '" . $sex . "' , '" . $province . "' , '" . $district . "', '" . $health_facility . "' , '" . $location . "' , '" . $chw_phone . "' , '" . $mother_phone . "' , '" . $zone . "' , '" . $birth . "' , '" . $id . "')") or die(print_r($connection->errorInfo(), true));


	// we assume that search result has no matching value in db by storing false in $data['valid']
	if($affectedRows) 
		$data = array("added" => "true");
	else
		$data = array("added" => "false");	
	// convert the array to JSON
	echo json_encode($data);	
}else {
	$data = array("error" => "Unauthorized access", "added" => "false");
	echo json_encode($data);
}

?>