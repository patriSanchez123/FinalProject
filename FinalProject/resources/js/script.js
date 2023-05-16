/**
 * Event alert
 */
Livewire.on('alert',function(message){

    Swal.fire(
        'Proceso confirmado',
        message,
        'success'
      )

})

/**Close modal no funciona */
Livewire.on('closeModal',function(idModal){
    $('#'+idModal).modal('hide');
    console.log('haber si está llegando');
});
