

<!DOCTYPE html>
<html>
<div class="inner">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/ress.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
		<title>Reservation | mauve</title>
	</head>

	<body class="reservation_body">
		<header>
			<a class="header__logo" href="index.html"></a>
			<div class="header__nav">
				<ul>
					<a href="menu.html">
						<li id="nav_menu">Menu</li>
					</a>
					<a href="reservation.html">
						<li id="nav_reserve">Reservation</li>
					</a>
					<a href="access.html">
						<li id="nav_access">Access</li>
					</a>
					<a href="gallery.html">
						<li id="nav_gallery">Gallery</li>
					</a>
					<a href="https://www.instagram.com/mami_morishita">
						<li id="nav_insta">Instagram</li>
					</a>
					<a href="https://ameblo.jp/mauanail/">
						<li id="nav_blog">Blog</li>
					</a>
				</ul>
			</div>
		</header>
		<main class="reservation_main">
			<section class="warning">
				<div class="warning_h3">
					<h3>注意点</h3>
				</div>
				<div class="warning-p">
					<p>※リペア・長さ出し・その他メニューをご希望の方はメッセージにご記入ください。</p>
					<p>※ご予約希望日の2日前まではメールフォームからのご予約を承ります。前日・当日をご希望のお客様はお手数ですがお電話にてご予約をお願い致します。</p>
					<p>※メンズネイルは友人・ご紹介・女性同伴のみとさせていただいております。</p>
				</div>
			</section>
			<section class="type">
				<div class="type__btn">
					<h3>LINE予約</h3>
					<a href="#">
						<input type="button" value="LINEで予約する"></a>
				</div>
				<div class="type__btn">
					<h3>Instagram予約</h3>
					<a href="#">
						<input type="button" value="Instagramで予約する"></a>
				</div>
				<div class="type__btn">
					<h3>mail予約</h3>
					<a href="#">
						<input type="button" value="info@maua.jp">
					</a>
				</div>
				<div class="type__btn">
					<h3>電話予約</h3>
					<div class="type__button_tel">
						<a href="#">
							<input type="button" value="0561-58-8068">
						</a>
						<p>（受付時間：9:00 - 17:00）</p>
					</div>
				</div>
			</section>
			<section class="forms">
				<h3>フォーム予約</h3>
				<div class="forms__who">
					<label for="new">
						<input type="radio" name="who" id="new" checked><span>新規</span></label>
					<label for="repeater">
						<input type="radio" name="who" id="repeater" required><span>リピート</span>
					</label>
				</div>
				<div class="forms__inputs">
					<div class="forms__inputs__labels">
						<form>
							<p><label for="name">
									<span>お名前（必須）</span>

								</label></p>
							<p><label for="tel">
									<span>電話番号（必須）</span>
							</p>
							</label>
							<p><label for="email">
									<span>メールアドレス（必須）</span>
							</p>
							<p><label for="day1">
									<span>第1希望日（必須）</span>

								</label></p>
							<p><label for="time1">
									<span>時刻（必須）</span>

								</label></p>
							<p><label for="day2">
									<span>第2希望日</span>

								</label></p>
							<p><label for="time2">
									<span>時刻</span>

								</label></p>
							<p><label for="menu">
									<span>メニュー（必須）</span>

								</label></p>
							<p><label for="tell">
									<span>ご連絡事項</span>

								</label></p>
					</div>
					<div class="forms__inputs__forms">
						<p><input type="text" name="forms" id="name" required></p>
						<p><input type="text" name="forms" id="tel" required></p>
						<p><input type="email" name="forms" id="email" required>
							</label></p>
						<p><input type="text" name="forms" id="day1" required></p>
						<p><select name="forms" id="time1" required>
								<option value="">選択してください▼</option>
								<option value="9:00">9:00〜</option>
								<option value="10:00">10:00〜</option>
								<option value="11:00">11:00〜</option>
								<option value="12:00">12:00〜</option>
								<option value="13:00">13:00〜</option>
								<option value="14:00">14:00〜</option>
								<option value="15:00">15:00〜</option>
								<option value="16:00">16:00〜</option>
								<option value="17:00">17:00〜</option>
							</select></p>
						<p><input type="text" name="forms" id="day2"></p>
						<p><input type="text" name="forms" id="time2"></p>
						<p><input type="text" name="forms" id="menu" required></p>
						<p><textarea name="forms" id="tell" cols="30" rows="10"></textarea></p>
						</form>
					</div>
				</div>
			</section>
		</main>
	</body>
</div>

</html>