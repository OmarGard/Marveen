<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<<<<<<< HEAD
	<head>
		<title>Marveen</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="landing">
		<?php
	require_once('TwitterAPIExchange.php');
	require('vendor/autoload.php');
	$settings = array(
    'oauth_access_token' => "860092922657619969-O75q6QXhZZUcIygfEMHFa2E5zd2IGSP",
    'oauth_access_token_secret' => "e7BqhLAmxzl2fek9KYeNzpKpPkAOOt7uXURlcwP4cGiGe",
    'consumer_key' => "HhHKXbCf940bmiJyIABPfQnmc",
    'consumer_secret' => "ptbPNPWJgMg9SmvTxsTsbeRyC8DqKIHL1g3NGqs5WTGsXRM5OU"
	);
	$url = 'https://api.twitter.com/1.1/search/tweets.json';
	$getfield = '?q=Esposa Embarazada';
	$requestMethod = 'GET';

	$twitter = new TwitterAPIExchange($settings);
	$response = $twitter->setGetfield($getfield)
	    ->buildOauth($url, $requestMethod)
	    ->performRequest();
	$string = json_decode($response,$assoc = TRUE);
	/*echo "<pre>";
	print_r($string);
	echo "</pre>";*/
	$ml = new MonkeyLearn\Client('f236e4aa52b79a80060ebebcdb39be039e19dc21');
	$mat;
	$tam=0;
	$key=array(
		"No cliente"=>"N",
		"Cliente"=>"S",
		"Mal servicio al cliente"=>"M",
		"Delincuencia"=>"D",
		"Transacciones"=>"T",
	);
	foreach($string as $items)
    {
    	foreach($items as $pos)
    	{
	        /*echo "Time and Date of Tweet: ".$pos['created_at']."<br />";
	        echo "Tweet: ". $pos['text']."<br />";
	        echo "Tweeted by: ". $pos['user']['name']."<br />";
	        echo "Screen name: ". $pos['user']['screen_name']."<br />";
	        echo "Location: ". $pos['user']['location']."<br />";¨*/
	        $text_list = [$pos['text']];
			$module_id = 'cl_iyn2vbwe';
			$res = $ml->classifiers->classify($module_id, $text_list, true);
			$mat[$tam]= array($pos['user']['screen_name'],$pos['text'],$pos['user']['location'],$key[$res->result['0']['0']['label']]);
			/*echo $pos['user']['screen_name']." ".$pos['text']." ".$pos['user']['location']." ".$key[$res->result['0']['0']['label']]."<br>";*/
			$tam++;
    	}
    	break;
    }
   	$getfield = '?q=#Bancomer';
	$requestMethod = 'GET';

	$response = $twitter->setGetfield($getfield)
	    ->buildOauth($url, $requestMethod)
	    ->performRequest();
	$string = json_decode($response,$assoc = TRUE);
	/*echo "<pre>";
	print_r($string);
	echo "</pre>";*/
	$m2 = new MonkeyLearn\Client('6690ba1c2b26279c0fa7f5c6c6a3ee2b5f1c2bc1');
	foreach($string as $items)
    {
    	foreach($items as $pos)
    	{
	        /*echo "Time and Date of Tweet: ".$pos['created_at']."<br />";
	        echo "Tweet: ". $pos['text']."<br />";
	        echo "Tweeted by: ". $pos['user']['name']."<br />";
	        echo "Screen name: ". $pos['user']['screen_name']."<br />";
	        echo "Location: ". $pos['user']['location']."<br />";*/
	        $text_list = [$pos['text']];
			$module_id = 'cl_kWHXGtmf';
			$res = $m2->classifiers->classify($module_id, $text_list, true);
			$mat[$tam]=array($pos['user']['screen_name'],$pos['text'],$pos['user']['location'],$key[$res->result['0']['0']['label']]);
			/*echo "<br>";
			echo $pos['user']['screen_name']." ".$pos['text']." ".$pos['user']['location']." ".$key[$res->result['0']['0']['label']]."<br>";*/
			$tam++
    	}
    	break;
    }
?>
		<!-- Header -->
			<header id="header" class="alt">
				<h1><strong><a href="index.html">Desarrollada con ♥️ por <br/></a></strong><span id="TTM">The Turing Machines</span></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Mapa de Calor</a></li>
						<li><a href="generic.html">Gráficas</a></li>
						<li><a href="elements.html">Tabla de datos</a></li>
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Banner -->
			<section id="banner">
				<h2>Marveen</h2>
				<p>Una aplicación web que utiliza Machine Learning <br />  para analizar datos dentro de twitter e identid¡ficar posibles clientes. </p>
				<ul class="actions">
					<li><a href="#" class="button special big">VER VIDEO</a></li>
				</ul>
			</section>

			<!-- One -->
				<section id="one" class="wrapper style1">
					<div class="container 75%">
						<div class="row 200%">
							<div class="6u 12u$(medium)">
								<header class="major">
									<h2>Maecenas luctus lectus</h2>
									<p>Perspiciatis doloremque recusandae dolor</p>
								</header>
							</div>
							<div class="6u$ 12u$(medium)">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non ea mollitia corporis id, distinctio sunt veritatis officiis dolore reprehenderit deleniti voluptatibus harum magna, doloremque alias quisquam minus, eaque. Feugiat quod, nesciunt! Iste quos ipsam, iusto sit esse.</p>
								<p>Dolorum aspernatur maxime libero ratione quidem distinctio, placeat fugiat laborum voluptatum enim neque soluta vel sunt id ex veritatis. Labore rerum, odit sapiente, alias mollitia magnam exercitationem modi amet earum quia atque ipsum voluptas asperiores quas laboriosam.</p>
							</div>
						</div>
					</div>
				</section>

			<!-- Two -->
				<section id="two" class="wrapper style2 special">
					<div class="container">
						<header class="major">
							<h2>Fusce ultrices fringilla</h2>
							<p>Maecenas vitae tellus feugiat eleifend</p>
						</header>
						<div class="row 150%">
							<div class="6u 12u$(xsmall)">
								<div class="image fit captioned">
									<img src="images/pic02.jpg" alt="" />
									<h3>Lorem ipsum dolor sit amet.</h3>
								</div>
							</div>
							<div class="6u$ 12u$(xsmall)">
								<div class="image fit captioned">
									<img src="images/pic03.jpg" alt="" />
									<h3>Illum, maiores tempora cupid?</h3>
								</div>
							</div>
						</div>
						<ul class="actions">
							<li><a href="#" class="button special big">Nulla luctus</a></li>
							<li><a href="#" class="button big">Sed vulputate</a></li>
						</ul>
					</div>
				</section>

			<!-- Three -->
				<section id="three" class="wrapper style1">
					<div class="container">
						<header class="major special">
							<h2>Mauris vulputate dolor</h2>
							<p>Feugiat sed lorem ipsum magna</p>
						</header>
						<div class="feature-grid">
							<div class="feature">
								<div class="image rounded"><img src="images/pic04.jpg" alt="" /></div>
								<div class="content">
									<header>
										<h4>Lorem ipsum</h4>
										<p>Lorem ipsum dolor sit</p>
									</header>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore esse tenetur accusantium porro omnis, unde mollitia totam sit nesciunt consectetur.</p>
								</div>
							</div>
							<div class="feature">
								<div class="image rounded"><img src="images/pic05.jpg" alt="" /></div>
								<div class="content">
									<header>
										<h4>Recusandae nemo</h4>
										<p>Ratione maiores a, commodi</p>
									</header>
									<p>Animi mollitia optio culpa expedita. Dolorem alias minima culpa repellat. Dolores, fuga maiores ut obcaecati blanditiis, at aperiam doloremque.</p>
								</div>
							</div>
							<div class="feature">
								<div class="image rounded"><img src="images/pic06.jpg" alt="" /></div>
								<div class="content">
									<header>
										<h4>Laudantium fugit</h4>
										<p>Possimus ex reprehenderit eaque</p>
									</header>
									<p>Maiores iusto inventore fugit architecto est iste expedita commodi sed, quasi feugiat nam neque mollitia vitae omnis, ea natus facere.</p>
								</div>
							</div>
							<div class="feature">
								<div class="image rounded"><img src="images/pic07.jpg" alt="" /></div>
								<div class="content">
									<header>
										<h4>Porro aliquam</h4>
										<p>Quaerat, excepturi eveniet laboriosam</p>
									</header>
									<p>Vitae earum unde, autem labore voluptas ex, iste dolorum inventore natus consequatur iure similique obcaecati aut corporis hic in! Porro sed.</p>
								</div>
							</div>
						</div>
					</div>
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style3 special">
					<div class="container">
						<header class="major">
							<h2>Aenean elementum ligula</h2>
							<p>Feugiat sed lorem ipsum magna</p>
						</header>
						<ul class="actions">
							<li><a href="#" class="button special big">Get in touch</a></li>
						</ul>
					</div>
				</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"></a></li>
						<li><a href="#" class="icon fa-twitter"></a></li>
						<li><a href="#" class="icon fa-instagram"></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; The Turing Machines</li>
						<li>Hecho en HACK PUEBLA 3.0</li>
						<li>Powered by coffee and pizza</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
=======
  <head>
    <meta charset="utf-8">
    <title>Marveen</title>
  </head>
  <body>
    <h1>Marveen</h1>
    <header>
    	<ul>
    		<li>Angek</li>
    		<li>Emi</li>
    		<li>Omar</li>
    		<li>Luis</li>
    	</ul>
    </header>
  </body>
>>>>>>> f28747430fb28d5612ec30c1197b0c32e7727cce
</html>
