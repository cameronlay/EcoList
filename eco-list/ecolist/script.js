
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
                var btnCartRemove = '<button class="btnCartRemove">'+'X'+'</button>';
                var toAdd = $("#" + a + "item").val();
                var toAdd2 = $('#' + a + "quantity").val();
                 $('.list-group').append('<li class="list-group-item">' + toAdd2 + " " + toAdd + btnCartRemove +'</li>');
                 $(this).closest("tr").remove();
                 var patt = /easter\s?egg/ig;
                 if(patt.test(toAdd)) {
                  $('body').css('background-image', 'url(../images/easteregg.jpg)');
                 }
                 else{
                  $('body').css('background-image', 'url(../images/background2.jpg)');  
                 } 
                  $('#cTitle').html('Cart').hide().fadeIn("fast");
                  $(".list-group li").find(":button").hide();

            });
        
    //cart title and clear transitions only once 
    $("body").one("click",".list", function(){
                
                $('#btnClear').css('visibility', 'visible').hide().fadeIn("fast");
                $('#btnCart').css('visibility', 'visible').hide().fadeIn("slow");
                $('#btnSave').css('visibility', 'visible').hide().fadeIn("fast");

        })

    //View cart button scrolls down to cart list
    $('#btnCart').on("click", function(){
        $('html, body').animate({
            scrollTop: $("#cartTitle").offset().top
        }, 1000);
    });

    //delete prompt when hovering over list item
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip({
          trigger:'hover'
        });   
    });

    //mouse hover shows button and hides when leaving
    $(document).ready(function () {
      $(document).on('mouseenter', '.list-group li', function () {
            $(this).find(":button").show();
        }).on('mouseleave', '.list-group li', function () {
            $(this).find(":button").hide();
        });
    });

      //double click to remove list item
    $("body").on('click','.btnCartRemove', function(){
        $(this).toggleClass('strike').fadeOut("fast", function(){
          $(this).parent().remove();
          if($(".list-group-item").text().length === 0){
              $('#cTitle').html('Your cart is empty!').hide().fadeIn("fast");
            };
            if($(".list-group-item").text().length > 0){
              $('#cTitle').html('Cart');
            };
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
            $('#cTitle').html('Your cart is empty!').hide().fadeIn("fast");
    });
      
  //end tag    
});



function GetDynamicTextBox(value) {
    count++;
    c++;
    return '<td><button type="button" id="'+c+'btn" class="btn btn-info list"><span class="glyphicon glyphicon-shopping-cart"></span></button></td>'
    +'<td><input name = "DynamicTextBox" id="'+count+'item" type="text" value = "' + value + '" class="form-control" placeholder="Name of item"/></td>' 
    + '<td><input name = "DynamicTextBox" id="'+count+'quantity" type="number" value = "' + value + '"  class="form-control" placeholder="#"/></td>' 
    + '<td><button type="button" class="btn btn-danger remove"><i class="glyphicon glyphicon-minus-sign"></i></button></td>'
}

//mobile swipe delete function
