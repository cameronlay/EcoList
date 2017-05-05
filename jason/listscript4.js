
var count =0;

$(function () {
    //button adds new rows to table 1
    $("#btnAdd").bind("click", function () {
        var div = $("<tr />");
        div.fadeIn("slow");
        div.html(GetDynamicTextBox(""));
        $("#TextBoxContainer").prepend(div);
    });
    //removes individual rows
    $("body").on("click", ".remove", function () {
        $(this).closest("tr").fadeTo(280,0.4, function(){
            $(this).remove();
        })
    });


    //shopping cart button that removes row and adds to new one 
    $(document).ready(
    function(){
        $("body").on("click",".list", function (){
                var toAdd = $('input[name=DynamicTextBox]').clone();
                 $('ol').append('<li>' + toAdd.val() + '</li>');
                 $(this).closest("tr").remove();
            });
       
      
      $(document).on('dblclick','li', function(){
        $(this).toggleClass('strike').fadeOut("fast");    
      });
      
      $('input').focus(function() {
        $(this).val('');
      });
      
      $('ol').sortable();  
      
    }
);



    //removes all rows 
    $("#btnRemove").on("click", function () {
            $("#TextBoxContainer").children().remove();
    });
    

});

function GetDynamicTextBox(value) {
    count++;
    return '<td><button type="button" class="btn btn-info list"><span class="glyphicon glyphicon-shopping-cart"></span></button></td>'
    +'<td><input name = "DynamicTextBox" type="text" value = "' + value + '" class="form-control" /></td>' 
    + '<td><input name = "DynamicTextBox" type="text" value = "' + value + '"  class="form-control" /></td>' 
    + '<td><button type="button" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove-sign"></i></button></td>'
}

