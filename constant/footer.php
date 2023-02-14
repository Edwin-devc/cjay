<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>CJAY</h3>
                    <p>
                        Kanjokya house, Plot 90 Kanjokya St, Kampala
                        <br>
                        <strong>Phone:</strong> <span style="font-family:'Times New Roman', Times, serif;">+256 785 166 587</span><br>
                        <strong>Email:</strong> cjayhomesolutions@gmail.com<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="./index.php">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="./about.php">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="./services.php">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="./projects.php">Projects</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="./contact.php">Contact us</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Fumigation</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Disinfection services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Compound cleaning</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Roof tile cleaning</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Laundary & dry cleaning</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Join Our Newsletter</h4>
                    <p>Receive our updates and hacks on cleaning your home and office space hustle free</p>
                    <form action="" method="post">
                        <input type="email" name="email" required />
                        <input type="submit" name="subscribe" value="Subscribe"/>
                    </form>
                    <?php

                        if (isset($_POST['subscribe']))
                        {
                            include './connection.php';
                            $sql = "INSERT INTO subscriber (email) VALUE (?)";
                            $stmt = $conn->prepare($sql);
                            $stmt->execute([$_POST['email']]);
                            $conn = null;
                        }

                    ?>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>Cjay Home Solutions</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="#">Edwin Rwakasiisi</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="./assets/vendor/purecounter/purecounter.js"></script>
<script src="./assets/vendor/aos/aos.js"></script>
<script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="./assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="./assets/js/main.js"></script>

</body>

</html>