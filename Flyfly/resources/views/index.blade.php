
@extends('disseny')

@section('content')

<h1>Llista de clients</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td># ID</td>
          <td>Passaport</td>
          <td>Nom i cognoms</td>
          <td>Edat</td>
          <td>Telèfon</td>
          <td>Adreça</td>
          <td>Ciutat</td>
          <td>Pais</td>
          <td>Email</td>
          <td>Tipus de Targeta</td>
          <td>Nombre de la targeta</td>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $clie)
        <tr>
            <td>{{$clie->id}}</td>
            <td>{{$clie->Passaport}}</td>
            <td>{{$clie->NomCognoms}}</td>
            <td>{{$clie->Edat}}</td>
            <td>{{$clie->Telefon}}</td>
            <td>{{$clie->Adreça}}</td>
            <td>{{$clie->Ciutat}}</td>
            <td>{{$clie->Pais}}</td>
            <td>{{$clie->Email}}</td>
            <td>{{$clie->TipusTargeta}}</td>
            <td>{{$clie->numTargeta}}</td>
            <td class="text-left">
                <a href="{{ route('clients.edit', $clie->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('clients.destroy', $clie->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<br><a href="{{ url('clients/create') }}">Accés directe a la vista de creació d'empleats</a>
@endsection
