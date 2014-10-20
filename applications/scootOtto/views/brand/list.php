<html>
    <head>
        <title>Brand list</title>
    </head>
    <body>
    <?php
        foreach($brands as $brand)
        {
            echo $brand->name.'</br>';
        }
    ?>
    </body>
</html>