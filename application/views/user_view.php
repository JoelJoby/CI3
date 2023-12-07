<body>
    <div class="wrapper">
        <div class="cover">

            <!-- Hero -->
            <div class="jumbotron jumbotron-fluid bg-transparent hero section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-10 col-xl-9 mx-auto">
                            <div class="hero-content text-center">
                                <h1 class="hero-title">Lorem ipsum dolor sit amet placerat nunc urna.</h1>
                                <!-- Empty Space -->
                                <div class="space-md"></div>
                                <!--/ End Empty Space -->
                                <p class="lead lead-lg">Cras aliquam, urna sed bibendum placerat.</p>
                                <!-- Empty Space -->
                                <div class="space-lg"></div>
                                <!--/ End Empty Space -->
                                <a href="<?= base_url()?>HomePage/articles" class="btn btn-lg btn-primary btn-outline-primary">Get started for free</a> 
                                <span class="d-none d-lg-inline px-4 btn-or">or</span> <a href="#" class="btn btn-lg btn-text">Know More about us</a>

                                <div class="space-lg"></div>

                                <table class = "table">

                                    <tr>
                                        <td>Name:</td>
                                        <td><?php echo $userinfo -> uname; ?> </td>
                                    </tr>

                                    <tr>
                                        <td>Email</td>
                                        <td><?php echo $userinfo -> email; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Phone Number</td>
                                        <td><?php echo $userinfo -> mobile; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Gender</td>
                                        <td><?php echo $userinfo -> gender; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Date Of Joining</td>
                                        <td><?php echo date($userinfo -> created_at) ;?></td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Hero -->
        </div>
    </div>   
</body>