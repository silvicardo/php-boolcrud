<?php

function getThePageName(){
  return basename($_SERVER['PHP_SELF']);
}

function getResultsFromQuery($query, $asJSON = false) {

  include 'env.php';

  $connection = new mysqli($servername, $username, $password, $dbName);

  if ($connection->connect_error) {
    $connection->close();
    if ($asJSON) {
      return json_encode(['Connection Error']);
    }
    return null;
  }

  $result = $connection->query($query);

  if (isEmptyQueryResult($result)) {
    $connection->close();
    if ($asJSON) {
      return json_encode(['No results']);
    }
    return null;
  }

  $outputData = [];

  while ($row = $result->fetch_assoc()) {
    $outputData[] = $row;
  }

  $connection->close();

  if ($asJSON) {
    return json_encode($outputData);
  }
  return $outputData;
}

function isEmptyQueryResult($result) {
  return !$result->num_rows > 0;
}

?>
