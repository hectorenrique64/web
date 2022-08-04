<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link rel="stylesheet" href="assets/css/estilos.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    <header >
  
  <nav class="#b39ddb deep-purple lighten-3">
  <div class="container 3">
    <div class="nav-wrapper" >
      <a href="#"class="brand-logo center">Tienda.com</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>

  </header>
<div class ="container contenido">
 <div class="row">
  <div class="sidebar col s12 m12 l4 z-depth-2">
    <h3>Loggin</h3>
    <div class="row">
            <div class="input-field col s12 m12">
              <input id="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
      </div>

    <div class="row">
        <div class="input-field col s12 m12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
     </div>
     <a class="waves-effect waves-light btn">button</a>
     <ul>
      <li><a href="">Mis Pedidos</a></li>
      <li><a href="">Gestionar Pedidos</a></li>
      <li><a href="">Gestionar Categorias</a></li>
      
      </ul>
  </div>
  <div class="productos col s12 m12 l8 z-depth-2">
    <h2>Nuestros Productos</h2>
     
  
          
      
        
 </div>
</div>
<footer class="page-footer #b39ddb deep-purple lighten-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Tienda Online</h5>
                <p class="grey-text text-lighten-4">Todos nuestros productos</p>
                <img  src="assets/img/camiseta.png">
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 Derechos reservados
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function(){
  
    var elems = document.querySelectorAll('.sidenav');
     var options = {
    edge: 'left',
    draggable: true,
    inDuration: 250,
    outDuration: 200,
    onOpenStart: null,
    onOpenEnd: null,
    onCloseStart: null,
    onCloseEnd: null,
    preventScrolling: true
}
     var instances = M.Sidenav.init(elems, options);
  });

</script>
      <!--JavaScript at end of body for optimized loading-->

    </body>
  </html>
        
  


