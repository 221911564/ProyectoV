@extends('layouts.empleado')

    @section('contenido')
	<section id="home">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">DISA<span>TOYS</span></h1>
					<div class="element">
                        <div class="sub-element">DISATOY'S</div>
                        <div class="sub-element">Hola Bienvenido</div>
                        <div class="sub-element">Peluchería en Vanguardia</div>
                    </div>
                    <br>
					<a data-scroll href="{{ route('login') }}" class="btn btn-default" data-wow-offset="50" data-wow-delay="0.6s">Iniciar Sesión</a>
				</div>
			</div>
		</div>
	</section>

	<section id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>DISA</span>TOYS
					</h2>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/portfolio-img1.jpg" class="img-responsive" alt="portfolio img 1">
						<div class="portfolio-overlay">
							<h4>Project One</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
							<a href="#" class="btn btn-default">DETAIL</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/portfolio-img2.jpg" class="img-responsive" alt="portfolio img 2">
						<div class="portfolio-overlay">
							<h4>Project Two</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
							<a href="#" class="btn btn-default">DETAIL</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/portfolio-img3.jpg" class="img-responsive" alt="portfolio img 3">
						<div class="portfolio-overlay">
							<h4>Project Three</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
							<a href="#" class="btn btn-default">DETAIL</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/portfolio-img4.jpg" class="img-responsive" alt="portfolio img 4">
						<div class="portfolio-overlay">
							<h4>Project Four</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
							<a href="#" class="btn btn-default">DETAIL</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/portfolio-img3.jpg" class="img-responsive" alt="portfolio img 3">
						<div class="portfolio-overlay">
							<h4>Project Five</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
							<a href="#" class="btn btn-default">DETAIL</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/portfolio-img4.jpg" class="img-responsive" alt="portfolio img 4">
						<div class="portfolio-overlay">
							<h4>Project Six</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
							<a href="#" class="btn btn-default">DETAIL</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/portfolio-img1.jpg" class="img-responsive" alt="portfolio img 1">
						<div class="portfolio-overlay">
							<h4>Project Seven</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
							<a href="#" class="btn btn-default">DETAIL</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/portfolio-img2.jpg" class="img-responsive" alt="portfolio img 2">
						<div class="portfolio-overlay">
							<h4>Project Eight</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
							<a href="#" class="btn btn-default">DETAIL</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    @endsection