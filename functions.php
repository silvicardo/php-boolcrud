<?php

function getThePageName(){
  return basename($_SERVER['PHP_SELF']);
}

//ROUTES FUNCTIONS

//SHOW

function getAllGuests() {

  return getResultsFromQuery('SELECT `id`, `name`, `lastname` FROM `ospiti`');
}

function getGuestById($id, $asJSON = false) {

  $query = 'SELECT `id`, `name`, `lastname` FROM `ospiti` WHERE `id` = ' . $id;

  return getResultsFromQuery($query);
}

//CREATE

function createNewGuestFrom($data) {

  $query = generateCreateQueryFrom('ospiti', $data);

  return $query;
  //return performChangesFrom($query);

}

//UPDATE

function updateGuestFrom($id, $data) {

  if (getGuestById($id) === null) {
    return null;
  }

  $query = generateUpdateQueryFrom('ospiti', $data, $id);

  return $query;
  //return performChangesFrom($query);

}

//DELETE

function deleteGuestFrom($id) {

  if (getGuestById($id) === null) {
    return null;
  }

  $query = "DELETE FROM `ospiti` WHERE `id` = $id;";

  return $query;

  //return performChangesFrom($query);

}

//DB FUNCTIONS

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

function performChangesFrom($query, $asJSON = false) {

  include 'env.php';

  $connection = new mysqli($servername, $username, $password, $dbName);

  if ($connection->connect_error) {
    $connection->close();
    if ($asJSON) {
      return json_encode(['Connection Error']);
    }
    return null;
  }

  $hasResults = $connection->query($query);

  $connection->close();

  return $hasResults;

}

function isEmptyQueryResult($result) {
  return !$result->num_rows > 0;
}

function generateCreateQueryFrom($tableName, $data) {

  $setKeyValuePairs = array_merge(['created_at' => 'NOW()', 'updated_at' => 'NOW()'], $data);

  $fieldsArray = [];
  $valuesArray = [];

  foreach ($setKeyValuePairs as $key => $value) {
    $fieldsArray[] =  "`$key`";
    $valuesArray[] = "`$value`";
  }

  $fields = implode(', ', $fieldsArray);
  $values = implode(', ', $valuesArray);

  return "INSERT INTO `$tableName` ($fields) VALUES ($values);";
}

function generateUpdateQueryFrom($tableName, $data, $id) {

  $setKeyValuePairs = ["`updated_at` = NOW()"];

  foreach ($data as $key => $value) {
    $setKeyValuePairs[] =  "`$key` = `$value`";
  }

  $set = implode(', ', $setKeyValuePairs);

  return "UPDATE `$tableName` SET ($set) WHERE `id` = $id;";
}

?>
