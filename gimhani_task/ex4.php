<?php 
$title="Exercise 4: Control flow and loops";
include "header.php"; ?>
<h1>Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. </h1>
<div class="row">
            <div class="col-12 intro-text">
              <h1>Voting Right</h1>
            </div>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
<div class="col-lg-8">
              <div class="row g-3">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="name"  placeholder="Full name" required>
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="age" placeholder="Age" required>
                </div>
          
                <div class="form-group col-md-12 text-center">
                  <input type="submit" class="btn btn-brand" value="Check Eligibility">
                </div>
              </div>
            </div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["name"];
    $age = $_POST["age"];

    // Check eligibility
    if ($age >= 18) {
        $result = "$name, you are eligible to vote!";
    } else {
        $result = "$name, sorry, you are not eligible to vote yet.";
    }

    // print the result
    echo "<p>$result</p>";
}
?>
<h1>Switch Case: Write a PHP script that gets the current month and prints one of the following responses, depending on whether it's August or not:</h1>
<?php
// Get the current month name
$currentMonth = date('F');

// Switch statement to check if it's August or not
switch ($currentMonth) {
    case 'August':
        echo "It's August, so it's still holiday.";
        break;
    default:
        echo "Not August, this is $currentMonth so I don't have any holidays.";
}
?>
<h1>For Loop: Write a PHP script that will print the multiplication table of a number </h1>
<div class="row">
            <div class="col-12 intro-text">
              <h1>Insert Number</h1>
            </div>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
<div class="col-lg-8">
              <div class="row g-3">
              
                <div class="form-group col-md-6">
                  <input type="number" class="form-control" name="number" placeholder="Insert Number" required>
                </div>
          
                <div class="form-group col-md-12 text-center">
                  <input type="submit" class="btn btn-brand" value="Submit">
                </div>
              </div>
            </div>
</form>
<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $number = $_POST["number"];

    // Validate input (ensure it is a positive integer)
    if (ctype_digit($number) && $number > 0) {
        echo "<h2>Multiplication Table for $number</h2>";

        // Print the multiplication table using a for loop
        for ($i = 1; $i <= 10; $i++) {
            $result = $number * $i;
            echo "$number x $i = $result <br>";
        }
    } else {
        echo "<p>Please enter a valid positive integer.</p>";
    }
}
?>
<h1>While Loop: Write a PHP script that will print all the numbers from 1 to n.</h1>
<div class="row">
            <div class="col-12 intro-text">
              <h1>Insert Number</h1>
            </div>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
<div class="col-lg-8">
              <div class="row g-3">
              
                <div class="form-group col-md-6">
                  <input type="number" class="form-control" name="number" placeholder="Insert Number" required>
                </div>
          
                <div class="form-group col-md-12 text-center">
                  <input type="submit" class="btn btn-brand" value="Submit">
                </div>
              </div>
            </div>
</form>
<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $number = $_POST["number"];

    // Validate input (ensure it is a positive integer)
    if (ctype_digit($number) && $number > 0) {
        echo "<h2>Numbers from 1 to $number using While Loop:</h2>";

        // Initialize a counter
        $counter = 1;

        // Print numbers using a while loop
        while ($counter <= $number) {
            echo $counter . '<br>';
            $counter++;
        }
    } else {
        echo "<p>Please enter a valid positive integer.</p>";
    }
}
?>
<h1>Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript").</h1>
<?php
$myArray = array("HTML", "CSS", "PHP", "JavaScript");

echo "<h2>Elements of the Array:</h2>";

// Using foreach loop to print each element of the array
foreach ($myArray as $element) {
    echo $element . '<br>';
}
?>


<?php include "footer.php" ;?>