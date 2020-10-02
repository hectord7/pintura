/*=============================================
ALTURA COL1          
=============================================*/

var alturaBody = $("body").height();

if(alturaBody < 1020 && window.innerWidth > 767){
    
	$("#col1").css({"height":"150vh"})
}
if(alturaBody > 1020 && window.innerWidth > 767){
	$("#col1").css({"height":alturaBody+"px"})
}

/*=====  Fin de ALTURA COL1  ======*/

/*=============================================
BOTONES ADMINISTRADOR          
=============================================*/
$("p#member span").click(function(){
	$("#cabezote #admin").slideToggle("fast")
	$("p#member span").toggleClass("fa-chevron-down");
	$("p#member span").toggleClass("fa-chevron-up");
})

/*=====  Fin de BOTONES ADMINISTRADOR  ======*/

/*=============================================
SLIDE            
=============================================*/
var numeroSlide = 1;
var formatearLoop = false;
var cantidadImg = $("#slide ul li").length;

$("#slide ul").css({"width": (cantidadImg*100) + "%"})
$("#slide ul li").css({"width": (100/cantidadImg) + "%"})

/* INDICADORES */

$("#indicadores li").click(function(){

	 var roleSlide = $(this).attr("role-slide");
			
	 $("#slide ul li").css({"display":"none"});
			
	 $("#slide ul li:nth-child("+roleSlide+")").fadeIn();
			
	 $("#indicadores li").css({"opacity":".5"});
			
	 $("#indicadores li:nth-child("+roleSlide+")").css({"opacity":"1"});

	 formatearLoop = true;

	numeroSlide = roleSlide;

})

/* FLECHA AVANZAR */

function avanzar(){

	if(numeroSlide >= cantidadImg){numeroSlide = 1;}

	else{numeroSlide++}

	$("#slide ul li").css({"display":"none"});
			
	$("#slide ul li:nth-child("+numeroSlide+")").fadeIn();
			
	$("#indicadores li").css({"opacity":".5"});
			
	$("#indicadores li:nth-child("+numeroSlide+")").css({"opacity":"1"});
}


$("#slideDer").click(function(){

	avanzar();

	formatearLoop = true;

})

/* FLECHA RETROCEDER */

$("#slideIzq").click(function(){

	if(numeroSlide <= 1){numeroSlide = cantidadImg;}

	else{numeroSlide--}


	$("#slide ul li").css({"display":"none"});
			
	$("#slide ul li:nth-child("+numeroSlide+")").fadeIn();
			
	$("#indicadores li").css({"opacity":".5"});
			
	$("#indicadores li:nth-child("+numeroSlide+")").css({"opacity":"1"});

	formatearLoop = true;

})

/* LOOP */

setInterval(function(){

	if(formatearLoop == true){

		formatearLoop = false;
	}

	else{

	avanzar();

	}

},5000);

/*=====  Fin de SLIDE  ======*/

/*=============================================
GALERÍA         
=============================================*/

$("ul#lightbox li a").fancybox({

	openEffect  : 'elastic',
	closeEffect  : 'elastic',
	openSpeed  : 150,
	closeSpeed : 150,
	helpers : {title :{type : 'inside'}}

});

/*=====  Fin de GALERÍA   ======*/

/*=============================================
BUSCADOR         
=============================================*/

$('#tablaSuscriptores').DataTable({
	"language": {
            "sProcessing":     "Processing...",
			"sLengthMenu":     "Show _MENU_ records",
			"sZeroRecords":    "No results found",
			"sEmptyTable":     "No data available in this table",
			"sInfo":           "Showing records from _START_ to _END_ of a total of _TOTAL_ records",
			"sInfoEmpty":      "Showing records from 0 to 0 of a total of 0 records",
			"sInfoFiltered":   "(filtering a total of _MAX_ records)",
			"sInfoPostFix":    "",
			"sSearch":         "Search:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Loading...",
			"oPaginate": {
				"sFirst":    "First",
				"sLast":     "Last",
				"sNext":     "Next",
				"sPrevious": "Previous"
			},
			"oAria": {
				"sSortAscending":  ": Activate to order the column ascending",
				"sSortDescending": ": Activate to order the column in descending order"
			}
        }
});

/*=====  Fin de BUSCADOR   ======*/

