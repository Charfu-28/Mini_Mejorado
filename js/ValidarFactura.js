$(function(){

	$('#Codigo_Factura').keyup(function(){
		var _this = $('#Codigo_Factura');
		var _Codigo_Factura = $('#Codigo_Factura').val();
		var int = /^([0-9])*$/;
		var error = int.test(_Codigo_Factura);
		_this.attr('style', 'background:white');

		if(_Codigo_Factura.indexOf(' ') >= 0){
			_this.attr('style', 'background:#FF4A4A');
		}

		if(error){
			_this.attr('style', 'background:white');			
		} else {				
			_this.attr('style', 'background:#FF4A4A');
			window.alert("El Campo debe ser Tipo Númerico.");			
		}
		
	});

	$('#Codigo_Producto').keyup(function(){
		var _this = $('#Codigo_Producto');
		var _Codigo_Producto = $('#Codigo_Producto').val();
		var int = /^([0-9])*$/;
		var error = int.test(_Codigo_Producto);
		_this.attr('style', 'background:white');

		if(_Codigo_Producto.indexOf(' ') >= 0){
			_this.attr('style', 'background:#FF4A4A');
		}

		if(error){
			_this.attr('style', 'background:white');			
		} else {				
			_this.attr('style', 'background:#FF4A4A');
			window.alert("El Campo debe ser Tipo Númerico.");			
		}
		
	});

	$('#Codigo_Usuario').keyup(function(){
		var _this = $('#Codigo_Usuario');
		var _Codigo_Usuario = $('#Codigo_Usuario').val();
		var int = /^([0-9])*$/;
		var error = int.test(_Codigo_Usuario);
		_this.attr('style', 'background:white');

		if(_Codigo_Usuario.indexOf(' ') >= 0){
			_this.attr('style', 'background:#FF4A4A');
		}

		if(error){
			_this.attr('style', 'background:white');			
		} else {				
			_this.attr('style', 'background:#FF4A4A');
			window.alert("El Campo debe ser Tipo Númerico de 10 digitos.");			
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

	$('#Nombre_Producto').keyup(function(){
		var _this = $('#Nombre_Producto');
		var _Nombre_Producto = $('#Nombre_Producto').val();
		var exp = /^([a-zA-Z])*$/;
		var validar = exp.test(_Nombre_Producto);
		_this.attr('style', 'background:white');

	 	if(_Nombre_Producto.indexOf('') >= 0){
			_this.attr('style', 'background:#FF4A4A');
		}

		if(validar){
			_this.attr('style', 'background:white');			
		} else {				
			_this.attr('style', 'background:#FF4A4A');
			window.alert("Introduzca un Nombre Valido (Sin Espacios)");			
		}

	});
	
})