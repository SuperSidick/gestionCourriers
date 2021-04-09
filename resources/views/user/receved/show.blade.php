@extends('user.layouts.default', ['title' => 'Courrier reçu'])
@section('content')
    <!-- Bread crumb and right sidebar toggle - CONTENT HEADER -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Courrier reçu</h4>
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
                            <li class="breadcrumb-item active" aria-current="page">Courrier reçu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end Bread crumb and right sidebar toggle - END CONTENT HEADER -->


    <div class="container-fluid">
        
        <!-- Start Page Content -->
        <div class="col-md-8 offset-md-2">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block text-center">
                <button type="button" class="close" data-dismiss="alert">×</button>    
                <strong>{{ $message }}</strong>
            </div>
            @endif
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Enregistrer par {{ $receved->user->name }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Destinataire : {{ $receved->destinataire }}</h5>
                        <h5 class="card-title">Expeditaire : {{ $receved->expeditaire }}</h5>
                        <p class="card-text"><h5>Objet : {{ $receved->objet }}</h5> </p>
                        <h5>Livreur : {{ $receved->livreur }}</h5>
                        <hr>
                        @if (isset($receved->recevedPdf->nom))
                        <h5>Voir le fichier <a href="{{ asset('pdf/receved/'.$receved->recevedPdf->nom) }}">{{ $receved->recevedPdf->nom }}</a></h5>
                        @else
                        <h5>Voir le fichier <a href="{{ asset('pdf/receved/prospectus.pdf') }}">pdfParDefaut.pdf</a></h5>
                        @endif
                    </div>
                    <div class="card-footer text-muted">
                        <h5>{{ $receved->created_at->locale('fr')->DiffForHumans() }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('receved.edit', $receved) }}" class="btn btn-default btn-lg btn-block"><i class="fa fa-save"></i> Modifier</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Page Content -->
    </div>
@endsection
