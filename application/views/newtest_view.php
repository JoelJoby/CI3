<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helper Form</title>
</head>
<body>
    <h1>Basic Form</h1>

    <!-- WE can  also use the function form_open
            echo form_open(); -->
    <form method="POST" action="" >
        <table>
            <tr>
                <td>Username : </td>
                <td><input type="text" name = "uname" ></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo form_input("email");  ?></td>
            </tr>
            <tr>
                <td>Mobile:</td>
                <td><input type="text" name = "mobile"></td>
            </tr>
            <tr>
                <td>Message:</td>
                <td><textarea name="message" id="" cols="30" rows="10"></textarea></td>
            </tr>
        </table>

    <!-- <?php echo form_input("ename","Enter your Name"); ?> -->
    <?php  echo form_submit("save","SUBMIT"); ?>
    </form>
    
</body>
</html>