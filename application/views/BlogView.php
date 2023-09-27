<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Article</title>
</head>
<body>
    <h1>All Articles</h1>

    <?php
        if(count($articles) > 0)
        {
            ?>
            <ul>
                <?php foreach($articles as $art)
                        {
                            echo "<li>". $art['title'] . "</li>";
                        }
                 ?>
            </ul>
            <?php
        }
        else 
        {
            echo "NO records Found";
        }


    ?>
    
</body>
</html>