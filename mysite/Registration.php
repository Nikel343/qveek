<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/stylereg.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<? require_once ('header.php'); ?>
    <div class="reg animated bounceInRight">
        <h1 align="center">Регистрация</h1></div>
    <div class="form">
        <form action="saveUser.php" name="reg" method="post" align="center">
            <table width="100" cellspacing="0" cellpadding="5" align="center">
                <tr>
                    <td text-align="right"><b>Логин</b></td>
                    <td>
                        <input type="login" placeholder="Логин" size="16px" maxlength="15">
                    </td>
                </tr>
                <tr>
                    <td text-align="right"><b>Пароль</b></td>
                    <td>
                        <input type="password" placeholder="Пароль" size="16px" maxlength="15">
                    </td>
                </tr>
                <br>
                <tr>
                    <td text-align="right"><b>Почта</b></td>
                    <td>
                        <input type="mail" placeholder="Почта" size="16px" maxlength="20">
                    </td>
                </tr>
            </table>
            <br>
            <input type="submit" value="Зарегистрироваться">
        </form>
    </div>
    <br>
    <div class="regref">
        <a href=" index.php ">На главную</a>
    </div>

    <? require_once ('footer.php'); ?>