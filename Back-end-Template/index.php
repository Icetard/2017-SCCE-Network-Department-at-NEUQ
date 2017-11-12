<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后端介绍</title>
</head>
<body>
<form method="get" action="index2.php">
    <input name="num1" value="" type="text">
    <input name="num2" value="" type="text">
    <input type="submit">
</form>
<form method="post" action="index2.php">
    <input name="num1" value="" type="text">
    <input name="num2" value="" type="text">
    <input type="submit" value="确认">
</form>
<p>结果为:<?php if( isset($_GET['result'])) echo $_GET['result'] ;?></p>

</body>
</html>