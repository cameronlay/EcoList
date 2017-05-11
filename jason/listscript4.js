
var count =0;
var c = 0;
var a;


$(function () {


    //button adds new rows to table 1
    $("#btnAdd").bind("click", function () {
        var div = $("<tr>");
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

    //shopping cart button that removes row and adds to new list
    $(document).ready(
    function(){
      $("body").on("click",".list", function (){
                var id = $(this).attr('id');
                a = parseInt(id);
                var toAdd = $("#" + a + "item").val();
                var toAdd2 = $('#' + a + "quantity").val();
                 $('.list-group').append('<li class="list-group-item">' + toAdd2 + " " + toAdd + '</li>');
                 $(this).closest("tr").remove();
  
            });
        
    //cart title and clear transitions only once 
    $("body").one("click",".list", function(){
                $('#cartTitle').css('visibility', 'visible').hide().fadeIn("slow");
                $('#btnClear').css('visibility', 'visible').hide().fadeIn("slow");
                $('#btnCart').css('visibility', 'visible').hide().fadeIn("slow");

        })

    //View cart button scrolls down to cart list

    $('#btnCart').on("click", function(){
        $('html, body').animate({
            scrollTop: $("#cartTitle").offset().top
        }, 1000);
    });
    //double click warning when hover
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip({
          trigger:'hover'
        });   
    });
      //double click to remove list item
    $(document).on('dblclick','li', function(){
        $(this).toggleClass('strike').fadeOut("fast", function(){
          $(this).remove();
          $('.list-group').tooltip('hide');
              });    
          });
      });

    //removes all rows 
    $("#btnRemove").on("click", function () {
            $("#TextBoxContainer").children().remove();
    });
    //clears cart
     $("#btnClear").on("click", function () {
            $(".list-group").children().remove();
    });
    //touch delete functions (notworking)
     $('.list-group-item').on('tapHold', function(){
        $('.list-group-item li').css('text-decoration', 'line-through')
     });

      $('.list-group-item li').on('swipeleft', function(){
          $(this).remove();  
     });

      //save button for later use 

});


function GetDynamicTextBox(value) {
    count++;
    c++;
    return '<td><button type="button" id="'+c+'btn" class="btn btn-info list"><span class="glyphicon glyphicon-shopping-cart"></span></button></td>'
    +'<td><input name = "DynamicTextBox" id="'+count+'item" type="text" value = "' + value + '" class="form-control" placeholder="Name of item"/></td>' 
    + '<td><input name = "DynamicTextBox" id="'+count+'quantity" type="number" value = "' + value + '"  class="form-control" placeholder="#"/></td>' 
    + '<td><button type="button" class="btn btn-danger remove"><i class="glyphicon glyphicon-minus-sign"></i></button></td>'
}

