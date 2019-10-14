<section class="col-md-12 nopadding" id="contacto">

    <!-- <div class="col-md-12 nopadding" id="precontacto">

<div id="gmapa" style="width: 100%;float:left;height:360px;"></div>

  </div> -->
  <div class="col-md-12 nopadding" id="innerContact">
    <div class="container">
      <div class="col-md-5 col-xs-12 infoFooter">
        <h3>Contacto</h3>
        <ul class="datos">
          <li><span><img src="img/ico_footer_4w.png" class="img-responsive" /></span>Whatsapp +54911 5555 1111</li>
          <li><span><img src="img/ico_footer_2.png" class="img-responsive" /></span>Argentina 0810 555 1111</li>
          <li><span><img src="img/ico_footer_2.png" class="img-responsive" /></span>Chile +56 72 1111111</li>
          <li><span><img src="img/ico_footer_3.png" class="img-responsive" /></span><a href="mailto:mail@mobillers.com">mail@mobillers.com</a></li>
          <li><span><img src="img/ico_footer_1.png" class="img-responsive" /></span>Calle 111 - CABA, Argentina.</li>
        </ul>
         <div id="gmapa" style="width: 75%;/*float:left*/;margin-top: 150px;margin-left: 0px/*-185px*/;height:240px;"></div>
         <div class="social-icons">
          <ul class="footersociallinks">
            <li><a href="https://www.facebook.com/Mobillerscompany"  target="_blank"><i class="fab fa-facebook-f"></i></li></a>
            <li><a href="https://twitter.com/mobillers"  target="_blank"><i class="fab fa-twitter"></i></li></a>
            <li><a href="https://www.instagram.com/mobillers_oficial/"  target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href=https://www.youtube.com/watch?v=ewyShZUx6hY"  target="_blank"><i class="fab fa-youtube"></i></a></li>
            <li><a href="https://www.linkedin.com/company/mobillers"  target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
          </ul>
        </div>
        <!-- <div id="gmapa" style="width: 75%;float:left;margin-top: 150px;margin-left: -185px/*-140px*/;height:240px;"></div> -->
      </div>
      <div class="col-md-7 col-xs-12 formFooter">
        <div class="formBox">
          <h3>envianos tu consulta</h3>
          <form id="emailsform" action="email.php" method="post">
            <p>
              <label> <span>Nombre y apellido</span>
                <input type="text" class="inp" name="nomape" id="nomape" />
              </label>
            </p>
            <p>
              <label> <span>Teléfono</span>
                <input type="number" class="inp" name="tel" id="tel" />
              </label>
            </p>
            <p>
              <label> <span>E-mail</span>
                <input type="text" class="inp" name="emailf" id="emailf" />
              </label>
            </p>
            <!-- <?php
            $valor1 = rand(5, 15);
            $valor2 = rand(1, $valor1 - 1);
            $resultado = $valor1 + $valor2;
            ?>
            <p>
              <label> <span>Cuánto es <?php echo $valor1; ?> + <?php echo $valor2; ?> </span>
                <input type="text" class="inp" id="math" name="math" />
              </label>
            </p> -->
            <p>
              <label> <span>Tu mensaje</span>
                <textarea name="consulta" id="consulta"></textarea>
              </label>
            </p>
            <div class="boxLink">
              <!--
              <a class="link">
                Enviar
              </a>
            -->
            <button type='submit' class="link" id="btnenviar" onclick="return gtag_report_conversion(‘http://www.mobillers.com/contacto#')">Enviar</button>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

	<div class="col-md-12 nopadding" id="datosFootes">
		<div class="container">
      <div class="col-md-6">
        <p>® 2018 - Mobillers - Todos los derechos reservados</p>
      </div>
		</div>
	</div>

</section>
<!--
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script type="text/javascript" src="lib/control/iconselect.js"></script>
        
<script type="text/javascript" src="lib/iscroll.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>

<script src="aos.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script type="text/javascript">
   AOS.init({
    offset: 200,
    duration: 600,
    easing: 'ease-in-sine',
    delay: 100,
    // disable: window.innerWidth < 1000
   });
</script>

<script type="text/javascript">
window.onload = function() {
 
var ln = x=window.navigator.language||navigator.browserLanguage;

if(ln == 'en'){
window.location.href = 'http://www.mobillers.com/en/index.php';
}else if(ln == 'pt'){
window.location.href = 'http://www.mobillers.com/br/index.php';
}else{
window.location.href = 'http://www.mobillers.com/';
}
 
// window.location.href = '/" + ln[0] + ln[1] + ".html';//
 
}
</script>


<script>
$(function() {
    var pgurl = window.location.href.substr(window.location.href
.lastIndexOf("/")+1);
console.log(pgurl);
    $("#nav .link").each(function(){
         if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
         $(this).addClass("active");
    })
});
</script>

<script>
  // Get the container element
var btnContainer = document.getElementById("navbar");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("link");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

<script>
            
        var iconSelect;
        var numtel1;

        window.onload = function(){

            numtel1 = document.getElementById('numtel1');
            
            document.getElementById('my-icon-select').addEventListener('changed', function(e){
               numtel1.value = iconSelect.getSelectedValue();
            });
            
            iconSelect = new IconSelect("my-icon-select");

            var num = ['+54','+55','+52','+56'];
            var icons = [];
            icons.push({'iconFilePath':'img/flag_arg.png', 'iconValue': num[0]});
            icons.push({'iconFilePath':'img/flag_bra.png', 'iconValue': num[1]});
            icons.push({'iconFilePath':'img/flag_mex.png', 'iconValue': num[2]});
            icons.push({'iconFilePath':'img/flag_cl.png', 'iconValue':  num[3]});

            
            iconSelect.refresh(icons);
            


        };
            
</script>



<!-- <script>
$(document).ready(function() {
  var s = $(".link.active");
  var s2 = $("link");
  var pos = s.position();          
  $(window).scroll(function() {
    var windowpos = $(window).scrollTop();
    console.log(windowpos);
    if (windowpos >= pos.top & windowpos <=2485) {
      s.addClass("active");
      s2.addClass("active");
    } else {
      s.removeClass("active");  
      s2.removeClass("active"); 
    }
  });
});
</script> -->


<!-- <script>
  // Get the container element
var btnContainer = document.getElementById("navbar");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("link link-menu");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script> -->

<section class="col-md-12 nopadding">

	<span id="cargando"></span>

<script type="text/javascript">
var map;
var myLatlng;
var marker;
	$(function() {
			$('#cargando').hide();
			$('#zonas').hide();

/* ############ */

function initialize() {

var styles = [
    {
      stylers: [
        { saturation: -150 }
      ]
    },{
      featureType: "road.arterial",
      elementType: "geometry",
      stylers: [
        { lightness: 100 },
        { visibility: "simplified" }
      ]
    },{
      featureType: "road.arterial",
      elementType: "labels",
      stylers: [
        { visibility: "off" }
      ]
    }
  ];

  // Create a new StyledMapType object, passing it the array of styles,
  // as well as the name to be displayed on the map type control.
  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});

  var mapOptions = {
    zoom: 16,
    center: new google.maps.LatLng(-34.5718467,-58.4318717),
    scrollwheel: false,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
	mapTypeControl: false,
	disableDefaultUI : false,
	mapTypeControlOptions: {
	  position	 : google.maps.ControlPosition.TOP_RIGHT,
      mapTypeIds : [google.maps.MapTypeId.ROADMAP, 'map_style'],
	  style      : google.maps.MapTypeControlStyle.HORIZONTAL_BAR
    },
	panControl: true,
    panControlOptions: {
        position: google.maps.ControlPosition.TOP_RIGHT
    },
    zoomControl: true,
    zoomControlOptions: {
		style: google.maps.ZoomControlStyle.LARGE,
        position: google.maps.ControlPosition.TOP_RIGHT
    },
    scaleControl: false,
    scaleControlOptions: {
        position: google.maps.ControlPosition.TOP_RIGHT
    }

  };
  map = new google.maps.Map(document.getElementById('gmapa'),
      mapOptions);
myLatlng = new google.maps.LatLng(-34.5718467,-58.4318717);
marker = new google.maps.Marker({
  position: myLatlng,
  map: map,
  title:"Mobillers"
});

marker.setIcon('img/marker.png');

map.mapTypes.set('map_style', styledMap);
map.setMapTypeId('map_style');


}
google.maps.event.addDomListener(window, 'load', initialize);

		});
	</script>
</section>

<script>

var cantidad = 1;

function checkField(campo){

  if( campo != '' ){
    return true;
  }else{
    //$('.modal-body p').html("Escribí tu teléfono");

    //$('#mensajeEmail').html("Escribí tu teléfono").slideDown("slow").delay( 500 ).slideUp("slow");
  }

}

    $(document).ready( function(){
      

      if (true) {}
      //$('.modal').modal({show:true});

      if(window.location.hash) {
        $('html, body').animate({
            scrollTop: $(window.location.hash).offset().top - 140
        }, 500);
      }


		var stickyNavTop = 90;

		var stickyNav = function(){
			var scrollTop = $(window).scrollTop();

			if (scrollTop > stickyNavTop) {
			    $('.navbar').addClass('sticky');
			} else {
			    $('.navbar').removeClass('sticky');
			}
		};


		stickyNav();

		$(window).scroll(function() {
		  stickyNav();
		});


// $(document).ready(function() {
//     $("#submit").prop("disabled", true);
//      $('input[type="tel"]').keyup(function() {
//         if($(this).val() != '') {
//             $("#submit").removeAttr('disabled');
//         }
//      });
//  });    

// var input = $('input').val()

//  $('input[type="tel"]').keyup(function() {
//     if($(input.length) <= 10) {
//         $("#submit").removeAttr('disabled');
//     }
//  });

// $( "input:tel" ).on("click",function(){
//   $("#submit").removeAttr("disabled"); 
//   });



$(document).on("click", ".btnSolicitarLlamado", function(event) {
  if(($('#numtel1').val() == '+54') || ($('#numtel1').val() == '+55') || ($('#numtel1').val() == '+52') || ($('#numtel1').val() == '+56')) {
      console.log("no enviar");
   }else{
      var padre = $(this).parent().find('input');
      if( checkField($(padre).val("")) ){
        $.ajax({
            url: "quickemail.php",
            type: "POST",
            data: { num: $(padre).val() },
            success: function(response) {
                $('#modalGracias').modal('show');
                $(padre).val("");
            }
        });
        console.log("enviar");
      }
   }
  
});




$('.btnSolicitar').on('click', function(event) {
  $('#modalSolicitar').modal({show:true});
});

function validarEmail(email){
  var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

// function validarApps(similapp){
//   var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//   return re.test(similapp);
// }

$('.siguientePaso').on('click', function(event) {

  if( validarEmail( $('#email').val() ) ){
    //alert("todo ok!");
    $('#email').removeClass('error');
    $('.paso1').hide();
    $('.paso2').show();
  }else{
    $('#email').addClass('error');
    //alert("completa el email para avanzar!");
  }

});

$('.paso2 h6').on('click', function(event) {
  $('.paso2').hide();
  $('.paso1').show();
});

$('.paso31 h6').on('click', function(event) {
  $('.paso31').hide();
  $('.paso2').show();
});

$('.paso31b h6').on('click', function(event) {
  $('.paso31b').hide();
  $('.paso31').show();
});

$('.paso32 h6').on('click', function(event) {
  $('.paso32').hide();
  $('.paso2').show();
});

$('.siguientePasoFix').on('click', function(event) {
  $('.paso32').hide();
  $('.paso32b').show();
});

$('.siguientePasoFix2').on('click', function(event) {
  $('.paso31').hide();
  $('.paso31b').show();
});

$('.paso32b h6').on('click', function(event) {
  $('.paso32b').hide();
  $('.paso32').show();
});

$('.paso33 h6').on('click', function(event) {
  $('.paso33').hide();
  $('.paso2').show();
});

$('.paso33 h6').on('click', function(event) {
  $('.paso33').hide();
  $('.paso2').show();
});

$('.masmenos .inp_mas').on('click', function(event) {
  cantidad++;
  $('#numcant').html(cantidad);
});

$('.masmenos .inp_menos').on('click', function(event) {
  if( cantidad != 1 ){
    cantidad--;
  }
  $('#numcant').html(cantidad);
});


$('.paso2 .opts input:radio').click(function() {
var elegido = $(this).val();
switch(elegido){
  case "1":
    console.log("1");
    $('.paso31').show();
  break;
  case "2":
    console.log("2");
    $('.paso32').show();
  break;
  case "3":
    console.log("3");
    $('.paso33').show();
  break;
}
$('.paso2').hide();

});

$('#btnEnviar1').on('click', function(event) {
  var nombre = $('#nom').val();
  var email = $('#email').val();
  var tel = $('#tel').val();
  var radioValue1 = $("input[name='tipo']:checked"). val();

  var android = $('#checkOpt1:checked').val();
  var ios = $('#checkOpt2:checked').val();
  var radioValue3 = $("input[name='opciones31b']:checked"). val();
  var radioValue4 = $("input[name='opciones31c']:checked"). val();
  var radioValue5 = $("input[name='opciones31d']:checked"). val();
  var ideap = $('#checkOpt21:checked').val();
  var analisis = $('#checkOpt22:checked').val();
  var appdesarrollo = $('#checkOpt23:checked').val();
  var appdesarrollada = $('#checkOpt24:checked').val();
  var radioValue6 = $("input[name='opciones31ca']:checked"). val();
  var radioValue7 = $("input[name='opciones31cb']:checked"). val();
  var similapp = $("#similapp").val();

  // if( validarApps( $('#similapp').val() ) ){
  //   //alert("todo ok!");
  //   $('#similapp').removeClass('error');
  //   $('.btnEnviar').show();
  // }else{
  //   $('#similapp').addClass('error');
  //   $('.btnEnviar').hide();
  //   //alert("completa el email para avanzar!");
  // }

  var laidea31 = $('#laidea31').val();

  $.ajax({
      url: 'solicitar.php',
      type: 'POST',
      data: { nom: nombre, email: email, tel: tel, tipo: radioValue1, android: android, ios: ios, usuarios: radioValue3, integracion: radioValue4, notificacion: radioValue5, ideap: ideap, analisis: analisis, appdesarrollo: appdesarrollo, appdesarrollada: appdesarrollada, tiempoproyecto: radioValue6, tiempoapp: radioValue7, similapp: similapp, idea: laidea31, opcion:1 },
      success: function(response) {
          $('#modalSolicitar').modal('hide');
          console.log(response);
          $('.paso2,.paso31,.paso32,.paso33,.paso32b,.paso31b').hide();
          $('.paso1').show();
          $('#modalGracias').modal('show');
      }
  });

});

$('#btnEnviar2').on('click', function(event) {
  var nombre = $('#nom').val();
  var email = $('#email').val();
  var tel = $('#tel').val();
  var radioValue1 = $("input[name='tipo']:checked"). val();
  
  var radioValue8 = $("input[name='opciones32a']:checked"). val();
  var radioValue9 = $("input[name='opciones32b']:checked"). val();
  var radioValue10 = $("input[name='opciones32c']:checked"). val();
  var ideap2 = $('#checkOpt31:checked').val();
  var analisis2 = $('#checkOpt32:checked').val();
  var appdesarrollo2 = $('#checkOpt33:checked').val();
  var appdesarrollada2 = $('#checkOpt34:checked').val();
  var radioValue11 = $("input[name='opciones32ba']:checked"). val();
  var radioValue12 = $("input[name='opciones32ca']:checked"). val();
  var similapp2 = $("#similapp").val();

  var laidea32 = $('#laidea32').val();
  
  $.ajax({
      url: 'solicitar.php',
      type: 'POST',
      data: { nom: nombre, email: email, tel: tel, tipo: radioValue1, usuarios2: radioValue8, integracion2: radioValue9, notificacion2: radioValue10, ideap2: ideap2, analisis2: analisis2, appdesarrollo2: appdesarrollo2, appdesarrollada2: appdesarrollada2, tiempoproyecto2: radioValue11, tiempoapp2: radioValue12, similapp2: similapp2, cantpantallas: cantidad, idea: laidea32, opcion:2 },
      success: function(response) {
          $('#modalSolicitar').modal('hide');
          console.log(response);
          $('.paso2,.paso31,.paso32,.paso33,.paso32b,.paso31b').hide();
          $('.paso1').show();
          $('#modalGracias').modal('show');
      }
  });

});

$('#btnEnviar3').on('click', function(event) {
  var nombre = $('#nom').val();
  var email = $('#email').val();
  var tel = $('#tel').val();
  var laidea = $('#laidea').val();
  var radioValue1 = $("input[name='tipo']:checked"). val();

  $.ajax({
      url: 'solicitar.php',
      type: 'POST',
      data: { nom: nombre, email: email, tel: tel, tipo: radioValue1, idea: laidea, opcion:3 },
      success: function(response) {
          $('#modalSolicitar').modal('hide');
          console.log(response);
          $('.paso2,.paso31,.paso32,.paso33,.paso32b,.paso31b').hide();
          $('.paso1').show();
          $('#modalGracias').modal('show');
      }
  });

});

$('.btnEnviarNO').on('click', function(event) {

var radioValue1 = $("input[name='tipo']:checked"). val();
var radioValue2 = $("input[name='opciones']:checked"). val();
var radioValue3 = $("input[name='opciones31b']:checked"). val();
var radioValue4 = $("input[name='opciones31c']:checked"). val();
var radioValue5 = $("input[name='opciones31d']:checked"). val();
var radioValue6 = $("input[name='opciones31ca']:checked"). val();
var radioValue7 = $("input[name='opciones31cb']:checked"). val();
var radioValue8 = $("input[name='opciones32a']:checked"). val();
var radioValue9 = $("input[name='opciones32b']:checked"). val();
var radioValue10 = $("input[name='opciones32c']:checked"). val();
var radioValue11 = $("input[name='opciones32ba']:checked"). val();
var radioValue12 = $("input[name='opciones32ca']:checked"). val();

//opciones31
//$("#checkOpt1:checked").val()

var android = $('#checkOpt1:checked').val();
var ios = $('#checkOpt2:checked').val();
var radioValue3 = $("input[name='opciones31b']:checked"). val();
var radioValue4 = $("input[name='opciones31c']:checked"). val();
var radioValue5 = $("input[name='opciones31d']:checked"). val();
var ideap = $('#checkOpt21:checked').val();
var analisis = $('#checkOpt22:checked').val();
var appdesarrollo = $('#checkOpt23:checked').val();
var appdesarrollada = $('#checkOpt24:checked').val();
var radioValue6 = $("input[name='opciones31ca']:checked"). val();
var radioValue7 = $("input[name='opciones31cb']:checked"). val();
var similapp = $("#similapp").val();

var radioValue8 = $("input[name='opciones32a']:checked"). val();
var radioValue9 = $("input[name='opciones32b']:checked"). val();
var radioValue10 = $("input[name='opciones32c']:checked"). val();
var ideap2 = $('#checkOpt31:checked').val();
var analisis2 = $('#checkOpt32:checked').val();
var appdesarrollo2 = $('#checkOpt33:checked').val();
var appdesarrollada2 = $('#checkOpt34:checked').val();
var radioValue11 = $("input[name='opciones32ba']:checked"). val();
var radioValue12 = $("input[name='opciones32ca']:checked"). val();
var similapp2 = $("#similapp").val(); 

var laidea = $("#laidea").val();

var nombre = $('#nom').val();
var email = $('#email').val();
var tel = $('#tel').val();
var ideaproyecto = $('#laidea32').val();

$.ajax({
    url: 'solicitar.php',
    type: 'POST',
    data: { nom: nombre, email: email, tel: tel, tipo: radioValue1, opciones: radioValue2, android: android, ios: ios, usuarios: radioValue3, integracion: radioValue4, notificacion: radioValue5, ideap: ideap, analisis: analisis, appdesarrollo: appdesarrollo, appdesarrollada: appdesarrollada, tiempoproyecto: radioValue6, tiempoapp: radioValue7, similapp: similapp, usuarios2: radioValue8, integracion2: radioValue9, notificacion2: radioValue10, ideap2: ideap2, analisis2: analisis2, appdesarrollo2: appdesarrollo2, appdesarrollada2: appdesarrollada2, tiempoproyecto2: radioValue11, tiempoapp2: radioValue12, similapp2: similapp2, cantpantallas: cantidad, idea: laidea, proyecto: ideaproyecto },
    success: function(response) {
        $('#modalSolicitar').modal('hide');
        console.log(response);
        $('.paso2,.paso31,.paso32,.paso33,.paso32b').hide();
        $('.paso1').show();
        $('#modalGracias').modal('show');
    }
});

// empresa o particular || radioValue1
// App, Smart signage o Internet of things ó Hardware || radioValue2
// VideoWall o Stand Alone || radioValue3

});

/* ########### */
$('.nav.navbar-nav li a,.link,.navbar-brand').on('click', function(event) {

    var target = $( $(this).attr('href') );

    if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top - 140
        }, 500);
    }

});
/* ########### */

$.validator.methods.equal = function(value, element, param) {
  return value == param;
};

var validator = $("#emailsform").bind("invalid-form.validate", function() {
  //$("#summary").html("Your form contains " + validator.numberOfInvalids() + " errors, see details below.");
  //console.log("algo aqui");    
}).validate({
  rules: {
    nomape: "required",
          tel: "required",
          emailf: "required email", 
          math: {
      
    }
  },
  messages: {
        emailf: "Email incorrecto",
        tel: "Por favor, complete este campo.",
        nomape: "Por favor, complete este campo.",
        math: "Por favor, complete el resultado de la cuenta."
      },
      success: function(){
        console.log("success");
      },
      submitHandler: function(form) {

        //ga('send', 'event','Formulario', 'enviar');

        $.ajax({
              url: form.action,
              type: form.method,
              data: $(form).serialize(),
              success: function(response) {
                  //$('#mensajeEmail').slideDown("slow").delay( 500 ).slideUp("slow");
                  $('#nomape,#tel,#emailf,#consulta').val("");
                  $('#modalGracias').modal('show');
              }
          });

      }
});

/* ########### */

    });
</script>

</body>
</html>
