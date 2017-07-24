<?php
if(isset($_POST['submit'])){
$msg= 'Name:' .$_POST['name']."\n"
	.'Comment:' .$_POST['comment'];
mail('lamigaroma@gmail.com','Sample contact as page',$msg)
} else {
exit(0);
}
?>