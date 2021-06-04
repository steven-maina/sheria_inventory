<?php 
//echo ("consoldata method starts");
require_once('../class/Item.php');

if(isset($_POST['data'])){
	
	
	$data = json_decode($_POST['data'], true);

	$uN = $data[0];
	$sNo = $data[1];
	$mNo = $data[2];
	$pD = $data[3];
	$caID = $data[4];
	// $eID = $data[5];
	$coID = $data[5];
	$oS = $data[6];
	$ramS = $data[7];
	$romS = $data[8];
	$roomN = $data[9];
	$mDesc = $data[10];

	echo("model number is : ".$mNo);
	echo("condition is id: ".$coID);
	echo("more description is : ".$mDesc);
	// $result = $item->insert_item($iN, $sN, $mN, $b, $a, $pD, $eID, $cID, $coID);
	$result['valid'] = $item->insert_item($uN, $sNo, $mNo, $pD, $caID, $coID, $oS, $ramS, $romS, $roomN, $mDesc);
	
	echo($result);
	if($result['valid']){
		$result['msg'] = "Item Added Successfully!";
		//swal("save successiful...", "Data sent to database", "success");
		$result['action'] = "Add Data";
		echo json_encode($result);
	}
	//echo("data method ends");
	 echo $result;
	  $result['msg']=" saving unsuccesiful";
 //swal("could not save...", "something went wrong!!", "error");
	}


$item->Disconnect();
 ?>

