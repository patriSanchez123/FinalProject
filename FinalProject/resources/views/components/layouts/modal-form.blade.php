
    <!--Restringe las actualizaciones del dic para cuando mande los datos de forma asincrona no se cierre el modal.
    el elemento atributes nos permite poder añadirles diferentes clases cuando se llame al modal aparte de las que tiene-->
    <div wire:ignore.self  {{ $attributes->merge(['class' => 'modal fade']) }}  tabindex="-1" id="{{$idModal}}"
        aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $title }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form wire:submit.prevent="{{ $action }}">
                    <div class="modal-body">
                        {{-- Here is added all the content in the component call --}}
                        {{ $slot }}
                    </div>
                    <div class="modal-footer">
                        {{-- data-bs-dismiss="modal" close modal  --}}
                        <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal" >Cerrar</button>
                        {{-- When the action button is pressed, the button will become disabled and become opaque--}}
                        <button type="submit" id="{{ $idButton }}" class="btn btn-primary " wire:remove wire:loading.attr="disabled" wire:remove wire:class="disabled">Guardar</button>
                    </div>
                    </form>

                </div>
            </div>

    </div>
