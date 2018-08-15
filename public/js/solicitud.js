
function goToMenu(id){
	var idLink    = $('#'+id);
	var idSection = $('#section-'+id)
	$('.mdl-navigation__link').removeClass('active');
	$('.js-section--menu').addClass('animated fadeOut');
	idSection.removeClass('animated fadeOut');
	idSection.addClass('animated fadeIn');
	idLink.addClass('active');
}
function downloadCanvas(canvasId, filename) {
    // Obteniendo la etiqueta la cual se desea convertir en imagen
    var domElement = document.getElementById(canvasId);
    // Utilizando la función html2canvas para hacer la conversión
    html2canvas(domElement, {
        onrendered: function(domElementCanvas) {
            // Obteniendo el contexto del canvas ya generado
            var context = domElementCanvas.getContext('2d');
            // Creando enlace para descargar la imagen generada
            var link = document.createElement('a');
            link.href = domElementCanvas.toDataURL("image/png");
            link.download = filename;
            // Chequeando para browsers más viejos
            if (document.createEvent) {
                var event = document.createEvent('MouseEvents');
                // Simulando clic para descargar
                event.initMouseEvent("click", true, true, window, 0,
                    0, 0, 0, 0,
                    false, false, false, false,
                    0, null);
                link.dispatchEvent(event);
            } else {
                // Simulando clic para descargar
                link.click();
            }
        }
    });
}
 
// Haciendo la conversión y descarga de la imagen al presionar el botón
$('#ingresar').click(function() {
    downloadCanvas('section-cotizacion', 'registro_prueba.png');
});
