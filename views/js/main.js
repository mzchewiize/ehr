emrMain = {};

$(function(){
    emrMain.init();
});

emrMain.init = function(){

	emrMain.initModal();
	emrMain.initLogout();
};

emrMain.initModal = function(){
	emrMain.modal = $("#pleaseWait").easyModal({
        overlay : 0.4,
        overlayClose: false
    });
};

emrMain.initLogout = function(){
	$("#logout").click(function(){
	
		var params = {
			req: "logout"
		};
		
		emrMain.modal.trigger('openModal');
		emrMain.request(params, function(data){
			emrMain.modal.trigger('closeModal');
			if(data.error == 0){
				location.href = "index.php";
			}else{
				alert("Logout failed");
			}
		});
	});
};

emrMain.request = function(params, callback){
	$.ajax({
		url: "api/emrController.php",
		data: params,
		dataType: "json",
		type: 'POST',
		success: function(data){
			callback(data);
		},
        error: function(jqXHR, textStatus, errorThrown){
			emrMain.modal.trigger('closenModal');
			alert("Error occur, Please try again later.");    
        }
	});
};