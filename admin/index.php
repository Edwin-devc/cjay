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
                                    <h2 class="fw-bold mt-3">56</h2>
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
                                    <h2 class="fw-bold mt-3">12</h2>
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
                    $stmt = $conn->prepare("SELECT sub_id, email FROM subscriber");
                    $stmt->execute();

                    echo "<table class='table table-striped pt-5'>";
                    echo "<tr>";
                    echo "<th>#</th>";
                    echo "<th>Email</th>";
                    echo "<th>Action</th>";
                    echo "</tr>";

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" . $row['sub_id'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td><i class='bi bi-trash-fill text-primary mx-4'></i></td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                $conn = null;
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
<!--    add photos form modal   -->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Photo</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Category:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">upload</button>
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
