@extends('user.layouts.default', ['title' => 'Nouvelle visite'])
@section('content')
    <!-- Bread crumb and right sidebar toggle - CONTENT HEADER -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Nouvelle visite</h4>
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
                            <li class="breadcrumb-item active" aria-current="page">Nouvelle visite</li>
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
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Nouvelle visite</h2> 
                        <form method="POST" action="{{ route('visits.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="objet">Objet</label>
                                <input type="text" name="objet"class="form-control @error('objet') is-invalid @enderror" id="objet" value="{{ old('objet') ?? '' }}" placeholder="Entrez l'objet de la visite">
                                @error('objet')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                              <label for="visiteur">Nom et prenom visiteur</label>
                              <input type="text" class="form-control @error('visiteur') is-invalid @enderror" name="visiteur" id="visiteur" value="{{ old('visiteur') ?? '' }}" placeholder="Entrez les nom et prénoms du visiteur">
                                @error('visiteur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="visite">Visité</label>
                                <input type="text" class="form-control @error('visite') is-invalid @enderror" name="visite" id="visite" value="{{ old('visite') ?? '' }}" placeholder="Entrez le nom du visité">
                                @error('visite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="rdv">Rendez-vous ? </label>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" checked name="rdv" id="oui" value="1">
                                    <label class="form-check-label" for="oui">OUI</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rdv" id="non" value="0">
                                    <label class="form-check-label" for="non">NON</label>
                                </div>
                                @error('rdv')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-default btn-lg"><i class="fa fa-save"></i> Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Page Content -->
    </div>
@endsection