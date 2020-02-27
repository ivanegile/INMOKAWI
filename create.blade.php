@extends('layouts.sections')
 
@section('content')
    
<body>
        
	<div class="slide"> 
	
	
	  <div class="imagen">
		<a href="https://inmobiliariatetakawi.com"><img src="https://i.ibb.co/B4D1Y5h/Logotipo.png" alt="Logotipo" border="0"></a>
		</div>
	  
		  <div>
			<ul class="nav nav-tabs">
			  <li class="active"><a href="formulario">Clientes</a></li>
			  <li class="fondo"><a href="exclusivo">Exclusivo</a></li>
			</ul>
			</div>
	   
		
  
	  <div class="form-inline container-fluid ">
		<form action="/formulario" method="POST" enctype="multipart/form-data" class="form-signin">
		  {{ csrf_field() }}
			
			
		 <p class="mensaje">Gracias por considerarnos. Su informacion ha sido enviada, sera contactado lo más pronto posible</p>
		  
		</form>
	</div>
  </body>
@endsection


</html>
