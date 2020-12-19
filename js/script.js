
       $('#fileToUpload').on('change', function() {

        var file = this.files[0];
        var imagefile = file.type;
        var imageTypes = ["image/jpeg", "image/png", "image/jpg", "image/gif"];
        if (imageTypes.indexOf(imagefile) == -1) {
            //display error
            return false;
            $(this).empty();
        }
        else {
            var reader = new FileReader();
            reader.onload = function(e) {
                $(".empty-text").html('<img src="' + e.target.result + '" height="200px" width="200px" />');
            };
            reader.readAsDataURL(this.files[0]);
        }

    });

         $( function() {
    $( ".datepicker" ).datepicker();
  } );
        

$(function() {
	
	
	
    $("#first_name_error_message").hide();
    $("#last_name_error_message").hide();
	$("#password_error_message").hide();
	$("#retype_password_error_message").hide();
    $("#email_error_message").hide();
    $("#cnic_error_message").hide();
	$("#tel_error_message").hide();
	$("#gender_error_message").hide();
	$("#dob_error_message").hide();
$("#file_error_message").hide();

   
    var error_firstname = false;
    var error_lastname=false;
    var error_password = false;
    var error_cnic=false;
	var error_retype_password = false;
    var error_email = false;
	var error_tel =false;
	var error_gender=false;
	var error_dob=false;
	var error_file=false;


		$("#file_error_required").focusout(function() {

check_img();
		
	});


		$("#form_error_required").focusout(function() {

		validateForm();
		
	});
	

		$("#dob_error_message").focusout(function() {
			

		check_dob();
		
	});

	$("#form_first_name").focusout(function() {

		check_firstname();
		
    });
    $("#form_last_name").focusout(function() {

		check_lastname();
		
	});

	$("#form_password").focusout(function() {

		check_password();
		
	});

	$("#form_retype_password").focusout(function() {

		check_retype_password();
		
    });
    $("#form_tel").focusout(function() {

		check_tel();
		
    });
	$("#form_cnic").focusout(function() {

		check_cnic();
		
	});
	$("#form_email").focusout(function() {

		check_email();
		
	});
	
function check_dob()
{
	
 var dob = document.forms["myForm"]["DOB"].value;

 var pattern =/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;

    if (dob == null || dob == "" || !pattern.test(dob) ) 
    {

$("#dob_error_message").html("*");
			$("#dob_error_message").show();
			error_dob = true;
    }
    else
    {
	$("#dob_error_message").hide();
    }

}
	
	function check_firstname() {

	
		var firstname_length = $("#form_first_name").val().length;
		
		if(firstname_length < 3 || firstname_length > 20) {
			$("#first_name_error_message").html("Should be between 3-20 characters");
			$("#first_name_error_message").show();
			error_firstname = true;
		} else {
			$("#first_name_error_message").hide();
		}
	
	}
	function check_lastname() {
	
        var lastname_length = $("#form_last_name").val().length;
    
   
		if((lastname_length < 3 || lastname_length > 20) ) {
			$("#last_name_error_message").html("Should be between 3-20 characters");
			$("#last_name_error_message").show();
			error_lastname = true;
		} else {
			$("#last_name_error_message").hide();
		}
	
	}


	function check_cnic() {

        var pattern = new RegExp(/^\d{5}-\d{7}-\d{1}$/i);
        
		if(pattern.test($("#form_cnic").val())) {
			$("#cnic_error_message").hide();
		} else {
			$("#cnic_error_message").html("Invalid CNIC");
			$("#cnic_error_message").show();
			error_cnic = true;
		}
	
    }


  

	function check_password() {

		var  pattern= new RegExp(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,}$/);
	
		var password_length = $("#form_password").val().length;
		
		   if ( pattern.test($("#form_password").val()) && password_length <16 )
		    {
		    	

			$("#password_error_message").hide();

               
		}
	
        
        else {
			$("#password_error_message").html("Must contain at least 1 numeric character, 1 uppercase letter & 1 lowercase letter, and 1 special character and length must be between 8 to 15");
			$("#password_error_message").show();
			error_password = true;
		}
     
	
	}


 
	function check_retype_password() {


		var password = $("#form_password").val();
		var retype_password = $("#form_retype_password").val();
		var retype_password_length = $("#form_retype_password").val().length;
		
		if ( (password !=  retype_password)  && retype_password_length >15 || retype_password_length<8) {
			$("#retype_password_error_message").html("Passwords don't match");
			$("#retype_password_error_message").show();
			error_retype_password = true;
		} else {
			$("#retype_password_error_message").hide();
		}
	
    }
    
	


    function check_tel() {

        var pattern = new RegExp(/92-[0-3]{3}-[0-9]{7}/i);
        
		if(pattern.test($("#form_tel").val())) {
			$("#tel_error_message").hide();
		} else {
			$("#tel_error_message").html("Invalid tell no#");
			$("#tel_error_message").show();
			error_tel = true;
		}
	
	}
	

 

	function check_email() {
		var pattern = new RegExp(/([a-zA-Z0-9]+)([\.{1}])?([a-zA-Z0-9]+)\@gmail([\.])com/g);
	
		if(pattern.test($("#form_email").val())) {
			$("#email_error_message").hide();
		} else {
			$("#email_error_message").html("Invalid email address (accept only gmail account) ");
			$("#email_error_message").show();
			error_email = true;
		}
	
	}



	function check_gender()
	{

  var a = document.forms["myForm"]["gender"].value;
  if (a == "") {
  	$("#gender_error_message").html("*");
			$("#gender_error_message").show();
			error_gender = true;
   
    return false;
  }
  else{

  	$("#gender_error_message").hide();
  	error_gender = false;
  }

	}

function check_img()
{
	var get_img= document.getElementById("fileToUpload").files.length;

	var img= document.getElementById("fileToUpload").value;
	var checkimg = img.toLowerCase();

         

if( get_img== 0 || !checkimg.match(/(\.jpg|\.png|\.JPG|\.PNG|\.jpeg|\.JPEG)$/) ){
   
     	$("#file_error_message").html("*");
			$("#file_error_message").show();
			error_file = true;
   
    return false;
}

else
{
     
  	$("#file_error_message").hide();
  	error_file= false;
}

}
function validateForm() {

check_firstname();
check_lastname();
check_cnic();
check_email();
check_dob();
check_tel();
check_gender();
check_img();
check_password();
check_retype_password();



}


});

