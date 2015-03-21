<?php if (!defined('THINK_PATH')) exit();?><form method="post" action=<?php echo ($check_url); ?>>
	<input name="user" placeholder="user"> <br>
	<input type="password" name="passwd" placeholder="password"> <br>
	<input type="submit" value="login"> 
</form>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
$("input:submit").click(function () {
	user = $("input[name='user']").val();
	passwd = $("input[name='passwd']").val();
	$.ajax({
		type: "post",
		url: "<?php echo ($check_url); ?>", 
		data: {
			user: user,
			passwd: passwd
		},
		success: function (result) {
			if (result.code == 0) {
				window.location.href = "<?php echo ($success_url); ?>";
			} else {
				$("input:submit").before(result.message);
			}
		}
	});
	return false;
});
</script>