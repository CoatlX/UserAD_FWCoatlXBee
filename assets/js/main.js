
$(document).ready(function(){//INdica que si el documento está listo, se ejecuta la función anónima, es jquery

    //Toastr para notificaciones - https://codeseven.github.io/toastr/
    //Agregamos los CDN's en el header el js con <script src="" y el css con <link rel "stylesheet" href=""...
    
    //Waitme https://vadimsva.github.io/waitMe/ descargar - waitme.min .css y .js en assests/pulgins/waitme

//$('body').waitMe(); //Muestra de uso de waitMe
    //Funciones C R U D
    //Create un movimiento
    $('.coatlx_add_movement').on('submit', coatlx_add_movement);
    function coatlx_add_movement(event){

        event.preventDefault();
        //Jquery
        var form    = $('.coatlx_add_movement'),
        hook        = 'coatlx_hook',
        action      = 'add',
        data        = new FormData(form.get(0)),
        type        = $('#type').val(),
        description = $('#description').val(),
        amount      = $('#amount').val();
        data.append('hook', hook); //
        data.append('action', action);
        
        //Validar que esté seleccionada una opción type
        if(type === 'none'){
           toastr.error('Selecciona un tipo de movimiento válido', '¡Upsss!');
           return;     
        }
        //Validar la descripción
        if(description === ''||description.length  < 5){
            toastr.error('Selecciona una descripción válida', '¡Upsss!');
            return;     
         }
         //Validar monto
         if(amount === '' || amount <= 0){
            toastr.error('Selecciona un monto válido', '¡Upsss!');
            return;     
         }

         //Ajax
         $.ajax({

            url        : 'ajax/coatlx_add_movement',
            type       : 'post',
            dataType   : 'json',
            contentType: false,
            processData: false,
            cache      : false,
            data       : data,
            beforeSend: function(){
                form.waitMe();
            }
         }).done(function(res){
            if(res.status===201){
                toastr.success(res.msg, 'Yeah!');
                form.trigger('reset');
            }else{
                toastr.error(res.msg,'Valió!');
            }
            
         }).fail(function(err) {
            toastr.error('Hubo un error en la petición', 'Valió!')
         }).always(function(){
            form.waitMe('hide');
         })

    }
    //Read un movimiento
    coatlx_get_movements();
    function coatlx_get_movements(){
        var wrapper = $('coatlx_wrapper_movements');//Se crea del bloque que conforma la segunda columna de los movimientos del indexView
        hook = 'coatlx_hook';
        action = 'load';

        $.ajax({

            url: 'ajax/coatlx_get_movements',
            type: 'POST',
            dataType: 'json',
            cache: false,
            data: {
                hook, action
            },
            beforeSend: function(){
                wrapper.waitMe();
            }
         }).done(function(res){
            if(res.status===200){
                wrapper.html(res.data);
            }else{
                toastr.error(res.msg,'Valió!');
            }
            
         }).fail(function(err) {
            toastr.error('Hubo un error en la petición', 'Valió!')
            wrapper.html('');
         }).always(function(){
            wrapper.waitMe('hide');
         })
    }
    //Update movimiento
    function coatlx_update_movements(){
        
    }
    //Delete movimiento
    function coatlx_delete_movement(){
        
    }


});

//Ejemplos rápidos de jquery
/*
$('p').css({backgroundcolor: 'red'}); para usar CSS en los componentes del tipo designado, todos los <p> se modifican
$('#parrafo').css({backgroundcolor: 'red'}); Esta es la manera de seleccionar por ID del elemento <p id="parrafo> </p>"
$('.parrafo').css({backgroundcolor: 'red'}); Esta es la manera de seleccionar por clase del elemento <p class="parrafo> </p>"
$('#buttonX').click(function(){                 //Evento click
    alert('Se presionó el botón X');
});
$('#buttonX').dblclick(function(){                 //Evento doble click
    $(#parrafo).fadeout();
});
$('#buttonX').mouseenter(function(){                 //Evento del mouse encima, y animación en la aparicion del párrafo
    $(#parrafoX).slideUp();
});
$('#buttonX').animate({width: "300px"});            //De forma animada ejecuta la acción CSS

$(#butonX).click(function(){                           //Me da el contenido del elemento 
    alert('#parrafoX').text();
});
$(#butonX).click(function(){                           //Me da el contenido en html del elemento 
    alert('#parrafoX').html();
});

$(#butonX).click(function(){                           //Me da el contenido del atributo especificado del elemento 
    alert('#parrafoX').attr('id');
});

$(#butonX).click(function(){                           //Me agrega en el contenido del elemento en texto o puede ser en HTML
    alert('#parrafoX').text('Texto a agregar');
});
.append() agrega al final
.preppend agrega al incio

$(#butonX).click(function(){                           //Me agrega otro elemento html al final
    alert('#parrafoX').after('<p> Texto a agregar </p>');
});
.before //Me agrega otro elemento html al principio

$('#buttonX').remove();                 //Eñimina el elemento
$('#buttonX').empty();                 //Vaciar el elemento

$('#buttonX').addClass('red');                 //Agrega una clase CSS al elemento
$('#buttonX').removeClass('red');                 //Remueve una clase CSS al elemento
$('#buttonX').toggleClass('red');                 //Alterna una clase CSS al elemento
.red
{
    color: red;
}



*/
