<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="author" content="harrnish">

      <title>Phan Công Trọng Nhân</title>

      <!-- stylesheet -->
      <link rel="stylesheet" href="css/style.css">

      <!-- bootstrap cdns -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

      <!-- terminal effect -->
      <script src="js/t.min.js"></script>

      <!-- for on scroll animations -->
      <link rel="stylesheet" href="css/animate.css">
      <script src="js/wow.min.js"></script>

</head>
<body>
      <div class="wrapper">

            <!--------------- navbar starts here --------------->
            <nav>
                  <span id="brand">
                        <a href="index.php">Home</a>
                  </span>

                  <ul id="menu">
                        <li><a href="lab03/I">I<span>.</span></a></li>
                        <li><a href="lab03/II">II<span>.</span></a></li>
                        <li><a href="lab03/III">III<span>.</span></a></li>
                        <li><a href="lab03/ExeI/index.php">ExeI<span>.</span></a></li>
                        <li><a href="lab03/ExeII/index.php">ExeII<span>.</span></a></li>
                        <li><a href="lab03/ExeIII/index.php">ExeIII<span>.</span></a></li>
                        <li><a href="lab03/ExeIV/index.php">ExeIV<span>.</span></a></li>
                        <li><a href="lab03/ExeV/index.php">ExeV<span>.</span></a></li>
                  </ul>

                  <div id="toggle">
                        <div class="span">menu</div>
                  </div>

            </nav>

            <div id="resize">
                  <div class="close-btn">close</div>

                  <ul id="menu">
                        <li><a href="lab03/I">I<span>.</span></a></li>
                        <li><a href="lab03/II">II<span>.</span></a></li>
                        <li><a href="lab03/III">III<span>.</span></a></li>
                        <li><a href="lab03/ExeI/index.php">ExeI<span>.</span></a></li>
                        <li><a href="lab03/ExeII/index.php">ExeII<span>.</span></a></li>
                        <li><a href="lab03/ExeIII/index.php">ExeIII<span>.</span></a></li>
                        <li><a href="lab03/ExeIV/index.php">ExeIV<span>.</span></a></li>
                        <li><a href="lab03/ExeV/index.php">ExeV<span>.</span></a></li>
                  </ul>
            </div>
            <!--------------- navbar ends here --------------->



            <!--------------- hero section starts here --------------->
            <div class="hero">
                  <div class="header">
                        <h1 class="line anim-typewriter">Họ và Tên:Phan Công Trọng Nhân.</h1>
                        <h1 class="line anim-typewriter">MSSV:1812813.</h1>
                        <h1 class="line anim-typewriter">LAB 03</h1>
                  </div>
            </div>

            <div class="scroll-down"></div>
            <!--------------- hero section ends here --------------->



            <!--------------- projects section starts here --------------->
           
            <!--------------- projects section ends here --------------->



            <!--------------- footer starts here --------------->
            <div class="footer">
                  <div class="container">
                        <br><br>

                        <div class="collab">
                              <div class="row">
                                    <div class="col-lg-12">
                                          <p class="wow fadeInUp">Got an interesting project? I can help you.</p>
                                    </div>
                              </div>                                          
                        </div>

                        <br>

                        <div class="hr">
                              <div class="row"></div>
                        </div>

                        <br><br>

                        <div class="info">
                              <div class="row">
                                    <div class="col-lg-4" id="personal">
                                          <p class="wow fadeInUp">connect with me</p>
                                          <h4 class="wow fadeInUp" data-wow-delay="0.2s">ig @1812813</h4>
                                          <br><br>
                                    </div>

                                    <div class="col-lg-4" id="media">
                                          <p class="wow fadeInUp" data-wow-delay="0s">follow me</p>

                                          <ul>
                                                <li id="fb" class="wow fadeInUp" data-wow-delay="0.4s">fb</li>
                                                <li id="ig" class="wow fadeInUp" data-wow-delay="0.6s">ig</li>
                                                <li id="tw" class="wow fadeInUp" data-wow-delay="0.8s">tw</li>
                                                <li id="yt" class="wow fadeInUp" data-wow-delay="1s">yt</li>
                                          </ul>

                                          <br><br>
                                    </div>

                                    <div class="col-lg-4" id="address">
                                          <p class="wow fadeInUp" data-wow-delay="0s">say hello</p>
                                          <h4 class="wow fadeInUp" data-wow-delay="0.2s">1812813@dlu.edu.vn</h4>
                                          <br><br>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>

            <br><br><br><br>

      </div>

            <!--------------- footer ends here --------------->

            <br><br><br><br>

      </div>

      <!-- greensock cdn -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script type="text/javascript">

      // navigation starts here

      $("#toggle").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
      });

      $("#resize ul li a").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
      });

      $(".close-btn").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
      });

      // navigation ends here

      // nav animation

      TweenMax.from("#brand", 1, {
            delay: 0.4,
            y: 10,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.staggerFrom("#menu li a", 1, {
            delay: 0.4,
            opacity: 0,
            ease: Expo.easeInOut
      }, 0.1);

      // nav animation ends

      new WOW().init();

      </script>
</body>
</html>
