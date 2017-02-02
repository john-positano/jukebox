<?php

include 'query.php';

for ($j = 0; $j <= 10; $j++) {

	echo query("172.16.80.23", "CloudDialerReplica03", "sa", "k!p@ny52", "SELECT location FROM recording_log WHERE lead_id = '52598354'");

} 

?>
