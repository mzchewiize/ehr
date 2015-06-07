emrLogin = {};

$(function(){
    emrLogin.init();
});

emrLogin.init = function(){

	emrLogin.initForm();
	
};

emrLogin.initForm = function(){
        
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
		
		if(emrLogin.validateForm(username, password)){
			emrMain.request(params, function(data){
				emrMain.modal.trigger('closeModal');
				if(data.error == 0){
					location.href = "index.php";
				}else{
					alert("Authentication failed");
				}
			});
		}else{
			emrMain.modal.trigger('closeModal');
		}
	});
};

emrLogin.validateForm = function(u, p){
	
	if(u == ""){
		alert("Please input username.");
		return false;
	}else if(p == ""){
		alert("Please input password.");
		return false;
	}
	
	return true;
};