<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>先輩コンタクトフォーム - <?php echo $title; ?></title>
</head>

<body>
    <h1>先輩コンタクトフォーム</h1>
    <div id="wrapper">
		<?php echo \Session::get_flash('success'); ?>
		<?php echo \Session::get_flash('error'); ?>
        <?php echo $content; ?>
        <hr>
        <p class="footer">
            Powered by <?php echo Html::anchor('http://fuelphp.com/', 'FuelPHP'); ?>
        </p>
    </div>
</body>
</html>