<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/reset.css" />
	<link rel="stylesheet" type="text/css" href="./css/home.css" />
	<title>Document</title>
</head>

<body>
	<header>

		<img src="../../img/logo.png" alt="" class="logo">
	</header>
	<div class="main-text">ホーム</div>
	<p class="text"><img src="../../img/home.png" alt="" class="home-img"><a onclick="location.href='./home.blade.php'">ホーム</a>
	</p>
	<p class="text"><img src="../../img/logout.png" alt="" class="logout-img"><a onclick="location.href='./login.blade.php'">ログアウト</a>
	</p>
	<div class="share-box">
		<p class="share">シェア</p>
		<div class="shares">
			<input type="text" name="text"><br>

			<button class="share-button" type="button">
				シェアする
			</button>
		</div>
	</div>
</body>

</html>