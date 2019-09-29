<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Julifine | Masuk</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="google-signin-client_id" content="664499148646-6irjsskl9ph5eafhihqnb7dsgaf6a47f.apps.googleusercontent.com">
		
		<script src="https://kit.fontawesome.com/514d14375d.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../CSS/login_styles.css">
		<link href="https://fonts.googleapis.com/css?family=Saira&display=swap" rel="stylesheet">
		
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-app.js"></script>
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-auth.js"></script>
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-firestore.js"></script>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-database.js"></script>
		
		
		<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />
		<link rel="shortcut icon" href="../Assets/logo.png">
		
	</head>

	<body>
		<section>
			<nav class="navbar navbar-expand-lg navbar-dark static-top bg-topbar">
			  <div class="container">
				<a class="navbar-brand" href="#">
					  <img src="../Assets/logo-text.png" alt="">
					</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					  <span class="navbar-toggler-icon"></span>
					</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
				  <ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<span class="nav-link language" data-toggle="dropdown" id="bahasa">
							<img src="../Assets/globe.svg" alt="" style="width: 15px;height: 15px;">  ENGLISH
						</span>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
							<a href="" class="dropdown-item" id="highlighted">English</a>
							<a href="" class="dropdown-item">Deutsch</a>
							<a href="" class="dropdown-item">Español</a>
							<a href="" class="dropdown-item">Français</a>
							<a href="" class="dropdown-item">日本語</a>
							<a href="" class="dropdown-item">한국어</a>
							<a href="" class="dropdown-item">Português (Brasileiro)</a>
							<a href="" class="dropdown-item">Русский</a>
							<a href="" class="dropdown-item"><span >简体中文</span></a>
							<a href="" class="dropdown-item"><span >繁體中文</span> (Hong Kong)</a>
							<a href="" class="dropdown-item"><span >繁體中文</span> (Taiwan)</a>
							<a href="" class="dropdown-item">Bahasa Melayu</a>
							<a href="" class="dropdown-item">ภาษาไทย</a>
							<a href="" class="dropdown-item">Tiếng Việt</a>
							<a href="" class="dropdown-item">Bahasa Indonesia</a>
						</div>
					</li>
					<li class="nav-item" style="">
						<a href="#" class="nav-link">SUPPORT</a>
					</li>
				  </ul>
				</div>
			  </div>
			</nav>
			<div class="container justify-content-center">
				<div class="container" h-100 d-flex>
					<div id="jumbo-type" class="jumbotron" style="margin-left: auto; margin-right: auto;height: 100%;transform: translateY(50%)">
						<div class="row justify-content-center title-form" style="margin-top: 40px;">
							<span>Select your account type</span>
						</div>
						<div class="row justify-content-center title-form" style="">
							<form action="#" method="post" id="login_form" style="width: 100%">
								<div class="field" style="margin-top: 20px">
									<select id="account_type" class="select-type">
										<option value="" disabled>Choose your account type</option>
										<option value="buyer">Buyer</option>
										<option value="seller">Seller</option>
									</select>
								</div>
								<div class="field" style="margin-top: 120px;margin-bottom: 40px">
									<input type="submit" onClick="" name="submit" value="DONE" style="width: 100%;height:50px;font-size: 16px;border-radius: 10px;font-weight: bolder;border: none" id="btn-type">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="container" style="bottom: 0;position: absolute;height: 8%">
					<div class="row justify-content-center">
						<a class="footer" href="#">Julifine.com</a>
					</div>
					<div class="row justify-content-center">
						<span class="footer-text">Copyright © 2019 Julifine Co. All rights reserved.</span>
					</div>
				</div>
			</div>
		</section>		
		<script src="../js/auth.js"></script>
		<script>
			firebase.auth().onAuthStateChanged(function(user){
				if	(user){
					var email = user.email;
					var dn = user.displayName;
					var UID = user.uid;
					var pp = user.photoURL;
					var phoneNumber = user.phoneNumber;
					
					firebase.database().ref("users").once('value', function(snapshot) {
				
					var status = false;
					  snapshot.forEach(function(childSnapshot) {
						var childKey = childSnapshot.key;
						var childData = childSnapshot.val();
						  console.log(childKey.length);
					  });
						var key = Object.keys(snapshot.val());
						for(i=0;i<key.length;i++){
							console.log(UID+": "+key[i]);
							if(UID == key[i]){
								status = false;
								break;
							}else{
								status = true;
							}
						}
						if(status == false){
							window.location.href = "homeuser.php";
						} else {
							if (email==null){
								email = "-";
							}
							if (dn==null){
								dn = "-";
							}
							if (UID==null){
								UID = "-";
							}
							if (pp==null){
								pp = "-";
							}
							if (phoneNumber == null){
								phoneNumber = "-";
							}
							$(document).ready(function() {
								$("#btn-type").click(function(){
									var firebaseRef = firebase.database().ref("users/" + UID);
									var e = document.getElementById("account_type");
									var opt = e.options[e.selectedIndex];
									firebaseRef.set({
										email: email,
										displayName: dn,
										uid:UID,
										imageUrl: pp,
										phoneNumber: phoneNumber,
										type: opt.value
									});
									window.location.href = "homeuser.php";
								});
							});
						}
					});
				}
			});
			
		</script>
	</body>
</html>