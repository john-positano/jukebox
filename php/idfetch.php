<?php

$output = array();

$pdo = new PDO("dblib:host=172.16.80.23", "sa", "k!p@ny52");

$stmt = $pdo->exec("USE CloudDialerReplica03");
$stmt2 = $pdo->query("SELECT phone_number FROM vicidial_log WHERE lead_id = '58797852'");
$result = $stmt2->fetchAll(PDO::FETCH_ASSOC);

$result2 = array_unique($result, SORT_REGULAR);

var_dump($result2);

?>
