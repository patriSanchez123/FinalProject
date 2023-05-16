<div>
    <div class="container-fluid">
        <div>
            <div class="mt-5">
                <h1 class="text-center">Empleados</h1>
                {{-- Component for the button and the modal --}}
                @livewire('create-employee')
            </div>
            {{-- We call the search function to find the data --}}
            <input type="text" class="w-100 p-2" placeholder="Que quieres buscar" wire:model="search">
        </div>
        {{-- The divs will only show if there are any results --}}
        @if ($employees->count())
            <div class="row mb-4">
                <span class="text-center mt-5 mb-2"><strong>Ordenar por</strong></span>
                <ul class="list-group d-flex flex-row d-flex justify-content-center">
                    <li class="list-group-item cursor" wire:click="order('id')">Id
                        @if ($sort == 'id')

                            @if ($direction == 'asc')
                                <i class="fa fa-sort-alpha-up-alt mt-1 mx-2"></i>
                            @else
                                <i class="fa fa-sort-alpha-down-alt  mt-1 mx-2"></i>
                            @endif
                        @else
                            <i class="fa fa-sort mt-1 mx-2"></i>

                        @endif
                    </li>
                    <li class="list-group-item cursor" wire:click="order('employeeName')">Nombre
                        @if ($sort == 'employeeName')

                            @if ($direction == 'asc')
                                <i class="fa fa-sort-alpha-up-alt mt-1 mx-2"></i>
                            @else
                                <i class="fa fa-sort-alpha-down-alt  mt-1 mx-2"></i>
                            @endif
                        @else
                            <i class="fa fa-sort mt-1 mx-2"></i>

                        @endif
                    </li>
                    <li class="list-group-item cursor" wire:click="order('state')">Estado
                        @if ($sort == 'state')

                            @if ($direction == 'asc')
                                <i class="fa fa-sort-alpha-up-alt mt-1 mx-2"></i>
                            @else
                                <i class="fa fa-sort-alpha-down-alt mt-1 mx-2"></i>
                            @endif
                        @else
                            <i class="fa fa-sort float-end mt-1 mx-2"></i>

                        @endif
                    </li>
                </ul>
            </div>
            <div class="row d-flex flex-row d-flex justify-content-around">
                @foreach ($employees as $employee)
                    <div class="col-lg-3 col-md-5 col-sm-12  border rounded-0 border-dark  m-3 p-4 shadow colorHover">
                        <div>
                            <a href="#">
                                <p class="text-center"><strong> id:{{ $employee->id }}</strong></p>
                                <p class="text-center"><strong>Nombre: </strong>{{ $employee->employeeName }}</p>
                                <p class="text-center"><strong>Dni: </strong> {{ $employee->dni }}</p>
                                <p class="text-center"><strong>NºSeguridad social: </strong>{{ $employee->ss }}</p>
                                <p class="text-center"><strong>Email: </strong> {{ $employee->email }}</p>
                                <p class="text-center"><strong>Télefono: </strong> {{ $employee->phone }}</p>
                                <p class="text-center"><strong>Estado: </strong> {{ $employee->state }}</p>
                            </a>
                        </div>
                        <div class="row d-flex flex-row d-flex justify-content-around" >
                            @livewire('edit-employee', ['employee' => $employee], key($employee->id))
                            <div class="col-4 d-flex justify-content-center">
                                <button id="save" class="btn btn-warning btn-sm ">
                                    @if ($employee->state == 'high')
                                        Dar baja
                                    @else
                                        Dar alta
                                    @endif
                                </button>
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                <button type="submit" id="save" class="btn btn-danger btn-sm mx-2">Eliminar</button>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>No existe ningun registro coincidente</p>
        @endif
    </div>



</div>
