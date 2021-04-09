@extends('user.layouts.default', ['title' => 'Courrier envoyé'])
@section('content')
    <!-- Bread crumb and right sidebar toggle - CONTENT HEADER -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Courrier envoyé</h4>
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
                            <li class="breadcrumb-item active" aria-current="page">Courrier envoyé</li>
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
                        Enregistré par {{ $sent->user->name }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Expeditaire : {{ $sent->expeditaire }}</h5>
                        <h5 class="card-title">Destinataire : {{ $sent->destinataire }}</h5>
                        <p class="card-text"><h5>Objet : {{ $sent->objet }}</h5> </p>
                        <h5>Livreur : {{ $sent->livreur }}</h5>
                        <hr>
                        @if (isset($sent->sentPdf->nom))
                        <h5>Voir le fichier <a href="{{ asset('pdf/sent/'.$sent->sentPdf->nom) }}">{{ $sent->sentPdf->nom }}</a></h5>
                        @else
                        <h5>Voir le fichier <a href="{{ asset('pdf/sent/prospectus.pdf') }}">pdfParDefaut.pdf</a></h5>
                        @endif
                    </div>
                    <div class="card-footer text-muted">
                        <h5>{{ $sent->created_at->locale('fr')->diffForHumans() }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('sent.edit', $sent) }}" class="btn btn-default btn-lg btn-block"><i class="fa fa-save"></i> Modifier</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Page Content -->
    </div>
@endsection
