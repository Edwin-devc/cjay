<?php
include 'connection.php';
include 'constant/head.php';
include 'constant/header.php';
?>
<main id="main" data-aos="fade-in">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">
    <h2>Projects</h2>
    <p>Cjay Home Solutions has worked on and Completed a series of cleaning Projects
      with 100% customer satisfaction.
    </p>
  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Trainers Section ======= -->
<section id="trainers" class="trainers">
  <div class="container" data-aos="fade-up">

    <div class="row" data-aos="zoom-in" data-aos-delay="100">
      <?php
        $smt = $conn->prepare('SELECT file_name FROM photos');
        $smt->execute();
        while ($row=$smt->fetch(PDO::FETCH_ASSOC)) {
            echo "<div class='col-4 mt-4'>";
                echo "<img class='img-fluid' src='images/".$row['file_name']."'>";
            echo "</div>";
        }
        $conn = null;
      ?>
    </div>

  </div>

</section><!-- End Trainers Section -->

</main><!-- End #main -->
<?php include 'constant/footer.php'; ?>