<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <!-- custom js file link  -->
   <script src="js/script.js" defer></script>

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

      <h3 class="title"> Monitors </h3>

      <div class="products-container">

         <div class="product" data-name="p-1">
            <img src="images/HpV20.png" alt="">
            <h3>HP</h3>
            <div class="price">114.99</div>
         </div>

         <div class="product" data-name="p-2">
            <img src="images/acer.png" alt="">
            <h3>ACER</h3>
            <div class="price">$134.99</div>
         </div>

         <div class="product" data-name="p-3">
            <img src="images/Apple.jpg" alt="">
            <h3>Apple Thunderbolt</h3>
            <div class="price">$1,000.00</div>
         </div>

         <div class="product" data-name="p-4">
            <img src="images/asus.png" alt="">
            <h3>ASUS</h3>
            <div class="price">$379.00</div>
         </div>

         <div class="product" data-name="p-5">
            <img src="images/samsung.png" alt="">
            <h3>SAMSUNG</h3>
            <div class="price">$149.99</div>
         </div>

         <div class="product" data-name="p-6">
            <img src="images/dell.png" alt="">
            <h3>DELL</h3>
            <div class="price">$300.00</div>
         </div>

      </div>

   </div>

   <div class="products-preview">
      <form action="/IP-PROJECT/ip-project/placeorder.php" method="post">

         <div class="preview" data-target="p-1">
            <i class="fas fa-times"></i>
            <img src="images/HpV20.png" alt="">
            <h3>HP V20 HD+ Monitor</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
               <span>( 250 )</span>
            </div>
            <p>Native Resolution: HD+ (1600 x 900)</p>
            <p>Contrast ratio: 600:1</p>
            <p>Weight: 6.19lb</p>

            <div class="price">$114.99</div>
            <div class="buttons">
               <button type="submit" name="insert7" id="insert7" class="buy" style="background: #444; color:#fff;
               flex:1 1 16rem; padding:1rem; font-size: 1.8rem; border:.1rem solid #444; cursor:pointer;
             border-radius: 10px; transition-duration: 0.4s;">buy now</button>
            </div>
         </div>


         <div class="preview" data-target="p-2">
            <i class="fas fa-times"></i>
            <img src="images/acer.png" alt="">
            <h3>NITRO QG1</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
               <span>( 250 )</span>
            </div>
            <p>AMD RADEON FreeSync</p>
            <p>Full HD Resolution 1920x1090</p>
            <p>VRB 1ms</p>
            <p>BlueLightShield</p>
            <div class="price">$134.99</div>
            <div class="buttons">
               <button type="submit" name="insert8" id="insert8" class="buy" style="background: #444; color:#fff;
               flex:1 1 16rem; padding:1rem; font-size: 1.8rem; border:.1rem solid #444; cursor:pointer;
             border-radius: 10px; transition-duration: 0.4s;">buy now</button>
            </div>
         </div>

         <div class="preview" data-target="p-3">
            <i class="fas fa-times"></i>
            <img src="images/Apple.jpg" alt="">
            <h3>Apple Thunderbolt 27inches Monitor</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
               <span>( 250 )</span>
            </div>
            <p>27 inches screen</p>
            <p>Full HD</p>
            <p>TFT display</p>
            <p>Resolution: 2560x1440</p>

            <div class="price">$1,000.00</div>
            <div class="buttons">
               <button type="submit" name="insert9" id="insert9" class="buy" style="background: #444; color:#fff;
               flex:1 1 16rem; padding:1rem; font-size: 1.8rem; border:.1rem solid #444; cursor:pointer;
             border-radius: 10px; transition-duration: 0.4s;">buy now</button>
            </div>
         </div>

         <div class="preview" data-target="p-4">
            <i class="fas fa-times"></i>
            <img src="images/asus.png" alt="">
            <h3>Asus VZ27EHE 27" Full HD Monitor</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
               <span>( 250 )</span>
            </div>
            <p>27-inch Full HD (1920 x 1080) IPS screen</p>
            <p>Up to 75Hz refresh rate and 1ms MPRT</p>
            <p>Extensive connectivity including HDMI and D-sub port</p>
            <div class="price">$379.00</div>
            <div class="buttons">
               <button type="submit" name="insert10" id="insert10" class="buy" style="background: #444; color:#fff;
               flex:1 1 16rem; padding:1rem; font-size: 1.8rem; border:.1rem solid #444; cursor:pointer;
             border-radius: 10px; transition-duration: 0.4s;">buy now</button>
            </div>
         </div>

         <div class="preview" data-target="p-5">
            <i class="fas fa-times"></i>
            <img src="images/samsung.png" alt="">
            <h3>Samsung Full HD Monitor</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
               <span>( 250 )</span>
            </div>
            <p>Resolution 1,920 x 1,080</p>
            <p>Aspect Ratio 16:9</p>
            <p>Brightness (Typical) 250 cd/m??</p>
            <p>Viewing Angle (H/V) 178?? / 178??</p>
            <div class="price">$149.99</div>
            <div class="buttons">
               <button type="submit" name="insert11" id="insert11" class="buy" style="background: #444; color:#fff;
               flex:1 1 16rem; padding:1rem; font-size: 1.8rem; border:.1rem solid #444; cursor:pointer;
             border-radius: 10px; transition-duration: 0.4s;">buy now</button>
            </div>
         </div>

         <div class="preview" data-target="p-6">
            <i class="fas fa-times"></i>
            <img src="images/dell.png" alt="">
            <h3>Dell 24 Monitor - S2419H</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
               <span>( 250 )</span>
            </div>
            <p>Display Type LED-backlit LCD monitor / TFT active matrix</p>
            <p>Native Resolution Full HD (1080p) 1920 x 1080 at 60 Hz</p>
            <p>Aspect Ratio 16:9</p>
            <p>Pixel Per Inch 92</p>
            <div class="price">$300.00</div>
            <div class="buttons">
               <button type="submit" name="insert12" id="insert12" class="buy" style="background: #444; color:#fff;
               flex:1 1 16rem; padding:1rem; font-size: 1.8rem; border:.1rem solid #444; cursor:pointer;
             border-radius: 10px; transition-duration: 0.4s;">buy now
               </button>
            </div>
         </div>


      </form>
   </div>

</body>

</html>