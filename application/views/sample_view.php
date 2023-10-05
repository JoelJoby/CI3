<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Helper</title>
</head>
<body>
    <?php echo heading("URL HELPER",1); ?>

        <p>Base URL : <?php echo base_url(); ?></p> 
        <p>Site URL : <?php echo site_url(); ?></p>
        <p>Current URL :<?php echo current_url(); ?></p>
        <p>URI String : <?php echo uri_string(); ?></p>
        <p>Index Page : <?php echo index_page(); ?></p>
    
</body>
</html>