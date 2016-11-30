function calcularMonto(costo) {
	
	if(!isEmpty($("#cantidadProducto").val())){
		var lps=$("#cantidadProducto").val()*costo;
		// $('.progress-bar').addClass( (lps < 50) ? 'bar-danger' : ( (lps < 100) ? 'progress-bar-purple' : 'progress-bar-orange' ) ) ;
		
		$("#montoTotal").val(240*$("#cantidadProducto").val());
		$("#montoTotal").val($("#montoTotal").val()+".00"+ "("+lps+"LP)");
		if(lps<50){
			$('.progress-bar').css('width', 0+'%').attr('aria-valuenow', 0); 
		}
		else if(lps>=50 && lps<100 || !lps){
			$('.progress-bar').css('width', 50+'%').attr('aria-valuenow', 50); 
			$('.progress-bar').removeClass('progress-bar-orange');
			$('.progress-bar').addClass('progress-bar-purple');
			document.getElementById('lblProgress').innerHTML = 'Envio Gratis a Lima';
			
		
		}
		else if(lps>=100){
			$('.progress-bar').css('width', 100+'%').attr('aria-valuenow', 100); 
			document.getElementById('lblProgress').innerHTML = 'Envio Gratis a Lima y Provincias';
			$('.progress-bar').removeClass('progress-bar-purple');
			$('.progress-bar').addClass('progress-bar-orange');
		}
		
	}
	else{
		$('.progress-bar').css('width', 0+'%').attr('aria-valuenow', 0); 
		$("#montoTotal").val("00.00");
	}
	
}
function isEmpty(val){
	return (val === undefined || val == null || val.length <= 0) ? true : false;
}

function telefonoValidar(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Ingrese su teléfono para coordinar la entrega');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}

function direccionValidar(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Ingrese su dirección para delivery');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}

function ciudadValidar(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Ingrese su ciudad');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}

function cantidadValidar(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Ingrese la cantidad que desea comprar');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}

