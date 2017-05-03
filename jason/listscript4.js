
var count =0;

$(function () {
    $("#btnAdd").bind("click", function () {
        var div = $("<tr />");
        div.fadeIn("slow");
        div.html(GetDynamicTextBox(""));
        $("#TextBoxContainer").append(div);
    });
    $("body").on("click", ".remove", function () {
        $(this).closest("tr").fadeTo(280,0.4, function(){
            $(this).remove();
        })
    });
});
function GetDynamicTextBox(value) {
    count++;
    return '<td style="width:1px"><div class="check"><input id="'+count+'" type="checkbox"/><label for="'+count+'"><div class="box"><i class="fa fa-check"></i></div></label></div></td>'
    + '<td><input name = "DynamicTextBox" type="text" value = "' + value + '" class="form-control" /></td>' 
    + '<td><input name = "DynamicTextBox" type="text" value = "' + value + '" size ="1"  class="form-control" /></td>' 
    + '<td  style="width:1px;"><button type="button" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove-sign"></i></button></td>'
}