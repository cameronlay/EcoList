     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='name0"+i+"' type='text' placeholder='Name' class='form-control input-md'  /> </td><td><input name='quantity0"+i+"' type='text' placeholder='Quantity'  class='form-control input-md'></td><td><input  name='size0"+i+"' type='text' placeholder='Serving Size'  class='form-control input-md'></td><td><input name='expire0"+i+"' type='text' placeholder='Expiry Date'  class='form-control input-md'></td>" + "'<td><input name = "DynamicTextBox" type="checkbox" value = "' + value + '" /></td>'");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});


$(function () {
    $("#btnAdd").bind("click", function () {
        var div = $("<tr />");
        div.html(GetDynamicTextBox(""));
        $("#TextBoxContainer").append(div);
    });
    $("body").on("click", ".remove", function () {
        $(this).closest("tr").remove();
    });
});
function GetDynamicTextBox(value) {
    return '<td><input name = "DynamicTextBox" type="text" value = "' + value + '" class="form-control" /></td>' + '<td><input name = "DynamicTextBox" type="text" value = "' + value + '" class="form-control" /></td>' + '<td><input name = "DynamicTextBox" type="checkbox" value = "' + value + '" /></td>' + '<td><button type="button" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove-sign"></i></button></td>'
}