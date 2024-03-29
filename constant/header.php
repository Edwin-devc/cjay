<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <a href="./index.php" class="logo me-auto"><img src="./assets/images/logo.jpg"alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a id="n-link" class=" " href="./index.php">Home</a></li>
                <li><a id="n-link" class=" " href="./about.php">About</a></li>
                <li><a id="n-link" class=" " href="./services.php">Services</a></li>
                <li><a id="n-link" class=" " href="./projects.php">Projects</a></li>
                <li><a id="n-link" class=" " href="tel:078-516-6587">+256785166587</a></li>
                <li><a id="n-link" class=" " href="./contact.php">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="./login.view.php" class="get-started-btn">Login</a>
        <script>
             const nLink = document.getElementById("n-link");
            nLink.addEventListener("click",() => {
                if(nLink.classList.contains("active")) {
                    nLink.classList.remove("active");
                } else {
                    nLink.classList.add("active");
                }
            });
        </script>

    </div>
</header><!-- End Header -->
