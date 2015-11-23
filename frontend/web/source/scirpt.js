$(function(){
	$('#modalButton').click(function(){
		$('#modal').modal('show')
		.find('#modalContents')
		.load($(this).attr('value'));
	});

});
$(function(){
	$('#modalButton1').click(function(){
		$('#modal1').modal('show')
		.find('#modalContents1')
		.load($(this).attr('value'));
	});
});
$(function(){
	$('#modalButton2').click(function(){
		$('#modal2').modal('show')
		.find('#modalContents2')
		.load($(this).attr('value'));
	});
});
$(function(){
	$('#modalButton3').click(function(){
		$('#modal3').modal('show')
		.find('#modalContents3')
		.load($(this).attr('value')); 
	});
});
$(function(){
	$('#modalButton4').click(function(){
		$('#modal4').modal('show')
		.find('#modalContents4')
		.load($(this).attr('value'));
	});
});
$(function(){
	$('#modalButton5').click(function(){
		$('#modal5').modal('show')
		.find('#modalContents5')
		.load($(this).attr('value'));
	});
});
$(function(){
	$('#modalButton6').click(function(){
		$('#modal6').modal('show')
		.find('#modalContents6')
		.load($(this).attr('value'));
	});
});
$(function(){
	$('#modalButton7').click(function(){
		$('#modal7').modal('show')
		.find('#modalContents7')
		.load($(this).attr('value'));
	});
});
$(function(){
	$('#modalButton8').click(function(){
		$('#modal8').modal('show')
		.find('#modalContents8')
		.load($(this).attr('value'));
	});
});
$(function(){
	$('#modalButton9').click(function(){
		$('#modal9').modal('show')
		.find('#modalContents9')
		.load($(this).attr('value'));
	});
});


$(function(){
$( "#w1 li:last-child a") 
.attr('class', 'fancybox fancybox.iframe')
  }
);

$(function(){
 $('#modalBuy1').click(function(){
  $('#modal-buy-1').modal('show')
  .find('#modalContents-buy-1')
  .load($(this).attr('value'));
 });

});


// testing aja usage

function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("demo").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "../views/site/ajax_info.php", true);
  xhttp.send();

  // alert("test");
};

// testing ajax usage


$(function(){
    //get the click of modal button to create / update item
    //we get the button by class not by ID because you can only have one id on a page and you can
    //have multiple classes therefore you can have multiple open modal buttons on a page all with or without
    //the same link.
//we use on so the dom element can be called again if they are nested, otherwise when we load the content once it kills the dom element and wont let you load anther modal on click without a page refresh
      $(document).on('click', '.showModalButton', function(){
         //check if the modal is open. if it's open just reload content not whole modal
        //also this allows you to nest buttons inside of modals to reload the content it is in
        //the if else are intentionally separated instead of put into a function to get the 
        //button since it is using a class not an #id so there are many of them and we need
        //to ensure we get the right button and content. 
        if ($('#modal_list').data('bs.modal').isShown) {
            $('#modal_list').find('#modalContent_list')
                    .load($(this).attr('value'));
            //dynamiclly set the header for the modal
            document.getElementById('modalHeader').innerHTML = '<h4>' + $(this).attr('title') + '</h4>';
        } else {
            //if modal isn't open; open it and load content
            $('#modal_list').modal('show')
                    .find('#modalContent_list')
                    .load($(this).attr('value'));
             //dynamiclly set the header for the modal
            document.getElementById('modalHeader').innerHTML = '<h4>' + $(this).attr('title') + '</h4>';
        }
    });
	
	$(document).on('click','#advanced-list',function(){
		

$( ".toggle .policy-compare" ).toggle( "not-visible" );

	});
	$(document).on('click','#rest1,#rest2,#rest3,#rest4,#rest5,#rest6',function() {
   													 
   													 var javascriptVariable = $(this).val();
   													 // alert(javascriptVariable)

   													
   													 window.location.href = "index.php?r=site%2Fformtwo&" + javascriptVariable; 
													});

	 $('[data-toggle="tooltip"]').tooltip();


});



// end of testing ajax usage



