<?php
    $email = "6015261015@rbru.ac.th";
    $name = "Naruemit Boonseng";
    $url = "stu2.rbru.ac.th/~s6015261015";
?>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo "$name";?></title>
</head>
<body>
    <?php
        echo "<h1>$email</h1>";
        echo "<h2>$name</h2>";
        echo "<a href=\"$url\" >$name<a?>";
    ?>
</body>
</html>