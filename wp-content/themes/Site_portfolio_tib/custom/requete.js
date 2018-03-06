window.onload = function display_img(html) {
  
    $.ajax({url: 'wp-content/plugins/functions.php',
        type: 'POST',
        dataType: 'html',
        data: {info: 'display_img'},
        success: function (html) {
            console.log("OKok");

            $('#list_photos').html(html);
           


        }
    });
}





