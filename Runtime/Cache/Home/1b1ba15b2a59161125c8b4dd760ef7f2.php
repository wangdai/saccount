<?php if (!defined('THINK_PATH')) exit();?> <form method="post" action="login">
 	<input name="user"> <br>
 	<input name="passwd"> <br>
 	<input type="submit"> <br>
 </form>
 <?php echo ($error); ?>