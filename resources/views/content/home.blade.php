@extends('layouts.empleado')

    @section('contenido')
	<section id="home">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">JAS<span>COSMETICS</span></h1>
					<div class="element">
                        <div class="sub-element">JAS Cosmetics</div>
                        <div class="sub-element">Hola Bienvenido</div>
                        <div class="sub-element">Maquillaje en Vanguardia</div>
                    </div>
                    <br>
					<a data-scroll href="{{ route('login') }}" class="btn btn-default" data-wow-offset="50" data-wow-delay="0.6s">Iniciar Sesión</a>
					<a data-scroll href="{{ route('registro') }}" class="btn btn-default" data-wow-offset="50" data-wow-delay="0.6s">Registro</a>
				</div>
			</div>
		</div>
	</section>

	<!-- start team -->
	<section id="team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>JAS COSMETICS</span> EQUIPO</h2>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
					<div class="team-wrapper">
						<img src="images/jandro.jpg" width="480" height="480" class="img-responsive" alt="team img 1">
						<div class="team-des">
							<h4>ALejandro González Bolaños</h4>
							<span>DIRECTOR</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et
								laoreet phasellus ut nisi id leo molest.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<img src="images/saul.jpg" class="img-responsive" alt="team img 2">
						<div class="team-des">
							<h4>Saul Tereso Tirado</h4>
							<span>GERENTE</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et
								laoreet phasellus ut nisi id leo molest.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
					<div class="team-wrapper">
						<img src="images/jania.jpg" class="img-responsive" alt="team img 3">
						<div class="team-des">
							<h4>Jania Delgadillo Garcia</h4>
							<span>ADMINISTRADOR</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et
								laoreet phasellus ut nisi id leo molest.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end team -->
	<section id="home">
		<div class="container">
			<div class="row">
			<div>
			  <h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">UBICACIÓN<span>JAS COSMETICS</span></h1>
	<div>
		<iframe width="1200" height="600" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.7392504307363!2d-99.60764124998835!3d19.25019248692438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd8ba4fb16639b%3A0x8935b96de0eccd25!2sIglesia%20del%20Calvario!5e0!3m2!1ses-419!2smx!4v1618454451443!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
	</div>
	</div>
	</div>
	</section>

	<!-- start service -->
	<section id="service">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">NUESTROS <span>PRODUCTOS DE</span> VANGUARDÍA
					</h2>
				</div>
				<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<i class="fa fa-laptop"></i>
					<h4>SOMOS</h4>
					<p>Nos encanta lo que hacemos. Mucho más allá de un lugar de trabajo, 
					contribuimos a mejorar la vida de cada uno de nuestros colaboradores. 
					¿Existe una motivación mejor que esa para venir a trabajar? 
					Nos apasiona lo que hacemos. Nos apasionan los retos y apoyarte a ser 
					mejores día a día. NOS APASIONAS TÚ.</p>
				</div>
				<div class="col-md-4 active wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">
					<i class="fa fa-cloud"></i>
					<h4>Nuestra serguridad</h4>
					<p>Desde 2020, somos una empresa dedicada en venta de productos, con oficinas 
					centrales en Cidudad de México. Contamos con gran variedad de productos al mejor 
					precio ¡Garantizado!. Nuestra misión es crear ¡Felicidad! y nuestro objetivo es 
					ser reconocidos por la calidad y variedad de productos que tenemos para ti.</p>
				</div>
				<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<i class="fa fa-cog"></i>
					<h4>Ayuda</h4>
					<p>Somos vendedores de productos de belleza en México. Distribuimos productos
					de belleza para tu negocio, tiendas de regalos, 
					supermercados y autoservicio.Tenemos una gran variedad de productos para todas 
					la edades.</p>
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
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>JAS COSMETICS</span> PRODUCTOS
					</h2>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/pro1.jpg" class="img-responsive" alt="portfolio img 1">
						<div class="portfolio-overlay">
							<h4>JAS COSMETICS</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/pro2.jpg" class="img-responsive" alt="portfolio img 2">
						<div class="portfolio-overlay">
							<h4>JAS COSMETICS</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/pro3.jpg" class="img-responsive" alt="portfolio img 3">
						<div class="portfolio-overlay">
							<h4>JAS COSMETICS</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/pro4.jpg" class="img-responsive" alt="portfolio img 4">
						<div class="portfolio-overlay">
							<h4>JAS COSMETICS</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/pro5.jpg" class="img-responsive" alt="portfolio img 3">
						<div class="portfolio-overlay">
							<h4>JAS COSMETICS</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/pro6.jpg" class="img-responsive" alt="portfolio img 4">
						<div class="portfolio-overlay">
							<h4>JAS COSMETICS</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/pro7.jpg" class="img-responsive" alt="portfolio img 1">
						<div class="portfolio-overlay">
							<h4>JAS COSMETICS</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="portfolio-thumb">
						<img src="images/pro8.jpg" class="img-responsive" alt="portfolio img 2">
						<div class="portfolio-overlay">
							<h4>JAS COSMETICS</h4>
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
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">CONTÁCTANOS <span>JAS COSMETICS</span>
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
						<span>Distribuimos y vendemos productos de belleza con la mejor calidad y al menor precio posible.</span>
						<p><i class="fa fa-phone"></i> 722-452-9193</p>
						<p><i class="fa fa-envelope-o"></i> al221911564@gmail.com</p>
						<p><i class="fa fa-map-marker"></i> Metepec Celaya #48</p>
                        <a href="https://api.whatsapp.com/send?phone=527224529193&text=Hola buen día, necesito informacion sobre costos" target="_blank">Contactanos por Whatsapp</a>
					</address>
				</div>
			</div>
		</div>
	</section>
	<!-- end contact -->
    @endsection