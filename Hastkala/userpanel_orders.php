<?php include './includes/header.php'?>
<section class="index-section mb-5" style="color: #5fbeaa !important; background-color: #313a43 !important;">
        <div class="page-content">
            <div class="mb-1 text-center">
                <h1 class="font-weight-bold">YOUR ORDERS</h1>
            </div>
        </div>

    </section>
    <section>
        <div class="container">
            <div class="row mb-5 overflow-auto">
                <div class="col-lg-8 col-xl-9">
                    <table class="table ">
                        <thead style="color: #5fbeaa !important; background-color: #313a43 !important;">
                            <tr>
                                <th>ORDER#</th>
                                <th>DATE</th>
                                <th>TOTAL</th>
                                <th>STATUS</th>
                                <th>ACTION</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">#1701</td>
                                <td>02/12/2020</td>
                                <td>Rs.3000</td>
                                <td>
                                    <p class="bg-info w-75 pl-2 pr-2 pt-1 pb-1">BEING PREPARED</p>
                                </td>
                                <td><a href="./orderno_1701.php" class="btn btn-outline-dark">VIEW</a></td>

                            </tr>
                            <tr>
                                <td scope="row">#101</td>
                                <td>02/01/2021</td>
                                <td>Rs.1780</td>
                                <td>
                                    <p class="bg-warning w-75 pl-2 pr-2 pt-1 pb-1">ACTION NEEDED</p>
                                </td>
                                <td><a href="#" class="btn btn-outline-dark">VIEW</a></td>

                            </tr>
                            <tr>
                                <td scope="row">#11</td>
                                <td>21/12/2020</td>
                                <td>Rs.580</td>
                                <td>
                                    <p class="bg-success w-75 pl-2 pr-2 pt-1 pb-1">RECIEVED</p>
                                </td>
                                <td><a href="#" class="btn btn-outline-dark">VIEW</a></td>

                            </tr>
                            <tr>
                                <td scope="row">#2002</td>
                                <td>02/03/2021</td>
                                <td>Rs.2890</td>
                                <td>
                                    <p class="bg-danger w-75 pl-2 pr-2 pt-1 pb-1">CANCELLED</p>
                                </td>
                                <td><a href="#" class="btn btn-outline-dark">VIEW</a></td>

                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xl-3 col-lg-4 mb-5">

                    <div class="card border-secondary">
                        <center> <img class="card-img-top mt-5 mr-5 ml-5 mb-2 p-0" src="./assets/images/images.jpg" alt="">
                            <p class="mb-0">Jane Doe</p>
                            <p class="text-muted mt-0">Georgia,Washington D.C</p>
                        </center>
                        <div class="card-body p-0">
                            <a href="./userpanel_orders.php" class="btn w-100 border-user m-0 text-left active-panel"><i class="mx-2 fa fa-shopping-bag" aria-hidden="true"></i> Orders <div class="order-number float-right text-center">5</div></a>
                            <a href="./userpanel_profile.php" class="btn w-100 border-user m-0 text-left bg-light"><i class="mx-2 fa fa-user-o" aria-hidden="true"></i> Profile</a>
                            <a href="./userpanel_invoice.php" class="btn w-100 border-user m-0 text-left bg-light"><i class="mx-2 fa fa-map-pin" aria-hidden="true"></i> Addresses</a>
                            <a href="./index.php" class="btn w-100 border-user m-0 text-left bg-light"><i class="mx-2 fa fa-sign-out" aria-hidden="true"></i> Logout</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<?php include './includes/footer.php'?>