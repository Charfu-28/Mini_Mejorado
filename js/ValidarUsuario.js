$(function(){

	$('#Codigo').keyup(function(){
		var _this = $('#Codigo');
		var _Codigo = $('#Codigo').val();
		var int = /^([0-9])*$/;
		var error = int.test(_Codigo);
		_this.attr('style', 'background:white');

		if(_Codigo.indexOf(' ') >= 0){
			_this.attr('style', 'background:#FF4A4A');
		}

		if(error){
			_this.attr('style', 'background:white');			
		} else {				
			_this.attr('style', 'background:#FF4A4A');
			window.alert("El Campo debe ser Tipo Númerico de 10 digitos.");			
		}
		
	});
	
	
	$('#Nombres').keyup(function(){
		var _this = $('#Nombres');
		var _Nombres = $('#Nombres').val();
		var exp = /^([a-zA-Z])*$/;
		var validar = exp.test(_Nombres);
		_this.attr('style', 'background:white');

	 	if(_Nombres.indexOf('') >= 0){
			_this.attr('style', 'background:#FF4A4A');
		}

		if(validar){
			_this.attr('style', 'background:white');			
		} else {				
			_this.attr('style', 'background:#FF4A4A');
			window.alert("Introduzca un Nombre Valido (Sin Espacios)");			
		}

	});

	$('#Apellidos').keyup(function(){
		var _this = $('#Apellidos');
		var _Apellidos = $('#Apellidos').val();
		var exp = /^([a-zA-Z])*$/;
		var validar = exp.test(_Apellidos);
		_this.attr('style', 'background:white');

	 	if(_Apellidos.indexOf('') >= 0){
			_this.attr('style', 'background:#FF4A4A');
		}

		if(validar){
			_this.attr('style', 'background:white');			
		} else {				
			_this.attr('style', 'background:#FF4A4A');
			window.alert("Introduzca un Apellido Valido (Sin Espacios)");			
		}

	});

	$('#Contraseña').keyup(function(){
		var _this = $('#Contraseña');
		var _Contraseña = $('#Contraseña').val();
		var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,10}$/;
		var validar = regex.test(_Contraseña);
		_this.attr('style', 'background:white');

	 	if(_Contraseña.indexOf('') >= 0){
			_this.attr('style', 'background:#FF4A4A');
		}

		if(validar){
			_this.attr('style', 'background:white');			
		} else {						
			_this.attr('style', 'background:#FF4A4A');
			window.alert("La Contraseña debe de seguir las Siguientes Politicas: \r Minimo 8 Caracteres \r Maximo 10 Caracteres \r Al menos una letra mayúscula \r Al menos una letra minuscula \r Al menos un dígito \r No espacios en blanco \r Al menos 1 caracter especial \r\r La Ventana se dejará de Mostrar Cuando cumpla todas las Politicas " );
		}

	});

})