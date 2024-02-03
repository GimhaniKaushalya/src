<?php 
$title="customer informaton";
include "header.php" ?>

<h1> Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an <h3> tag. Table & Form Guide</h1>
<section id="reservation">
        <div class="container">
          <div class="row">
            <div class="col-12 intro-text">
              <h1>Book Your Table</h1>
              <p >We invite you to be a part of our culinary journey as we redefine the dining experience in Tampere, one hot pot at a time.</p>

            </div>
          </div>
          <form method="post" action="process.php" class="row justify-content-center">
            <div class="col-lg-8">
              <div class="row g-3">
                <div class="form-group col-md-6">
                  Name: <input type="text" name="name" class="form-control" placeholder="Full name">
                </div>
                <div class="form-group col-md-6">
                  Email: <input type="email" name="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group col-md-6">
                  Date: <input type="date" name="date" class="form-control" placeholder="Date">
                </div>
                <div class="form-group col-md-6">
                  NOP: <input type="text" name="nop" class="form-control" placeholder="Number of Persons">
                </div>
                <div class="form-group col-md-12">
                  MSG: <textarea name="message" id="message" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group col-md-12 text-center">
                  <a href="#" class="btn btn-brand">Book Now</a>
                </div>
              </div>
            </div>
          </form>
        </div>

      </section>
<?php include "footer.php" ?>