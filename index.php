<?php
if (isset($_POST['submit'])) {
    $to = "contact@optimal.com.tn"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject2 = "Copy of " . $subject;
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
    $flash = "<span class='fa fa-check'></span> Mail sent successfully. Thank you " . $name . ", we will contact you shortly...";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Optimal Solution</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="images/favicon.png" rel="shortcut icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/css/prettyPhoto.min.css" media="screen" title="prettyPhoto main stylesheet" charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700">
  <link rel='stylesheet' type="text/css" href="css/camera.min.css" id='camera-css' media='all'><!-- can't edit this -->
  <link rel="stylesheet" type="text/css" href="css/slicknav.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script><!-- can't upgrade this -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Camera/1.3.4/scripts/jquery.mobile.customized.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Camera/1.3.4/scripts/camera.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.4/isotope.pkgd.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/js/jquery.prettyPhoto.min.js" charset="UTF-8"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/slickNavbar.min.js"></script>
  <script type="text/javascript" src="js/sorting.min.js"></script>
  <script type="text/javascript" src="js/myscript.min.js"></script>
  <script type="text/javascript">
    $(function () {
      $('#camera_wrap_1').camera({
        transPeriod: 500,
        time: 3000,
        height: '490px',
        thumbnails: false,
        pagination: true,
        playPause: false,
        loader: false,
        navigation: false,
        hover: false
      });
    });
  </script>
</head>
<body>
<?php if (isset($flash)) { ?>
  <div class="hint-mail">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <span class="message"><?php echo $flash; ?></span>
  </div>
<?php } ?>
<!--home start-->
<div id="home">
  <div class="headerLine">
    <div id="menuF" class="default">
      <div class="container">
        <div class="row">
          <div class="logo col-md-4">
            <div>
              <a href="#">
                <img src="images/logo.png" style="width: 200px">
              </a>
            </div>
          </div>
          <div class="col-md-8">
            <div class="navmenu" style="text-align: center;">
              <ul id="menu">
                <li class="active"><a href="#home">Home</a></li>
                <li><a href="#team">Team</a></li>
                <li class="last"><a href="#contact">Contact</a></li>
                <!--li><a href="#features">Features</a></li-->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row wrap">
        <div class="col-md-12 gallery">
          <div class="camera_wrap camera_white_skin" id="camera_wrap_1">
            <div data-thumb="" data-src="images/slides/blank.gif">
              <div class="img-responsive camera_caption fadeFromBottom">
                <h2>We listen,</h2>
              </div>
            </div>
            <div data-thumb="" data-src="images/slides/blank.gif">
              <div class="img-responsive camera_caption fadeFromBottom">
                <h2>We discuss,</h2>
              </div>
            </div>
            <div data-thumb="" data-src="images/slides/blank.gif">
              <div class="img-responsive camera_caption fadeFromBottom">
                <h2>We devel<img src="images/favicon_inverse.png" style="width:70px;">p,</h2>
              </div>
            </div>
            <div data-thumb="" data-src="images/slides/blank.gif">
              <div class="img-responsive camera_caption fadeFromBottom">
                <h3>Our j<img src="images/favicon_inverse.png" style="width:55px;">b is to simplify yours...</h3>
              </div>
            </div>
          </div><!-- #camera_wrap_1 -->
        </div>
      </div>
    </div>
  </div>
</div>
<!--about start-->
<div id="team">
  <div class="container">
    <div class="row">
      <div class="col-md-12 wwa">
        <span name="about"></span>
        <h3>Who We Are? Meet Our Team!</h3>
        <h4>We listen, we discuss, we advise and develop. We love to learn and use the latest technologies.</h4>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row team">
      <div class="col-md-4 b3">
        <img class="img-responsive" src="images/picTeam/picT3.png">
        <h4>Malek Boubakri</h4>
        <h5>Production manager</h5>
        <h5>Java Certified Developer</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br/> quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget.</p>
        <ul>
          <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <img class="img-responsive" src="images/picTeam/picT2.png">
        <h4>Aymen Ben Khemis</h4>
        <h5>Founder & Manager</h5>
        <h5>Senior Javascript Developer</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br/> quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget.</p>
        <ul>
          <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
        </ul>
      </div>
      <div class="col-md-4 b1">
        <img class="img-responsive" src="images/picTeam/picT1.png">
        <h4>Zaki Meddeb</h4>
        <h5>Full-stack Developer</h5>
        <h5>Test and validation engineer</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit <br/>quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget.</p>
        <ul>
          <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="row team">
      <div class="col-md-4 b1">
        <img class="img-responsive" src="images/picTeam/picT0.png">
        <h4>Aymen Ben Dhiab</h4>
        <h5>Sales manager</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit <br/>quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget.</p>
        <ul>
          <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
        </ul>
      </div>
      <div class="col-md-4 b1">
        <img class="img-responsive" src="images/picTeam/picT0.png">
        <h4>Zied Haj Salah</h4>
        <h5>Full-stack Developer</h5>
        <h5>JavaScript/MERN stack Architect</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit <br/>quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget.</p>
        <ul>
          <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
        </ul>
      </div>
      <div class="col-md-4 b1">
        <img class="img-responsive" src="images/picTeam/picT0.png">
        <h4>Khalil Chakroun</h4>
        <h5>Technical sales / Former</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit <br/>quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget.</p>
        <ul>
          <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 hr1">
        <hr/>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row aboutUs">
      <div class="col-md-12 ">
        <h3>What Our Customers Say About Us?</h3>
      </div>
    </div>
  </div>
  <div style="position: relative;">
    <div class="container">
      <div class="row about">
        <div class="col-md-6">
          <div class="about1">
            <img class="pic1Ab" src="images/picAbout/aboutP1.png">
            <h3><b>El Matador,</b> Sahloul - Kamel</h3>
            <p>Nulla scelerisque eu proin nec urna quis justo adipiscing auctor ut auctor feugiat fermentum quisque eget pharetra, felis et venenatis. aliquam, nulla nisi lobortis elit ac.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="about2">
            <img class="pic2Ab" src="images/picAbout/aboutP2.png">
            <h3><b>Les jardins fleuris,</b> Kantaoui - Akrem</h3>
            <p>Consectetur ornare nibh, a urna quis justo, adipiscing auctor, ut auctor feugiat fermentum nec quisque eget pharetra, felis et venenatis aliquam, nulla nisi lobortis elit, ac luctus.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="horL"></div>
    <div class="container">
      <div class="row about">
        <div class="col-md-6">
          <div class="about1">
            <img class="pic1Ab" src="images/picAbout/aboutP3.png">
            <h3><b>Wamia.tn,</b> E-Shop - Abderrazek</h3>
            <p>A auctor mauris scelerisque eu proin nec urna quis justo adipiscing auctor ut auctor feugiat fermentum quisque eget pharetra, felis et venenatis aliquam, nulla nisi lobortis elit, acnterdum ante feugiat vitae.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="about2">
            <img class="pic2Ab" src="images/picAbout/aboutP4.png">
            <h3><b>L'Astronomie,</b> Sahloul - Mehdi</h3>
            <p>Ornare nibh a auctor, mauris scelerisque eu proin nec urna nec a quis justo adipiscing auctor ut auctor feugiat fermentum quisque eget pharetra felis et venenatis aliquam, nulla nisi lobortis elit, ac eleifend nisl ante nec lorem. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--contact start-->
<div>
  <div class="line6">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3234.5755192848187!2d10.59293821533822!3d35.83488908015874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd8af51d61302b%3A0xb3ba913a31320ad8!2sOptimal+Solution+S.a.r.l!5e0!3m2!1sfr!2stn!4v1494336627568" width="100%" height="750" frameborder="0" style="border:0"></iframe>
  </div>
  <div id="contact" class="container">
    <div class="row ftext">
      <div class="col-md-12">
        <a id="features"></a>
        <h3>We Care About Our Clients and Can Make Their Life Easier!</h3>
        <p>Whether you’re looking for answers, would like to solve a problem, or just want to let us know how we did, you’ll find many ways to contact us right here. We’ll help you resolve your issues quickly and easily, getting you back to more important things, like relaxing on your new sofa.</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-xs-12 forma">
        <form action="" method="post" id="form-mail">
          <input type="text" class="col-md-6 col-xs-12 Name" name='name' placeholder='Name *' required/>
          <input type="email" class="col-md-6 col-xs-12 Email" name='email' required placeholder='Email *'/>
          <input type="text" class="col-md-12 col-xs-12 Subject" name='subject' placeholder='Subject' required/>
          <textarea type="text" class="col-md-12 col-xs-12 Message" name='message' placeholder='Message *' required></textarea>
          <div class="cBtn col-xs-12">
            <ul>
              <li class="clear"><a href="#"><i class="fa fa-times"></i>Clear</a></li>
              <li class="send"><a name="submit"><i class="fa fa-share"></i>Send Message</a></li>
            </ul>
          </div>
        </form>
      </div>
      <div class="col-md-3 col-xs-12 cont">
        <ul>
          <li><i class="fa fa-home"></i>OPTIMAL SOLUTION s.a.r.l<br>n°603, Imm. Mehdi Av Yasser Arafat,<br>Sahloul, Sousse.</li>
          <li><i class="fa fa-phone"></i>(+216) 73 820 315
          <li>
          <li class="fa fa-clock-o"></li>
          From Monday to Friday - 8h to 14h</li></li>
          <li><a href="mailto:contact@optimal.com.tn"><i class="fa fa-envelope"></i>contact@optimal.com.tn</a></li>
          <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
          <li><a href="#"><i class="fa fa-facebook-square"></i>Facebook</a></li>
          <li><a href="https://www.linkedin.com/company-beta/11034851/"><i class="fa fa-linkedin"></i>Linked In</a></li>
          <li><a href="#"><i class="fa fa-youtube-play"></i>YouTube</a></li>
        </ul>
      </div>
    </div>
  </div>
  <br><br>
  <div class="line7">
    <div class="container">
      <div class="row downLine">
        <div class="col-md-6 text-left copy">
          <p>Copyright &copy; 2017 <img src="images/logo.png" style="width: 140px">. All Rights Reserved.</p>
        </div>
        <div class="col-md-6 text-right copy">
          Open source <span class="fa fa-html5" style="color: orange"></span> + <span class="fa fa-css3" style="color: turquoise"></span> + <span class="fa fa-square" style="color: gold"></span> available on <a style="color: white" href="https://github.com/Optimal-Solution-ltd/Optimal-website"><span class="fa fa-github"></span> GitHub</a>.
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" charset="UTF-8">
  $(document).ready(function () {
    $(".bhide").click(function () {
      $(".hideObj").slideDown();
      $(this).hide(); //.attr()
      return false;
    });
    $(".bhide2").click(function () {
      $(".container.hideObj2").slideDown();
      $(this).hide(); // .attr()
      return false;
    });
    $('.heart').mouseover(function () {
      $(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
    }).mouseout(function () {
      $(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
    });

    function sdf_FTS(_number, _decimal, _separator) {
      var decimal = (typeof(_decimal) != 'undefined') ? _decimal : 2;
      var separator = (typeof(_separator) != 'undefined') ? _separator : '';
      var r = parseFloat(_number)
      var exp10 = Math.pow(10, decimal);
      r = Math.round(r * exp10) / exp10;
      rr = Number(r).toFixed(decimal).toString().split('.');
      b = rr[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g, "\$1" + separator);
      r = (rr[1] ? b + '.' + rr[1] : b);
      return r;
    }

    setTimeout(function () {
      $('#counter').text('0');
      $('#counter1').text('0');
      $('#counter2').text('0');
      setInterval(function () {
        var curval = parseInt($('#counter').text());
        var curval1 = parseInt($('#counter1').text().replace(' ', ''));
        var curval2 = parseInt($('#counter2').text());
        if (curval <= 707) {
          $('#counter').text(curval + 1);
        }
        if (curval1 <= 12280) {
          $('#counter1').text(sdf_FTS((curval1 + 20), 0, ' '));
        }
        if (curval2 <= 245) {
          $('#counter2').text(curval2 + 1);
        }
      }, 2);
    }, 500);
  });
</script>
<script type="text/javascript" charset="UTF-8">
  $(document).ready(function () {
    $('#menu').slicknav();
  });
</script>
<script type="text/javascript" charset="UTF-8">
  $(document).ready(function () {
    var $menu = $("#menuF");
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100 && $menu.hasClass("default")) {
        $menu.fadeOut('fast', function () {
          $(this).removeClass("default")
              .addClass("fixed transbg")
              .fadeIn('fast');
        });
      } else if ($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
        $menu.fadeOut('fast', function () {
          $(this).removeClass("fixed transbg")
              .addClass("default")
              .fadeIn('fast');
        });
      }
    });
  });
  //jQuery
</script>
<script type="text/javascript" charset="UTF-8">
  /*menu*/
  function calculateScroll() {
    var contentTop = [];
    var contentBottom = [];
    var winTop = $(window).scrollTop();
    var rangeTop = 200;
    var rangeBottom = 500;
    $('.navmenu').find('a').each(function () {
      contentTop.push($($(this).attr('href')).offset().top);
      contentBottom.push($($(this).attr('href')).offset().top + $($(this).attr('href')).height());
    })
    $.each(contentTop, function (i) {
      if (winTop > contentTop[i] - rangeTop && winTop < contentBottom[i] - rangeBottom) {
        $('.navmenu li')
            .removeClass('active')
            .eq(i).addClass('active');
      }
    })
  };
  $(document).ready(function () {
    calculateScroll();
    $(window).scroll(function (event) {
      calculateScroll();
    });
    $('.navmenu ul li a').click(function () {
      $('html, body').animate({scrollTop: $(this.hash).offset().top - 80}, 800);
      return false;
    });
  });
</script>
<script type="text/javascript" charset="UTF-8">
  $(document).ready(function () {
    $(".send").click(function () {
      if ($(".Name").val().length > 0) {
        if ($(".Email").val().length > 0) {
          if ($(".Message").val().length > 0) {
            $("#form-mail").submit();
          } else {
            $(".Message").focus()
          }
        } else {
          $(".Email").focus()
        }
      } else {
        $(".Name").focus()
      }
    });
    $(".pretty a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'normal', theme: 'light_square', slideshow: 3000, autoplay_slideshow: true, social_tools: ''});
  });
</script>
<?php if (isset($flash)) { ?>
  <script type="text/javascript" charset="UTF-8">
    $(document).ready(function () {
      setTimeout(function () {
        $(".hint-mail .message").fadeOut(1000);
        $(".hint-mail .close").fadeOut(1000, function () {
          $(".hint-mail").remove();
        });
      }, 5000);
    });
  </script>
<?php } ?>
</body>

</html>