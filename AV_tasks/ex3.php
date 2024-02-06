<?php 
$title = "Exercise 3: Variable, Strings & Operators";
include 'uni_header.php'; ?>
<div style="text-align:center" >
<h2>
1. Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an tag. Table & Form Guide
</h2>

<form method="post" action="process1.php" id="nameform" class="col-sm-4 center"> 
    Firstname: <input class="form-control" type="type" name="fname"; required> <br><br>
    Lastname: <input class="form-control" type="type" name="lname"; required> <br><br>
    <input type="submit" value="submit" class="btn">
</form>
</div>
<hr>
<h2>HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table in Exercise 1. If you wish, you can use the same table.</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Jojo</td>
      <td>Siva</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Abby</td>
      <td>Miller</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Terry</td>
      <td>Joe</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<hr>
<h2>String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). Join them together and print the length of the string.</h2>
<?php
$first = "Hello";
$second = "World!";
$combined = $first . " " . $second; 
?>
<?php echo $combined; ?> <br>
<?php $length = strlen($combined);
echo "The length of the string above: " . $length;
?>
<hr>
<h2>Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and an echo statement to output your answer.</h2>
<?php
$one = 298;
$two = 234;
$three = 46;
$addedup = $one + $two + $three;
echo $one . " + " . $two . " + " . $three . " = " . $addedup;
?>

<hr>
<h2>Browser Detection: Write a PHP script to detect the browser being used to view your pages. Hint: Use predefined variables: $_SERVER.</h2>

<?php
$browser = $_SERVER['HTTP_USER_AGENT'];

if (strpos($browser, 'Firefox') !== false) {
    echo "<p>You are using Firefox</p>";
} elseif (strpos($browser, 'Chrome') !== false) {
    echo "<p>You are using Chrome</p>";
} elseif (strpos($browser, 'Safari') !== false) {
    echo "<p>You are using Safari</p>";
} elseif (strpos($browser, 'Edge') !== false) {
    echo "<p>You are using Microsoft Edge</p>";
} elseif (strpos($browser, 'Opera') !== false) {
    echo "<p>You are using Opera</p>";
} else {
    echo "<p>We couldn't determine your browser</p>";
}
?>

<hr>
<h2>File Modification Time: Write a PHP script in the footer section of your universal footer to display the last modification time of a file. Hint: Use predefined variable $_SERVER, basename function  to get the filename , filetime function to get the last modified time & date function to print the date and time</h2>
<?php include 'uni_footer.php'; ?>