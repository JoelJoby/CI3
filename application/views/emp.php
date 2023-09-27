<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $page_title; ?> </title>
</head>
<body>
    <h1><?php echo $page_heading; ?></h1>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>Email</th>
        </tr>
        <!-- <tr>
            <td>1</td>
            <td>Ram</td>
            <td>ram@gmail.com</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Ramu</td>
            <td>ramu@gmail.com</td>
        </tr> -->

        <?php
            foreach($employees as $emp)
            {
                ?>
                <tr>
                    <td> <?php echo $emp['id']?> </td>
                    <td> <?php echo $emp['name'] ?></td>
                    <td> <?php echo $emp['email']?></td>
                </tr>
                <?php
            }
        ?>

    </table>  
</body>
</html>