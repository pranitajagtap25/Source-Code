  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>कृषी सेवा</h3>
            <p>
            Office No B63<br>B Wing Jai ganesh vision<br>
            Shubhashri Residency Ganga Nagar<br> Akurdi
            Pune Pimpri-Chinchwad, Maharashtra - 411031 <br><br>
              <strong>Phone:</strong> +91 97666 06772<br>
              <strong>Email:</strong> hr@krmunited.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="displayarticles.php?articletype=Blog">Blog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="displayarticles.php?articletype=News">News</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="displayproducts.php">Farmer's Kit</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="displaysales.php">Farmer's Market</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="aboutus.php">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="displayworkers.php">Hire</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
			<?php
			if(isset($_SESSION['adminid']))
			{
			?>
            <h4>Staff Dashboard</h4>
            <p>This feature is Available only for Staff or Administrator</p>
            <button class="btn btn-info" type="submit" onclick="window.location='adminpanel.php';">Dashboard</button>
			<?php
			}
			else
			{
			?>
            <h4>Staff Login</h4>
            <p>This feature is Available only for Staff or Administrator</p>
            <button class="btn btn-info" type="submit" onclick="window.location='adminloginpanel.php';">Click here to Login</button>
			<?php			
			}
			?>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span> KRM UNITED SOFTWARE. </span></strong>All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://krmunited.com/">KRM UNITED Software PVT.LTD</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  <script src="assets/js/jquery.dataTables.min.js"></script>
  <link href="assets/js/dataTables.responsive.min.js" rel="stylesheet">
  
<script>
$(document).ready( function () {
    $('#datatable').DataTable();
	
} );
</script>
</body>

</html>