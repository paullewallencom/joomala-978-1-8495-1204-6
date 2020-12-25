jQuery(document).ready(function($){
	
		$.ajaxSetup({
			error:function(x,e){
				if(x.status==404){
					console.log('Url not found');
					show_error('There was a problem sending the form, please try later.');
				}else if(e=='timeout'){
					console.log('Request timeout');
					show_error('There was a problem sending the form, please try later.');
				}else {
					console.log('Unknow Error.\n'+x.responseText);
					show_error('There was a problem sending the form, please try later.');
				}
			}
		});

	
    $('#send_button').click(function(e) {
    	
    		console.log('The button has been clicked');  
    		
    		e.preventDefault();
    	
        //First we do some validation, just to know that we have some data
        alerts = '';
        if($("input[name=your_name]").val() == ''){
            alerts += "- We need your name<br/>";
        }
        if($("textarea[name=your_question]").val().length < 5){
            alerts += "- We need a message of at least 5 chapters length<br/>";
        }

        if(alerts != ''){
            $("#alerts").html(alerts).dialog();
        }else{
            $.post("index.php", $("#sc_form").serialize(), show_ok());
            $("#sending_message").removeClass("hidden_div");
        }
    });

    $("#message_back").click(function(e){
        e.preventDefault();
        $("#message_sent").addClass("hidden_div");
        $("#sending_message").addClass("hidden_div");
    });

    function show_ok(){
    	
    		console.log('We are in the show_ok function');  
    		
        $("#sending_message").addClass("hidden_div");
        $("#message_sent").removeClass("hidden_div");

        $("input:text").val('');
        $("textarea").val('');
    }
    
    function show_error(message){
    		$("#message_sent").html("<br/><br/><br/><h1>"+message+"</h1><br/><br/><br/><a href='index.php' class='message_link' id='message_back'>Back to the form</a>");    		
    		
        $("#sending_message").addClass("hidden_div");
        $("#message_sent").removeClass("hidden_div");

        $("input:text").val('');
        $("textarea").val('');    	
    	
    }
});

