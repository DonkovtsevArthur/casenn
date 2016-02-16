<?php
$reg = '<li><form method="post"><button name="login" class="exit" type="submit">Регистрация</button></form></li>';
$reg11 = '<div class="col-md-4 col-md-offset-4">
		<form class="form-signin" id="avt" role="form" method="post">
		<input type="email" name="name2" class="form-control avt" placeholder="Введите Email" value="'.@$_POST['name2'].'" required autofocus>
		<input type="password" name="password2" class="form-control" placeholder="Введите пароль" required>
		<input type="password" name="password3" class="form-control" placeholder="Повторите пароль" required>
		<button class="buttom1-1 text-center" name="sing2" type="submit">Регистрация</button>
		</form>	         			
		</div>';
$reg22 = '	<div class="col-md-4 col-md-offset-4">			 
	<form class="form-signin" id="avt" role="form" method="post">
        <input type="email" name="name" class="form-control avt" placeholder="Введите Email" value="'.@$_POST['name'].'" required autofocus>
        <input type="password" name="password" class="form-control" placeholder="Введите пароль" required>    
        <button class="buttom1-1 text-center" name="sing" type="submit">Войти</button>
      </form>
	  </div>';
$adds = '<div class="col-md-12">
			<form enctype="multipart/form-data" action="" method="POST">
				<input class="buttom2 text-center" type="submit" name="adds" value="Добавить" />
			</form>
		</div>';
$add = '<form enctype="multipart/form-data" action="" method="POST">
<h4 style="color:#fff;">Добавить смартфон </h4>
		<div>
			<span style="color:#fff;">Картинка </span><input name="userfile" type="file"/>
		</div>
		<div>
			<span style="color:#fff;">Название смартфона </span><input type="text" name="name" placeholder="например:Nokia X2">
		</div>
		<div>
			<span style="color:#fff; padding-right: 44px;">Объем памяти </span><input type="text" name="memory" placeholder="например:256Mb">
		</div>
		<div>
			<span style="color:#fff; padding-right: 104px;">Связь </span><input type="text" name="wwlan" placeholder="например:3g">
		</div>
		<input class="buttom2 text-center" type="submit" name="add" value="Добавить" />
		</form>';
		
$eror = '<p class="eror"> Не верный email или пароль</p>';
$spa = '<p class="eror"> Спасибо за регистрацию! Введите свой Email и пароль.</p>';
?>