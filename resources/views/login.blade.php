<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,
	 initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/reset.css" />
	<link rel="stylesheet" type="text/css" href="./css/index.css" />
	<title>Document</title>
</head>

<body>
	<header>
		<img src="../../img/logo.png" alt="" class="logo">
		<ul class="nav-list">
			<li class="nav-list-item"><a onclick="location.href='./register.blade.php'">新規登録</a></li>
			<li class="nav-list-item"><a onclick="location.href='./login.blade.php'">ログイン</a></li>
		</ul>
	</header>
	<div class="main-item">
		<div class="box">
			<p class="text">
				ログイン
			</p>
			<ul class="box-text">
				<li class="box-text-item"><input type="text" placeholder="メールアドレス" name="mail"></li>
				<li class="box-text-item"><input type="text" placeholder="パスワード" name="password"></li>
			</ul>
			<button class="favoritestyled" type="button" onclick="location.href='./home.blade.php'">
				ログイン
			</button>
		</div>
	</div>
</body>

</html>