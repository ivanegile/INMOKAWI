@extends('layouts.sections')
 
@section('content')
    

<body>
     
  <div class="slide"> 
    
      <img src="images/GST_3493.jpg" class="" style="z-index: 2">
      <img src="images/GST_9422.jpg" class="initial" style="z-index: 1">
    
  
  </div>
    <div class="imagen">
      <a href="https://inmobiliariatetakawi.com"><img src="images/Logotipo.png" class="logo"></a>
      </div>
    
      <div>
        <ul class="nav nav-tabs">
          <li><a href="formulario">Clientes</a></li>
          <li class="active"><a href="exclusivo">Exclusivo</a></li>
        </ul>
      </div>
     
      

    <div class="form-inline container-fluid">
      <form action="/exclusivo" method="POST" enctype="multipart/form-data" class="form-signin">
        {{ csrf_field() }}
            <div class="row ">
              <div class="col-md-12">
               <input type="text" name="nombre" size="53" class="nombre  field input-48 form-control" id="nombre" placeholder="Nombre" autocomplete="off">
               @if($errors->has('nombre'))
               <p class="help is-danger">{{ $errors->first('nombre')}}</p>
              @endif
              </div> 
            </div>
              <br>
        <div class="row ">
          <div class="col-md-4">
              <input type="tel" size="17" name="telefono" class="telefono field form-control" id="telefono" placeholder="Teléfono"  autocomplete="off">
              @if($errors->has('telefono'))
              <p class="help is-danger">{{ $errors->first('telefono')}}</p>
              @endif
            </div> 
       
        <div class="col-md-4 col-md-offset-2">
                      @if($errors->has('celular'))
                      <p class="help is-danger">{{ $errors->first('celular')}}</p>
                      @endif
                     
                      <input type="tel" size="20" name="celular" class="celular field form-control" id="celular" placeholder="No. Celular" autocomplete="off">
                      <p class="leyenda"><sub>Contacto vía WhatsApp</sub></p>     
                  </div>
            </div>
            <br>
      <div class="row">
              <div class="col-md-4">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="on" name="opcion" id="opcion">
                    Efectivo
                  </label>
                </div>
              </div>
      <div class="col-md-4 col-md-offset-2">
            <div class="form-group ">
              <input type="tel" name="seguro" class="seguro field form-control" id="seguro" placeholder="No. de Seguro"   autocomplete="off">
              @if($errors->has('seguro'))
              <p class="help is-danger">{{ $errors->first('seguro')}}</p>
              @endif
             </div>
          </div>
      </div>
          
          <br>
           
            <div class="row">
              <div class="col-md-4">
                @if($errors->has('credito'))
                <p class="help is-danger">{{ $errors->first('credito')}}</p>
                @endif
                <select class="credito form-control" name="credito">
                  <option selected>Crédito</option>
                  <optgroup label="Bancario">
                    <option value="banco1">banco</option>
                    <option value="banco2">banco</option>
                    <option value="banco3">banco</option>
                    <option value="banco4">banco</option>
                    <option value="banco5">banco</option>
                  </optgroup>
                  <option value="infonavit">Infonavit</option>
                  <option value="tradicional">Infonavit Tradicional</option>
                  <option value="aliados">Aliados</option>
                  <option value="conyugal">Infonavit Conyugal</option>
                  <option value="foviste">Fovissste</option>
                </select>
            </div>
            
        <div class="col-md-4 col-md-offset-2">
                
          @if($errors->has('otros'))
          <p class="help is-danger">{{ $errors->first('otro')}}</p>
          @endif
          <input type="text" name="otro" value="" class="otro field form-control" id="otro" placeholder="Otro Crédito" autocomplete="off">
          </div>
            </div>
            <br>
            <div class="row">
        <div class="col-md-4">
          <div class="form-group ">
                
                @if($errors->has('presupuesto'))
                <p class="help is-danger">{{ $errors->first('presupuesto')}}</p>
                @endif
            <select class="presupuesto form-control" name="presupuesto" id="presupuesto">
              <option selected>Presupuesto</option>
                <option value="option1">$450 - menor</option>
                <option value="option2">$450 - $650</option>
                <option value="option3">$650 - $850</option>
                <option value="option4">$850 - $1,000,000</option>
            </select>
           </div>
         </div> 
            <br>  <br> <br>
     <div class="btn-enviar "> 
       <input type="submit" name="submit" value="Enviar" class="enviar">
     </div>
   </div>
 </div>
        
</form>
    

    <script src="js/jquery-3.4.1.min.js"></script>
    <script>
      (function($) {
    
        var index = 0,
          slides = ["images\/images/GST_3493.jpg", "images\/images/GST_9422.jpg"],
          slidesLength = 2;
    
        setInterval(function() {
    
          $('.slide img').eq(index).addClass('fadeOut');
          $('.slide img').eq(index).next().removeClass('initial');
    
          if (index >= slidesLength - 1) {
    
            index = -1;
    
            $('.slide img').removeClass('fadeOut').addClass('initial');
            $('.slide img').eq(0).removeClass('initial');
    
          }
    
          index++;
    
        }, 6000);
    
    
      })(jQuery);
    </script>
      
</body>
@endsection


</html>
