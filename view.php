<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        foreach ($users as $user) {
            echo $user['firstname'];
            echo ' ';
            echo $user['lastname'];
            echo '<br/>';
        }
        ?>
    </body>
</html>