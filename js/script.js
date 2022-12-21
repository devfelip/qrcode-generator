$.urlParam = function (txt) {
    var results = new RegExp('[\?&]' + txt + '=([^&#]*)').exec(window.location.href);
    return decodeURIComponent(results[1]) || 0;
}

$(function () {
    $("#btn_print").click(function () {
        var url = $("#txt_url");
        if (url.val())
            window.open("print.html?url=" + url.val(), "_blank");
        else {
            alert("ENTER URL TO CONVERT IN QRCODE");
            return false;
        }
    });
});