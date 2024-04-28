<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>KLINIK SEHAT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- theme meta -->
  <meta name="theme-name" content="dot" />

	<!-- ** CSS Plugins Needed for the Project ** -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/dot_template/plugins/bootstrap/bootstrap.min.css">
	<!-- themefy-icon -->
	<link rel="stylesheet" href="/dot_template/plugins/themify-icons/themify-icons.css">
	<!--Favicon-->
	<link rel="icon" href="/dot_template/images/favicon.png" type="image/x-icon">
	<!-- fonts -->
	{{-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet"> --}}
	<!-- Main Stylesheet -->
	<link href="/dot_template/assets/style.css" rel="stylesheet" media="screen" />
</head>

<body>
	<!-- header -->
	<header class="banner overlay bg-cover" data-background="/dot_template/images/banner.jpg">

		<!-- banner -->
		<div class="container section">
			<div class="row">
				<div class="col-lg-8 text-center mx-auto">
					<h1 class="text-white mb-3">KLINIK SEHAT</h1>
					<p class="text-white mb-4">Jangan Lupa Makan</p>

				</div>
			</div>
		</div>
		<!-- /banner -->
	</header>
	<!-- /header -->

	<!-- topics -->
	<section class="section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<h2 class="section-title">Daftar Antrian</h2>
				</div>
				<!-- topic-item -->
				<div class="col-lg-4 col-sm-6 mb-4">
					<a onclick="cs()" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-credit-card icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">BPJS</h3>
                        <h3 class="mb-3 mt-0">{{ $antri_cs }}</h3>
                        @if ($antri == "cs")
                        <audio controls autoplay hidden>
                            <source src="/audio/audio/{{ $antri_cs }}.oog" type="audio/oog">
                            <source src="/audio/audio/{{ $antri_cs }}.mp3" type="audio/mpeg">
                        </audio>
                        @endif
					</a>
				</div>
				<div class="col-lg-4 col-sm-6 mb-4">
					<a onclick="teller1()" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-credit-card icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">NON BPJS</h3>
						<h3 class="mb-3 mt-0">{{ $antri_teller1 }}</h3>
                        @if ($antri == "tl1")
                        <audio controls autoplay hidden>
                            <source src="/audio/audio/{{ $antri_teller1 }}.oog" type="audio/oog">
                            <source src="/audio/audio/{{ $antri_teller1 }}.mp3" type="audio/mpeg">
                        </audio>
                        @endif
					</a>
				</div>
				<div class="col-lg-4 col-sm-6 mb-4">
					<a onclick="teller2()" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-credit-card icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">TELLER</h3>
						<h3 class="mb-3 mt-0">{{ $antri_teller2 }}</h3>
                        @if ($antri == "tl2")
                        <audio controls autoplay hidden>
                            <source src="/audio/audio/{{ $antri_teller2 }}.oog" type="audio/oog">
                            <source src="/audio/audio/{{ $antri_teller2 }}.mp3" type="audio/mpeg">
                        </audio>
                        @endif
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- /call to action -->

	<!-- footer -->
    <footer class="footer bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="mb-0">&copy; 2021 KLINIK SEHAT</p>
                </div>
            </div>
        </div>
	<!-- /footer -->

	<!-- ** JS Plugins Needed for the Project ** -->
	<!-- jquiry -->
	<script src="/dot_template/plugins/jquery/jquery-1.12.4.js"></script>
	<!-- Bootstrap JS -->
	<script src="/dot_template/plugins/bootstrap/bootstrap.min.js"></script>
	<!-- match-height JS -->
	<script src="/dot_template/plugins/match-height/jquery.matchHeight-min.js"></script>
	<!-- Main Script -->
	<script src="/dot_template/assets/script.js"></script>

    <script>
        function cs(){
            var audio = new Audio('/audio/audio/cs1.mp3')
            audio.play()
            audio.addEventListener('ended', function() {
                location.href = '/antri_cs/'+{{ $antri_cs }}+"/"+{{ $antri_teller1 }}+"/"+{{ $antri_teller2 }};
            });
        }

        function teller1(){
            var audio = new Audio('/audio/audio/t1.mp3')
            audio.play()
            audio.addEventListener('ended', function() {
                location.href = '/antri_teller1/'+{{ $antri_cs }}+"/"+{{ $antri_teller1 }}+"/"+{{ $antri_teller2 }};
            });
        }

        function teller2(){
            var audio = new Audio('/audio/audio/t2.mp3')
            audio.play()
            audio.addEventListener('ended', function() {
                location.href = '/antri_teller2/'+{{ $antri_cs }}+"/"+{{ $antri_teller1 }}+"/"+{{ $antri_teller2 }};
            });
        }
    </script>
</body>

</html>
