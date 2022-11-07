<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>The Wedding of Ristina & Ramadhan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="The Wedding of Ristina and Ramadhan" />
	<meta name="keywords" content="wedding, wedding invitation, invitation, the wedding" />
	<meta name="author" content="Ristina & Ramadhan" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:type" content="website">
	<meta property="og:title" content="The Wedding of Ristina and Ramadhan"/>
	<meta property="og:image" content="images/icon.png"/>
	<meta property="og:url" content="https://wedding.pekade.com/"/>
	<meta property="og:site_name" content="The Wedding of Ristina and Ramadhan"/>
	<meta property="og:description" content="The Wedding of Ristina and Ramadhan.
        Kami Mengundang Anda Untuk Hadir Di Acara Pernikahan Kami."/>

    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="icon" href="{{ asset('images/icon.png') }}">

	<!--
      //////////////////////////////////////////////////////

      FREE HTML5 TEMPLATE
      DESIGNED & DEVELOPED by FREEHTML5.CO

      Website: 		http://freehtml5.co/
      Email: 			info@freehtml5.co
      Twitter: 		http://twitter.com/fh5co
      Facebook: 		https://www.facebook.com/fh5co

      //////////////////////////////////////////////////////
       -->

	<link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Estonia" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />

	<!--<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0-beta.2/css/lightgallery-bundle.min.css" />-->
	<link type="text/css" rel="stylesheet" href="{{ asset('lib/lightgallery.js/dist/css/lightgallery-bundle.min.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('lib/lightgallery.js/dist/css/lg-thumbnail.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('lib/lightgallery.js/dist/css/lg-autoplay.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('lib/lightgallery.js/dist/css/lg-fullscreen.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('lib/lightgallery.js/dist/css/lg-transitions.css') }}" />

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>
<audio id="testAudio" hidden src="{{ asset('audio/audio.mp3') }}" type="audio/mpeg"></audio>
<div class="fh5co-loader"></div>

<!--<div class="container">-->
<div id="page">
	<!--Floating button-->
	<div id="floating-button" class="float">
		<div class="control-center open">
			<div class="audio-play">
				<img id="playAudio" src="{{ asset('images/audio/play.png') }}" style="cursor:pointer" />
            </div>
			<ul class="right-sidebar">
				<!--gallery-->
				<li onclick="scrollToElement('fh5co-gallery')" style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAADe0lEQVRoge2YTWgVVxiG35Mr1n+qopYkik1dFKRiJGgWLmqrLsSFPy3Y1G6soFkJdulWcFHBgAFRQcGFLgRr1W6kLvz/SdpNQQqtfyXG+oMuaheamMfFzMXPw0zuzOTcG5H7bu7MOe/3fe878805M1eqo4463m8ADUAHcBroBwYJg8E43ylgA9BQDfEtwO+BBFfCb8DHeTW64cRLuiZpxkguQk48ktTunLuTNSDRQHw7eyW1BhKWB72SljjnhrKQ0/pug0ZHvCS1Sfo6KznNQEcYLYWRuX6agUWBhBRFW/kAmDscMc3AzKBy8mOWOb4YLyiJSDNQCqtH9yQtlzRJ0gpJ/1Tg2/rNko7k2ieqsMZ/6eVfUSkgQcv6JK3hd79kXPfOrxXI8V3SYK0MtFc4z4KFmZlVaKG7cdtMAlYC9wq00ECS1rSdmKTxWsI553wt5TGLIi10QNISRUttu6SDBTVWDyl39RXQmcLvBIZG0GJZWih7VyTkGwQ2VYj5Fhh4Fw0MAB3e/EagD9iYwcQzYAswG5gOrANu1crAC7wNBNhM1E7Ev997818BL+P52yR8pACTgfPVNvACWOONbzXiyxgCtnm8VcDNJPGGMwE4Wy0D/wMrvbEfSH9Qh4DtHr/BHI8HThB9Njaa8XHAL9Uw8Ll3viPtSnnYkZBrInDOcP4C5pj5sbG5cAY8ATszigfoAcab2CnAxQTeXeATwxsDHAtuIKf4G8A0E/shcHUY/gNgvuGXgENBDAAO6Moh/gIw2cRPjQ1VwkNggVd3bwgDB3KIPwtMMLGzgD9yxD8GWk28A/aM1MCDjMVPA+NMXBPwZw7xZTwFFifoKBnOYB4DZzIUPQV8YGLmEK0wRfEcWObpaDLzfXkMfFOh2FFgjOHPI8M7fkYTX5i89tPT/6ob1kAJ6E0pchgoGe6nwP0A4sv41eTuNuM/ZjYQBzcDd7zk+3h7h/0M+Deg+H6gOc79EfCfmVuay0CcpIU3L11dgDNzi4AnAcVfAZri3A44buZ6bO28JpzvHmgnek0eCQaAv4GfgNXEdzaut8vjLktW946BqG2Oe+J3j7auVBAtFo1Eq0030SpkcRKzYIQoOJvoRawW2I9ZqkOaaAEuVVF4Dzl6vtCTTfTArVX0d1+rpEZJRa7WK0kPJd2XdF7Sz5IuO+dG/X+pOuqoo0Z4DePtUHAz1eX1AAAAAElFTkSuQmCC)"></li>
				<!--chat-->
				<li onclick="scrollToElement('fh5co-testimonial')" style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABKklEQVRIidWVq04DQRhGv900QUFFCVWgUYQ6PAgeAUVwSDwplocoCamsqKlE4ICQECDlAfAYoAoDHEQ7SdnO7lw6CE6yYi45384/kxnpv5NVDQJ1SXuSdiVtSGpOhl4kDSVdSOplWTYKSgVqwAnwjps3oA3UfOVN4NpDXOQKWHHJ68BDhNxwDyxVBZzPITeclclbwHeCgC9g03jzqYwDOU6VJ7mkfVvAdgK5YccWsGqZ2JC0HNA2rNkCsEwslszVNizM9ABPCTbYMLSt4LLkb2K4sQV0ZS9TDD1rL9BJUJ670ljGV8XjHPJPYKtybUADuI0MOPUqIOPr+hgYBcgHQO62/w5aBA6BPvAMvE6+In1g9uzHUpB38X1sAgM+gKOk4qmANrD+J/JQfgANB//YYXlyuAAAAABJRU5ErkJggg==)"></li>
			</ul>
			<!--calendar-->
			<div onclick="scrollToElement('fh5co-event')" class="option-btn open"></div>
			<ul class="left-sidebar">
				<!--countdown-->
				<li onclick="scrollToElement('fh5co-header')" style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABG0lEQVRIidXVTS4EQRjG8SZ2IrEnETEcQmYsjLkCiUu4g1P42FpxhmGG2IvEcAcfG9Z+FtOS1qaramZ6wZPUpqve5//2k36rs+wvCLd+6yaldjaR8TmKm95iDcIhzrA4bmEHp3jCR74ecYKdwrm7PLoBllOMN9AfkX1ZPaxjBff5s4OY+RbeEsy/9YoWFrCP+VjnVeabaAYgjZRoLqvaLJypUi9m3gnlkACAdtGzPAd70VeMazcEaNYA2AoBlmoA/JiBudJmcPzRzLJsJgKo9jCc1mk1KHqWI7qOdJeifghwXgPgIriL7hTxXEXxWMXzBOZpV0UOaeUFqXox/MLShYbAvVRQF2tjmZdAbRwb/kje8/WAI2xPbPxv9AUiVMwGoTr9YAAAAABJRU5ErkJggg==)"></li>
				<!--couple-->
				<li onclick="scrollToElement('fh5co-couple')" style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAB7UlEQVRIie2VPUiVURjH/+eqSSJN4tDWRRAH5xD8QDCwgqAWhwwSaarBwUGaHFwcBAchGqNNdDaKoKAkBEvUURAVRInw82Jx0Z/De64+Xu5773nv0CD3P533eZ//+T3nW6qoomstwAEPgXfAKnAA7AE/gWGgJsbXAIwCi8ARkAF+AS+AqlLQJmCB4voMDAL1xvfUFxin98WgLX5kIdoHbnvfK+AswJMBvgGPLbQGWAmEAgx7XzuQTeDLaSgHfpLA9Bu45X0/yoAC/AXSKUn9AfvuTNIXSb3OuUOgQ9LdAJ8kfZDUJenYf9dKGqiW1JyXuCbpq6RlSRuStiStO+f2TM6DQOiSpOfOuV1gStKIj3eKyx2ZJdqxrlRvwHzMNP4DlomOYx/m+AEdJm9H5mM8cBQCNvKA00AbcKOIp9GuswW3JgBnjO9toKfWVmrBdQnAVkkKvlBKUsbHY6ephNbKMaUkffftj0C6jD5uhiRhrtlcoAXY9jPwJrATq+5AT+eVNfbBZqLjdAq0JwTPBOQ7YM54Nu3PMR/8A9wrYH4UAwZ4VgSaBmYtFOi1CSlgxiTMA5PAhG9jcrfywFngJQGXT1x1VcBrosc8X/sm734BOERPX9AdXrBCoh3YI+mOogdiXdIn59xJWSOqqKL/qXMXI9MKbss7gAAAAABJRU5ErkJggg==)"></li>
			</ul>
		</div>
	</div>

	<div id="overlay">
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box fadeInUp animated-fast">
						<img src="{{ asset('images/depan.png') }}" alt="" class="couple-main">
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<h1>Ristina & Ramadhan</h1>
						<p style="margin-bottom: 7px">Kepada Bapak/Ibu/Saudara/i</p>
                        <p style="margin-bottom: 7px"><b>{{ ucfirst($guest) }}</b></p>
						<p>Kami Mengundang Anda Untuk Hadir Di Acara Pernikahan Kami.</p>

						<button class="btn btn-primary" id="open-invitation">Buka Undangan</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-header">
		<div class="container">
			<img class="flower-1" style="position: absolute; right: 0; top: 0" src="{{ asset('images/background/flowers/top-right-1.svg') }}">
			<img class="flower-1" style="position: absolute; left: -25px; top:0" src="{{ asset('images/background/flowers/top-left-1.svg') }}">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>The Wedding Of</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<img src="{{ asset('images/depan.png') }}" alt="" class="couple-main">
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h1>Ristina & Ramadhan</h1>
					<p style="color: #bf9b73">Kami berharap Anda menjadi bagian dari hari istimewa kami!</p>
					<div class="simply-countdown simply-countdown-wedding"></div>
					<br>
					<p>
						<a href="https://calendar.google.com/calendar/event?action=TEMPLATE&tmeid=N3Q3bG91aDZ1aGdldWxudXJqM2NmczEzNmggcmFtYWRoYW5mZWJyaUBzdGFmZi51bnMuYWMuaWQ&tmsrc=ramadhanfebri%40staff.uns.ac.id" target="_blank" class="btn btn-primary btn-sm">Save the date</a><br>
						<i style="font-size: 15px">*Klik tombol ini untuk menyimpan tanggal pada google kalender</i>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-couple" style="background: url('{{ asset('images/background/repeat-background/so-white.png') }}'); background-repeat:repeat ">
		<div class="container">
			<img class="flower-2-right" style="position: absolute;" src="{{ asset('images/background/flowers/right-1.svg') }}">
			<img class="flower-2-left" style="position: absolute;" src="{{ asset('images/background/flowers/left-1.svg') }}">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<img src="{{ asset('') }}images/bismillah.svg" alt="" style="margin-bottom: 20px">
					<h2>Assalamu'alaikum Wr. Wb.</h2>
					<p style="color: #bf9b73">Tanpa mengurangi rasa hormat. Kami mengundang Bapak/Ibu/Saudara/i serta Kerabat sekalian untuk menghadiri acara pernikahan kami:</p>
				</div>
			</div>
			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="groom">
						<img src="{{ asset('images/nina-square.png') }}" alt="groom" class="img-responsive">
					</div>
					<div class="desc-groom">
						<h3>Ristina Rahma Shinta Dewi, S.Farm</h3>
						<p><span style="color: #bf9b73">Putri Pertama dari</span><br>
							<span class="parents-font">Bapak Aris Susoyo</span>
							<br>
							<span class="parents-font">Ibu Sugi Rustini</span>
						</p>
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<p class="dan text-center"><span style="font-size: 7rem">&</span></p>
				<div class="couple-half pekade">
					<div class="bride">
						<img src="{{ asset('images/pekade-square.png') }}" alt="groom" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3>Ramadhan Febri Utama, S.Kom </h3>
						<p><span style="color: #bf9b73">Putra Pertama dari</span><br>
							<span class="parents-font">Bapak Wakirin</span>
							<br>
							<span class="parents-font">Ibu Sutarni</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-event" class="fh5co-bg" style="border-top: 1px solid #f2f2f2;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Save The Date <a href="calender.ics" class="btn btn-info"><i class="icon-download2"></i></a></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="col-md-6 col-sm-6 text-center">
						<div class="event-wrap animate-box">
							<h3 style="font-family: 'Oswald', Arial, serif;">Akad Nikah</h3>
							<div class="event-col">
								<i class="icon-clock"></i>
								<span>10:00</span>
								<span>Selesai</span>
							</div>
							<div class="event-col">
								<i class="icon-calendar"></i>
								<span>Sabtu</span>
								<span class="tanggal">19 November 2022</span>
							</div>
							<p style="font-family: 'Courgette', Arial, serif">Di Kediaman Mempelai Wanita, Ds. Karanglegi RT05/RW 01, Kec. Trangkil, Kab. Pati</p>

							<a href="https://goo.gl/maps/vnkRG1u8mtBhsFhk7" target="_blank"
							   class="btn btn-primary">Penunjuk Lokasi <i class="icon-map2"></i></a>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 text-center">
						<div class="event-wrap animate-box">
							<h3 style="font-family: 'Oswald', Arial, serif;">Walimatul 'Ursy</h3>
							<div class="event-col">
								<i class="icon-clock"></i>
								<span>10:15</span>
								<span>Selesai</span>
							</div>
							<div class="event-col">
								<i class="icon-calendar"></i>
								<span>Sabtu</span>
								<span class="tanggal">19 November 2022</span>
							</div>
							<p style="font-family: 'Courgette', Arial, serif">Di Kediaman Mempelai Wanita, Ds. Karanglegi RT05/RW 01, Kec. Trangkil, Kab. Pati</p>

							<a href="https://goo.gl/maps/vnkRG1u8mtBhsFhk7" target="_blank"
							   class="btn btn-primary">Penunjuk Lokasi <i class="icon-map2"></i></a>
						</div>
					</div>
					<!-- <div class="col-md-12 animate-box" style="margin-top: 15px;">
                        <iframe width="100%" height="400" style="border: 0; border-radius: 5px;" frameborder="0" scrolling="no" src="https://calendar.google.com/calendar/embed?src=p68227rf4u2tqb5orkf10m3u44%40group.calendar.google.com&ctz=Asia%2FJakarta"></iframe>
                        &lt;!&ndash;<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.658582822158!2d95.24281301476557!3d5.468657396034234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30403b4252a49dbd%3A0xa20ea2ca9164dce9!2sLhoknga%20Riverside!5e0!3m2!1sen!2sid!4v1627721471121!5m2!1sen!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>&ndash;&gt;
                    </div> -->
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-gallery" style="background: url('{{ asset('images/background/repeat-background/so-white.png') }}'); background-repeat:repeat ">
		<img class="flower-3-top" src="{{ asset('images/background/flowers/top-2.svg') }}">
		<img class="flower-4-bottom" src="{{ asset('images/background/flowers/bottom-2.svg') }}">

		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Galeri Foto</h2>
					<!-- <h3 style="color: #bf9b73">Khitbah Day - 07 November 2021</h3> -->
				</div>
			</div>
			<div class="row row-bottom-padded-md animate-box">
				<div class="col-md-12">
					<div id="inline-gallery-container" class="inline-gallery-container" style="position: relative; height: 500px"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-ayat">
		<img height="380px" width="100%" style="position: absolute; bottom: -175px" src="{{ asset('images/background/wave-down.svg') }}">
		<div class="container">
			<div class="ayat-content animate-box">
				Dan di antara tanda-tanda kekuasaan-Nya lah Dia menciptakan untukmu istri-istri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.
				<br>
				<b>- Q.S Ar Rum : 21 -</b>
			</div>
		</div>
	</div>
	<div id="fh5co-health-protocol">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Protokol Kesehatan & Anjuran</h2>
					<p style="color: #bf9b73">Guna mencegah penyebaran Covid-19, diharapkan bagi tamu undangan untuk mematuhi Protokol Kesehatan di bawah ini :</p>
				</div>

				<div class="col-md-10 col-md-offset-1 text-center">
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="item-protocol">
								<div class="icon">
									<img style="padding: 10px" height="90px" width="90px" src="{{ asset('images/health-protocol/distance.png') }}" alt="Jaga jarak"/>
								</div>
								<div class="description">
									<h3>Jaga Jarak</h3>
									<p>Jaga jarak minimal 2m dengan orang lain</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="item-protocol">
								<div class="icon">
									<img style="padding: 15px" height="90px" width="90px" src="{{ asset('images/health-protocol/gel.png') }}" alt="Hand Sanitizer"/>
								</div>
								<div class="description">
									<h3>Gunakan Handsanitizer</h3>
									<p>Gunakan handsanitizer secara berkala</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="item-protocol">
								<div class="icon">
									<img style="padding: 10px" height="90px" width="90px" src="{{ asset('images/health-protocol/washing-hands.png') }}" alt="Cuci Tangan"/>
								</div>
								<div class="description">
									<h3>Cuci Tangan</h3>
									<p>Cuci tangan yang bersih</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="item-protocol">
								<div class="icon">
									<img style="padding: 15px" height="90px" width="90px" src="{{ asset('images/health-protocol/mask.png') }}" alt="Pakai Masker"/>
								</div>
								<div class="description">
									<h3>Gunakan Masker</h3>
									<p>Pakai masker sebelum memasuki tempat acara</p>
								</div>
							</div>
						</div>
					</div>
					<p style="color: #bf9b73">dan mengikuti anjuran di bawah ini :</p>
					<div class="row">
						<div class="col-md-6 col-xs-6">
							<div class="item-protocol">
								<div class="icon">
									<img style="padding: 10px" height="90px" width="90px" src="{{ asset('images/health-protocol/eating.png') }}" alt="Adab makan minum"/>
								</div>
								<div class="description">
									<h3>Makan Minum</h3>
									<p>Mohon memperhatikan adab makan dan minum (duduk, membaca bismillah, tidak mencela makanan dan tidak mubazir)</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xs-6">
							<div class="item-protocol">
								<div class="icon">
									<img style="padding: 10px" height="90px" width="90px" src="{{ asset('images/health-protocol/rug.png') }}" alt="Sholat"/>
								</div>
								<div class="description">
									<h3>Sholat</h3>
									<p>Memperhatikan waktu shalat wajib dan tidak meninggalkannya</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-testimonial" style="background: url('{{ asset('images/background/repeat-background/so-white.png') }}'); background-repeat:repeat; border-top: 1px solid #f2f2f2">
		<img height="400" class="flower-bukutamu-right" style="right: 0;top: 0;position: absolute;" src="{{ asset('images/background/flowers/top-right-3.svg') }}">
		<img height="400" class="flower-bukutamu-left" style="position: absolute; left: 0; bottom: 0" src="{{ asset('images/background/flowers/bottom-left-3.svg') }}">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Buku Tamu & Ucapan</h2>
					<span style="color: #bf9b73">Doa Restu Anda merupakan karunia yang sangat berarti bagi kami.</span>
				</div>
			</div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card-body">
                        <form id="formucapan" method="POST">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ $guest }}" placeholder="Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="ucapan">Ucapan</label>
                                <textarea class="form-control {{ $errors->has('ucapan') ? 'is-invalid' : '' }}" name="ucapan" id="ucapan" placeholder="Berikan Ucapan dan Doa Restu" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Kehadiran</label>
                                <select class="form-control select2 {{ $errors->has('kehadiran') ? 'is-invalid' : '' }}" name="kehadiran" id="kehadiran" required>
                                    @foreach(App\Models\Guestbook::KEHADIRAN_SELECT as $key => $label)
                                        <option value="{{ $key }}">{{ $label }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm" id="submit" type="submit">
                                    Kirim Ucapan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

			<div class="row animate-box" style="margin-top: 32px; max-height:420px; overflow: auto;">
				<div class="col-md-8 col-md-offset-2">
					<div class="list-group">
                        @foreach ($guestbooks as $item)
                            <a class="list-group-item" style="margin-top:5px">
                                <div class="name"><span class="strong" style="font-size: 24px">{{ $item->name }}</span><span class="label {{ $item->kehadiran === 'hadir' ? 'label-success' : 'label-danger'}}">{{ $item->hadir }}</span></div>
                                <hr style="margin-top: 0;">
                                <div class="comment">{{ $item->ucapan }}</div>
                            </a>
                        @endforeach
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo" style="background: url('{{ asset('images/background/repeat-background/witewall_3.png') }}'); background-repeat:repeat ">
		<div class="container">
			<img class="flower-1" style="position: absolute; right: 0; bottom: 0" src="{{ asset('images/background/flowers/bottom-right-1.svg') }}">
			<img class="flower-1" style="position: absolute; left: 0; bottom:0" src="{{ asset('images/background/flowers/bottom-left-1.svg') }}">
			<div class="row copyright animate-box">
				<div class="col-md-12 text-center">
					<p>
						Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila Bapak/Ibu/Saudara/i berkenan hadir dan memberikan doa restu.
						<br>Atas kehadiran dan doa restunya, kami mengucapkan terima kasih.
					<h3 style="color: #bf9b73">Wassalamu'alaikum Wr. Wb.</h3>
					Jazakumullahu Khairan
					</p>
					<img src="{{ asset('images/icon.png') }}" width="100" height="100">
					<br>
					<h1 style="font-family: 'Satisfy', Arial, serif">Ristina & Ramadhan</h1>
					<br>
					<br>
				</div>
			</div>

		</div>
	</footer>
</div>


<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- jQuery Easing -->
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Waypoints -->
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<!-- Carousel -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- countTo -->
<script src="{{ asset('js/jquery.countTo.js') }}"></script>

<!-- Stellar -->
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/magnific-popup-options.js') }}"></script>

<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
<script src="{{ asset('js/simplyCountdown.js') }}"></script>
<!-- Main -->
<script src="{{ asset('js/home.js') }}"></script>

<script src="{{ asset('lib/lightgallery.js/dist/lightgallery.min.js') }}"></script>
<script src="{{ asset('lib/lightgallery.js/dist/plugins/thumbnail/lg-thumbnail.min.js') }}"></script>
<script src="{{ asset('lib/lightgallery.js/dist/plugins/autoplay/lg-autoplay.min.js') }}"></script>
<script src="{{ asset('lib/lightgallery.js/dist/plugins/fullscreen/lg-fullscreen.min.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/showdown/2.0.3/showdown.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>

<script>
    $('.select2').select2();

	day = 19; month = 10; year = 2022;
	hour = 10; minute = 0;
	var d = new Date(year, month, day, hour, minute, 0, 0);

	// default example
	simplyCountdown('.simply-countdown-wedding', {
		year: d.getFullYear(),
		month: d.getMonth() + 1,
		day: d.getDate(),
		hour: d.getHours(),
		minutes: 0, // Default is 0 [0-59] integer
		seconds: 0, // Default is 0 [0-59] integer
		countUp: true
		// enableUtc: true
	});

	$('#open-invitation').click(function (){
		$('#overlay').addClass('hide-overlay');
        $('#playAudio').trigger('click');
		/*yang bagian floating button ada animasinya tapi karena ketutup dulu sama overlay jadinya gak nampak*/
		/*pengen pas di klik buka undangan baru jalan animasinya*/
		/*var c = document.getElementsByClassName('right-sidebar');
		for (var i = 0; i < c.length; i++) {
			c[i].classList.add('animate');
		}*/
	});

	function scrollToElement(el) {
		$("html, body").animate({ scrollTop: $(`#${el}`).offset().top }, 1000);
	}

    $('#playAudio').click(function (){
        var audio = document.getElementById('testAudio');
        if(this.className == 'is-playing'){
            this.className = "";
            audio.pause();
            this.src = "{{ asset('images/audio/play.png') }}";
        }else{
            this.className = "is-playing";
            audio.play();
            this.src = "{{ asset('images/audio/pause.png') }}";
        }
    });
</script>

<script type="text/javascript">
	const lgContainer = document.getElementById('inline-gallery-container');
	const inlineGallery = lightGallery(lgContainer, {
		container: lgContainer,
		dynamic: true,
		thumbnail : true,
		// Turn off hash plugin in case if you are using it
		// as we don't want to change the url on slide change
		hash: false,
		// Do not allow users to close the gallery
		closable: false,
		// Add maximize icon to enlarge the gallery
		showMaximizeIcon: true,
		download : false,
		// Append caption inside the slide item
		// to apply some animation for the captions (Optional)
		appendSubHtmlTo: '.lg-item',
		// Delay slide transition to complete captions animations
		// before navigating to different slides (Optional)
		// You can find caption animation demo on the captions demo page
		slideDelay: 400,
		dynamicEl: [
			{
				src: '{{ asset('images/gallery/landscape_01.jpg') }}',
				thumb: '{{ asset('images/gallery/landscape_01.jpg') }}',
				/*subHtml: `<div class="lightGallery-captions">
					<h4>Caption 1</h4>
					<p>Description of the slide 1</p>
				</div>`,*/
			},
			{
				src: '{{ asset('images/gallery/landscape_02.jpg') }}',
				thumb: '{{ asset('images/gallery/landscape_02.jpg') }}',
				/*subHtml: `<div class="lightGallery-captions">
					<h4>Caption 1</h4>
					<p>Description of the slide 1</p>
				</div>`,*/
			},
			{
				src: '{{ asset('images/gallery/landscape_03.jpg') }}',
				thumb: '{{ asset('images/gallery/landscape_03.jpg') }}',
				/*subHtml: `<div class="lightGallery-captions">
					<h4>Caption 1</h4>
					<p>Description of the slide 1</p>
				</div>`,*/
			},
            {
				src: '{{ asset('images/gallery/landscape_04.jpg') }}',
				thumb: '{{ asset('images/gallery/landscape_04.jpg') }}',
				/*subHtml: `<div class="lightGallery-captions">
					<h4>Caption 1</h4>
					<p>Description of the slide 1</p>
				</div>`,*/
			},
            {
				src: '{{ asset('images/gallery/landscape_05.jpg') }}',
				thumb: '{{ asset('images/gallery/landscape_05.jpg') }}',
				/*subHtml: `<div class="lightGallery-captions">
					<h4>Caption 1</h4>
					<p>Description of the slide 1</p>
				</div>`,*/
			},
			{
				src: '{{ asset('images/gallery/portrait_01.jpg') }}',
				thumb: '{{ asset('images/gallery/portrait_01.jpg') }}',
				/*subHtml: `<div class="lightGallery-captions">
					<h4>Caption 1</h4>
					<p>Description of the slide 1</p>
				</div>`,*/
			},
			{
				src: '{{ asset('images/gallery/portrait_02.jpg') }}',
				thumb: '{{ asset('images/gallery/portrait_02.jpg') }}',
				/*subHtml: `<div class="lightGallery-captions">
					<h4>Caption 1</h4>
					<p>Description of the slide 1</p>
				</div>`,*/
			},
			{
				src: '{{ asset('images/gallery/portrait_03.jpg') }}',
				thumb: '{{ asset('images/gallery/portrait_03.jpg') }}',
				/*subHtml: `<div class="lightGallery-captions">
					<h4>Caption 1</h4>
					<p>Description of the slide 1</p>
				</div>`,*/
			},
			{
				src: '{{ asset('images/gallery/portrait_04.jpg') }}',
				thumb: '{{ asset('images/gallery/portrait_04.jpg') }}',
				/*subHtml: `<div class="lightGallery-captions">
					<h4>Caption 1</h4>
					<p>Description of the slide 1</p>
				</div>`,*/
			},
			{
				src: '{{ asset('images/gallery/portrait_05.jpg') }}',
				thumb: '{{ asset('images/gallery/portrait_05.jpg') }}',
				/*subHtml: `<div class="lightGallery-captions">
					<h4>Caption 1</h4>
					<p>Description of the slide 1</p>
				</div>`,*/
			},
			{
				src: '{{ asset('images/gallery/portrait_06.jpg') }}',
				thumb: '{{ asset('images/gallery/portrait_06.jpg') }}',
				/*subHtml: `<div class="lightGallery-captions">
					<h4>Caption 1</h4>
					<p>Description of the slide 1</p>
				</div>`,*/
			},
			{
				src: '{{ asset('images/gallery/portrait_07.jpg') }}',
				thumb: '{{ asset('images/gallery/portrait_07.jpg') }}',
				/*subHtml: `<div class="lightGallery-captions">
					<h4>Caption 1</h4>
					<p>Description of the slide 1</p>
				</div>`,*/
			},
			{
				src: '{{ asset('images/gallery/portrait_08.jpg') }}',
				thumb: '{{ asset('images/gallery/portrait_08.jpg') }}',
				/*subHtml: `<div class="lightGallery-captions">
					<h4>Caption 1</h4>
					<p>Description of the slide 1</p>
				</div>`,*/
			},
			{
				src: '{{ asset('images/gallery/portrait_09.jpg') }}',
				thumb: '{{ asset('images/gallery/portrait_09.jpg') }}',
				/*subHtml: `<div class="lightGallery-captions">
					<h4>Caption 1</h4>
					<p>Description of the slide 1</p>
				</div>`,*/
			},
		],
	});

	// Since we are using dynamic mode, we need to programmatically open lightGallery
	inlineGallery.openGallery();
</script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#formucapan").submit(function (event) {
        var formData = {
            name : $("#name").val(),
            ucapan : $("#ucapan").val(),
            kehadiran : $("#kehadiran").val(),
        };

        $.ajax({
            type: "POST",
            url: "{{ route('ucapan') }}",
            data: formData,
            dataType: "json",
            encode: true,
        }).done(function (data) {
            if (data.success) {
                const item = `
                    <a class="list-group-item">
                        <div class="name"><span class="strong" style="font-size: 24px">${data.data.name}</span>
                            <span class="label ${data.data.kehadiran === 'hadir' ? 'label-success' : 'label-danger'}">
                                ${data.data.hadir}
                            </span>
                        </div>
                        <hr style="margin-top: 0;">
                        <div class="comment">${data.data.ucapan}</div>
                    </a>
                `;
                $("#fh5co-testimonial .list-group").prepend(item);
            }
            document.getElementById('formucapan').reset();
        });

        event.preventDefault();
    });
</script>

</body>
</html>

