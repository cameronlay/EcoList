
var count =0;
var c = 0;
var a;


$(function () {
    //button adds new rows to table 1
    $("#btnAdd").bind("click", function () {
        var div = $("<tr />");
        div.fadeIn("slow");
        div.html(GetDynamicTextBox(""));
        $("#TextBoxContainer").prepend(div);
        $('#btnRemove').css('visibility', 'visible');
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
                var id = $(this).attr('id');
                a = parseInt(id);
                var toAdd = $("#" + a + "item").val();
                var toAdd2 = $('#' + a + "quantity").val();
                var icon = document.createElement("span");
                icon.className ="glyphicon glyphicon-ok";
                 $('.list-group').append('<li class="list-group-item list-group-item-success">' + toAdd2 + " " + toAdd + '</li>');
                 $('#cartTitle').css('visibility', 'visible');
                 $('#btnClear').css('visibility', 'visible');
                 $(this).closest("tr").remove();
  
            });
      
    
      //double click to remove list item
      $(document).on('dblclick','li', function(){
        $(this).toggleClass('strike').fadeOut("fast");    
      });
      
      $('input').focus(function() {
        $(this).val('');
      });
      
      $('ul').sortable();  
      
    }
);

    //removes all rows 
    $("#btnRemove").on("click", function () {
            $("#TextBoxContainer").children().remove();
    });
    //clears cart
     $("#btnClear").on("click", function () {
            $(".list-group").children().remove();
    });

});


function GetDynamicTextBox(value) {
    count++;
    c++;
    return '<td><button type="button" id="'+c+'btn" class="btn btn-info list"><span class="glyphicon glyphicon-shopping-cart"></span></button></td>'
    +'<td><input name = "DynamicTextBox" id="'+count+'item" type="text" value = "' + value + '" class="form-control" /></td>' 
    + '<td><input name = "DynamicTextBox" id="'+count+'quantity" type="text" value = "' + value + '"  class="form-control" /></td>' 
    + '<td><button type="button" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove-sign"></i></button></td>'
}

