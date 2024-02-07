
<?php
include 'uni_header.php'; 
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupId = $_POST['groupId'];

include 'db.php';

//write sql statement to insert data

$sql = "insert into studentsinfo(first_name, last_name, city, groupId)
        values ('$fname', '$lname', '$city', '$groupId')";

if ($conn->query($sql)===TRUE)  {
    echo "Your data was recorded";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}


include 'uni_footer.php';
?>
