<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Undeviating 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140322

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link rel="stylesheet" href="css/bootstrap.min.css">




<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

<style>

@media (max-width: 568px){
		  .slide > img{
		    width: auto;
		    margin-left: -60%;
		  }
		}
		body{
			color: #fff !important;
		}

.slide{
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  position: absolute;
  background-color: #353535;
  overflow: hidden;
  z-index: -1;
}

.slide > img{
  left: 0;
  bottom: 0;
  opacity: 1;
  width: 100%;
  height: 100%;
  position: absolute;
  transition: all 1.5s ease-in-out;
}

.slide > img.initial {
  opacity: 0;
  left: -10px;
  bottom: -10px;
}

.slide > img.fadeOut {
  opacity: 0;
  left: -10px;
  bottom: -10px;
}

.imagen{
   
    width: 60%;
    text-align: center;
    margin: auto;
    position: relative; 
    z-index: 2;
    
}

.imagen img{

    width: 30%;
    z-index: 3;
}

  form{
    background-color: rgba(0, 0, 0, 0.6);
    background-attachment: fixed;
    width: 35%;
    text-align: center;
    padding: 15px;
    font-size: 15px;
    height:61.6%;
    margin-left: 33%;
    position: absolute;
    border-radius: 10px;
    color: white;
    z-index: 3;
        
  }


.nav{
  margin-left: 43%;
  width: 15%;
  position: relative;
  border: black;
  z-index: 3;
  }

.nav-tabs{
  
  z-index: 3;
}
    


.enviar{
  width: 50%;
  height: 12%;
  padding: 5px;
  border-radius: 5px;
   font-weight: 100;
  font-size: 120%;
  background-color: royalblue;
  
}


  
}
.btn-enviar{
    margin: auto;
}

.leyenda{
 margin-top:5%;

}

.mensaje{
  font-size: 200%;
  font-family: 'IBM Plex Sans'
}


</style>


<script type="text/javascript">

        function showHide(){
          var mostrar = document.getElementById("banco");
          var esconder = document.getElementsByClassName("hidden");

          for (var i = 0; i != esconder.length; i++){
            if(mostrar.checked){
              esconder[i].style.display = "block";
            }else{
              esconder[i].style.display = "none";
            }
          }
        }

</script>

</head>

@yield('content')

