@extends('admin.layouts.principal')

@section('conteudo-principal')

<section class="section">


     @forelse ($despesas as $despesa)



                        <div class="row">
                            <div class="col s12 m6">
                              <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                  <span class="card-title">{{$despesa['nome']}}</span>
                                  <p>{{$despesa['valor']}} R$</p>
                                  <p>{{$despesa['data']}}</p>
                                </div>
                                <div class="card-action">
                                  <a href="#">Editar</a>
                                  <a href="#">Excluir</a>
                                </div>
                              </div>
                            </div>
                          </div>




            @empty

                    sem cadastro


            @endforelse

            <div class="fixed-action-btn">
                <a href="{{route('admin.formAdicionar')}}" class="btn-floating btn-large waves-effect aves-light">
                    <i class="large material-icons">add</i>
                </a>
            </div>




</section>

@endsection
