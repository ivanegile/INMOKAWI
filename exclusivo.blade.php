@extends('layouts.sections')
 
@section('content')
    

<body>
        
  <div class="imagen">
		<a href="https://inmobiliariatetakawi.com"><img src="https://i.ibb.co/B4D1Y5h/Logotipo.png" alt="Logotipo" border="0"></a>
		</div>
<div id="header-wrapper">
	<div id="header" class="container">
		
		<div id="menu">
			<ul>
				<li class="{{ Request::path() === '/' ? 'active' : ''}}"><a href="/" accesskey="1" title="">Homepage</a></li>
				<li class="{{ Request::is('formulario') ? 'active' : ''}}"><a href="formulario" accesskey="2" title="">Clientes</a></li>
				<li class="{{ Request::is('exclusivo') ? 'active' : ''}}"><a href="exclusivo" accesskey="3" title="">Exclusivo</a></li>
				<!--<li><a href="#" accesskey="4" title="">About Us</a></li>
				<li><a href="#" accesskey="5" title="">Contact Us</a></li>-->
			</ul>
		</div>
	</div>
</div>
                <form action="/exclusivo" method="POST" enctype="multipart/form-data"  class="form-inline justify-content-center flex-colunm flex-md-row">
                  {{ csrf_field() }}  
                  <div class="form-group">
                        <label for="nombre" class="mx-2">{{'Nombre'}}</label>
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Nombre" required>
                      </div>
                      <div class="form-group">
                        <label for="apellido" class="mx-2">{{'Apellido'}}</label>
                        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Apellido" required>
                      </div>
                    </div>      
                    <div class="form-control form-group">
                    <label for="credito" class="mx-2">{{'Credito'}}</label>
                    <select name="presupuesto" onchange="salta" id="presupuesto" required>
                        <option selected>Tipo de credito</option>
                        <option value="banco">Banco</option>
                        <option value="infonavit">Infonavit</option>
                        <option value="tradicional">Infonavit Tradicional</option>
                        <option value="aliados">Aliados</option>
                        <option value="conyugal">Infonavit Conyugal</option>
                        <option value="foviste">Fovissste</option>
                      </select>
                    </div>   
                      <div class="form-group">
                        <label for="otro" class="mx-2">{{'Otro Credito'}}</label>
                        <input type="text" class="form-control" id="otro" placeholder="Credito">
                      </div>
                      <div class="checkbox">
                        <label for="efectivo" class="mx-2">{{'Efectivo'}}
                          <input type="checkbox" value="">
                          
                        </label>
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="telefono" class="mx-2">{{'Telefono'}}</label>
                        <input type="tel" class="form-control" id="telefono" placeholder="Telefono" required>
                      </div>
                      <div class="form-group">
                        <label for="celular" class="mx-2">{{'No. Celular'}}</label>
                        <input type="tel" class="form-control" id="celular" placeholder="No. Celular">
                      </div>
                    
                      <div class="form-group">
                        <label for="seguro" class="mx-2">{{'No. de Seguro Social'}}</label>
                        <input type="tel" class="form-control" id="seguro" placeholder="No. de Seguro"required>
                      </div>
                    
                    <div class="form-control ">
                        <label for="presupuesto">{{'Presupuesto'}}</label>
                        <select name="presupuesto" onchange="salta" id="presupuesto" required>
                        <option selected>Seleccione su opcion</option>
                        <option value="option1">$450 - menor</option>
                        <option value="option2">$450 - $650</option>
                        <option value="option3">$650 - $850</option>
                        <option value="option4">$850 - $1,000,000</option>
                        </select>
                    </div>
                    <br>
                    <div class="btn-enviar col-md-1 mx-2"> 
                      <input type="submit" name="submit" value="Enviar" class="enviar">
                    </div>
                    
                  </form>
             
        
                    <div class="slider">
                        <ul>
                            <li><a href="https://inmobiliariatetakawi.com"><img src="https://i.ibb.co/DKbSqXz/GST-9422.jpg" alt="GST-9422" border="0"></a></li>
                            <li><a href="https://inmobiliariatetakawi.com"><img src="https://i.ibb.co/4P9d4Zh/GST-3493.jpg" alt="GST-3493" border="0"></a></li>
                        </ul>
                    </div>
       
                    

     
                    
               


        
    </body>
    @endsection
</html>
