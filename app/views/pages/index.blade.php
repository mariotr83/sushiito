@extends('layout.master')

@section('menu')
    <div class="section-menu" id="menu">
       <div class="resize">
        <div class="menu-logo">
            <img src="images/logo_sushiitto.png">
        </div>
        <div class="menu-items">
            <ul>
                <li class="selected item" data="menu">Home</li>
                <li class="item" data="onlinestore">Pedido en Linea</li>
                <li class="item" data="menuPDF">Menú</li>
                <li class="item" data="promotions">Promociones</li>
                <li class="item" data="location">Ubicanos</li>
                <li class="item" data="contact">Contacto</li>
            </ul>
        </div>
        <div class="menu-social">

        </div>
      </div>
    </div>


    <div class="section section-slider">
    </div>

    <div id="onlinestore" class="section section-onlinestore" data-stellar-background-ratio="0.5">
                <div class="whiteSpace"></div>
                    <div class="logoOnline">
                        <img src="images/logoOnline.jpg">
                    </div>
                <div class="orderModule"></div>
                <div class="redLabel"> </div>
    </div>

<div id="menuPDF" class="section section-menuPDF" data-stellar-background-ratio="0.5">
    <div class="menuImg">
        <img src="images/menu.jpg">
    </div>
    <div class="downloadPdf">
        <p>Descarga el menú en PDF aquí.</p>
    </div>
    <div class="redLabel"></div>
</div>


<div id="promotions" class="section section-promotions" data-stellar-background-ratio="0.5">
    <div class="promoImg">
        <img src="images/promo01.jpg">
    </div>
    <div class="downloadPdf">
        <p>Descarga el menú en PDF aquí.</p>
    </div>
    <div class="redLabel"></div>
</div>

    <div id="location" class="section section-location">

   <div class="resize">
    <div class="leftColumn">
        <h1>UBÍCANOS</h1>
        <h2>Selecciona tu sucursal más cercana.</h2>

        <select id="select_marker">
            <option value="0">Sucursal del Valle</option>
            <option value="1">Sucursal Micropolis</option>
        </select>



      <div class="adresses">
          <div class="branch_pickSucursal">
              <img src="images/sucursal01.jpg">
          </div>

          <div class="adressSide">
                <div class="iconPlaces"><img src="images/iconPlaces.png"></div>
        <p>
            <span id="branch_name"><b>Sucursal Valle</b><br/><br/></span>
            <span id="branch_address">Plaza Comercial Guadalquivir<br/>Río Guadalquivir #505<br/>Col. Del Valle Garza García, N.L.</span>
        </p>
              <div class="iconHours"><img src="images/iconHours.png"></div>
        <p>

            <span><b>Horarios</b><br/><br/></span>
            <span id="branch_schedule">Lunes a Jueves 13:00 a 24:00 hrs.<br/>Viernes y Sábado 13:00 a 24:00 hrs.<br/>Domingo 13:00 a 23:00 hrs.</span>
        </p>
              <div class="iconTels"><img src="images/iconTels.png"></div>
        <p>

            <span><b>Teléfonos</b><br/><br/></span>
            <span id="branch_phone">8356 7350/ 8356 7352</span>
        </p>
        <p>
            <span id="branch_isopen"></span>
        </p>
          </div>
      </div>

    </div>

     <div class="rightColumn">
       <div class="mapHead">
           <div class="logoHeadMap">
                <img src="images/logo_sushiittoRev.png">
           </div>
       </div>
            <div id="map" class="map">
                <!-- Content of the map will be loaded here -->
            </div>

    </div>
  </div>

</div>
<div class="redLabel"></div>
    <div id="contact" class="section section-contact" data-stellar-background-ratio="0.5">
            <div class="leftColumn">
                </div>

        <div class="rightColumn contactText">
            <h1 class="contactText">CONTACTO</h1>
            <h2>Tu comentarios son importantes para nosotros</h2>
            <form>
                <div class="leftColumnForm">
                    <p>Nombre:</p>
                    <p>Telefono:</p>
                    <p>Email:</p>
                    <p>Sucursal:</p>
                    <p>Mensaje:</p>
                </div>
                <div class="rightColumnForm">
                <p><input type="text" name="firstname"></p>
                <p> <input type="text" name="lastname"></p>
                    <p> <input type="text" name="email"></p>
                    <p> <input type="text" name="sucursal"></p>
                    <p> <input type="text" name="mensaje"></p>

                </div>
                        <input type="button" value="ENVIAR">
                </form>
            </div>
    </div>
@stop

@section('content')



@stop

@section('footer')
    <script src=""></script>
    <script src="/public/javascript/functions.js"></script>
@stop
