
<!-- font stage validation -->

   window.onload = function(){

	var pwd1 = document.getElementById('pwd1');

	var pwd2 = document.getElementById('pwd2');

	var signupBtn = document.getElementById("signupBtn");

    var password1 = document.getElementById('password1');


    $('#loginEmail').blur(function(){

    	var loginEmail = $('#loginEmail').val();
    	if(loginEmail != ''){
    		$.post('front-validation.php',{loginEmail:loginEmail},
    		function(data){
    			$('#lEmailStatus').html(data);
    		});
    	}else{
    		$('#lEmailStatus').html('')
    	}
    });

    $('#pwd1').blur(function(){
    	var password1 = $('#pwd1').val();

    	if(password1 != ''){
    		$.post('front-validation.php',{password1:password1},
    		function(data){
    			$('#pwdErr').html(data);
    		});
    	}else{
    		$('pwdErr').html('')
    	}
    });

    $('#oldPwd').blur(function(){
    	var oldPwd = $('#oldPwd').val();

    	if(oldPwd != ''){
    		$.post('front-validation.php',{oldPwd:oldPwd},
    		function(data){
    			$('#pwdErr').html(data);
    		});
    	}else{
    		$('pwdErr').html('')
    	}
    });


    $('#email').blur(function(){
    	var email = $('#email').val();

    	if(email != ''){
    		$.post('front-validation.php',{email:email},
    		function(data){
    			$('#emailStatus').html(data);
    		});
    	}else{
    		$('#emailStatus').html('')
    	}
    });


    pwd1.onkeyup = function(){
        if(this.value.length > 5 && this.value.length < 20){
            pwd2.removeAttribute("disabled","");
            pwdErr1.style.display="none";
        }else{
        	pwd2.setAttribute("disabled","");
        	pwdErr1.style.display="block";
        	pwdErr1.innerHTML='密码至少6-20位！'

            }
    };


    pwd2.onkeyup = function(){

        if(pwd1.value != pwd2.value){
            pwdErr2.innerHTML="两次密码不匹配，请重新输入！";
            pwdErr2.style.display="block";
        }else{
            pwdErr2.style.display="none";
             }
        };

    signupBtn.onclick = function(){

        if(pwd1.value != pwd2.value){
            pwdErr2.innerHTML="两次密码不匹配，请重新输入！";
            return false;
            }
        }

};
//window.onload












