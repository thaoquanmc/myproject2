$(window).ready(function () {
    $("#changeLanguage").click(function () {
        $.ajax({url:"/Language",success:function () {
                location.reload();
            }});
    });
});