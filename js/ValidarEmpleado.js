$(function(){

	$('#Codigo_Empleado').keyup(function(){
		var _this = $('#Codigo_Empleado');
		var _Codigo_Empleado = $('#Codigo_Empleado').val();
		var int = /^([0-9])*$/;
		var error = int.test(_Codigo_Empleado);
		_this.attr('style', 'background:white');

		if(_Codigo_Empleado.indexOf(' ') >= 0){
			_this.attr('style', 'background:#FF4A4A');
		}

		if(error){
			_this.attr('style', 'background:white');			
		} else {				
			_this.attr('style', 'background:#FF4A4A');
			window.alert("El Campo debe ser Tipo Númerico.");			
		}
		
	});
	
	$('#Primer_Nombre').keyup(function(){
		var _this = $('#Primer_Nombre');
		var _Primer_Nombre = $('#Primer_Nombre').val();
		var exp = /^([a-zA-Z])*$/;
		var validar = exp.test(_Primer_Nombre);
		_this.attr('style', 'background:white');

	 	if(_Primer_Nombre.indexOf('') >= 0){
			_this.attr('style', 'background:#FF4A4A');
		}

		if(validar){
			_this.attr('style', 'background:white');			
		} else {				
			_this.attr('style', 'background:#FF4A4A');
			window.alert("Introduzca un Nombre Valido (Sin Espacios)");			
		}

	});

	$('#Segundo_Nombre').keyup(function(){
		var _this = $('#Segundo_Nombre');
		var _Segundo_Nombre = $('#Segundo_Nombre').val();
		var exp = /^([a-zA-Z])*$/;
		var validar = exp.test(_Segundo_Nombre);
		_this.attr('style', 'background:white');

	 	if(_Segundo_Nombre.indexOf('') >= 0){
			_this.attr('style', 'background:#FF4A4A');
		}

		if(validar){
			_this.attr('style', 'background:white');			
		} else {				
			_this.attr('style', 'background:#FF4A4A');
			window.alert("Introduzca un Nombre Valido (Sin Espacios)");			
		}

	});

	$('#Primer_Apellido').keyup(function(){
		var _this = $('#Primer_Apellido');
		var _Primer_Apellido = $('#Primer_Apellido').val();
		var exp = /^([a-zA-Z])*$/;
		var validar = exp.test(_Primer_Apellido);
		_this.attr('style', 'background:white');

	 	if(_Primer_Apellido.indexOf('') >= 0){
			_this.attr('style', 'background:#FF4A4A');
		}

		if(validar){
			_this.attr('style', 'background:white');			
		} else {				
			_this.attr('style', 'background:#FF4A4A');
			window.alert("Introduzca un Apellido Valido (Sin Espacios)");			
		}

	});

	$('#Segundo_Apellido').keyup(function(){
		var _this = $('#Segundo_Apellido');
		var _Segundo_Apellido = $('#Segundo_Apellido').val();
		var exp = /^([a-zA-Z])*$/;
		var validar = exp.test(_Segundo_Apellido);
		_this.attr('style', 'background:white');

	 	if(_Segundo_Apellido.indexOf('') >= 0){
			_this.attr('style', 'background:#FF4A4A');
		}

		if(validar){
			_this.attr('style', 'background:white');			
		} else {				
			_this.attr('style', 'background:#FF4A4A');
			window.alert("Introduzca un Apellido Valido (Sin Espacios)");			
		}

	});

	$('#Cedula_Empleado').keyup(function(){
		var _this = $('#Cedula_Empleado');
		var _Cedula_Empleado = $('#Cedula_Empleado').val();
		var int = /^([0-9])*$/;
		var error = int.test(_Cedula_Empleado);
		_this.attr('style', 'background:white');

		if(_Cedula_Empleado.indexOf(' ') >= 0){
			_this.attr('style', 'background:#FF4A4A');
		}

		if(error){
			_this.attr('style', 'background:white');			
		} else {				
			_this.attr('style', 'background:#FF4A4A');
			window.alert("El Campo debe ser Tipo Númerico.");			
		}
		
	});
	
})