<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
    }

   
    .footer {
        background-color: #000;
        color: #fff;
        padding: 40px 0;
    }

    .footer-logo img {
        max-width: 150px;
    }

    .social-icons {
        margin-top: 20px;
    }

    .social-icons ul {
        list-style: none;
        padding: 0;
        display: flex;
        gap: 10px;
    }

    .social-icons ul li a {
        color: #fff;
        font-size: 20px;
        text-decoration: none;
        transition: color 0.3s;
    }

    .social-icons ul li a:hover {
        color: #007bff; 
    }

    .footer-hedding h6 {
        font-size: 16px;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    .footer-useful-link ul {
        list-style: none;
        padding: 0;
    }

    .footer-useful-link ul li {
        margin-bottom: 10px;
    }

    .footer-useful-link ul li a {
        color: #fff;
        text-decoration: none;
        transition: color 0.3s;
    }

    .footer-useful-link ul li a:hover {
        color: #007bff; 
    }

    .addresss-info {
        list-style: none;
        padding: 0;
    }

    .addresss-info li {
        margin-bottom: 15px;
        display: flex;
        align-items: center;
    }

    .addresss-info li i {
        margin-right: 10px;
        font-size: 20px;
    }

    .footer-widget {
        margin-top: 20px;
        text-align: center;
    }

    .footer-widget p {
        margin: 0;
    }

    
    #back-to-top {
        position: fixed;
        bottom: 30px;
        right: 30px;
        display: none;
        z-index: 1000;
    }

    #back-to-top a {
        color: #fff;
        background-color: #007bff;
        padding: 10px 15px;
        border-radius: 50%;
        text-decoration: none;
        display: inline-block;
        transition: background-color 0.3s;
    }

    #back-to-top a:hover {
        background-color: #0056b3;
    }

    
    @media (max-width: 992px) {
        .footer .container {
            flex-direction: column;
            text-align: center;
        }

        .footer-logo {
            margin-bottom: 20px;
        }

        .footer-useful-link,
        .addresss-info {
            text-align: center;
        }

        .addresss-info li {
            justify-content: center;
        }
    }

    @media (max-width: 768px) {
        .footer .container {
            padding: 0 15px;
        }

        .footer-useful-link ul,
        .addresss-info {
            text-align: center;
        }

        .footer-useful-link ul li,
        .addresss-info li {
            margin-bottom: 15px;
        }

        .footer-logo img {
            max-width: 120px;
        }
    }

    @media (max-width: 576px) {
        .footer {
            padding: 30px 0;
        }

        .footer-logo img {
            max-width: 100px;
        }

        .social-icons ul {
            justify-content: center;
        }

        #back-to-top {
            right: 15px;
            bottom: 15px;
        }
    }
</style>

<footer class="footer page-section-pt black-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 sm-mb-30">
                <!-- <div class="footer-logo">
                    <img id="logo-footer" class="mb-20" src="images/logo1-inverse.png" alt="NSUT Logo">
                </div> -->
                <div class="social-icons color-hover">
                    <ul>
                        <li class="social-twitter">
                            <a target="_blank" href="https://x.com/NSUT_OFFICIAL?t=icb5M1a5S3V6pZAQu47nQw&s=08"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="social-linkedin">
                            <a target="_blank" href="https://www.linkedin.com/company/officialnsut/"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li class="social-facebook">
                            <a target="_blank" href="https://www.facebook.com/nsutofficial"><i class="fa fa-facebook"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 sm-mb-30">
                <div class="footer-useful-link footer-hedding">
                    <h6 class="text-white mb-30 mt-10 text-uppercase">Navigation</h6>
                    <ul>
                        <li><a href="https://convocation.nsut.ac.in/">Home</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 xs-mb-30">
                <div class="footer-useful-link footer-hedding">
                    <h6 class="text-white mb-30 mt-10 text-uppercase">Useful Links</h6>
                    <ul>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <h6 class="text-white mb-30 mt-10 text-uppercase">Contact Us</h6>
                <ul class="addresss-info">
                    <li><i class="fa fa-map-marker"></i> 
                        <p>Netaji Subhas University of Technology<br>Azad Hind Fauj Marg, Dwarka Sector-3, Delhi 110078, India</p> 
                    </li>
                    <li><i class="fa fa-envelope-o"></i> 
                    <span class="spamspan" ><span class="u"> convocation</span>[at]<span class="d">nsut[dot]ac[dot]in</span></span></li>                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-widget mt-20">
            <div class="row">
                <div class="col-md-6 text-left">
                    <!-- <p class="mt-15">Maintained by: <a href="" target="_blank" class="text-white">Central Computer Center, NSUT</a></p> -->
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="back-to-top">
    <a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a>
</div>


<script src="https://convocation.iitd.ac.in/2023/public/frontend/revolution/js/revolution-custom.js"></script>
<script>
  jQuery.fn.liScroll = function(settings) {
    settings = jQuery.extend({
      travelocity: 0.05
    }, settings);
    return this.each(function() {
      var $strip = jQuery(this);
      $strip.addClass("newsticker")
      var stripHeight = 1;
      $strip.find("li").each(function(i) {
        stripHeight += jQuery(this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
      });
      var $mask = $strip.wrap("<div class='mask'></div>");
      var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");
      var containerHeight = $strip.parent().parent().height(); //a.k.a. 'mask' width 	
      $strip.height(stripHeight);
      var totalTravel = stripHeight;
      var defTiming = totalTravel / settings.travelocity; // thanks to Scott Waye		
      function scrollnews(spazio, tempo) {
        $strip.animate({
          top: '-=' + spazio
        }, tempo, "linear", function() {
          $strip.css("top", containerHeight);
          scrollnews(totalTravel, defTiming);
        });
      }
      scrollnews(totalTravel, defTiming);
      $strip.hover(function() {
          jQuery(this).stop();
        },
        function() {
          var offset = jQuery(this).offset();
          var residualSpace = offset.top + stripHeight;
          var residualTime = residualSpace / settings.travelocity;
          scrollnews(residualSpace, residualTime);
        });
    });
  };

  $(function() {
    $("ul#ticker01").liScroll();
  });
</script>
