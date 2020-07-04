<?php
if(isset($_POST['submit'])){
$to = "anrejfrolov680@gmail.com";
$from = $_POST['email'];
$first_name = $_POST['first_name'];
$subject = "Форма отправки сообщений с сайта";
$message = $first_name . " оставил сообщение:" . "\n\n" . $_POST['message'];
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Сообщение отправлено. Спасибо Вам " . $first_name . ", мы скоро свяжемся с Вами.";
echo "<br /><br /><a href='https://boryagames.github.io/FireCats/'>Вернуться на сайт.</a>";
}
?>
