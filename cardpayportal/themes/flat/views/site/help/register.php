<?
	$this->title = 'Регистрация';
?>

<h2><?=$this->title?></h2>

<p>
	Чтобы войти в Систему, нужно зарегистрироваться по <a href="<?=url('site/register')?>">этой ссылке</a>, 
	придумать:<br /><br /> 
	<strong>Логин</strong>(латинские буквы, цифры, знак подчеркивания, пр. example_user1),<br />
	<strong>Пароль</strong>(любые символы),<br />
	<strong>Имя</strong>(русские или английские буквы),<br />
 	выбрать <strong>Тип пользователя</strong> (О типах пользователей вы можете прочитать в разделе: <a href="<?=url('site/help', array('page'=>'about'))?>">О системе</a>)	
</p>

<p>
	Если вы уже вошли в Систему, то перед регистрацией нового пользователя нужно сначала <a href="<?=url('site/exit')?>">выйти</a>
</p>

<h5>Возможные ошибки:</h5>

<p>
	<font color="red">Логин уже занят другим пользователем</font> - придумайте уникальный логин
</p>

<p>
	<font color="red">Имя уже занято другим пользователем</font> - придумайте уникальное имя пользователя
</p>

<p>
	<font color="red">Неверная длина пароля</font> - минимальная длина пароля 3 символа, максимальная 20.
</p>