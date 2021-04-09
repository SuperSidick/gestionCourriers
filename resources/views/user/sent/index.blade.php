@extends('user.layouts.default', ['title' => 'Courriers envoyés'])
@section('content')
    <!-- Bread crumb and right sidebar toggle - CONTENT HEADER -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Courriers envoyés</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('home')}}">Accueil</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Courriers envoyés</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end Bread crumb and right sidebar toggle - END CONTENT HEADER -->


    <div class="container-fluid">
        
        <!-- Start Page Content -->
        <div class="row">
            {{--
            <div class="col-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                    <form method="POST" action="{{ route('sentSearch') }}">
                        @csrf
                        <div class="form-row align-items-center">
                          <div class="col-sm-3 my-1">
                            <label class="sr-only" for="inlineFormInputName">De...</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">De</div>
                                  </div>
                                <input type="date" class="form-control @error('debut') is-invalid @enderror" name="debut" id="inlineFormInputName" placeholder="Date début">
                                @error('debut')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                          </div>
                        <div class="col-sm-3 my-1">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">à</div>
                              </div>
                              <input type="date" class="form-control @error('fin') is-invalid @enderror" name="fin" id="inlineFormInputGroupUsername" placeholder="Date fin">
                              @error('fin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                          </div>
                          <div class="col-sm-3 my-1">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-search"></i> </div>
                              </div>
                              <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" id="inlineFormInputGroupUsername" placeholder="Expé ou Desti">
                              @error('nom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                          </div>
                          <div class="col-auto my-1">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i> rechercher</button>
                          </div>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
            --}}
            <div class="container">
              @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block text-center">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    <strong>{{ $message }}</strong>
                </div>
              @endif
  
              @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block text-center">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    <strong>{{ $message }}</strong>
                </div>
              @endif
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Liste des courriers envoyés</h2>
                        {{-- <h6 class="card-subtitle">DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function:<code> $().DataTable();</code>. You can refer full documentation from here <a href="https://datatables.net/">Datatables</a></h6> --}}
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Date d'envoi</th>
                                        <th scope="col">Destinataire</th>
                                        <th scope="col">Expeditaire</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sents as $sent)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $sent->created_at->format('d/m/Y') }}</td>
                                        <td>{{ $sent->destinataire }}</td>
                                        <td>{{ $sent->expeditaire }}</td>
                                        <td>
                                            <a href="{{route('sent.show', $sent)}}" class="btn btn-primary"><i class="fa fa-eye"></i> </a>
                                            <a href="{{route('sent.edit', $sent)}}" class="btn btn-success"><i class="fa fa-edit"></i> </a>
                                            
                                            {{-- <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a> --}}

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Modal{{ $sent->id }}">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="Modal{{ $sent->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel{{ $sent->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="ModalLabel{{ $sent->id }}"><span class="text-danger">Suppréssion d'élément</span></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <p class="text-danger">
                                                        Vous êtes sur le point de supprimer ce élément. <br>
                                                        Cette action est irréversible ! <br>
                                                        Continuer quand même ?
                                                    </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                                    <form action="{{ route('sent.destroy', $sent) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Supprimer</button>
                                                    </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Date d'envoi</th>
                                        <th scope="col">Destinataire</th>
                                        <th scope="col">Expeditaire</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('sent.create')}} " class="btn btn-default btn-lg btn-block">Nouveau courrier</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Page Content -->
    </div>
@endsection