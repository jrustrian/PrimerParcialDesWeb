@extends('layouts.app')


@section('content')

    <form class="w-50 mx-auto mt-5 pt-5" action="{{ route('customer-create') }}" method="POST">
        @csrf
        <h3 class="text-center my-1">Registro Clientes</h3>
        @include('Messages.messages')


        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control {{$errors->has('name')? 'is-invalid':''}}" name="name" id="name"
                   value="{{isset($customer->name)?$customer->name:old('name') }}">
        </div>

        <div class="form-group">
            <label for="address">Direccion</label>
            <input type="text" class="form-control {{$errors->has('address')? 'is-invalid':''}}" name="address" id="address"
                   value="{{isset($customer->address)?$customer->address:old('address') }}" >
        </div>


        <div class="form-group">
            <label for="cell_pone">Numero de Telefono</label>
            <input type="number" class="form-control {{$errors->has('cell_pone')? 'is-invalid':''}}" name="cell_pone" id="cell_pone"
                   value="{{isset($customer->cell_pone)?$customer->cell_pone:old('cell_pone') }}">
        </div>

        <div class="form-group">
            <label for="email">Correo electronico</label>
            <input type="text" class="form-control {{$errors->has('email')? 'is-invalid':''}}" name="email" id="emial"
                   value="{{isset($customer->email)?$customer->email:old('email') }}">
        </div>

        <div class="form-group hidden">
            <label for="name">Tipo de cliente</label>
            <select name="customer_type" id="customer_type" class="form-control form-control-lg"
                    value="{{isset($customer->customer_type)?$customer->customer_type:old('customer_type') }}">
                <option selected>selecione</option>
                @foreach ($customers_types as $customer_type)

                    <option value="{{ $customer_type->id }}">{{ $customer_type->description }}</option>

                @endforeach

            </select>
        </div>


        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>


@endsection


