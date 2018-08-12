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
<form method="GET" action="script.php">
    Login: <input type ="text" name="login" value="<?php echo $_GET['login'];?> >
    E-mail: <input type ="text" name="email" value="<?php echo $_GET['email'];?>>
    UserName: <input type="text" name="username" value="<?php echo $_GET['name'];?>>
    Age:<input type="text" name="age"value="<?php echo $_GET['age'];?>>
    Data: <input type="checkbox" name="data">
    <input type="submit" value = "Отправить">
</form>

</body>
</html>