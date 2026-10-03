
<?php
// php variable declaration ($)
$username = "BSIT BA 3104";
$user_id = 12356667;
$newname = "Jazmin"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Demo</title>
</head>
<body>
    <h1>
        <label>Username:</label>
        <?php echo $username;?>
        <br>
        <label>User ID:</label>
        <?php echo $user_id; ?>
        <br>
        <label>newname:</label>
        <?php echo $newname;?>
    </h1>

    <button type="button" onclick="greatUser()">Greet User</button>

    <script>

        let username = "<?php echo $username;?>";
        let userId = "<?php echo $user_id;?>";
        function greetUser(){
            alert("Hello" + username + "!" + " your user id is; "+ userId + "newname is Jazmin;");
        }
    </script>
</body>
</html>