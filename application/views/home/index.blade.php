<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Sistema de Gestion GPs</title>
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Sistema de control de flota GPS para pequeñas y medianas empresas">
    <meta name="author" content="Reinaldo Zurita (reinaldo@zetalabs.cl)">
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/typica-login.css') }}

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le favicon -->
    <link rel="shortcut icon" href="favicon.html">

  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index-2.html"><img src="logo.png" alt="Zetalabs, siempre innovando "></a>
        </div>
      </div>
    </div>

    <div class="container">

        <div id="login-wraper">
            <form class="form login-form">
                <legend>Protege tu <span class="blue">Automovil</span></legend>
            
                <div class="body">
                    <label>Usuario</label>
                    <input type="text">
                    
                    <label>Clave</label>
                    <input type="password">
                </div>
            
                <div class="footer">
                    <label class="checkbox inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Recuerdame
                    </label>
                                
                    <button type="submit" class="btn btn-success">Ingresar</button>
                </div>
            
            </form>
        </div>

    </div>

    <footer class="white navbar-fixed-bottom">
      Aun no tienes una cuenta? <a href="register.html" class="btn btn-black">Registrate</a>
    </footer>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{ HTML::script('js/jquery.js') }}
	{{ HTML::script('js/bootstrap.js') }}
	{{ HTML::script('js/backstretch.min.js') }}
	{{ HTML::script('js/typica-login.js') }}
</body>
</html>
