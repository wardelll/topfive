<?php

require_once('config/db.php');

class Race {

    // database connection and table name
    private $connect;
    private $table = "races";

    // constructor with database connection
    public function __construct($db){
        $this->connect = $db;
    }

    // read races
    function read(){

        // select all query
        $query = "SELECT * FROM " . $this->table . " WHERE start_time > NOW() ORDER BY start_time LIMIT 5 ";

        // prepare query statement
        $stmt = $this->connect->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
}

// initialize race object
$race = new Race($mysqli);

// query races
$stmt = $race->read();
$result = $stmt->get_result();
$num = $result->num_rows;

// check  for race records
if($num>0){
 
    // products array
    $races_arr=array();
    $races_arr["records"]=array();
 
    // retrieve table contents
    while ($row = $result->fetch_assoc()){
        extract($row);
      
      $start_time = date_create($start_time);
      $start_time = date_format($start_time, 'Y/m/d H:i:s');
 
        $race_item=array(
            "id" => $id,
            "name" => $name,
            "type" => $type,
            "start_time" => $start_time,
            "meeting_id" => $meeting_id
        );
 
        array_push($races_arr["records"], $race_item);
    }
 
    echo json_encode($races_arr);
}
 
else{
    echo json_encode(
        array("message" => "No races found.")
    );
}

?>