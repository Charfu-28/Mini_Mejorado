$(function(){
	
	$('#Nombre').keyup(function(){
		var _this = $('#Nombre');
		var _Nombre = $('#Nombre').val();
		var exp = /^([a-zA-Z])*$/;
		var validar = exp.test(_Nombre);
		_this.attr('style', 'background:white');

	 	if(_Nombre.indexOf('') >= 0){
			_this.attr('style', 'background:#FF4A4A');
		}

		if(validar){
			_this.attr('style', 'background:white');			
		} else {				
			_this.attr('style', 'background:#FF4A4A');
			window.alert("Introduzca un Nombre Valido (Sin Espacios)");			
		}

	});

	$('#Marca').keyup(function(){
		var _this = $('#Marca');
		var _Marca = $('#Marca').val();
		var exp = /^([a-zA-Z])*$/;
		var validar = exp.test(_Marca);
		_this.attr('style', 'background:white');

	 	if(_Marca.indexOf('') >= 0){
			_this.attr('style', 'background:#FF4A4A');
		}

		if(validar){
			_this.attr('style', 'background:white');			
		} else {				
			_this.attr('style', 'background:#FF4A4A');
			window.alert("Introduzca un Nombre Valido (Sin Espacios)");			
		}

	});

	$('#Lugar_Origen').keyup(function(){
		var _this = $('#Lugar_Origen');
		var _Lugar_Origen = $('#Lugar_Origen').val();
		var exp = /^([a-zA-Z])*$/;
		var validar = exp.test(_Lugar_Origen);
		_this.attr('style', 'background:white');

	 	if(_Lugar_Origen.indexOf('') >= 0){
			_this.attr('style', 'background:#FF4A4A');
		}

		if(validar){
			_this.attr('style', 'background:white');			
		} else {				
			_this.attr('style', 'background:#FF4A4A');
			window.alert("Introduzca un Nombre de Ciudad o Municipio Valido (Sin Espacios)");			
		}

	});

	$('#Precio').keyup(function(){
		var _this = $('#Precio');
		var _Precio = $('#Precio').val();
		var int = /^([0-9])*$/;
		var error = int.test(_Precio);
		_this.attr('style', 'background:white');

		if(_Precio.indexOf(' ') >= 0){
			_this.attr('style', 'background:#FF4A4A');
		}

		if(error){
			_this.attr('style', 'background:white');			
		} else {				
			_this.attr('style', 'background:#FF4A4A');
			window.alert("El Campo debe ser Tipo Númerico Sin Espacios, Ni puntos de Separación.");			
		}
		
	});

	$('#Cantidad').keyup(function(){
		var _this = $('#Cantidad');
		var _Cantidad = $('#Cantidad').val();
		var int = /^([0-9])*$/;
		var error = int.test(_Cantidad);
		_this.attr('style', 'background:white');

		if(_Cantidad.indexOf(' ') >= 0){
			_this.attr('style', 'background:#FF4A4A');
		}

		if(error){
			_this.attr('style', 'background:white');			
		} else {				
			_this.attr('style', 'background:#FF4A4A');
			window.alert("El Campo debe ser Tipo Númerico.");			
		}
		
	});

	$('#Codigo_Proveedor').keyup(function(){
		var _this = $('#Codigo_Proveedor');
		var _Codigo_Proveedor = $('#Codigo_Proveedor').val();
		var int = /^([0-9])*$/;
		var error = int.test(_Codigo_Proveedor);
		_this.attr('style', 'background:white');

		if(_Codigo_Proveedor.indexOf(' ') >= 0){
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