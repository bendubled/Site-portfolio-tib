// function formulaire(){
//     console.log("aaaaaaaaaa");
//  
//    $.ajax({url: 'http://http://localhost/wordpress/page_admin/',
//        type: 'POST',
//        dataType: 'string',
//        data: {info: 'lalala'},
//        success: function (string) {
//            console.log("OKok");
//            
//            consol.log('eeeeeeeeeeeeeeerrrrrrrrrrrrrooooooorrrrrrrrrr');
//
//            
//           
//
//
//        }
//    });
//}



function formulaire(){
 {
     
//    alert('bbbbbbbbbbbbb');
    var test = document.getElementById('icone').value;
//    alert(test);
    $.ajax({url: 'http://localhost/wordpress/wp-content/plugins/traitement_upload.php',
        type: 'post',
////       data: {info: 'message_erreur'},
       success: function (output) {
//            console.log(document.getElementByID('titre').value);
////            var champs = document.getElementByID('titre').value;
           if(test== ""){ alert('Erreur');}

            else{
                alert("upload success!!")
            }
//            $('#mes_erreur').html(output);
        }
    });

}
}
