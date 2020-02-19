@extends('layouts.sections')

@section('content')
<body>
	<div class="imagen">
		<a href="https://inmobiliariatetakawi.com"><img src="https://i.ibb.co/B4D1Y5h/Logotipo.png" alt="Logotipo" border="0"></a>
		</div>
		<div id="header" class="container">
			<div id="header-wrapper">
			  
				</div>
		<div id="menu">
			<ul>
			<li class="{{ Request::path() === '/' ? 'active' : ''}}"><a href="/" accesskey="1" title="">Homepage</a></li>
			<li class="{{ Request::is('formulario') ? 'active' : ''}}"><a href="/formulario" accesskey="2" title="">Clientes</a></li>
			<li class="{{ Request::path() === 'exclusivo' ? 'active' : ''}}"><a href="/exclusivo" accesskey="3" title="">Exclusivo</a></li>
				<!--<li><a href="#" accesskey="4" title="">About Us</a></li>
				<li><a href="#" accesskey="5" title="">Contact Us</a></li>-->
			</ul>
		</div>
	</div>
</div>
<div class="wrapper">
	<!--<div id="banner" class="container"><img src="images/banner.jpg" width="1200" height="500" alt="" /></div>-->
	<div id="welcome" class="container">
    	
<div class="title">
	  <h2>Welcome to our website</h2>
		</div>
		<p>This is <strong>Undeviating</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
	</div>
	<!--<div id="three-column" class="container">
		<div><span class="arrow-down"></span></div>
		<div id="tbox1">
			<div class="title">
				<h2>Maecenas luctus</h2>
			</div>
			<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Duis pretium velit ac suscipit mauris. Proin eu wisi suscipit nulla suscipit interdum.</p>
			<a href="#" class="button">Learn More</a> </div>
		<div id="tbox2">
			<div class="title">
				<h2>Integer gravida</h2>
			</div>
			<p>Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem semper suscipit eleifend. Donec mattis libero eget urna. Duis  velit ac mauris.</p>
			<a href="#" class="button">Learn More</a> </div>
		<div id="tbox3">
			<div class="title">
				<h2>Praesent mauris</h2>
			</div>
			<p>Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem suscipit  eleifend.</p>
			<a href="#" class="button">Learn More</a> </div>
	</div>
	<div id="portfolio" class="container">
		<div class="column1">
			<div class="box">
			  <h3>Vestibulum venenatis</h3>
				<p>Fermentum nibh augue praesent a lacus at urna congue rutrum.</p>
		  <a href="#" class="button button-small">Etiam posuere</a> </div>
		</div>
		<div class="column2">
			<div class="box">
			  <h3>Praesent scelerisque</h3>
				<p>Vivamus fermentum nibh in augue praesent urna congue rutrum.</p>
		  <a href="#" class="button button-small">Etiam posuere</a> </div>
		</div>
		<div class="column3">
			<div class="box">
			  <h3>Donec dictum metus</h3>
				<p>Vivamus fermentum nibh in augue praesent urna congue rutrum.</p>
		  <a href="#" class="button button-small">Etiam posuere</a> </div>
		</div>
		<div class="column4">
			<div class="box">
			  <h3>Mauris vulputate dolor</h3>
				<p>Rutrum fermentum nibh in augue praesent urna congue rutrum.</p>
		  <a href="#" class="button button-small">Etiam posuere</a> </div>
		</div>
	</div>-->
</div>
<div id="footer">
	<div class="container">
		<div class="fbox1">
		<span class="icon icon-map-marker"></span>
			<span>1234 Fictional Road Suite #789
			<br />Nashville TN 00000</span>
		</div>
		<div class="fbox1">
			<span class="icon icon-phone"></span>
			<span>
				Telephone: +1 800 123 4657
			</span>
		</div>
		<div class="fbox1">
			<span class="icon icon-envelope"></span>
			<span>businessname@business.com</span>
		</div>
	</div>
</div>

</body>

@endsection


</html>