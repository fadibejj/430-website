

$( document ).ready(function() {
    console.log( "ready!" );
	   $("#loginForm").submit(function(event) {
 console.log( "pressed!" );
        $.ajax({
          url: "sign in.php",
          method: "POST",
          data: { 
            'username':$("#inputUsername"),
            'password':$("#inputPassword"),
    },
    success: function(result){
		console.log( "pressed!" );
        console.log(result);
    },
	error: function(XMLHttpRequest, textStatus, errorThrown) {
     alert(errorThrown);
  }
  });
    });
});