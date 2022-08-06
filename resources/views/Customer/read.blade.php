@extends('layouts.app')

@section('content')
    @include('Messages.messages')
    <h1></h1>

    <h3 class="my-1 text-center">Tabla de Clietes</h3>
    <div class="row col-12 justify-content-end mb-2 pr-0">

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Direccion</th>
                <th scope="col">Numero de Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">tipo de cliente</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <th scope="row">{{ $customer->id_customer }}</th>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->cell_pone }}</td>
                    <td>{{ $customer->email}}</td>
                    <td>{{ $customer->customer_type}}</td>



                    <td>


                    </td>
                    <td>


                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
