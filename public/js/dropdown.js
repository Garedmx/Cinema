/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*$("#state").change(function(event){
    $.get("../towns/"+event.target.value,function(response,state){
        $("#town").empty();
        for(i=0;i<response.length; i++)
        {
            $("#town").append("<option value='"+response[i].id+"'>"+response[i].name+"</option>");
        }
    });
});*/

$('#state').change(event=>{
   $.get(`../towns/${event.target.value}`,function(res,sta){
       $('#town').empty();
       res.forEach(element=>{
          $('#town').append(`<option value=${element.id}> ${element.name} </option>`); 
       });
   }); 
});

