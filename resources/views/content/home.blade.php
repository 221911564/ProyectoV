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

	<!-- start team -->
	<section id="team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>DISATOYS</span> EQUIPO</h2>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
					<div class="team-wrapper">
						<img src="images/img_001.png" class="img-responsive" alt="team img 1"><br>
						<div class="team-des">
							<h4>Erik Sahian Salazar</h4>
							<span>DIRECTOR</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et
								laoreet phasellus ut nisi id leo molest.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<img src="images/liz.jpg" class="img-responsive" alt="team img 2">
						<div class="team-des">
							<h4>Lizbeth Arista Vivas</h4>
							<span>GERENTE</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et
								laoreet phasellus ut nisi id leo molest.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
					<div class="team-wrapper">
						<img src="images/brandon.jpg" class="img-responsive" alt="team img 3">
						<div class="team-des">
							<h4>BRANDON FLORES</h4>
							<span>ADMINISTRADOR</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et
								laoreet phasellus ut nisi id leo molest.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<img src="images/bere.png" class="img-responsive" alt="team img 4"><br>
						<div class="team-des">
							<h4>BERENICE MARCELINO</h4>
							<span>SECRETARÍA</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et
								laoreet phasellus ut nisi id leo molest.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end team -->

	<!-- start service -->
	<section id="service">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">NUESTRA <span>PELUCHERÍA DE</span> VANGUARDÍA
					</h2>
				</div>
				<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<i class="fa fa-laptop"></i>
					<h4>SOMOS</h4>
					<p>Nos encanta lo que hacemos. Mucho más allá de un lugar de trabajo, En Pelucheria contribuimos a mejorar la vida de cada uno de nuestros colaboradores. ¿Existe una motivación mejor que esa para venir a trabajar? Nos apasiona lo que hacemos. Nos apasionan los retos y apoyarte a ser mejores día a día. NOS APASIONAS TÚ.</p>
				</div>
				<div class="col-md-4 active wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">
					<i class="fa fa-cloud"></i>
					<h4>Nuestra serguridad</h4>
					<p>Desde 2007, somos una empresa productora de muñecos de peluche, con oficinas centrales en Monterrey, México. Contamos con gran variedad de peluches al mejor precio ¡Garantizado!. Nuestra misión es crear ¡Felicidad! y nuestro objetivo es ser reconocidos por la calidad y variedad de diseños que tenemos para ti.</p>
				</div>
				<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<i class="fa fa-cog"></i>
					<h4>Ayuda</h4>
					<p>Somos fabricantes de peluches en México. Producimos y distribuimos muñecos de peluche para tu negocio, tiendas de regalos, florerías, jugueterías, supermercados y autoservicio.Tenemos una gran variedad de productos para todas la edades.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- end servie -->

	<!-- start portfolio -->
	<section id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>DISATOYS</span> PRODUCTOS
					</h2>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/as.jpg" class="img-responsive" alt="portfolio img 1">
						<div class="portfolio-overlay">
							<h4>DISATOYS</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/bs.jpg" class="img-responsive" alt="portfolio img 2">
						<div class="portfolio-overlay">
							<h4>DISATOYS</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/cd.jpg" class="img-responsive" alt="portfolio img 3">
						<div class="portfolio-overlay">
							<h4>DISATOYS</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/ds.jpg" class="img-responsive" alt="portfolio img 4">
						<div class="portfolio-overlay">
							<h4>DISATOYS</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/es.jpg" class="img-responsive" alt="portfolio img 3">
						<div class="portfolio-overlay">
							<h4>DISATOYS</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/qa.jpg" class="img-responsive" alt="portfolio img 4">
						<div class="portfolio-overlay">
							<h4>DISATOYS</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/la.jpg" class="img-responsive" alt="portfolio img 1">
						<div class="portfolio-overlay">
							<h4>DISATOYS</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/oj.jpg" class="img-responsive" alt="portfolio img 2">
						<div class="portfolio-overlay">
							<h4>DISATOYS</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end portfolio -->

	<!-- start contact -->
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">CONTÁCTANOS <span>DISATOYS</span>
					</h2>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
					<form action="{{ route('correo') }}" method="post">
						{{ csrf_field() }}
						<label>NOMBRE</label>
						<input name="nombre" type="text" class="form-control">

						<label>CORREO</label>
						<input name="correo" type="email" class="form-control">

						<label>DESCRIPCIÓN</label>
						<textarea name="mensaje" rows="4" class="form-control"></textarea>

						<input type="submit" class="form-control">
					</form>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
					<address>
						<p class="address-title">ACERCATE Y UBÍCANOS</p>
						<span>Fabricamos y distribuimos muñecos de peluche, con la mejor calidad y al menor precio posible. ​¡Para que tú ganes!</span>
						<p><i class="fa fa-phone"></i> 722-020-0340</p>
						<p><i class="fa fa-envelope-o"></i> eriksalazar3@gmail.com</p>
						<p><i class="fa fa-map-marker"></i> 663 New Walk Roadside, Birdeye View, GO 11020</p>
					</address>
				</div>
			</div>
		</div>
	</section>
	<!-- end contact -->
    @endsection