var wheight;

$(document).ready(function(){

    //Height responsiveness
    $(window).resize(function() {
        wheight = $(window).height();
        $('.section').attr("style","height:"+(wheight)+"px;");
        $('.nivoSlider, .nivo-slice, .nivoSlider img').attr("style","max-height:"+(wheight)+"px;height:"+(wheight)+"px;");

    });

    $(window).trigger('resize');

    //On item click scroll to div animation
    $('.item').on('click', function(){
        $('.item').removeClass('selected');
        $(this).addClass('selected');
        if($(this).attr("data")=="menu"){
            $('html, body').animate({
                scrollTop: 0
            }, 1000);
        }else{
            $('html, body').animate({
                scrollTop: $("#"+$(this).attr("data")).offset().top-60
            }, 1000);
        }
    });

    //Map create, load and select restaurant
    var map;
    var branch = Array();

    branch[0] = {
        "pickSucursal" : "<img src='images/sucursal01.jpg'>",
        "name" : "<b>Monterrey del Valle</b><br/>",
        "address":"Plaza Comercial Guadalquivir<br/>Río Guadalquivir #505<br/>Col. Del Valle Garza García, N.L.",
        "schedule":"Lunes a Jueves 13:00 a 24:00 hrs.<br/>Viernes y Sábado 13:00 a 24:00 hrs.<br/>Domingo 13:00 a 23:00 hrs.",
        "phone": "8356 7350/ 8356 7352",
        "coordinates": new google.maps.LatLng(25.6584695,-100.355892),
        "marker": new google.maps.Marker({
            position: new google.maps.LatLng(25.6584695,-100.355892),
            animation: google.maps.Animation.DROP,
            title: "Monterrey del Valle"
        }),
        "dates" : [
            {"open":13,"close":23},
            {"open":13,"close":24},
            {"open":13,"close":24},
            {"open":13,"close":24},
            {"open":13,"close":24},
            {"open":13,"close":24},
            {"open":13,"close":24}
        ]
    }

    branch[1] = {
        "pickSucursal" : "<img src='images/sucursal02.jpg'>",
        "name" : "<b>Sucursal Micropolis</b><br/><br/>",
        "address":"Ave. Eugenio Garza Sada #3820<br/>planta baja, Col. Maspalomas,</br>Monterrey, N.L.",
        "schedule":"Lunes a Viernes 9:00 a 18:00 hrs.",
        "phone": "8356 7350/ 8356 7352",
        "coordinates": new google.maps.LatLng(25.611273, -100.270701),
        "marker": new google.maps.Marker({
            position: new google.maps.LatLng(25.611273, -100.270701),
            animation: google.maps.Animation.DROP,
            title: "Maniak Experiencial"
        }),
        "dates" : [
            {"open":-1,"close":-1},
            {"open":9,"close":18},
            {"open":9,"close":18},
            {"open":9,"close":18},
            {"open":9,"close":18},
            {"open":9,"close":18},
            {"open":-1,"close":-1}
        ]
    }
    var mapOptions = {
        zoom: 16,
        scrollwheel: true,
        center: new google.maps.LatLng(20, -103),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById('map'), mapOptions);
    branch[0].marker.setMap(map);
    map.panTo(branch[0].coordinates);

    var current_time = new Date();
    if(branch[0].dates[current_time.getDay()].open <= current_time.getHours() && branch[0].dates[current_time.getDay()].close >= current_time.getHours()){
        $('#branch_isopen').html("Abierto");
    }else{
        $('#branch_isopen').html("Cerrado");
    }

    $('#select_marker').on("change", function(){
        branch[0].marker.setMap(null);
        branch[1].marker.setMap(null);
        branch[0].marker.setAnimation(null);
        branch[1].marker.setAnimation(null);

        map.panTo(branch[$(this).val()].coordinates);
        branch[$(this).val()].marker.setAnimation(google.maps.Animation.DROP);
        branch[$(this).val()].marker.setMap(map);

        $('#branch_name').html(branch[$(this).val()].name);
        $('#branch_address').html(branch[$(this).val()].address);
        $('#branch_schedule').html(branch[$(this).val()].schedule);
        $('#branch_phone').html(branch[$(this).val()].phone);

        var current_time = new Date();
        if(branch[$(this).val()].dates[current_time.getDay()].open <= current_time.getHours() && branch[$(this).val()].dates[current_time.getDay()].close >= current_time.getHours()){
            $('#branch_isopen').html("Abierto");
        }else{
            $('#branch_isopen').html("Cerrado");
        }

    });

});

$(function(){
    $.stellar({
        horizontalScrolling: false,
        verticalOffset: 40,
        responsive: true
    });
});

$(window).load(function() {
    $('#slider').nivoSlider({
        manualAdvance: true
    });
});
