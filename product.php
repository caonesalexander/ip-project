<html lang="en">

<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practicing JS</title>

  <link rel="stylesheet" href="css/all.min.css">
  <link rel="shortcut icon" type="image/jpg" href="images/tech.png" />
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <nav class="nav_bar">
    <div class="nav_container">
      <a href="about.html"><img src="images/technologo.png" id="navbar_logo"></a>
      <div class="navbar_toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
      <ul class="nav_menu">
        <li class="item">
          <a href="product.php" class="links">Products</a>
        </li>
        <li class="item">
          <a href="about.php" class="links">About</a>
        </li>
        <li class="item">
          <a href="contact.php" class="links">Contact Us</a>
        </li>
        <li class="nav_btn">
          <a href="signup.php" class="btn">Sign Up</a>
        </li>
        <li class="nav_btn">
          <a href="login.php" class="btn">Login</a>
        </li>

        <li class="nav_btn">
          <div class="dropdown">
            <button class="dropbtn"><i class="arrow down"></i>
            </button>
            <div class="dropdown-content">
              <a href="logout.php">Logout</a>
              <a href="#">Setting</a>
              <a href="#">Search</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <div id="container1">
    <div id="header">

    </div>

    <div id="slider">
      <ul id="slideWrap">
        <li><img src="images/laptop1.jpg" alt=""></li>
        <li><img src="images/laptop2.jpg" alt=""></li>
        <li><img src="images/laptop3.jpg" alt=""></li>
        <li><img src="images/laptop4.jpg" alt=""></li>
        <li><img src="images/laptop5.jpg" alt=""></li>
      </ul>
      <a id="prev" href="#">&#8810;</a>
      <a id="next" href="#">&#8811;</a>
    </div>
  </div>


  <div class="container2" id="container2">
    <div class="header" id="header">
      <h3>TRENDING SEARCHES</h3>
    </div>

    <div class="row">
      <div class="column">
        <div class="img-box">
          <a href="laptop.php"><img src="images/laptop6.png" alt=""></a>
          <div class="desc-box">
            <h3>Laptop</h3>
            <p>1k+ products</p>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="img-box">
          <a href="monitors.php"><img src="https://starpng.com/public/uploads/preview/lcd-monitor-transparent-png-image-101577203481o4kkpmtzu9.png" alt=""></a>
          <div class="desc-box">
            <h3>Monitor</h3>
            <p>1k+ products</p>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="img-box">
          <a href="keyboard.html"><img src="https://www.pngplay.com/wp-content/uploads/13/Gaming-Keyboard-Transparent-Free-PNG.png" alt=""></a>
          <div class="desc-box">
            <h3>Mechanical Keyboard</h3>
            <p>1k+ products</p>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="img-box">
          <a href="processor.html"><img src="https://www.pngplay.com/wp-content/uploads/13/Processor-PNG-Photo-Image.png" alt=""></a>
          <div class="desc-box">
            <h3>Processor</h3>
            <p>1k+ products</p>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="img-box">
          <a href="systemUnit.html"><img src="https://www.pngkey.com/png/full/906-9063207_pc-image-custom-pc-cooling-system-computer-case.png" alt=""></a>
          <div class="desc-box">
            <h3>System Unit</h3>
            <p>1k+ products</p>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="img-box">
          <a href="speaker.html"><img src="https://www.pngmart.com/files/6/Computer-Speakers-PNG-Background-Image.png" alt=""></a>
          <div class="desc-box">
            <h3>Speaker</h3>
            <p>1k+ products</p>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="img-box">
          <a href="headset.html"><img src="https://www.pngall.com/wp-content/uploads/5/Gaming-Headset-PNG-HD-Image-1.png" alt=""></a>
          <div class="desc-box">
            <h3>Headset</h3>
            <p>1k+ products</p>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="img-box">
          <a href="webcam.html"><img src="https://resource.logitech.com/w_800,c_lpad,ar_4:3,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/logitech/en/products/webcams/c922/gallery/c922-glamour-lg.png?v=1" alt=""></a>
          <div class="desc-box">
            <h3>Webcam</h3>
            <p>1k+ products</p>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="img-box">
          <a href="mouse.html"><img src="https://www.isbpcstore.com/wp-content/uploads/2021/10/RedragonM612Predator_450x450.png" alt=""></a>
          <div class="desc-box">
            <h3>Wireless Mouse</h3>
            <p>1k+ products</p>
          </div>
        </div>
      </div>
    </div>

  </div>


  <script>
    var responsiveSlider = function() {

      var slider = document.getElementById("slider");
      var sliderWidth = slider.offsetWidth;
      var slideList = document.getElementById("slideWrap");
      var count = 1;
      var items = slideList.querySelectorAll("li").length;
      var prev = document.getElementById("prev");
      var next = document.getElementById("next");

      window.addEventListener('resize', function() {
        sliderWidth = slider.offsetWidth;
      });

      var prevSlide = function() {
        if (count > 1) {
          count = count - 2;
          slideList.style.left = "-" + count * sliderWidth + "px";
          count++;
        } else if (count = 1) {
          count = items - 1;
          slideList.style.left = "-" + count * sliderWidth + "px";
          count++;
        }
      };

      var nextSlide = function() {
        if (count < items) {
          slideList.style.left = "-" + count * sliderWidth + "px";
          count++;
        } else if (count = items) {
          slideList.style.left = "0px";
          count = 1;
        }
      };

      next.addEventListener("click", function() {
        nextSlide();
      });

      prev.addEventListener("click", function() {
        prevSlide();
      });

      setInterval(function() {
        nextSlide()
      }, 5000);

    };

    window.onload = function() {
      responsiveSlider();
    }
  </script>
</body>

</html>