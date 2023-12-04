<div class="jumbotron jumbotron-fluid bg-transparent hero section">
    <div class="container">
        <div class="row align-items-left">
            <div class="col-12 col-lg-12 col-xl-12 mx-auto">
                <div class="hero-content text-left">
                    <h2>Login Here</h2>

                    <?php
                        if($this -> session -> tempdata("error"))
                        {
                            echo "<div class ='alert alert-danger'>"."</div>";
                        }
                        if (validation_errors())
                        {
                            echo "<div class ='alert alert-danger'>" . validation_errors() . "</div>";
                        }
                    ?>

                    <form action="" method="post">
                        <table class = "table">
                        <tr>
                            <td>Email:</td>
                            <td>
                                <input value="<?php echo set_value("email"); ?>" class="form-control" type="text" placeholder="Enter your Email" name="email">
                            </td>
                        </tr>

                        <tr>
                            <td>Password:</td>
                            <td>
                                <input type="password" name="pwd" class="form-control" placeholder="Enter Your Password">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input class="btn btn-secondary" type="submit" value="Login" >
                            </td>
                        </tr>
                        </table>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>