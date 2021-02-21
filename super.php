<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">

    <title>Document</title>
</head>
<body>
    <h1> $_GET demonstration </h1>
<h2> Movie Title: <?php echo htmlspecialchars($_GET['title']); ?></h2>
<h3> year released: <?php echo htmlspecialchars($_GET['year']);?> </h3>
<h4> revenue: <?php echo htmlspecialchars($_GET['Revenue']);?></h4>
<?php echo 'htmlspecialchars <img src=  https://target.scene7.com/is/image/Target/GUEST_5fb95e9e-f3b4-4ed6-a3fa-9fea45d23681?wid=488&hei=488&fmt=pjpeg ($_GET["img"])'?>

</body>
</html>