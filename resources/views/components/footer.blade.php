<!-- Footer Starts Here -->
<footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3 footer-item">
         <!-- <h4>BMA</h4>
          <p>Join With Us Today.</p>
          <ul class="social-icons">
            <li><a rel="nofollow" href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li> -->
          </ul>
        </div> 
        <div class="col-md-3 footer-item">
          <h4>Contact Us</h4>
          <ul class="menu-list">
            <li>
              <p>32 B,<br>Walmsley Place, <br> Great Sutton Street,<br> London, UK<br> United Kingdom</p>
           <!--    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.3072592303556!2d-0.1311486847988899!3d51.52592401717046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b3aabf40b7f%3A0x1e7a59aa53e24dfc!2sBMA%20House!5e0!3m2!1sen!2slk!4v1636617883913!5m2!1sen!2slk" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
            </li>
            <!-- <li><p>+44 207 874 7020</p></li> -->
          </ul>
        </div>
        <div class="col-md-3 footer-item">
          <h4>Additional Pages</h4>
          <ul class="menu-list">
            <li><a href="#">About Us</a></li>
            <li><a href="#">How We Work</a></li>
            <li><a href="#">Quick Support</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-item last-item">
          <h4>Contact Us</h4>
         <div class="contact-form">
            <form id="contact footer-contact" action="" method="post">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                  </fieldset>
                </div>
              </div>
            </form> 
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <div class="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Copyright &copy; 2014 - 2022 BMA.<a rel="nofollow noopener" href="" target="_blank">BMA</a></p>
        </div>
      </div>
    </div>
  </div>

    <!--Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <!--Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/accordions.js"></script>

  <script language = "text/Javascript"> 
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
    if(! cleared[t.id]){                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value='';         // with more chance of typos
        t.style.color='#fff';
        }
    }
  </script>

  <!-- The core Firebase JS SDK is always required and must be listed first 
<script src="https://www.gstatic.com/firebasejs/9.5.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.5.0/firebase.js"></script>

TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries 
<script src="https://www.gstatic.com/firebasejs/9.5.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.5.0/firebase-database.js"></script>

 Our script must be loaded after firebase references 
<script src="/assets/js/reg.js"></script> -->

</body>
</html>