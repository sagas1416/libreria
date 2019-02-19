

<html>
  <head>
    <title>Menu Desplegable</title>
    <style type="text/css">
      * {
        margin:0px;
        padding:0px;
      }
      body, html {
        height: 100%;
        background-color: #EEEEEE;
      }
      #header {
        margin:auto;
        width:100%;
        font-family:Arial, Helvetica, sans-serif;
      }
      #logo {
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          background: #323639;
           /*background: #00a4d3 para color celeste*/
          box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
          padding-right: 30px;
          margin: 0;
          padding-left: 30;

        }
        #logo2{
          width: 50px;
          height: 50px;
        }
        #nav {
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          background: #323639;
           /*background: #00a4d3 para color celeste*/
          box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
          padding-left: 850px;
          padding-right: 30px;
          margin: 0;
        }
      ul, ol {
        list-style:none;
      }
      
      #nav > li {
    

      }
      
      #nav li a {
        text-align: right;
        background-color:#323639;
        color:#fff;
        text-decoration:none;
        padding:10px 12px;
        display:block;
      
      }
      
      #nav li a:hover {
        background-color:#434343;

      }
      
      #nav li ul {
        display:none;
        position:absolute;
        min-width:140px;
      }
      
      #nav li:hover > ul {
        display:block;
      }
      
      #nav li ul li {
        position:relative;
      }
      
      #nav li ul li ul {
        right:-140px;
        top:0px;
      }
      

    </style>
  </head>
  <body>
    <div id="header">
      <div id="logo">
       <img id="logo2" src="img/logo-libro.png">
      </div>
        <ul class="nav">
        <li><a href="">Inicio</a></li>
        <li><a href="">Servicios</a>
          <ul>
            <li><a href="">Submenu1</a>
              <ul>
                <li><a href="">Submenu1</a></li>
                <li><a href="">Submenu2</a></li>
                <li><a href="">Submenu3</a></li>
                <li><a href="">Submenu4</a></li>
              </ul>
            </li>
            <li><a href="">Submenu2</a>
            <ul>
                <li><a href="">Submenu1</a></li>
                <li><a href="">Submenu2</a></li>
                <li><a href="">Submenu3</a></li>
                <li><a href="">Submenu4</a></li>
              </ul>
            </li>
            <li><a href="">Submenu3</a></li>
            <li><a href="">Submenu4</a></li>
          </ul>
        </li>
        <li><a href="">Acerca de</a>
          <ul>
            <li><a href="">Submenu1</a></li>
            <li><a href="">Submenu2</a></li>
            <li><a href="">Submenu3</a></li>
            <li><a href="">Submenu4</a></li>
          </ul>
        </li>
        <li><a href="">Contacto</a></li>
      </ul>
    </div>
  </body>
</html>
