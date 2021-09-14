</main>

<footer id="footer" class="section-bg">
  <div class="footer-top" id="contpage">
    <div class="container">

      <div class="row">

        <div class="col-lg-6">

          <div class="row">

            <div class="col-sm-6">

              <div class="footer-info">
                <h3>Unify Immigration</h3>
                <p>Our Mission: To competently and effectively provide individuals with timely services to enable then to build a better future in Canada by opening up oppurtunities to visit, study, work, do business, and/or live permanently live in Canada.</p>
              </div>

              <!-- <div class="footer-newsletter">
                <h4>Our Newsletter</h4>
                <p>Subscribe to our weekly newsletter.</p>
                <form action="" method="post">
                  <input type="email" name="email"><input type="submit" value="Subscribe">
                </form>
              </div> -->
              <div class="social-links">
                <a href="https://www.facebook.com/GMCanadaManila" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>

            </div>

            <div class="col-sm-6">

              <div class="footer-contact">
                <h4>Contact Us</h4>
                <p>
                  <strong>TORONTO OFFICE</strong><br>
                  220 Consumers Road<br>
                  Suite 115H, North York<br>
                  Ontario, Canada <br>
                  <strong>Phone:</strong> +1 643 532 5939<br>
                  <strong>Fax:</strong> +1 153 145 2754<br>
                  <strong>Email:</strong> support@unifyimmigration.ca<br>
                </p>
                <!-- <p>
                  <strong>MANILA OFFICE</strong><br>
                  U248 Cityland Pioneer <br>
                  128 Pioneer St, Mandaluyong City<br>
                  Metro Manila, Philippines <br>
                  <strong>Telephone:</strong> +63 277 529 181<br>
                  <strong>Globe:</strong> +63 995 820 5181<br>
                  <strong>Smart:</strong> +63 939 460 9858<br>
                  <strong>Email:</strong> clientcare@globalmigration.ca<br>
                </p>
                <p>
                  <strong>CEBU OFFICE</strong><br>
                  U201, Mariepaz Suites<br>
                  18C Rosal St, Cor., Molave St.<br>
                  Cebu City, Philippines <br>
                  <strong>Telephone:</strong> +63 324 140 996<br>
                  <strong>Phone:</strong> +63 916 418 0622<br>
                  <strong>Email:</strong> info.cebu@globalmigration.ca<br>
                </p> -->
              </div>



            </div>

          </div>

        </div>

        <div class="col-lg-6">

          <div class="form">

            <h4>Send us a message</h4>
            <p>Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>


            <form action="contact-form.php" method="post">

              <div class="form-group">
                <input type="text" name="name" value="" class="form-control" placeholder="Your Name" />
              </div>
              <div class="form-group">
                <input type="text" name="email" value="" class="form-control" placeholder="Email Address" />
              </div>
              <div class="form-group">
                <input type="text" name="subject" value="" class="form-control" placeholder="Subject" />
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5"></textarea>
              </div>


              <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>

            </form>
          </div>

        </div>

      </div>

    </div>
  </div>
  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong>Unify Immigration Canada</strong>. All Rights
      Reserved
    </div>
    <div class="credits">
      Made by
      <a href="https://sharptel.pk/" target="_blank" rel="noopener noreferrer">Sharptel.pk</a>
    </div>
  </div>
</footer>
<script>
 $(document).ready(function() {
 

    $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 2000,
    stagePadding: 50,
    nav: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });
  var btn = $("#button");

  $(window).scroll(function() {
    if ($(window).scrollTop() > 500) {
      btn.addClass("show");
    } else {
      btn.removeClass("show");
    }
  });

  btn.on("click", function(e) {
    e.preventDefault();
    $("html, body").animate({
      scrollTop: 0
    }, "500");
  });



  window.onscroll = function() {
    var myheadheader = document.getElementById("myheader");
    if(myheadheader != null){
        if (window.pageYOffset > sticky) {
    myheadheader.classList.add("sticky");
  } else {
    myheadheader.classList.remove("sticky");
  }
    }
   
  };

  // Get the header
  var myheadheader = document.getElementById("myheader");
  if(myheadheader != null){
      
  // Get the offset position of the navbar
  var sticky = myheadheader.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
// function myFunction() {
  
// }

  }




  function sendEmail() {
    var name = $("#yourName");
    var email = $("#yourEmail");
    var subject = $("#toSubject");
    var body = $("#body");
    if (
      isNotEmpty(yourName) &&
      isNotEmpty(YourEmail) &&
      isNotEmpty(toSubject) &&
      isNotEmpty(body)
    ) {
      $.ajax({
        url: "sendEmail.php",
        method: "POST",
        dataType: "json",
        data: {
          name: yourName.val(),
          email: YourEmail.val(),
          subject: toSubject.val(),
          body: body.val(),
        },
        success: function(response) {
          $("#myForm")[0].reset();
          $(".sent-notification"), text("Message sent successfully");
        },
      });
    }
  }

  function isNotEmpty(caller) {
    if (caller.val() == "") {
      caller.css("border", "1 solid red");
      return false;
    } else {
      caller.css("border", "");
      return true;
    }
  }


});
    </script>
</body>
</html>