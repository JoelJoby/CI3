<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactds View List</title>
</head>
<body>
    <h1>Contacts View List</h1>

    <?php
        if(count($records) > 0)
        {
            ?>
            <table border="1">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Mobile</th>
                    <th>Messages</th>
                    <th>City</th>
                </tr>
                <?php
                    foreach($records as $res)
                    {
                     ?>
                    <tr>
                        <td><?php echo $res->id; ?></td>
                        <td><?php echo $res->name; ?></td>
                        <td><?php echo $res->email; ?></td>
                        <td><?php echo $res->date; ?> </td>
                        <td><?php echo $res->mobile; ?></td>
                        <td><?php echo $res->message; ?></td>
                        <td><?php echo $res->city; ?></td>
                    </tr>
                    <?php
                    } 
                    ?>
            </table>
            <?php
        }
        else
        {
            echo "<p> Sorry! No Records Found</p>";
        }
        ?>

</body>
</html>

   