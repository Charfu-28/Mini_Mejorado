$(function(){
		$('#user').keyup(function(){
			var _this = $('#user');
			var _user = $('#user').val();
			_this.attr('style', 'background:white');
			if(_user.indexOf(' ') >= 0){
				_this.attr('style', 'background:#FF4A4A');
			}

			if(_user.indexOf("'") >= 0){
				_this.attr('style', 'background:#FF4A4A');
			}

			if(_user == ''){
				_this.attr('style', 'background:#FF4A4A');
			}
			
		});
		
		
		$('#pass_1').keyup(function(){
			var _this = $('#pass_1');
			var _pass_1 = $('#pass_1').val();

			var es = /^([0-9])*$/;
			var cmp = es.test(_pass_1);
			_this.attr('style', 'background:white');

			if(cmp){
				_this.attr('style', 'background:white');			
			} else {				
				_this.attr('style', 'background:#FF4A4A');
				window.alert("Datos Invalidso");			
			}

			if(pass_1.charAt(0) == ' '){
				_this.attr('style', 'background:#FF4A4A');
			}
	
			if(_this.val() == ''){
				_this.attr('style', 'background:#FF4A4A');
			}
		});
	
		$('#pass_2').keyup(function(){
			var pass_1 = $('#pass_1').val();
			var pass_2 = $('#pass_2').val();
		
			var _this = $('#pass_2');		

			_this.attr('style', 'background:white');
			if(pass_1 != pass_2 && pass_2 != ''){
				_this.attr('style', 'background:#FF4A4A');
			}
		});
		
		
		$('#email').keyup(function(){
			var _this = $('#email');
			var _email = $('#email').val();
	
			var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
			var valid = re.test(_email);
	
			if(valid){
				_this.attr('style', 'background:white');
			} else {
				_this.attr('style', 'background:#FF4A4A');
			}
		});
		
			
	});