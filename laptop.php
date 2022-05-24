<?php

include "connection.php";

?>



<html>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <link rel="shortcut icon" type="image/jpg" href="images/tech.png" />

   <!-- custom js file link  -->
   <script src="js/script.js" defer></script>
   <script src="js/get.js" defer></script>

   <style>
      #insert button:hover {
         background: #111;
         color: #fff;
      }
   </style>

   <title>LAPTOP</title>
</head>

<body>

   <nav class="navbar">
      <div class="navbar_container">
         <a href="about.html"><img src="images/technologo.png" id="navbar_logo"></a>
         <div class="navbar_toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
         </div>
         <ul class="navbar_menu">
            <li class="navbar_item">
               <a href="product.php" class="navbar_links">Products</a>
            </li>
            <li class="navbar_item">
               <a href="about.php" class="navbar_links">About</a>
            </li>
            <li class="navbar_item">
               <a href="contact.php" class="navbar_links">Contact Us</a>
            </li>
            <li class="navbar_btn">
               <a href="signup.php" class="button">Sign Up</a>
            </li>
            <li class="navbar_btn">
               <a href="login.php" class="button">Login</a>
            </li>
         </ul>
      </div>
   </nav>

   <div class="container">

      <h3 class="title"> Laptop </h3>

      <div class="products-container">

         <div class="product" data-name="p-1">
            <img src="images/hplaptop.png" alt="">
            <h3 class="value">HP</h3>
            <div class="price">114.99</div>
         </div>

         <div class="product" data-name="p-2">
            <img src="images/acerLaptop.jpg" alt="">
            <h3>ACER</h3>
            <div class="price">$339.99</div>
         </div>

         <div class="product" data-name="p-3">
            <img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/mbp16-spacegray-select-202110?wid=452&hei=420&fmt=jpeg&qlt=95&.v=1632788574000" alt="">
            <h3>MacBook M1 Prot</h3>
            <div class="price">$1,000.00</div>
         </div>

         <div class="product" data-name="p-4">
            <img src="images/asuslaptop.png" alt="">
            <h3>ASUS</h3>
            <div class="price">$379.00</div>
         </div>

         <div class="product" data-name="p-5">
            <img src="images/samsunglaptop.jpg
         " alt="">
            <h3>SAMSUNG</h3>
            <div class="price">$149.99</div>
         </div>

         <div class="product" data-name="p-6">
            <img src="images/dellLaptop.jpg" alt="">
            <h3>DELL</h3>
            <div class="price">$300.00</div>
         </div>

      </div>

   </div>

   <div class="products-preview">

      <form action="/IP-PROJECT/ip-project/placeorder.php" method="post">

         <div class="preview" data-target="p-1">
            <i class="fas fa-times"></i>
            <img src="images/hplaptop.png" alt="">
            <h3>HP Laptop 15-dw1086nia (49N04EA)</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
               <span>( 250 )</span>
            </div>
            <p>Operating system Windows 11 Home</p>
            <p>Processor Brand Intel® Core™ i5 10210U 10th Generation </p>
            <p>Memory size 12 GB DDR4 2666 DIMM</p>
            <p>Storage capacity 1 TB HDD</p>

            <div class="price">$114.99</div>
            <div class="buttons">
               <button type="submit" name="insert" id="insert" class="buy" style="background: #444; color:#fff;
               flex:1 1 16rem; padding:1rem; font-size: 1.8rem; border:.1rem solid #444; cursor:pointer;
             border-radius: 10px; transition-duration: 0.4s;">buy now</button>
            </div>
         </div>



         <div class="preview" data-target="p-2">
            <i class="fas fa-times"></i>
            <img src="images/acerLaptop.jpg" alt="">
            <h3>Acer Aspire 5 Slim Laptop</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
               <span>( 250 )</span>
            </div>
            <p>15.6 inches Full HD IPS Display</p>
            <p>AMD Ryzen 3 3200U</p>
            <p>Vega 3 Graphics</p>
            <p> 4GB DDR4, 128GB SSD, Backlit Keyboard</p>
            <p>Windows 10 in S Mode, A515-43-R19L, Silver</p>
            <div class="price">$399.99</div>
            <div class="buttons">
               <button type="submit" name="insert2" id="insert2" class="buy" style="background: #444; color:#fff;
               flex:1 1 16rem; padding:1rem; font-size: 1.8rem; border:.1rem solid #444; cursor:pointer;
             border-radius: 10px; transition-duration: 0.4s;">buy now</button>
            </div>
         </div>

         <div class="preview" data-target="p-3">
            <i class="fas fa-times"></i>
            <img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/mbp16-spacegray-select-202110?wid=452&hei=420&fmt=jpeg&qlt=95&.v=1632788574000" alt="">
            <h3>MacBook M1 Pro</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
               <span>( 250 )</span>
            </div>
            <p>16-core Neural Engine</p>
            <p>16-inch Liquid Retina XDR display</p>
            <p>Three Thunderbolt 4 ports, HDMI port, SDXC card slot, MagSafe 3 port</p>
            <p>Magic Keyboard with Touch ID</p>

            <div class="price">$1,000.00</div>
            <div class="buttons">
               <button type="submit" name="insert3" id="insert3" class="buy" style="background: #444; color:#fff;
               flex:1 1 16rem; padding:1rem; font-size: 1.8rem; border:.1rem solid #444; cursor:pointer;
             border-radius: 10px; transition-duration: 0.4s;">buy now</button>
            </div>
         </div>

         <div class="preview" data-target="p-4">
            <i class="fas fa-times"></i>
            <img src="images/asuslaptop.png" alt="">
            <h3>ASUS X509</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
               <span>( 250 )</span>
            </div>
            <p>powered by up to an 8th Generation Intel® Core™ i7 processor</p>
            <p>16GB 2400MHz RAM</p>
            <P>NVIDIA® MX250 discrete graphics</P>
            <P>A dual-storage design with up to a 512GB PCIe® SSD and 1TB HDD</P>
            <div class="price">$379.00</div>
            <div class="buttons">
               <button type="submit" name="insert4" id="insert4" class="buy" style="background: #444; color:#fff;
               flex:1 1 16rem; padding:1rem; font-size: 1.8rem; border:.1rem solid #444; cursor:pointer;
             border-radius: 10px; transition-duration: 0.4s;">buy now</button>
            </div>
         </div>

         <div class="preview" data-target="p-5">
            <i class="fas fa-times"></i>
            <img src="images/samsunglaptop.jpg" alt="">
            <h3>Samsung Series 9 NP900X4C-A03US 15" Laptop Computer</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
               <span>( 250 )</span>
            </div>
            <p>1.9 GHz Intel Core i7-3517U Processor</p>
            <p>256GB SSD, 1600 x 900 Resolution</p>
            <p>802.11 a/b/g/n Wi Fi, Bluetooth 4.0</p>
            <p>8GB DDR3 1600 MHz RAM, Intel HD 4000 Graphics</p>
            <p>15" Widescreen LED HD+ Display</p>
            <div class="price">$149.99</div>
            <div class="buttons">
               <button type="submit" name="insert5" id="insert5" class="buy" style="background: #444; color:#fff;
               flex:1 1 16rem; padding:1rem; font-size: 1.8rem; border:.1rem solid #444; cursor:pointer;
             border-radius: 10px; transition-duration: 0.4s;">buy now</button>
            </div>
         </div>

         <div class="preview" data-target="p-6">
            <i class="fas fa-times"></i>
            <img src="images/dellLaptop.jpg" alt="">
            <h3>Dell Inspiron I7548-4271SLV</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
               <span>( 250 )</span>
            </div>
            <p>Screen Resolution 1920x1080 pixels Full HD</p>
            <p>Touchscreen Finger multi-touch input</p>
            <p>Processor (CPU) Intel Core i7-5500U 5th Gen dual-core 2.4-3.GHz 4MB cache (User Benchmark CPU score: 42)</p>
            <p>Data Storage 1000GB (1TB) HDD, System Memory (RAM) Size 8GB RAM</p>
            <div class="price">$300.00</div>
            <div class="buttons">
               <button type="submit" name="insert6" id="insert6" class="buy" style="background: #444; color:#fff;
               flex:1 1 16rem; padding:1rem; font-size: 1.8rem; border:.1rem solid #444; cursor:pointer;
             border-radius: 10px; transition-duration: 0.4s;">buy now</button>
            </div>
         </div>

      </form>

   </div>



</body>

</html>