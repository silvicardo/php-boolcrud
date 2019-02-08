<?php

//ROUTES FUNCTIONS

//SHOW

function getAllGuests() {

  return getResultsFromQuery('SELECT `id`, `name`, `lastname` FROM `ospiti`');
}

function getGuestById($id, $asJSON = false) {

  $query = 'SELECT * FROM `ospiti` WHERE `id` = ' . $id;

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

 ?>
