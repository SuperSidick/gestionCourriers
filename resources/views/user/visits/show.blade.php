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
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block text-center">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Enregistré par {{ $visit->user->name }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">visiteur : {{ $visit->nom_visiteur }}</h5>
                        <h5 class="card-title">Visité : {{ $visit->personne_visite }}</h5>
                        <p class="card-text"><h5>Objet : {{ $visit->objet }}</h5> </p>
                        <h5>Visite sur rendez-vous : @if ($visit->rdv) OUI @else NON @endif </h5>
                    </div>
                    <div class="card-footer text-muted">
                        <h5>{{ $visit->created_at->locale('fr')->DiffForHumans() }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('visits.edit', $visit) }}" class="btn btn-default btn-lg btn-block"><i class="fa fa-save"></i> Modifier</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Page Content -->
    </div>
@endsection
