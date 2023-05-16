<div>
    <!---LLAMAMOS AL MODAL Y LE PASAMOS el titulo y el contenido del modal-->
    {{-- Para evitar que la vista se comunique con el componente le ponemos  wire:model.defer --}}
    <button type="button" class="btn btn-danger mb-5 p-2" id="myInput" data-bs-toggle="modal"
        data-bs-target="#createEmployeeModal">
        Crear empleado</button>

    {{-- Le pasamos los parametros el titulo del modal, id del modal,  --}}
    <x-layouts.modal-form title="Crear empleado" idModal="createEmployeeModal" action="save" idButton="save">

        <div class="mb-3">
            <label for="employeeName" class="form-label">Nombre y Apellidos</label>
            <input type="text" class="form-control" id="employeeName" name="employeeName" wire:model.l="employeeName"
                value="{{ old('employeeName') }}">
            @error('employeeName')
                <span class="text-danger"><small>{{ $message }}</small></span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="dni" class="form-label">DNI</label>
            <input type="text" class="form-control" id="dni" name="dni" wire:model.lazy="dni"
                value="{{ old('dni') }}">
            @error('dni')
                <span class="text-danger"><small>{{ $message }}</small></span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Télefono</label>
            <input type="text" class="form-control" id="phone" name="phone" wire:model.lazy="phone"
                value="{{ old('phone') }}">
            @error('phone')
                <span class="text-danger"><small>{{ $message }}</small></span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="ss" class="form-label">Número seguridad social</label>
            <input type="text" class="form-control" id="ss" name="ss" wire:model.lazy="ss"
                value="{{ old('ss') }}">
            @error('ss')
                <span class="text-danger"><small>{{ $message }}</small></span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="employeeName" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" wire:model.lazy="email"
                value="{{ old('email') }}">
            @error('email')
                <span class="text-danger"><small>{{ $message }}</small></span>
            @enderror
        </div>
        <p class="form-label">Privilegios</p>
        <div class="form-check form-check-inline mb-3 ">
            <input class="form-check-input" type="radio" name="privileges" id="privileges" value="employee"
                wire:model.lazy="privileges">
            <label class="form-check-label" for="privileges">
                Administrador
            </label>

        </div>
        <div class="form-check form-check-inline mb-3 ">
            <input class="form-check-input" type="radio" name="privileges" id="privileges2" value="admin"
                wire:model.lazy="privileges" @checked(true)>
            <label class="form-check-label" for="privileges2">
                Empleado
            </label>
        </div>
        <div>
            @error('privileges')
                <span class="text-danger"><small>{{ $message }}</small></span>
            @enderror
        </div>

        <p class="form-label">Estado</p>
        <div class="form-check form-check-inline mb-3 ">

            <input class="form-check-input" type="radio" name="state" id="state" value="high"
                wire:model.lazy="state">
            <label class="form-check-label" for="state">
                Alta
            </label>

        </div>

        <div class="form-check form-check-inline mb-3 ">
            <input class="form-check-input" type="radio" name="state2" id="state" value="low"
                wire:model.lazy="state">
            <label class="form-check-label" for="state2">
                Baja
            </label>
        </div>
        <div>
            @error('state')
                <span class="text-danger"><small>{{ $message }}</small></span>
            @enderror
        </div>



    </x-layouts.modal-form>
