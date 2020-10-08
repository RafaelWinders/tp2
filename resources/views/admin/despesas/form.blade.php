@extends('admin.layouts.principal')
@section('conteudo-principal')
    <section class="section">
        <form action="{{route('admin.adicionar')}}" method="POST">
            @csrf
            <div class="input-field">
                <input type="text" name="nome" id="nome"/>
                <label for="nome">Nome</label>
                @error('nome')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="input-field">
                <input type="number" name="valor" id="valor"/>
                <label for="valor">Valor</label>
                @error('valor')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="input-field">
                <input type="date" name="data" id="data"/>
                <label for="data">Data</label>
                @error('data')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
            </div>

            <div class="right-align">
                <a href="{{url()->previous()}}" class="btn-flat waves-effect">Cancelar</a>
                <button class="btn waves-effect waves-light" type="submit">salvar</button>
            </div>


        </form>
    </section>
@endsection
