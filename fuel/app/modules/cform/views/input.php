<form action="<?php echo Uri::base(); ?>confirm" method="post">
<p>
	名前：<br>
	<input type="text" name="name" value="<?php echo \Input::post('name'); ?>">
</p>
<p>
	メールアドレス：<br>
	<input type="text" name="email" value="<?php echo \Input::post('email'); ?>">
</p>
<p>
	内容：<br>
	<textarea name="memo" rows="6" cols="70"><?php echo \Input::post('memo'); ?></textarea>
</p>
<div>
	<input type="submit" name="submit" value="確認">
</div>
</form>