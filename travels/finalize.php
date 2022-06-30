<html>
<head>
    <title>Home</title>
    
    
<!--    CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">

    
<!--    js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style type="text/css">
/*        BACKGROUND*/
    body{
			background: url(images/bookings1.png) no-repeat center center fixed; 
             -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
		}
    
    </style>
    </head>
    <body>
<!--        NAVBAR-->
    <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/logo3.PNG" class="logo" style="width:75px; height:40px"> Dream Tours </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="chome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bookings.php">Bookings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="previousbookings.php">Previous Bookings</a>
        </li>
                  <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout </a>
        </li>
       
      </ul>
      
    </div>
  </div>
</nav>
<!--PHP        -->
<?php
session_start();

$package_id = $_SESSION['package_id'];
$price = $_SESSION['price'];
$email_id=$_SESSION["email_id"];
        
$db=mysqli_connect('localhost','root','','travels') or die("could not connect to database");
               
?>     
              
        <div class="form">
        
        <h2>Booking</h2>
<!--        FORM-->
        <form action="finalized.php" method="post">
    <div class="mb-3">
    <label for="package_id" class="form-label">Package ID</label> <br>
        
<input type="text" name="package_id" id="package_id" value="<?php echo($package_id) ?>" readonly>
  </div>
    <div class="mb-3">
    <label for="price" class="form-label">Price</label> <br>
        
<input type="number" name="price" id="price" value="<?php echo($price) ?>" readonly>
            </div>
    <div class="mb-3">
    <label for="address" class="form-label">No of Tickets</label>
    <input type="number" class="form-control" id="no_of_tickets" name="no_of_tickets" oninput="calc()">
  </div>
 
<div class="mb-3">
    <label for="total_price" class="form-label">Total Price</label>
    <input type="number" class="form-control" id="total_price" name="total_price" readonly>
  </div>
  <br>    
            <br><?php ?>
  <button type="submit" class="btn btn-outline-light btn-lg" id="register" name="book">Confirm Booking</button>
</form> 
            </div>
    </body>
<!--    CALCULATION OF TOTAL PRICE OF 'N' TICKETS-->
<!--    JS function calc()-->
  <script>  function calc() {
  var price = document.getElementById("price").value;
  var price = parseInt(price, 10);
  var tickets = document.getElementById("no_of_tickets").value;


    var tickets = parseInt(tickets, 10);
  var total = price * tickets;
  document.getElementById("total_price").value = total;
}
      </script>

</html>