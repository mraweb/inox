/****** MAPS *****/
function initialize() {
	var myLatlng = new google.maps.LatLng(-23.705481,-46.60964);

	var myOptions = {
		zoom: 16,
		center: myLatlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
		
	}
		var map = new google.maps.Map(document.getElementById("mapa"), myOptions);
		
		var infowindow = new google.maps.InfoWindow(
			{ content: 'Rua Álvares Cabral, 1530 – Serraria<br />Diadema / SP',
				size: new google.maps.Size(),
				position: myLatlng
			});
			infowindow.open(map);
	}

$(function() {
	$('.modal, .bt-mapa1').click(function() {
		$('#mapaTeste, .close').show(function() {
			initialize();
		});
	});

	$('.modal, .bt-mapa1').click(function(e) {
		e.preventDefault();
		$('#mask').show()
	});

	$('#mask, .close').click(function() {
		$('#mapaTeste, .close').hide()
	});

	$('#mask, .close').click(function() {
		$('#mask, .close').hide()
	});

	var id = $(this).attr("href");

    var alturaTela = $(document).height();
    var larguraTela = $(window).width();

    //colocando o fundo preto
    $('#mask').css({'width':larguraTela,'height':alturaTela});
    $('#mask').fadeIn(1000); 
    $('#mask').fadeTo("slow",0.8);

    var left = ($(window).width() /2) - ( $(id).width() / 2 );
    var top = ($(window).height() / 2) - ( $(id).height() / 2 );
    
    $(id).css({'top':top,'left':left});
    $(id).show();


});


var $sidebar   = $("#mapa, .close"),
	$window    = $(window),
	offset     = $sidebar.offset(),
	topPadding = -	10;

$window.scroll(function() {
	if ($window.scrollTop() > offset.top) {
		$sidebar.stop().animate({
			marginTop: $window.scrollTop() - offset.top + topPadding
		});
	} 

});