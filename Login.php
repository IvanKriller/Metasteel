<?php
require 'header.php'
?>
<link rel="stylesheet" href="Style\Style.css" type="text/css">
<link rel="stylesheet" href="Style\Login.css" type="text/css">

	
<div class='block'>
<div class="block_log">
<div class='in'>Войти в профиль
</div>	
<div class='forma'>
<input placeholder="Email" id='log_Email'>
<input placeholder="Пароль" id='log_Parol'>
<button id='Login' onclick='opoov2()'>Войти</button>
 <script src = "script\login.js"></script>
</div>
</div>
<div class="block_reg">
<div class='in'>Регистрация профиля
</div>	
<div class='forma'>
<input placeholder="Email" id='Reg_Email'><br>
<input placeholder="Номер телефона" id='Phone_number_reg'>
<input placeholder="Пароль" id='Reg_Parol'>
<input placeholder="Пароль" id='Reg_Parol_povt'>
<button id='Registr' onclick='opoov2()'>Регистрация</button>
<script src = "script\login.js"></script>
</div>
</div>
</div>
</div>
<?php
require 'footer.php'
?>

</body>
</html>