emrMain = {};

$(function(){

    var lang = $("#lang").attr("class");
    
    $.ajax({
		url: "lang/"+lang+".json",
		dataType: "json",
		type: 'POST',
		success: function(lang){
            emrMain.init(lang);
		},
        error: function(jqXHR, textStatus, errorThrown){
			alert("Error occur, Please try again later.");    
        }
	});
});

emrMain.init = function(t){
	emrMain.initModal(t);
	emrMain.initLogout(t);
	emrMain.initChangeLang(t);
};

emrMain.initModal = function(t){
	emrMain.modal = $("#pleaseWait").easyModal({
        overlay : 0.4,
        overlayClose: false
    });
};

emrMain.initLogout = function(t){
	$("#logout").click(function(){
	
		var params = {
			req: "logout"
		};
		
		emrMain.modal.trigger('openModal');
		emrMain.request(t, params, function(data){
			emrMain.modal.trigger('closeModal');
			if(data.error == 0){
				location.href = "index.php";
			}else{
				alert(t.main.logoutFail);
			}
		});
	});
};

emrMain.initChangeLang = function(t){
	$(".lang").click(function(){	
		var params = {
			req: "setLang",
			lang: $(this).attr("id")
		};
		
		emrMain.modal.trigger('openModal');
		emrMain.request(t, params, function(data){
			location.reload();
		});
	});
};

emrMain.request = function(t, params, callback){
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
		    alert(t.main.ajaxError);    
        }
	});
};
