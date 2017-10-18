/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).on('click','.pagination a',function(e){
    e.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    var route= 'http://127.0.0.1:8000/usuario';
    
    $.ajax({
        url:route,
        data:{page:page},
        type:'GET',
        dataType:'json',
        success: function(data){
            $(".users").html(data);
        },
    });
})

