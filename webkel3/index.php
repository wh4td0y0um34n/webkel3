<!DOCTYPE html>
<html>
<head>
	<title>Company Website</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<div class="hero">
		<nav>
			<h2 class="logo">Company<span>Web</span></h2>
			<ul>
				<li><a href="#home">Home</a></li>
				<li><a href="#aboutus">About Us</a></li>
				<li><a href="#services">Services</a></li>
				<li><a href="member.php">Member</a></li>
				<li><a href="#contactus">Contact Us</a></li>
			</ul>
		</nav>

		<div class="content">
			<h4>Kelompok 3 </h4>
			<h1>Web <span>Development</span></h1>
		</div>
	</div>
	<section class="about" id="aboutus">
		<div class="main">
			<img src="assets/coding.jpg">
			<div class="about-text">
				<h2>About</h2>
				<p>
            Kami dari kelompok 3 yang berangotaan 5 orang yakni : lailatul,
            firda, asmaul, juliyah, agung. Kami berlima sedang menempuh kuliah
            di Universitas Muhammadiyah Gresik dan kami di jurusan Teknik
            Informatika, salah satunya dari mata kuliah yang kami tempuh adalah
            Pemograman Web yang dimana kami diajarkan bagaimana cara membuat web
            dari 0 dan cara mengembangkan web tersebut. Dan disiini kami
            mendapat tugas pertama yitu membuat web portofolio yang dimana kami
            tidak boleh menggunakan library dari bootstrap, maka dari itu kami
            memilih menggunakan library TailwindCSS.
          </p>
				<button type="button">Let's Talk</button>
			</div>
		</div>
	</section>
	
	<div class="service" id="services">
		<div class="title">
			<h2>Our Services</h2>
		</div>

		<div class="box">
			<div class="card">
				<i class="fas fa-bars"></i>
				<h5>Web Development</h5>
				<div class="pra">
					<p>Every website should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as possible.</p>

					<p style="text-align: center;">
						<a class="button" href="#">Read More</a>
					</p>
				</div>
			</div>

			<div class="card">
				<i class="far fa-user"></i>
				<h5>Web Development</h5>
				<div class="pra">
					<p>Every website should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as possible.</p>

					<p style="text-align: center;">
						<a class="button" href="#">Read More</a>
					</p>
				</div>
			</div>

			<div class="card">
				<i class="far fa-bell"></i>
				<h5>Web Development</h5>
				<div class="pra">
					<p>Every website should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as possible.</p>

					<p style="text-align: center;">
						<a class="button" href="#">Read More</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<p id="contactus">Contact Us :</p>
		<div class="social">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-dribbble"></i></a>
		</div>
		<p class="end">© 2022 Kelompok 3</p>
	</footer>
</body>
</html>