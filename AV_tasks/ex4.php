<?php 
$title = "Exercise 4: Control flow and loops";
include 'uni_header.php'; ?>

<h2>If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input).</h2>

<form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> class="col-sm-4 center"> 
    Name: <input class="form-control" type="type" name="name"; required> <br><br>
    Age: <input class="form-control" type="type" name="age"; required> <br><br>
    <input type="submit" value="Submit" class="btn">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["name"];
$age = $_POST["age"]; 

if ($age >= 18) {
    echo "Congratulations " . $name . ", You are eligible to vote.";
}
else {
    echo "Sorry " . $name . ", You need to be at least 18 to vote.";
}
}
?>

<hr>

<h2>Switch Case: Write a PHP script that gets the current month and prints one of the following responses, depending on whether its August or not:</h2>

<?php
$month = date('m');
switch ($month) {
    case 1:
        echo "Not August, this is January so I don't have any holidays.";
        break;
    case 2:
        echo "Not August, this is February so I don't have any holidays.";
        break;
    case 3:
        echo "Not August, this is March so I don't have any holidays.";
        break;
    case 4:
        echo "Not August, this is April so I don't have any holidays.";
        break;
    case 5:
        echo "It's May, so it's still holiday.";
        break;
    case 6:
        echo "It's June, so it's still holiday.";
        break;
    case 7:
        echo "It's July, so it's still holiday.";
        break;
    case 8:
        echo "It's August, so it's still holiday.";
        break;
     case 9:
        echo "Not August, this is September so I don't have any holidays.";
        break;
    case 10:
        echo "Not August, this is October so I don't have any holidays.";
        break;
    case 11:
        echo "Not August, this is November so I don't have any holidays.";
        break;
    case 12:
        echo "Not August, this is December so I don't have any holidays.";
        break;
   
}
?>

<hr>

<h2>For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h2>

<form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> class="col-sm-4 center"> 
    Number(0-10): <input class="form-control" type="type" name="number"; required> <br><br>
    <input type="submit" value="Calculate" class="btn">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$number = $_POST["number"];
echo "<h3>Multiplication Table for $number</h3>";
echo "<table border='1'>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr><td>$number x $i</td><td>=</td><td>" . ($number * $i) . "</td></tr>";
}
echo "</table>";
}
?>

<hr>

<h2>While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</h2>

<form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> class="col-sm-4 center"> 
    Number: <input class="form-control" type="type" name="count"; required> <br><br>
    <input type="submit" value="Count" class="btn">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$count = $_POST["count"];
for ($x = 1; $x <= $count; $x++) {
    echo $x. ", ";
}
echo "</ul>";
}
?>


<hr>

<h2>Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript").</h2>

<?php
    $myarray = array("HTML", "CSS", "PHP", "JavaScript");

    echo "<h3>Array Elements:</h3>";
    echo "<ul>";
    foreach ($myarray as $element) {
        echo "<li>$element</li>";
    }
    echo "</ul>";
    ?>

<?php include 'uni_footer.php'; ?>