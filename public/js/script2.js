/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    carga();
});

function carga(){
    var tablaDatos = $('#datos');
    var route = '/generos';
    
    $("#datos").empty();
    $.get(route, function(res){
        $(res).each(function(key,value){
            tablaDatos.append("<tr><td>"+value.genre+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button value="+value.id+" OnClick='Eliminar(this);' class='btn btn-danger'>Eliminar</button></td></tr>");
        });
    });
}

function Eliminar(btn){
    var route="/genero/"+btn.value;
    var token=$("#token").val();
    
    $.ajax({
        url:route,
        headers:{'X-CSRF-TOKEN': token},
        type: 'DELETE',
        dataType: 'json',
        success:function(){
            carga();
            $("#msj-success").fadeIn();
        }
    });
}

function Mostrar(btn){
    var route='/genero/'+btn.value+'/edit';
    
    $.get(route, function(res){
        $("#genre").val(res.genre);
        $("#id").val(res.id);
    });
}

$("#actualizar").click(function(){
    var value=$("#id").val();
    var dato=$("#genre").val();
    var route="/genero/"+value;
    var token=$("#token").val();
    
    $.ajax({
        url:route,
        headers:{'X-CSRF-TOKEN': token},
        type: 'PUT',
        dataType: 'json',
        data:{genre:dato},
        success:function(){
            carga();
            $("#myModal").modal('toggle');
            $("#msj-success").fadeIn();
        }
    });
});