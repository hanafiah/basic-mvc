<?php
$host = 'localhost';
$dbname = 'kreydle';
$user = 'root';
$pass = '';

try {
    //$dbh , database handler aka db handler
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    $stmt = $dbh->query("SELECT * FROM users", PDO::FETCH_ASSOC);

    //close db handler
    $dbh = null;
} catch (PDOException $e) {
    echo "ouch!... ada ralat.";
    file_put_contents('error_log.txt', $e->getMessage() . PHP_EOL, FILE_APPEND);
}

function get_users()
{
    global $stmt;
    return $result = $stmt->fetchAll();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $users = get_users();
        foreach ($users as $user) {
            echo $user['firstname'];
            echo ' ';
            echo $user['lastname'];
            echo '<br/>';
        }
        ?>
    </body>
</html>
