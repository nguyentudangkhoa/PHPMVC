$(document).ready(function(){
    $('#mssv').keypress(function() {
        var txtname = $('#txtmssv').val();
        $.post("./controllers/Ajax/checkSV", {
            mssv: txtname
        }, function(data) {
            $('#SVmess').html(data);
        });
    });
});