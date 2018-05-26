jQuery(document).on('submit','#formlg', function(event){
	event.preventDefault();

	jQuery.ajax({
		url: "/var/www/html/Minimercado/Login.php",
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend:function(){
			$('.botonlg').val('Validando...');
		}
	})
	.done(function(respuesta){
		console.log(respuesta);
		if (!respuesta.error) {
			if (respuesta.Tipo == 'ADMINISTRADOR') {
				header("location:/var/www/html/Minimercado/Menu_Administrador.php");
				//location.href = 'Menu_Administrador.php';
			}else if (respuesta.Tipo == 'EMPLEADO') {}{
				location.href = '/var/www/html/Minimercado/Menu_Empleado.php';
			}
		}else{
			$('.error').slideDown('slow');
			setTimeout(function(){
				$('.error').slideUp('slow');
			},3000);
			$('.botonlg').val('Iniciar Sesión');
		}
	})
	.fail(function(resp){
		console.log(resp.responseText);
	})
	.always(function(){
		console.log("complete");
	});
});