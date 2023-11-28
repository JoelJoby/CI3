<div class="jumbotron jumbotron-fluid bg-transparent hero section">
    <div class="container">
        <div class="row align-items-left">
            <div class="col-12 col-lg-12 col-xl-12 mx-auto">
                <div class="hero-content text-left">
                    <h2>Register Form</h2>

                    <?php 
                    if ($this -> session -> tempdata("error"))
                    {
                        echo "<p class = 'alert alert-danger'>" . $this -> session -> tempdata("error") . 
                        "</p>"; 
                    }

                    if ($this -> session -> tempdata("success"))
                    {
                        echo "<p class = 'alert alert-success '>" . $this -> session -> tempdata("succcess") . 
                        "</p>"; 
                    }
                    ?>
                    <form action="" method="post">

                        <table class="table">

                            <tr>
                                <td>Name:</td>
                                <td>
                                    <input class ="form-control" type="text" placeholder="Name" name="uname">
                                    <?php echo form_error("uname"); ?>
                                </td>
                            </tr>

                            <tr>
                                <td>Email:</td>
                                <td>
                                    <input class='form-control' type="text" placeholder="Email" name="email">
                                    <?php echo form_error("email"); ?>
                                </td>
                            </tr>

                            <tr>
                                <td>Gender:</td>
                                <td>
                                    <input type="radio" name="gender" value="male"> Male
                                    <input type="radio" name="gender" value="female"> Female
                                    <input type="radio" name="gender" value="other"> Other
                                </td>
                            </tr>

                            <tr>
                                <td>Mobile:</td>
                                <td>
                                    <!-- <select>
                                        <option value="+91">+91</option>
                                        <option value="+92">+92</option>
                                        <option value="+93">+93</option>
                                        <option value="+94">+94</option>
                                        <option value="+95">+95</option>
                                    </select> -->
                                    <input class = 'form-control' type="phone" placeholder="Enter the mobile" name="mobile">
                                </td>
                            </tr>

                            <tr>
                                <td>Password:</td>
                                <td>
                                    <input class = 'form-control' type="password" placeholder="Password" name="pwd">
                                    <?php echo form_error("pwd"); ?>
                                </td>
                            </tr>

                            <tr>
                                <td>Confirm Password:</td>
                                <td>
                                    <input class = 'form-control' type="password" placeholder="Confirm Password" name="cpwd">
                                    <?php echo form_error("cpwd"); ?>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td><input class ='btn btn-primary' type="submit" value="Registration"></td>
                            </tr>

                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>