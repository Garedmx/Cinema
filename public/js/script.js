/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$("#registro").click(function(){
   var dato = $("#genre").val(); 
   var route = "http://127.0.0.1:8000/genero";
   var toke = $("#token").val();
   
   $.ajax({
        url: route,
        headers: 
        {
            'X-CSRF-TOKEN': toke,
        },
        type: 'POST',
        dataType: 'json',
        data:
        {
            genre: dato,
        },
        success:function(){
            $("#msj-success").fadeIn();
        },
   });
});


