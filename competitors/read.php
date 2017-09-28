<?php

require_once('../config/db.php');

class Competitors {

  // database connection and table name
  private $connect;
  private $table = "competitors";

  // constructor with database connection
  public function __construct($db){
    $this->connect = $db;
  }

  // read competitors
  function read($race_id){

    // select all query
    $query = "SELECT * FROM " . $this->table . " WHERE race_id = " . $race_id;

    // prepare query statement
    $stmt = $this->connect->prepare($query);

    // execute query
    $stmt->execute();

    return $stmt;
  }
}

// initialize competitors object
$competitors = new Competitors($mysqli);

// query competitors
if(!empty($_GET['race'])){
  $stmt = $competitors->read($_GET['race']);
  $result = $stmt->get_result();
  $num = $result->num_rows;

  // check  for race records
  if($num>0){

    // products array
    $competitors_arr=array();
    $competitors_arr["records"]=array();

    // retrieve our table contents
    while ($row = $result->fetch_assoc()){
      extract($row);

      $competitor_item=array(
        "id" => $id,
        "name" => $name,
        "position" => $position,
        "race_id" => $race_id
      );

      array_push($competitors_arr["records"], $competitor_item);
    }

    echo json_encode($competitors_arr);
  }

  else{
    echo json_encode(
      array("message" => "No competitors found.")
    );
  }
}

?>