<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action='' method = "post">
    <label>Введите Ваше любимое блюдо
    </label><br>
    <input type="text"  id="pole" name="pole">
    <input type="button" value="Отправить">
</form>
<?php
$food = $_POST['pole'];
echo  $food;

?>
</body>
</html>