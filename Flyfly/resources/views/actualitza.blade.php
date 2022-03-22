@extends('disseny')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
    </div>

    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ route('clients.update', $clients->id) }}">
        <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="Passaport">Passaport</label>
              <input type="text" class="form-control" name="Passaport"/>
          </div>
          <div class="form-group">
              <label for="NomCognoms">Nom i cognoms</label>
              <input type="text" class="form-control" name="NomCognoms"/>
          </div>
          <div class="form-group">
              <label for="Edat">Edat</label>
              <input type="Edat" class="form-control" name="Edat"/>
          </div>
          <div class="form-group">
              <label for="Telefon">Telefon</label>
              <input type="Telefon" class="form-control" name="Telefon"/>
          </div>
          <div class="form-group">
              <label for="Adreça">Adreça</label>
              <input type="Adreça" class="form-control" name="Adreça"/>
          </div>
          <div class="form-group">
              <label for="Ciutat">Ciutat</label>
              <input type="text" class="form-control" name="Ciutat"/>
          </div>
          <div class="form-group">
              <label for="Pais">Pais</label>
              <input type="text" class="form-control" name="Pais"/>
          </div>
          <div class="form-group">
              <label for="Email">Email</label>
              <input type="email" class="form-control" name="Email"/>
          </div>
          <div class="form-group">
          <label for="TipusTargeta">Tipus de Targeta</label>
              <select type="text" class="form-control" name="TipusTargeta">
                  <option value="Debit">Debit</option>
                  <option value="Credit">Credit</option>
              </select> 
          </div>
          <div class="form-group">
              <label for="numTargeta">nombre de Targeta</label>
              <input type="text" class="form-control" name="numTargeta"/>
          </div>

            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('empleats') }}">Accés directe a la Llista d'empleats</a
@endsection