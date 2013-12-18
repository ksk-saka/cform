<script type="text/javascript">	
	function toSend()
	{
		document.getElementById('form').action = '<?php echo Uri::base(); ?>confirm/send';
	}
	function toInput()
	{
		document.getElementById('form').action = '<?php echo Uri::base(); ?>input';
	}
</script>

<form id="form" action="<?php echo Uri::base(); ?>confirm" method="post">
<p>
	名前：<br>
	<?php echo $input['name']; ?>
	<input type="hidden" name="name" value="<?php echo $input['name']; ?>">
</p>
<p>
	メールアドレス：<br>
	<?php echo $input['email']; ?>
	<input type="hidden" name="email" value="<?php echo $input['email']; ?>">
</p>
<p>
	内容：<br>
	<?php echo $input['memo']; ?>
	<input type="hidden" name="memo" value="<?php echo $input['memo']; ?>">
</p>
<div>
	<input type="submit" name="submit" value="送信" onclick="toSend();">
	<input type="submit" name="submit" value="戻る" onclick="toInput();">
</div>
</form>