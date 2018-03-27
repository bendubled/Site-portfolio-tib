


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

        }
    });

}
}
