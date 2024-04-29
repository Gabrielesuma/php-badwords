<?php
    var_dump($_POST);
    $word = $_POST['firstWord'];
    $badword = $_POST['secondWord'];
    $censored = str_replace($badword, '***', $badword);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $word?></p>
    <span><?php echo $badword?></span>

    <p><?php echo $word?></p>
    <span><?php echo $censored?></span>
</body>
</html>