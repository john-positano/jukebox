<?php

include 'query.php';
$phn = $_REQUEST['phn'];
$id = $_REQUEST['id'];

if (isset($phn)) {

$result = [];

$step1 = query("172.16.80.23", "CloudDialerReplica03", "sa", "k!p@ny52", "SELECT lead_id FROM vicidial_log WHERE phone_number = '" . $phn . "'");

$step2 = [];

for ($i = 0; $step1[$i]; $i++) {

$step2[$i] = $step1[$i][0];

}

$step4 = [];

$step3 = array_unique($step2);

for ($j = 0; $step2[$j]; $j++) {

if ($step3[$j]) {

array_push($step4, $step3[$j]);

}

}

for ($k = 0; $step4[$k]; $k++) {

	$querystring = "SELECT location, end_time FROM recording_log WHERE lead_id = '" . $step4[$k] ."'";
	$holder2 = query("172.16.80.23", "CloudDialerReplica03", "sa", "k!p@ny52", $querystring);

	for ($l = 0; $holder2[$l]; $l++) {

		array_push($result, $holder2[$l]);

	}

}






$step1 = query("172.16.80.23", "CloudDialerReplica02", "sa", "k!p@ny52", "SELECT lead_id FROM vicidial_log WHERE phone_number = '" . $phn . "'");

$step2 = [];

for ($i = 0; $step1[$i]; $i++) {

$step2[$i] = $step1[$i][0];

}

$step4 = [];

$step3 = array_unique($step2);

for ($j = 0; $step2[$j]; $j++) {

if ($step3[$j]) {

array_push($step4, $step3[$j]);

}

}

for ($k = 0; $step4[$k]; $k++) {

	$querystring = "SELECT location, end_time FROM recording_log WHERE lead_id = '" . $step4[$k] ."'";
	$holder2 = query("172.16.80.23", "CloudDialerReplica02", "sa", "k!p@ny52", $querystring);

	for ($l = 0; $holder2[$l]; $l++) {

		array_push($result, $holder2[$l]);

	}

}










$step1 = query("172.16.80.23", "CloudDialerReplica01", "sa", "k!p@ny52", "SELECT lead_id FROM vicidial_log2 WHERE phone_number = '" . $phn . "'");

$step2 = [];

for ($i = 0; $step1[$i]; $i++) {

$step2[$i] = $step1[$i][0];

}

$step4 = [];

$step3 = array_unique($step2);

for ($j = 0; $step2[$j]; $j++) {

if ($step3[$j]) {

array_push($step4, $step3[$j]);

}

}

for ($k = 0; $step4[$k]; $k++) {

	$querystring = "SELECT location, end_time FROM recording_log WHERE lead_id = '" . $step4[$k] ."'";
	$holder2 = query("172.16.80.23", "CloudDialerReplica01", "sa", "k!p@ny52", $querystring);

	for ($l = 0; $holder2[$l]; $l++) {

		array_push($result, $holder2[$l]);

	}

}










$step1 = query("172.16.80.23", "CloudDialerReplica04", "sa", "k!p@ny52", "SELECT lead_id FROM vicidial_log WHERE phone_number = '" . $phn . "'");

$step2 = [];

for ($i = 0; $step1[$i]; $i++) {

$step2[$i] = $step1[$i][0];

}

$step4 = [];

$step3 = array_unique($step2);

for ($j = 0; $step2[$j]; $j++) {

if ($step3[$j]) {

array_push($step4, $step3[$j]);

}

}

for ($k = 0; $step4[$k]; $k++) {

	$querystring = "SELECT location, end_time FROM recording_log WHERE lead_id = '" . $step4[$k] ."'";
	$holder2 = query("172.16.80.23", "CloudDialerReplica04", "sa", "k!p@ny52", $querystring);

	for ($l = 0; $holder2[$l]; $l++) {

		array_push($result, $holder2[$l]);

	}

}








$step1 = query("172.16.80.50\MainSQLB", "CloudDialerReplica03", "sa", "k!p@ny52", "SELECT lead_id FROM vicidial_log WHERE phone_number = '" . $phn . "'");

$step2 = [];

for ($i = 0; $step1[$i]; $i++) {

$step2[$i] = $step1[$i][0];

}

$step4 = [];

$step3 = array_unique($step2);

for ($j = 0; $step2[$j]; $j++) {

if ($step3[$j]) {

array_push($step4, $step3[$j]);

}

}

for ($k = 0; $step4[$k]; $k++) {

	$querystring = "SELECT location, end_time FROM recording_log WHERE lead_id = '" . $step4[$k] ."'";
	$holder2 = query("172.16.80.50\MainSQLB", "CloudDialerReplica03", "sa", "k!p@ny52", $querystring);

	for ($l = 0; $holder2[$l]; $l++) {

		array_push($result, $holder2[$l]);

	}

}







$step5 = array_unique($result, SORT_REGULAR);

echo json_encode($step5, JSON_FORCE_OBJECT);

} 





































if (isset($id)) {

$result = [];



	$querystring = "SELECT location, end_time FROM recording_log WHERE lead_id = '" . $id ."'";
	$holder2 = query("172.16.80.23", "CloudDialerReplica03", "sa", "k!p@ny52", $querystring);

	for ($l = 0; $holder2[$l]; $l++) {

		array_push($result, $holder2[$l]);

	}









	$querystring = "SELECT location, end_time FROM recording_log WHERE lead_id = '" . $id ."'";
	$holder2 = query("172.16.80.23", "CloudDialerReplica02", "sa", "k!p@ny52", $querystring);

	for ($l = 0; $holder2[$l]; $l++) {

		array_push($result, $holder2[$l]);

	}













	$querystring = "SELECT location, end_time FROM recording_log WHERE lead_id = '" . $id ."'";
	$holder2 = query("172.16.80.23", "CloudDialerReplica01", "sa", "k!p@ny52", $querystring);

	for ($l = 0; $holder2[$l]; $l++) {

		array_push($result, $holder2[$l]);

	}














	$querystring = "SELECT location, end_time FROM recording_log WHERE lead_id = '" . $id ."'";
	$holder2 = query("172.16.80.23", "CloudDialerReplica04", "sa", "k!p@ny52", $querystring);

	for ($l = 0; $holder2[$l]; $l++) {

		array_push($result, $holder2[$l]);

	}











	$querystring = "SELECT location, end_time FROM recording_log WHERE lead_id = '" . $id ."'";
	$holder2 = query("172.16.80.50\MainSQLB", "CloudDialerReplica03", "sa", "k!p@ny52", $querystring);

	for ($l = 0; $holder2[$l]; $l++) {

		array_push($result, $holder2[$l]);

	}






$step5 = array_unique($result, SORT_REGULAR);

echo json_encode($step5, JSON_FORCE_OBJECT);

}














?>
