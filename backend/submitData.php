<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covid";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST) && $_POST != '') {
    $post = $_POST;
    $myarray = array();
    foreach ($_POST as $key => $value) {
        if ($key == 'countryVisited') {
            $myarray['countryVisited'] = implode(", ", $post['countryVisited']);
        } else {
            $myarray[$key] = (isset($value) && $value != '' ? $value : '');
        }
    }
    insert($conn, 'covid_data', $myarray);
}
function insert($conn, $table_name, $data)
{
    $key = array_keys($data);
    $val = array_values($data);
    $sql = "insert into $table_name(" . implode(', ', $key) . ") values('" . implode("','", $val) . "')";
    if ($conn->query($sql) === TRUE) {
        echo 1;
    } else {
        echo 2;
//        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>