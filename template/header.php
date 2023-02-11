<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="container">
            <div class="row header-container">
                <div class="col-11">
                    <h6 id="current-date"></h6>
                </div>
                <div class="col">
                    <div class="dropdown">
                        <a class="" href="#" role="" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src=".././assets/images/team/portrait.jpg" alt="" class="img-fluid rounded-circle" width="30px">
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-key-fill"> </i>
                                    Change Password
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-people-fill"> </i>
                                    Add User
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-power"> </i>
                                    Log Out
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>


<!-- current date -->
    <script>
        document.getElementById("current-date").innerHTML = Date();
    </script>
