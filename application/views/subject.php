<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of subject</title>
</head>
<body>
    <h1>List OF subject</h1>

    <?php
        print_r ($subjects);
    ?>


    <ul>
        <?php
            foreach($subjects as $v)
            {
                ?>
                <li><?php echo $v; ?></li>
                <?php

            }
        ?>

        <!-- <li>Html</li>
        <li>Css</li>
        <li>Java script</li>
        <li>bootstrap</li> -->

    </ul>
    
</body>
</html>