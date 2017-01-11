$(document).ready(function(){
	$("#mostrar").on( "click", function() {
		$('#target').show(); //muestro mediante id
		$('.target').show(); //muestro mediante clase
	});
	$("#ocultar").on( "click", function() {
		$('#target').hide(); //oculto mediante id
		$('.target').hide(); //muestro mediante clase
	});
});