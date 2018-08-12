<?php
/**
 * Created by PhpStorm.
 * User: Надюшечка
 * Date: 09.08.2018
 * Time: 18:54
 */
?>
<html>
<body>
<form method="POST">
    Login: <input type ="text" name="login" value="<?php echo $_POST['login'];?>" >
    E-mail: <input type ="text" name="email" value="<?php echo $_POST['email'];?>">
    UserName: <input type="text" name="username" value="<?php echo $_POST['username'];?>">
    <input type="submit" value = "Отправить">
</form>
<?php
echo "<br/>login = " . $_POST['login'];
echo "<br/>email = " . $_POST['email'];
echo "<br/>username = " . $_POST['username'];
?>

</body>
</html>