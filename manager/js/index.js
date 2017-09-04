$("#login-btn").click(function(){
	var user_name=$("#input-username").val();
	var user_pwd=$("#input-pwd").val();
	if(user_name==""||user_pwd==""){
		return false;
	}else {
		$.ajax({
             type: "POST",
             url: "./action/login.class.php",
             data: {username:user_name, password:user_pwd},
             dataType: "json",
             success: function(data){
                        var obj = eval(data);
                        if(obj.code=='1'){
                        	if(obj.mIsAdmin=='N'){
                        		window.location.href="./manager.php";
                        	}else {
                        		window.location.href="./admin.php";
                        	}
                        }else {
                        	alert(obj.msg);
                        }
                }
        });
	}
});
