$(".img-fluid").click(function () {
    $(".imagepreview").attr("src", $(this).attr("src"));
    $("#imagemodal").modal("show");
});
