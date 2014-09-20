@extends('layout.master')

@section('menu')
    <div class="section-menu" id="menu">
       <div class="resize">
        <div class="menu-logo">
            <img src="images/logo_sushiitto.png">
        </div>
           <div class="fb_sushito"><a href="https://www.facebook.com/sushiittonorte" target="_blank"><img src="{{ URL::to('/images/fbIcon.png') }}">/Sushiittonorte</a></div>
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

        <div id="slider_home">
            <ul class="bjqs">
                <li><div class="home_slide slide_h1"></div><!-- Any content you like --></li>
                <li><div class="home_slide slide_h2"></div><!-- Any content you like --></li>

                <!--<li><img src="{{ URL::to('/images/slider01.jpg') }}"></li>-->
            </ul>
        </div>

    </div>

    <div id="onlinestore" class="section section-onlinestore" data-stellar-background-ratio="0.5">
                <div class="whiteSpace"></div>
                    <div class="logoOnline">
                        <img src="images/logoOnline.jpg">
                    </div>



        <div class="orderModule">
            <iframe class="iframe"   AllowTransparency src="http://www.pedidosya.com.mx/results?chain=Sushi_Itto_MX&utm_source=sushi-itto.com.mx&utm_medium=b2b&utm_content=iframe&utm_campaign=Widget&w=06741c0d7d00c685e71665259be6d14e">
                background-color:#F999"
            </iframe>

        </div>
                <div class="redLabel"> </div>
    </div>

<div id="menuPDF" class="section section-menuPDF" data-stellar-background-ratio="0.5">
<!--<div class="menuImg">-->
    <!--<iframe  class="magazine_pdf" src='http://online.fliphtml5.com/gkjb/jnel/'  seamless='seamless' scrolling='no' frameborder='0' allowtransparency='true' allowfullscreen='true' ></iframe>    <div class="hide_magazine"></div>-->
    <div id="slider_menu">
        <ul class="bjqs">
            <li><div class="home_slide menu_h1"></div><!-- Any content you like --></li>
            <li><div class="home_slide menu_h2"></div><!-- Any content you like --></li>

            <!--<li><img src="{{ URL::to('/images/slider01.jpg') }}"></li>-->
        </ul>
    </div>
<!--</div>-->
   <!-- <div class="menuImg">
        <img src="images/menu.jpg">
    </div>-->
    <div class="downloadPdf">
        <a href="{{URL::to('/documents/menu-sushiitto.pdf')}}" target="_blank"><p>Descarga el menú en PDF aquí.</p></a>
    </div>
    <div class="redLabel"></div>
</div>


<div id="promotions" class="section section-promotions" data-stellar-background-ratio="0.5">

    <div id="slider_promotions">
        <ul class="bjqs">
            <li><img src="{{ URL::to('/images/slider/s_promocion01.jpg') }}"><!-- Any content you like --></li>
            <li><img src="{{ URL::to('/images/slider/s_promocion03.jpg') }}"><!-- Can go inside these slides--></li>
        </ul>
    </div>

   <!--<div class="promoImg">

    </div>-->
    <!--<div class="downloadPdf">
        <p>Descarga el menú en PDF aquí.</p>
    </div>-->
    <div class="suscribe_wrap">
        <div class="left_suscribe">
                <div class="title_suscribe">Recibe Ofertas y Promociones</div>
                <div class="info_suscribe">Ingresa aqui tu correo para enviarte nuestras promociones y descuentos</div>
        </div>
        <div class="right_suscribe">
            <input type="text" class="input_rounded" placeholder="Escribe tu correo"> <input type="submit" value="Suscribir" class="btn_purple">
        </div>
    </div>

    <div class="redLabel"></div>
</div>

    <div id="location" class="section section-location">

   <div class="resize">
    <div class="leftColumn Ubicanos">
        <h1>UBÍCANOS</h1>
        <h2>Selecciona tu sucursal más cercana.</h2>

        <select id="select_marker">
            <option value="0">Sucursal del Valle</option>
            <option value="1">Sucursal Micropolis</option>
        </select>



      <div class="adresses">
          <div class="arrow_adresses"></div>
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

     <div class="rightColumn Mapa">
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
            <div class="leftColumn left_contact">
                </div>

        <div class="rightColumn contactText">
            <h1 class="contactText">CONTACTO</h1>
            <h2>Tu comentarios son importantes para nosotros</h2>
            {{ Form::open(['route' => 'contact']) }}
                <div class="leftColumnForm">
                    <p>Nombre:</p>
                    <p>Telefono:</p>
                    <p>Email:</p>
                    <p>Sucursal:</p>
                    <p>Mensaje:</p>
                </div>
                <div class="rightColumnForm">
                <p><input type="text" name="name">{{$errors->first('name',"<span class=error>:message</span>")}}</p>


                <p> <input type="text" name="phone"> {{$errors->first('phone',"<span class=error>:message</span>")}}</p>

                    <p> <input type="text" name="email"> {{$errors->first('email',"<span class=error>:message</span>")}}</p>

                    <p> <input type="text" name="sucursal">  {{$errors->first('sucursal',"<span class=error>:message</span>")}}</p>

                    <p> <input type="text" name="mensaje">{{$errors->first('mensaje',"<span class=error>:message</span>")}}</p>


                </div>
                        <input class="btn_purple" type="submit" value="ENVIAR">
            {{Form::close()}}
            </div>
    </div>
@stop

@section('content')



@stop

@section('footer')
    <script src=""></script>
    <script src="/public/javascript/functions.js"></script>
@stop


@section('js_code')
 <script>
     $(document).ready(function(){



         $('#slider_promotions').bjqs({
             'height' : ($('.resize').width()*47.6454)/100,
             'width' : $('.resize').width(),
             'showmarkers' : false,
             'nexttext' : "<img style='margin-right: 10px;' src={{URL::to('/images/right_arrow.png')}}>", // Text for 'next' button (can use HTML)
             'prevtext' : "<img style='margin-left: 10px;' src={{URL::to('/images/left_arrow.png')}}>", // Text for 'previous' button (can use HTML)
             'responsive' : true
         });

        $('.home_slide').css({ width: $(window).width(), height: $(window).height() });

       $('#slider_home').bjqs({
             'height' : $(window).height(),
             'width' : $(window).width(),
             'showmarkers' : false,
             'nexttext' : "<img style='margin-right: 10px;' src={{URL::to('/images/right_arrow.png')}}>", // Text for 'next' button (can use HTML)
             'prevtext' : "<img style='margin-left: 10px;' src={{URL::to('/images/left_arrow.png')}}>", // Text for 'previous' button (can use HTML)
             'responsive' : true
         });

         $('#slider_menu').bjqs({
             'height' : $(window).height() *.80,
             'width' : $(window).width(),
             'showmarkers' : false,
             'nexttext' : "<img style='margin-right: 10px;' src={{URL::to('/images/right_arrow.png')}}>", // Text for 'next' button (can use HTML)
             'prevtext' : "<img style='margin-left: 10px;' src={{URL::to('/images/left_arrow.png')}}>", // Text for 'previous' button (can use HTML)
             'responsive' : true
         });



         $(window).resize(function(){
             $('.home_slide').css({ width: $(window).width(), height: $(window).height() });

             $('.home_slide').css('max-width',$(window).width());
             $('.home_slide').css('max-height',$(window).height());
         });





        /* $(window).resize(function(){
             if($(window).width()>$('#slider_home').width()){


                 $('#slider_home').bjqs({
                     'height' : $(window).height(),
                     'width' : $(window).width(),
                     'showmarkers' : false,
                     'nexttext' : "<img src={{URL::to('/images/right_arrow.png')}}>", // Text for 'next' button (can use HTML)
                     'prevtext' : "<img src={{URL::to('/images/left_arrow.png')}}>", // Text for 'previous' button (can use HTML)
                     'responsive' : true
                 });
             }
            });*/


     });
 </script>
@stop