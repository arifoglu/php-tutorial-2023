<?php
// header('Content-Type: text/xml');

// Insert to the StudentDB class
require_once('StudentDB.php');

/*
$dale_cooper = array("Dale", "Cooper", "123 Main St","Seattle", "Washington");

// Define that all data will be between 2 <student> tags </student>
$xml = new SimpleXMLElement("<student />");

// Get each piece of data from the array and put it between <data> tags
foreach($dale_cooper as $info){
    $xml->addChild("data", $info);
}

// Generate a DOM document we can style
// A DOM Document represents an entire XML document
$dom = dom_import_simplexml($xml)->ownerDocument;

// State we want the data to be indented
$dom->formatOutput = true;
echo $dom->saveXML();

*/


require_once("config.php");
// Check the connection
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


// Query retrieves the student data
$query = "SELECT * FROM students WHERE student_id = 1";

// Will hold all students retreived
$student_array = array();
if($result = $dbc->query($query)){

    while ($obj = $result->fetch_object()){
        $temp_student = new StudentDB($obj->first_name,
        $obj->last_name, $obj->email, $obj->street,
        $obj->city, $obj->state, $obj->zip, $obj->phone,
        $obj->birth_date, $obj->sex, $obj->date_entered,
        $obj->lunch_cost, $obj->student_id);
        $student_array[] = $temp_student;
    }
}

echo '<?xml version="1.0" encoding="UTF-8" ?>' ;

echo '<students>';
// Cycle through all the students and print them surrounded by tags
foreach($student_array[0] as $key=>$value){
    echo '<' . $key . '>' . $value . '</' . $key . '>';
}
echo '</students>';



?>