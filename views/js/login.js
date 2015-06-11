emrLogin = {};

$(function(){

    var lang = $("#lang").attr("class");
    
    $.ajax({
		url: "lang/"+lang+".json",
		dataType: "json",
		type: 'POST',
		success: function(lang){
            emrLogin.init(lang);
		},
        error: function(jqXHR, textStatus, errorThrown){
			alert("Error occur, Please try again later.");    
        }
	});
});

emrLogin.init = function(t){
	emrLogin.initForm(t);
};

emrLogin.initForm = function(t){
        
	$loginForm = $("#loginForm");
	
	$loginForm.find(".login-btn").click(function(){
		
		var username = $loginForm.find("input[name=username]").val();
		var password = $loginForm.find("input[name=password]").val();
		var params = {
			req: "login",
			username: username,
			password: password
		};
		
		emrMain.modal.trigger('openModal');
		
		if(emrLogin.validateForm(t, username, password)){
			emrMain.request(t, params, function(data){
				emrMain.modal.trigger('closeModal');
				if(data.error == 0){
					location.href = "index.php";
				}else{
					alert(t.login.authFail);
				}
			});
		}else{
			emrMain.modal.trigger('closeModal');
		}
	});
};

emrLogin.validateForm = function(t, u, p){
	
	if(u == ""){
		alert(t.login.usernameEmpty);
		return false;
	}else if(p == ""){
		alert(t.login.passwordEmpty);
		return false;
	}
	
	return true;
};
