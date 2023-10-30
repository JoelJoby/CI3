<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>

    <h1>Contact Form</h1>
    <?php echo validation_errors(); ?>

    <?php echo form_open(); ?>
    <Table>
        <tr>
            <td>Name</td>
            <td><input type = "text" name ="name" id ="name" value = "<?php echo set_value('name'); ?>"></td>
        </tr>

        <tr>
            <td>Email Address</td>
            <td><input type = "text" name = "email" id = "email" value = "<?php echo set_value('email'); ?>"></td>
        </tr>

        <tr>
            <td>Mobile</td>
            <td><input type = "text" name = "mobile" id = "mobile" value = "<?php echo set_value('mobile'); ?>"></td>
        </tr>

        <!-- <tr>
            <td>Message</td>
            <td><textarea id = "message" name = "msg"> </textarea></td>
        </tr>

        <tr>
            <td>City</td>
            <td><input type = "text" name = "city" id = "city"></td>
        </tr>  -->

        <tr>
            <td><input type ="submit" name = "save" value = "Submit" ></td>
        </tr>
        
    </Table>

    <?php echo form_close(); ?>
    
</body>
</html>