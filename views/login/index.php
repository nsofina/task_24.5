<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/views/header.php';?>

<div id="login_page">

<?php if(isset($this->arResult['ERROR'])) {?>
<p class="error">
    <?=$this->arResult['ERROR'] ?>
</p>
<?}?>
<form name="form_login" method="post" action="/mvc/login/login/">
<h2>Войти</h2>
<label for="login">Логин</label>
<br/>
<input type="text" name="login" value="" placeholder="login" id="login"/>
<br/>
<label for="password">Пароль</label>
<br/>
<input type="password" name="password" value="" placeholder="password" id="password"/> 
<br/>
<input id="button" type="submit" value="Авторизоваться"/>
</form>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/mvc/views/footer.php';?>