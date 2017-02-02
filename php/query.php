<?php

function query($hostname, $dbname, $username, $pw, $query) {

try {

    $dbh = new PDO ("dblib:host=$hostname;dbname=$dbname", $username, $pw);

    $stmt = $dbh->query($query);
    return $stmt->fetchAll();

  } catch (PDOException $e) {

    return "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;

  }

}

?>
