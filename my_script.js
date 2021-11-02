$("#luupb").click( function() {
 $.post( $("#thoaidmpb").attr("action"), 
         $("#thoaidmpb :input").serializeArray(), 
         function(info){ $("#namsanxuat").html(info); 
		 alert("aaaaaaaaa");
   });
 clearInput();
});
 
$("#thoaidmpb").submit( function() {
  return false;	
});
 
function clearInput() {
	$("#thoaidmpb :input").each( function() {
	   $(this).val('');
	});
}