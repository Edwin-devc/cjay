<?php include '../connection.php'; ?>
<?php include '../template/head.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php include '../template/sidebar.php'; ?>
        <?php include '../template/header.php'; ?>
            <div class="container tab-container">
                <div class="row gap-5 px-1">
                    <div class="col bg-primary dashboard-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col dashboard-tab-icon">
                                    <i class="bi bi-people-fill text-white"></i>
                                </div>
                                <div class="col text-white text-center">
                                    <h2 class="fw-bold mt-3">
                                        <?php
                                            $stmt = $conn->prepare('SELECT * FROM subscriber');
                                            $stmt->execute();
                                            $numRows = $stmt->rowCount();
                                             echo $numRows;
                                        ?>
                                    </h2>
                                    <p class="fw-bold">Subscribers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col bg-success dashboard-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col dashboard-tab-icon">
                                    <i class="bi bi-image-fill text-white"></i>
                                </div>
                                <div class="col text-white text-center">
                                    <h2 class="fw-bold mt-3">
                                        <?php
                                            $stmt=$conn->prepare('SELECT * FROM photos');
                                            $stmt->execute();
                                            $numRows = $stmt->rowCount();
                                            echo $numRows;
                                        ?>
                                    </h2>
                                    <p class="fw-bold">Photos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col bg-warning dashboard-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col dashboard-tab-icon">
                                    <i class="bi bi-newspaper text-white"></i>
                                </div>
                                <div class="col text-white text-center">
                                    <h2 class="fw-bold mt-3">6</h2>
                                    <p class="fw-bold">Newsletters</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- table -->
            <div class="px-3 mt-3">
                <h3>Subscribers</h3>
                <?php
                    $stmt = $conn->prepare("SELECT email FROM subscriber");
                    $stmt->execute();

                    echo "<table class='table table-striped pt-5'>";
                    echo "<tr>";
                    echo "<th>#</th>";
                    echo "<th>Email</th>";
                    echo "<th>Status</th>";
                    echo "</tr>";
                    $count = 1;
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" . $count++. "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>Active</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                ?>
            </div>

            <div class="row mx-1">
                <div class="col">
                    <h4 class="text-primary">Photos</h4>
                </div>

                <div class="col">
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-plus"></i>
                        Add photo
                    </button>
                </div>

            </div>
            <div class="mx-3 mt-2">
                <?php
                $stmt = $conn->prepare("SELECT file_name, category, uploaded_on FROM photos");
                $stmt->execute();
                echo "<table class='table table-striped'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>#</th>";
                echo "<th>Image</th>";
                echo "<th>Category</th>";
                echo "<th>Date</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                $count = 1;
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                {
                        echo "<tr>";
                        echo "<td>";
                            echo $count++;
                        echo "</td>";
                        echo "<td>";
                        echo "<img class='img-fluid' width='60px' src='../images/".$row['file_name']."'>";
                        echo "</td>";
                        echo "<td>".$row['category']."</td>";
                        echo "<td>".$row['uploaded_on']."</td>";
                        echo "</tr>";
                }

                echo "</tbody>";
                echo "</table>";
                $conn = null;
                ?>
            </div>

<!--    add photos form modal   -->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Photo</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="upload.php" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <label for="category-name" class="col-form-label">Category:</label>
                                <input type="text" class="form-control" id="category-name" name="category">
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" type="file" name="image" value="">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-secondary" type="reset" value="Cancel"/>
                                <input class="btn btn-success" name="upload" type="submit" value="Upload">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
            <div class="">

            </div>
        </main>

    </div>
</div>

<?php include '../template/footer.php'; ?>
