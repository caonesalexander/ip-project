<?php
include 'connection.php';
?>



<html>

<head>


  <link rel="shortcut icon" type="image/jpg" href="tech.png" />
  <link rel="stylesheet" href="/IP-PROJECT/ip-project/placeorder.css">
  <script src="js/get.js" defer></script>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

  <nav class="navbar">
    <div class="navbar_container">
      <a href="about.html"><img src="technologo.png" id="navbar_logo"></a>
      <div class="navbar_toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
      <ul class="navbar_menu">
        <li class="navbar_item">
          <a href="index.html" class="navbar_links">Products</a>
        </li>
        <li class="navbar_item">
          <a href="about.html" class="navbar_links">About</a>
        </li>
        <li class="navbar_item">
          <a href="contact.html" class="navbar_links">Contact Us</a>
        </li>
        <li class="navbar_btn">
          <a href="signup.html" class="button">Sign Up</a>
        </li>
        <li class="navbar_btn">
          <a href="login.html" class="button">Login</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="title">
      <h2>Checkout</h2>
    </div>
    <div class="d-flex">
      <form action="" method="post">
        <h1>Delivery Address</h1>
        <label>
          <span>Street Address <span class="required" require>*</span></span>
          <input type="text" name="houseadd" id="houseadd" placeholder="House number and street name">
        </label>
        <label>
          <span>Town / City <span class="required">*</span></span>
          <input type="text" name="City" id="City">
        </label>
        <label>
          <span>Postcode / ZIP <span class="required">*</span></span>
          <input type="text" name="Zip" id="Zip">
        </label>
        <h1>Order</h1>
        <label>

          <span>Product ID <span class="required">*</span></span>
          <input type="text" name="POSTID" id="POSTID" value="<?php if (isset($_POST["insert"])) {
                                                                echo "1";
                                                              } elseif (isset($_POST["insert2"])) {
                                                                echo "2";
                                                              } elseif (isset($_POST["insert3"])) {
                                                                echo "3";
                                                              } elseif (isset($_POST["insert4"])) {
                                                                echo "4";
                                                              } elseif (isset($_POST["insert5"])) {
                                                                echo "5";
                                                              } elseif (isset($_POST["insert6"])) {
                                                                echo "6";
                                                              } elseif (isset($_POST["insert7"])) {
                                                                echo "7";
                                                              } elseif (isset($_POST["insert8"])) {
                                                                echo "8";
                                                              } elseif (isset($_POST["insert9"])) {
                                                                echo "9";
                                                              } elseif (isset($_POST["insert10"])) {
                                                                echo "10";
                                                              } elseif (isset($_POST["insert11"])) {
                                                                echo "11";
                                                              } elseif (isset($_POST["insert12"])) {
                                                                echo "12";
                                                              }
                                                              ?>">
        </label>

        <label>
          <span>Product Name <span class="required">*</span></span>
          <input type="text" name="Product" id="Product" disabled value="<?php if (isset($_POST["insert"])) {
                                                                            $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=1");
                                                                            while ($row = mysqli_fetch_array($retrieve)) {
                                                                              echo $row["prod_name"];
                                                                            }
                                                                          } elseif (isset($_POST["insert2"])) {
                                                                            $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=2");
                                                                            while ($row = mysqli_fetch_array($retrieve)) {
                                                                              echo $row["prod_name"];
                                                                            }
                                                                          } elseif (isset($_POST["insert3"])) {
                                                                            $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=3");
                                                                            while ($row = mysqli_fetch_array($retrieve)) {
                                                                              echo $row["prod_name"];
                                                                            }
                                                                          } elseif (isset($_POST["insert4"])) {
                                                                            $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=4");
                                                                            while ($row = mysqli_fetch_array($retrieve)) {
                                                                              echo $row["prod_name"];
                                                                            }
                                                                          } elseif (isset($_POST["insert5"])) {
                                                                            $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=5");
                                                                            while ($row = mysqli_fetch_array($retrieve)) {
                                                                              echo $row["prod_name"];
                                                                            }
                                                                          } elseif (isset($_POST["insert6"])) {
                                                                            $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=6");
                                                                            while ($row = mysqli_fetch_array($retrieve)) {
                                                                              echo $row["prod_name"];
                                                                            }
                                                                          } elseif (isset($_POST["insert7"])) {
                                                                            $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=7");
                                                                            while ($row = mysqli_fetch_array($retrieve)) {
                                                                              echo $row["prod_name"];
                                                                            }
                                                                          } elseif (isset($_POST["insert8"])) {
                                                                            $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=8");
                                                                            while ($row = mysqli_fetch_array($retrieve)) {
                                                                              echo $row["prod_name"];
                                                                            }
                                                                          } elseif (isset($_POST["insert9"])) {
                                                                            $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=9");
                                                                            while ($row = mysqli_fetch_array($retrieve)) {
                                                                              echo $row["prod_name"];
                                                                            }
                                                                          } elseif (isset($_POST["insert10"])) {
                                                                            $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=10");
                                                                            while ($row = mysqli_fetch_array($retrieve)) {
                                                                              echo $row["prod_name"];
                                                                            }
                                                                          } elseif (isset($_POST["insert11"])) {
                                                                            $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=11");
                                                                            while ($row = mysqli_fetch_array($retrieve)) {
                                                                              echo $row["prod_name"];
                                                                            }
                                                                          } elseif (isset($_POST["insert12"])) {
                                                                            $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=12");
                                                                            while ($row = mysqli_fetch_array($retrieve)) {
                                                                              echo $row["prod_name"];
                                                                            }
                                                                          } ?>">
        </label>

        <label>
          <span>Quantity <span class="required" require>*</span></span>
          <input type="number" name="Quan" id="Quan" value="1" style="padding: 10px;">
        </label>

        <label>
          <span>Date <span class="required" require>*</span></span>
          <input type="text" name="Date" id="Date">
        </label>

        <h1>Other Details</h1>
        <label>
          <span class="fname">First Name <span class="required">*</span></span>
          <input type="text" name="fname" id="fname">
        </label>
        <label>
          <span class="lname">Last Name <span class="required">*</span></span>
          <input type="text" name="lname" id="lname">
        </label>
        <label>
          <span>Phone <span class="required">*</span></span>
          <input type="tel" name="Phone" id="Phone">
        </label>
        <label>
          <span>Email Address <span class="required">*</span></span>
          <input type="email" name="Email" id="Email">
        </label>
        <button class="btn" type="submit" name="buy" id="buy">Place Order</button>

      </form>

      <form action="/IP-PROJECT/ip-project/product.html">
        <div class="Yorder">
          <table>

            <?php

            error_reporting(E_ERROR | E_PARSE);
            // $retrieve2 = mysqli_query($link, "SELECT * FROM product WHERE prod_id=2");
            $id = $_POST["POSTID"];

            if (isset($_POST["buy"]) && $id == "1") {
              $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=1");
              $row = mysqli_fetch_array($retrieve);
              mysqli_query($link, "INSERT INTO `purchased` VALUES ('$row[prod_id]','$_POST[lname]', '$_POST[fname]', '$_POST[houseadd]',
  '$_POST[City]','$_POST[Zip]', '$_POST[Phone]','$_POST[Email]','$row[prod_name]','$row[price]','$_POST[Quan]', '$row[shipping_fee]')") or die(mysqli_error($link));

              $retrieve2 = mysqli_query($link, "SELECT *, (quantity * price + shipping) AS totalPayment FROM `purchased` WHERE email = '$_POST[Email]' AND prod_id = $id 
              AND lname = '$_POST[lname]'");
              $get = mysqli_fetch_array($retrieve2);

              echo "<label style='font-weight: bold; font-size: 20px; text-decoration: underline;'>";
              echo "Your Order and Information";
              echo "</label>";


              echo "<label>";
              echo "Fullname: " . $get["lname"] . " " . $get["fname"];
              echo "</label>";

              echo "<label>";
              echo "Phone #.: " . $get["phoneNo."];
              echo "</label>";

              echo "<label>";
              echo "Email : " . $get["email"];
              echo "</label>";

              echo "<label>";
              echo "Home Address: " . $get["homeAdd"] . " " . $get["town"] . " " . $get["zip"];
              echo "</label>";

              echo "<label>";
              echo "Product Name: " . $get["prodName"];
              echo "</label>";

              echo "<label>";
              echo "Price: $" . $get["price"];
              echo "</label>";

              echo "<label>";
              echo "Quantity: " . $get["quantity"];
              echo "</label>";
              echo "<label>";
              echo "Shipping Fee: " . $get["shipping"];
              echo "</label>";
              echo "<label>";
              echo "Total Payment: $" . $get["totalPayment"];
              echo "</label>";

              echo "<button style='margin-left: 20%;'>";
              echo "Back to Products";
              echo "</button>";
            } elseif (isset($_POST["buy"]) && $id == "2") {
              $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=2");
              $row = mysqli_fetch_array($retrieve);
              mysqli_query($link, "INSERT INTO `purchased` VALUES ('$row[prod_id]','$_POST[lname]', '$_POST[fname]', '$_POST[houseadd]',
  '$_POST[City]','$_POST[Zip]', '$_POST[Phone]','$_POST[Email]','$row[prod_name]','$row[price]','$_POST[Quan]', '$row[shipping_fee]')") or die(mysqli_error($link));

              $retrieve2 = mysqli_query($link, "SELECT *, (quantity * price + shipping) AS totalPayment FROM `purchased` WHERE email = '$_POST[Email]' AND prod_id = $id 
              AND lname = '$_POST[lname]'");
              $get = mysqli_fetch_array($retrieve2);

              echo "<label style='font-weight: bold; font-size: 20px; text-decoration: underline;'>";
              echo "Your Order and Information";
              echo "</label>";


              echo "<label>";
              echo "Fullname: " . $get["lname"] . " " . $get["fname"];
              echo "</label>";

              echo "<label>";
              echo "Phone #.: " . $get["phoneNo."];
              echo "</label>";

              echo "<label>";
              echo "Email : " . $get["email"];
              echo "</label>";

              echo "<label>";
              echo "Home Address: " . $get["homeAdd"] . " " . $get["town"] . " " . $get["zip"];
              echo "</label>";

              echo "<label>";
              echo "Product Name: " . $get["prodName"];
              echo "</label>";

              echo "<label>";
              echo "Price: $" . $get["price"];
              echo "</label>";

              echo "<label>";
              echo "Quantity: " . $get["quantity"];
              echo "</label>";
              echo "<label>";
              echo "Shipping Fee: " . $get["shipping"];
              echo "</label>";
              echo "<label>";
              echo "Total Payment: $" . $get["totalPayment"];
              echo "</label>";

              echo "<button style='margin-left: 20%;'>";
              echo "Back to Products";
              echo "</button>";
            } elseif (isset($_POST["buy"]) && $id == "3") {
              $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=3");
              $row = mysqli_fetch_array($retrieve);
              mysqli_query($link, "INSERT INTO `purchased` VALUES ('$row[prod_id]','$_POST[lname]', '$_POST[fname]', '$_POST[houseadd]',
  '$_POST[City]','$_POST[Zip]', '$_POST[Phone]','$_POST[Email]','$row[prod_name]','$row[price]','$_POST[Quan]', '$row[shipping_fee]')") or die(mysqli_error($link));

              $retrieve2 = mysqli_query($link, "SELECT *, (quantity * price + shipping) AS totalPayment FROM `purchased` WHERE email = '$_POST[Email]' AND prod_id = $id  
              AND lname = '$_POST[lname]'");
              $get = mysqli_fetch_array($retrieve2);

              echo "<label style='font-weight: bold; font-size: 20px; text-decoration: underline;'>";
              echo "Your Order and Information";
              echo "</label>";


              echo "<label>";
              echo "Fullname: " . $get["lname"] . " " . $get["fname"];
              echo "</label>";

              echo "<label>";
              echo "Phone #.: " . $get["phoneNo."];
              echo "</label>";

              echo "<label>";
              echo "Email : " . $get["email"];
              echo "</label>";

              echo "<label>";
              echo "Home Address: " . $get["homeAdd"] . " " . $get["town"] . " " . $get["zip"];
              echo "</label>";

              echo "<label>";
              echo "Product Name: " . $get["prodName"];
              echo "</label>";

              echo "<label>";
              echo "Price: $" . $get["price"];
              echo "</label>";

              echo "<label>";
              echo "Quantity: " . $get["quantity"];
              echo "</label>";
              echo "<label>";
              echo "Shipping Fee: " . $get["shipping"];
              echo "</label>";
              echo "<label>";
              echo "Total Payment: $" . $get["totalPayment"];
              echo "</label>";

              echo "<button style='margin-left: 20%;'>";
              echo "Back to Products";
              echo "</button>";
            } elseif (isset($_POST["buy"]) && $id == "4") {
              $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=4");
              $row = mysqli_fetch_array($retrieve);
              mysqli_query($link, "INSERT INTO `purchased` VALUES ('$row[prod_id]','$_POST[lname]', '$_POST[fname]', '$_POST[houseadd]',
  '$_POST[City]','$_POST[Zip]', '$_POST[Phone]','$_POST[Email]','$row[prod_name]','$row[price]','$_POST[Quan]', '$row[shipping_fee]')") or die(mysqli_error($link));

              $retrieve2 = mysqli_query($link, "SELECT *, (quantity * price + shipping) AS totalPayment FROM `purchased` WHERE email = '$_POST[Email]' AND prod_id = $id 
              AND lname = '$_POST[lname]'");
              $get = mysqli_fetch_array($retrieve2);

              echo "<label style='font-weight: bold; font-size: 20px; text-decoration: underline;'>";
              echo "Your Order and Information";
              echo "</label>";


              echo "<label>";
              echo "Fullname: " . $get["lname"] . " " . $get["fname"];
              echo "</label>";

              echo "<label>";
              echo "Phone #.: " . $get["phoneNo."];
              echo "</label>";

              echo "<label>";
              echo "Email : " . $get["email"];
              echo "</label>";

              echo "<label>";
              echo "Home Address: " . $get["homeAdd"] . " " . $get["town"] . " " . $get["zip"];
              echo "</label>";

              echo "<label>";
              echo "Product Name: " . $get["prodName"];
              echo "</label>";

              echo "<label>";
              echo "Price: $" . $get["price"];
              echo "</label>";

              echo "<label>";
              echo "Quantity: " . $get["quantity"];
              echo "</label>";
              echo "<label>";
              echo "Shipping Fee: " . $get["shipping"];
              echo "</label>";
              echo "<label>";
              echo "Total Payment: $" . $get["totalPayment"];
              echo "</label>";

              echo "<button style='margin-left: 20%;'>";
              echo "Back to Products";
              echo "</button>";
            } elseif (isset($_POST["buy"]) && $id == "5") {
              $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=5");
              $row = mysqli_fetch_array($retrieve);
              mysqli_query($link, "INSERT INTO `purchased` VALUES ('$row[prod_id]','$_POST[lname]', '$_POST[fname]', '$_POST[houseadd]',
  '$_POST[City]','$_POST[Zip]', '$_POST[Phone]','$_POST[Email]','$row[prod_name]','$row[price]','$_POST[Quan]', '$row[shipping_fee]')") or die(mysqli_error($link));

              $retrieve2 = mysqli_query($link, "SELECT *, (quantity * price + shipping) AS totalPayment FROM `purchased` WHERE email = '$_POST[Email]' AND prod_id = $id 
              AND lname = '$_POST[lname]'");
              $get = mysqli_fetch_array($retrieve2);

              echo "<label style='font-weight: bold; font-size: 20px; text-decoration: underline;'>";
              echo "Your Order and Information";
              echo "</label>";


              echo "<label>";
              echo "Fullname: " . $get["lname"] . " " . $get["fname"];
              echo "</label>";

              echo "<label>";
              echo "Phone #.: " . $get["phoneNo."];
              echo "</label>";

              echo "<label>";
              echo "Email : " . $get["email"];
              echo "</label>";

              echo "<label>";
              echo "Home Address: " . $get["homeAdd"] . " " . $get["town"] . " " . $get["zip"];
              echo "</label>";

              echo "<label>";
              echo "Product Name: " . $get["prodName"];
              echo "</label>";

              echo "<label>";
              echo "Price: $" . $get["price"];
              echo "</label>";

              echo "<label>";
              echo "Quantity: " . $get["quantity"];
              echo "</label>";
              echo "<label>";
              echo "Shipping Fee: " . $get["shipping"];
              echo "</label>";
              echo "<label>";
              echo "Total Payment: $" . $get["totalPayment"];
              echo "</label>";

              echo "<button style='margin-left: 20%;'>";
              echo "Back to Products";
              echo "</button>";
            } elseif (isset($_POST["buy"]) && $id == "6") {
              $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=6");
              $row = mysqli_fetch_array($retrieve);
              mysqli_query($link, "INSERT INTO `purchased` VALUES ('$row[prod_id]','$_POST[lname]', '$_POST[fname]', '$_POST[houseadd]',
  '$_POST[City]','$_POST[Zip]', '$_POST[Phone]','$_POST[Email]','$row[prod_name]','$row[price]','$_POST[Quan]', '$row[shipping_fee]')") or die(mysqli_error($link));

              $retrieve2 = mysqli_query($link, "SELECT *, (quantity * price + shipping) AS totalPayment FROM `purchased` WHERE email = '$_POST[Email]' AND prod_id = $id 
              AND lname = '$_POST[lname]'");
              $get = mysqli_fetch_array($retrieve2);

              echo "<label style='font-weight: bold; font-size: 20px; text-decoration: underline;'>";
              echo "Your Order and Information";
              echo "</label>";


              echo "<label>";
              echo "Fullname: " . $get["lname"] . " " . $get["fname"];
              echo "</label>";

              echo "<label>";
              echo "Phone #.: " . $get["phoneNo."];
              echo "</label>";

              echo "<label>";
              echo "Email : " . $get["email"];
              echo "</label>";

              echo "<label>";
              echo "Home Address: " . $get["homeAdd"] . " " . $get["town"] . " " . $get["zip"];
              echo "</label>";

              echo "<label>";
              echo "Product Name: " . $get["prodName"];
              echo "</label>";

              echo "<label>";
              echo "Price: $" . $get["price"];
              echo "</label>";

              echo "<label>";
              echo "Quantity: " . $get["quantity"];
              echo "</label>";
              echo "<label>";
              echo "Shipping Fee: " . $get["shipping"];
              echo "</label>";
              echo "<label>";
              echo "Total Payment: $" . $get["totalPayment"];
              echo "</label>";

              echo "<button style='margin-left: 20%;'>";
              echo "Back to Products";
              echo "</button>";
            } elseif (isset($_POST["buy"]) && $id == "7") {
              $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=7");
              $row = mysqli_fetch_array($retrieve);
              mysqli_query($link, "INSERT INTO `purchased` VALUES ('$row[prod_id]','$_POST[lname]', '$_POST[fname]', '$_POST[houseadd]',
  '$_POST[City]','$_POST[Zip]', '$_POST[Phone]','$_POST[Email]','$row[prod_name]','$row[price]','$_POST[Quan]', '$row[shipping_fee]')") or die(mysqli_error($link));

              $retrieve2 = mysqli_query($link, "SELECT *, (quantity * price + shipping) AS totalPayment FROM `purchased` WHERE email = '$_POST[Email]' AND prod_id = $id 
              AND lname = '$_POST[lname]'");
              $get = mysqli_fetch_array($retrieve2);

              echo "<label style='font-weight: bold; font-size: 20px; text-decoration: underline;'>";
              echo "Your Order and Information";
              echo "</label>";


              echo "<label>";
              echo "Fullname: " . $get["lname"] . " " . $get["fname"];
              echo "</label>";

              echo "<label>";
              echo "Phone #.: " . $get["phoneNo."];
              echo "</label>";

              echo "<label>";
              echo "Email : " . $get["email"];
              echo "</label>";

              echo "<label>";
              echo "Home Address: " . $get["homeAdd"] . " " . $get["town"] . " " . $get["zip"];
              echo "</label>";

              echo "<label>";
              echo "Product Name: " . $get["prodName"];
              echo "</label>";

              echo "<label>";
              echo "Price: $" . $get["price"];
              echo "</label>";

              echo "<label>";
              echo "Quantity: " . $get["quantity"];
              echo "</label>";
              echo "<label>";
              echo "Shipping Fee: " . $get["shipping"];
              echo "</label>";
              echo "<label>";
              echo "Total Payment: $" . $get["totalPayment"];
              echo "</label>";

              echo "<button style='margin-left: 20%;'>";
              echo "Back to Products";
              echo "</button>";
            } elseif (isset($_POST["buy"]) && $id == "8") {
              $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=8");
              $row = mysqli_fetch_array($retrieve);
              mysqli_query($link, "INSERT INTO `purchased` VALUES ('$row[prod_id]','$_POST[lname]', '$_POST[fname]', '$_POST[houseadd]',
  '$_POST[City]','$_POST[Zip]', '$_POST[Phone]','$_POST[Email]','$row[prod_name]','$row[price]','$_POST[Quan]', '$row[shipping_fee]')") or die(mysqli_error($link));

              $retrieve2 = mysqli_query($link, "SELECT *, (quantity * price + shipping) AS totalPayment FROM `purchased` WHERE email = '$_POST[Email]' AND prod_id = $id 
              AND lname = '$_POST[lname]'");
              $get = mysqli_fetch_array($retrieve2);

              echo "<label style='font-weight: bold; font-size: 20px; text-decoration: underline;'>";
              echo "Your Order and Information";
              echo "</label>";


              echo "<label>";
              echo "Fullname: " . $get["lname"] . " " . $get["fname"];
              echo "</label>";

              echo "<label>";
              echo "Phone #.: " . $get["phoneNo."];
              echo "</label>";

              echo "<label>";
              echo "Email : " . $get["email"];
              echo "</label>";

              echo "<label>";
              echo "Home Address: " . $get["homeAdd"] . " " . $get["town"] . " " . $get["zip"];
              echo "</label>";

              echo "<label>";
              echo "Product Name: " . $get["prodName"];
              echo "</label>";

              echo "<label>";
              echo "Price: $" . $get["price"];
              echo "</label>";

              echo "<label>";
              echo "Quantity: " . $get["quantity"];
              echo "</label>";
              echo "<label>";
              echo "Shipping Fee: " . $get["shipping"];
              echo "</label>";
              echo "<label>";
              echo "Total Payment: $" . $get["totalPayment"];
              echo "</label>";

              echo "<button style='margin-left: 20%;'>";
              echo "Back to Products";
              echo "</button>";
            } elseif (isset($_POST["buy"]) && $id == "9") {
              $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=9");
              $row = mysqli_fetch_array($retrieve);
              mysqli_query($link, "INSERT INTO `purchased` VALUES ('$row[prod_id]','$_POST[lname]', '$_POST[fname]', '$_POST[houseadd]',
  '$_POST[City]','$_POST[Zip]', '$_POST[Phone]','$_POST[Email]','$row[prod_name]','$row[price]','$_POST[Quan]', '$row[shipping_fee]')") or die(mysqli_error($link));

              $retrieve2 = mysqli_query($link, "SELECT *, (quantity * price + shipping) AS totalPayment FROM `purchased` WHERE email = '$_POST[Email]' AND prod_id = $id  
              AND lname = '$_POST[lname]'");
              $get = mysqli_fetch_array($retrieve2);

              echo "<label style='font-weight: bold; font-size: 20px; text-decoration: underline;'>";
              echo "Your Order and Information";
              echo "</label>";


              echo "<label>";
              echo "Fullname: " . $get["lname"] . " " . $get["fname"];
              echo "</label>";

              echo "<label>";
              echo "Phone #.: " . $get["phoneNo."];
              echo "</label>";

              echo "<label>";
              echo "Email : " . $get["email"];
              echo "</label>";

              echo "<label>";
              echo "Home Address: " . $get["homeAdd"] . " " . $get["town"] . " " . $get["zip"];
              echo "</label>";

              echo "<label>";
              echo "Product Name: " . $get["prodName"];
              echo "</label>";

              echo "<label>";
              echo "Price: $" . $get["price"];
              echo "</label>";

              echo "<label>";
              echo "Quantity: " . $get["quantity"];
              echo "</label>";
              echo "<label>";
              echo "Shipping Fee: " . $get["shipping"];
              echo "</label>";
              echo "<label>";
              echo "Total Payment: $" . $get["totalPayment"];
              echo "</label>";

              echo "<button style='margin-left: 20%;'>";
              echo "Back to Products";
              echo "</button>";
            } elseif (isset($_POST["buy"]) && $id == "10") {
              $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=10");
              $row = mysqli_fetch_array($retrieve);
              mysqli_query($link, "INSERT INTO `purchased` VALUES ('$row[prod_id]','$_POST[lname]', '$_POST[fname]', '$_POST[houseadd]',
  '$_POST[City]','$_POST[Zip]', '$_POST[Phone]','$_POST[Email]','$row[prod_name]','$row[price]','$_POST[Quan]', '$row[shipping_fee]')") or die(mysqli_error($link));

              $retrieve2 = mysqli_query($link, "SELECT *, (quantity * price + shipping) AS totalPayment FROM `purchased` WHERE email = '$_POST[Email]' AND prod_id = $id 
              AND lname = '$_POST[lname]'");
              $get = mysqli_fetch_array($retrieve2);

              echo "<label style='font-weight: bold; font-size: 20px; text-decoration: underline;'>";
              echo "Your Order and Information";
              echo "</label>";


              echo "<label>";
              echo "Fullname: " . $get["lname"] . " " . $get["fname"];
              echo "</label>";

              echo "<label>";
              echo "Phone #.: " . $get["phoneNo."];
              echo "</label>";

              echo "<label>";
              echo "Email : " . $get["email"];
              echo "</label>";

              echo "<label>";
              echo "Home Address: " . $get["homeAdd"] . " " . $get["town"] . " " . $get["zip"];
              echo "</label>";

              echo "<label>";
              echo "Product Name: " . $get["prodName"];
              echo "</label>";

              echo "<label>";
              echo "Price: $" . $get["price"];
              echo "</label>";

              echo "<label>";
              echo "Quantity: " . $get["quantity"];
              echo "</label>";
              echo "<label>";
              echo "Shipping Fee: " . $get["shipping"];
              echo "</label>";
              echo "<label>";
              echo "Total Payment: $" . $get["totalPayment"];
              echo "</label>";

              echo "<button style='margin-left: 20%;'>";
              echo "Back to Products";
              echo "</button>";
            } elseif (isset($_POST["buy"]) && $id == "10") {
              $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=10");
              $row = mysqli_fetch_array($retrieve);
              mysqli_query($link, "INSERT INTO `purchased` VALUES ('$row[prod_id]','$_POST[lname]', '$_POST[fname]', '$_POST[houseadd]',
  '$_POST[City]','$_POST[Zip]', '$_POST[Phone]','$_POST[Email]','$row[prod_name]','$row[price]','$_POST[Quan]', '$row[shipping_fee]')") or die(mysqli_error($link));

              $retrieve2 = mysqli_query($link, "SELECT *, (quantity * price + shipping) AS totalPayment FROM `purchased` WHERE email = '$_POST[Email]' AND prod_id = $id 
              AND lname = '$_POST[lname]'");
              $get = mysqli_fetch_array($retrieve2);

              echo "<label style='font-weight: bold; font-size: 20px; text-decoration: underline;'>";
              echo "Your Order and Information";
              echo "</label>";


              echo "<label>";
              echo "Fullname: " . $get["lname"] . " " . $get["fname"];
              echo "</label>";

              echo "<label>";
              echo "Phone #.: " . $get["phoneNo."];
              echo "</label>";

              echo "<label>";
              echo "Email : " . $get["email"];
              echo "</label>";

              echo "<label>";
              echo "Home Address: " . $get["homeAdd"] . " " . $get["town"] . " " . $get["zip"];
              echo "</label>";

              echo "<label>";
              echo "Product Name: " . $get["prodName"];
              echo "</label>";

              echo "<label>";
              echo "Price: $" . $get["price"];
              echo "</label>";

              echo "<label>";
              echo "Quantity: " . $get["quantity"];
              echo "</label>";
              echo "<label>";
              echo "Shipping Fee: " . $get["shipping"];
              echo "</label>";
              echo "<label>";
              echo "Total Payment: $" . $get["totalPayment"];
              echo "</label>";

              echo "<button style='margin-left: 20%;'>";
              echo "Back to Products";
              echo "</button>";
            } elseif (isset($_POST["buy"]) && $id == "10") {
              $retrieve = mysqli_query($link, "SELECT * FROM product WHERE prod_id=10");
              $row = mysqli_fetch_array($retrieve);
              mysqli_query($link, "INSERT INTO `purchased` VALUES ('$row[prod_id]','$_POST[lname]', '$_POST[fname]', '$_POST[houseadd]',
  '$_POST[City]','$_POST[Zip]', '$_POST[Phone]','$_POST[Email]','$row[prod_name]','$row[price]','$_POST[Quan]', '$row[shipping_fee]')") or die(mysqli_error($link));

              $retrieve2 = mysqli_query($link, "SELECT *, (quantity * price + shipping) AS totalPayment FROM `purchased` WHERE email = '$_POST[Email]' AND prod_id = $id 
              AND lname = '$_POST[lname]'");
              $get = mysqli_fetch_array($retrieve2);

              echo "<label style='font-weight: bold; font-size: 20px; text-decoration: underline;'>";
              echo "Your Order and Information";
              echo "</label>";


              echo "<label>";
              echo "Fullname: " . $get["lname"] . " " . $get["fname"];
              echo "</label>";

              echo "<label>";
              echo "Phone #.: " . $get["phoneNo."];
              echo "</label>";

              echo "<label>";
              echo "Email : " . $get["email"];
              echo "</label>";

              echo "<label>";
              echo "Home Address: " . $get["homeAdd"] . " " . $get["town"] . " " . $get["zip"];
              echo "</label>";

              echo "<label>";
              echo "Product Name: " . $get["prodName"];
              echo "</label>";

              echo "<label>";
              echo "Price: $" . $get["price"];
              echo "</label>";

              echo "<label>";
              echo "Quantity: " . $get["quantity"];
              echo "</label>";
              echo "<label>";
              echo "Shipping Fee: " . $get["shipping"];
              echo "</label>";
              echo "<label>";
              echo "Total Payment: $" . $get["totalPayment"];
              echo "</label>";

              echo "<button style='margin-left: 20%;'>";
              echo "Back to Products";
              echo "</button>";
            }
            ?>

          </table>


        </div>
      </form>
      <!-- Yorder -->
    </div>
  </div>
</body>

</html>