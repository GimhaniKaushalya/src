<?php 
$title="Exercise 3: Variable, Strings & Operators";
include "header.php"; ?>

<h1> Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an <h3> tag. Table & Form Guide</h1>
<section id="reservation">
        <div class="container">
          <div class="row">
            <div class="col-12 intro-text">
              <h1>Customer's name</h1>
              <p >We invite you to be a part of our culinary journey as we redefine the dining experience in Tampere, one hot pot at a time.</p>

            </div>
          </div>
          <form method="post" action="process.php" class="row justify-content-center">
            <div class="col-lg-8">
              <div class="row g-3">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="fname" required>
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="lname" required>
                </div>
          
                <div class="form-group col-md-12 text-center">
                  <input type="submit" class="btn btn-brand" value="submit">
                </div>
              </div>
            </div>
          </form>
        </div>

      </section>

<h1>HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table in Exercise 1. If you wish, you can use the same table. BootStrap Cheatsheet</h1>
      <!-- .table-{color} can be use with .table, thead, tbody, tr, th and td -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">Class</th>
      <th scope="col">price for person</th>
      <th scope="col">price for family</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Default</th>
      <td>2e</td>
      <td>16e</td>
    </tr>
    <tr class="table-primary">
      <th scope="row">.table-primary</th>
      <td>4e</td>
      <td>20e</td>
    </tr>
    <tr class="table-secondary">
      <th scope="row">.table-secondary</th>
      <td>8e</td>
      <td>24e</td>
    </tr>
    <tr class="table-success">
      <th scope="row">.table-success</th>
      <td>10e</td>
      <td>30e</td>
    </tr>
    <tr class="table-danger">
      <th scope="row">.table-danger</th>
      <td>12e</td>
      <td>35e</td>
    </tr>
  
  </tbody>
</table>
<h1>String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). Join them together and print the length of the string.</h1>

<?php
$str1 = "Hello";
$str2 = "World";

echo $str1 ." ".$str2;


?>
<h1>Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and an echo statement to output your answer.</h1>
<?php
$num1 = 298;
$num2 = 234;
$num3 = 46;
$sum = $num1 + $num2 + $num3;
echo "The sum of $num1, $num2, and $num3 is: $sum";
?>
<h1>Browser Detection: Write a PHP script to detect the browser being used to view your pages. Hint: Use predefined variables: $_SERVER).</h1>
<?php
echo $_SERVER['SERVER_NAME'];
?>

<?php include "footer.php" ;?>


<?php
echo $_SERVER['REQUEST_TIME'];
?>








