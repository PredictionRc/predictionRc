<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #000000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.divcenter {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}


img.avatar {
  width: 40%;
  border-radius: 50%;
}
img.header {
  width: 40%;
  border-radius: 50%;
  margin-left: auto;
  margin-right: auto;
}

.adcontainer {
  height: 100px;
  width: 100%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

.bg {
  /* The image used */
  background-color: #727171;
  /* Full height */
  height: 100%;
  width: 100%;

}

.p1 {
  font-family: "Fantasy", "Courier New", monospace;
  font-weight: bold;
  font-size: 24px;
  max-width: 100%;
  margin: 10px;
  word-wrap: break-word;

}

.responsive {
  width: 100%;
  height: 50%;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

</style>
</head>
<body class="bg">
  <div class="divcenter">
    <img src="image/indexLogo.jpg" alt="Avatar"  class="avatar">
    <?php
  session_start();
  // Check if the user is logged in
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
      // If logged in, display logout link
      echo '<a href="logout.php">Logout</a>';
  } else {
      // If not logged in, display login link
      echo '<a href="index.html">Login</a>';
  }
  ?>
  </div>

  <div>
    <table style="width:100%">
      <tr>
       <img src="image/addSale.jpg" alt="Advertising space for Rent" class="adcontainer" id="adImage">
      </tr>
    </table>
  </div>

<div class="divcenter">
  <p class="p1">Up coming races!</p>
</div>

<form action="entry_off_nitro.php" class="inline">
    <button class="float-left submit-button" >1/8th scale races</button>
</form>

<form action="entry_off_mod.php" class="inline">
    <button class="float-left submit-button" >1/10th scale OffRoad races</button>
</form>


<table style="width:100%">
  <tr>
    <td><img src="image/logo1.png" alt="Advertising space for Rent" class="adcontainer"></td>
    <td><img src="image/logo2.png" alt="Advertising space for Rent" class="adcontainer"></td>
    <td><img src="image/logo3.jpg" alt="Advertising space for Rent" class="adcontainer"></td>
    <td><img src="image/logo4.jpg" alt="Advertising space for Rent" class="adcontainer"></td>
  </tr>
</table>


<script src="imageRotation.js">
    function myFunction() {
      location.replace("https://www.w3schools.com")
    }
</script>

</body>
</html>