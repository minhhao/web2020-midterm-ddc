$(document).ready(function() {
    $('a.contact-window').click(function() {
        var loginBox = $(this).attr('href');
        $(loginBox).fadeIn("slow");
        $('body').append('<div id="over1"></div>');
        $('#over1').fadeIn(300);
        return false;
    });
    $(document).on('click', "a.close, #over1", function() { 
        $('#over1, .form-module').fadeOut(300 , function() {
            $('#over1').remove();  
        }); 
        return false;
    });
});
