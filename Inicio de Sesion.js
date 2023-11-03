$(document).ready(function() {
  // Obtiene la altura del primer formulario y la altura del segundo formulario.
  var panelOne = $('.form-panel.two').height(),
    panelTwo = $('.form-panel.two')[0].scrollHeight;

  // Agrega un evento de clic al segundo formulario.
  
  $('.form-panel.two').not('.form-panel.two.active').on('click', function(e) {
      // Previene el comportamiento predeterminado del evento.

    e.preventDefault();
  // Muestra el botón de alternar formulario.

    $('.form-toggle').addClass('visible');
  // Oculta el primer formulario.

    $('.form-panel.one').addClass('hidden');
  // Muestra el segundo formulario y lo marca como activo.

    $('.form-panel.two').addClass('active');
    // Anima el alto del formulario al alto del segundo formulario.
    
    $('.form').animate({
      'height': panelTwo
    }, 200);
  });
// Agrega un evento de clic al botón de alternar formulario.
  
$('.form-toggle').on('click', function(e) {
      // Previene el comportamiento predeterminado del evento.
    
      e.preventDefault();
      // Oculta el botón de alternar formulario.

    $(this).removeClass('visible');
      // Muestra el primer formulario.

    $('.form-panel.one').removeClass('hidden');
      // Oculta el segundo formulario y lo desmarca como activo.

    $('.form-panel.two').removeClass('active');
    $('.form').animate({
      'height': panelOne
    }, 200);
      // Anima el alto del formulario al alto del primer formulario.

  });
});