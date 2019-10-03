jQuery(document).ready(function($){
    
    var defMobileHeight = qodefGlobalVars.vars.qodefMobileHeaderHeight;
    var landingSliderHeight = function(){
        if($('body').hasClass('page-id-3366')){
            if (qodef.windowWidth < 1000) {
                qodefGlobalVars.vars.qodefMobileHeaderHeight = 0;
            } else {
                qodefGlobalVars.vars.qodefMobileHeaderHeight = defMobileHeight;
            }
        }
    };
    
    landingSliderHeight();
    $(window).resize(function() {
        landingSliderHeight();
    });
	
	var location = window.location.href
    if( location.indexOf('agendar-cita') > 0 ){
		var pickers = document.querySelectorAll('.datepicker');
		var config = {
		  dateFormat: 'd-m-Y',
		  allowInput: false,
		  enableTime: false,
		  firstDayOfWeek: 1,
		  locale: {
			firstDayOfWeek: 1,
			weekdays: {
			  shorthand: ['Dom','Lun','Mar','Mié','Jue','Vie','Sáb'],
			  longhand: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],         
			}, 
			months: {
			  shorthand: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
			  longhand: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
			},
		  },
		  onChange: function(selectedDates, dateStr, instance) {},
		};

		Array.prototype.forEach.call(pickers, (el) => {
		  flatpickr(el, config);
		});
	}
	
	$('input#pais').click(function(){
		$('.selected-flag').click()
	});
	
	$('.formulario.lang-es input[type="submit"]').val('ENVIAR')
	
	$('.formulario.lang-en input[type="submit"]').val('SUBMIT')
	
	$('.widget_polylang').each(function(){
		$(this).prepend('<i class="fas fa-globe"></i>')
		$(this).children('select').children('option[value="es"]').html('<div class="flag co"></div> ES')
		$(this).children('select').children('option[value="en"]').html('<div class="flag us"></div> EN')
	})
	
	console.log('ready v = 0.8')
	
})

