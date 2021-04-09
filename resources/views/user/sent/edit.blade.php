@extends('user.layouts.default', ['title' => 'Nouvel envoi'])
@section('content')
    <!-- Bread crumb and right sidebar toggle - CONTENT HEADER -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Modifier le courrier envoyé</h4>
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
                            <li class="breadcrumb-item active" aria-current="page">Modifier courrier envoyé</li>
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
                        <h2 class="text-center">Modifier le courrier envoyé</h2> 
                        <form method="POST" action="{{ route('sent.update', $sent) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="objet">Objet</label>
                                <input type="text" name="objet" class="form-control @error('objet') is-invalid @enderror" id="objet" value="{{ old('objet') ?? $sent->objet }}" placeholder="Entrez l'objet du courrier">
                                @error('objet')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="expeditaire">Expeditaire</label>
                                <input type="text" name="expeditaire" class="form-control @error('expeditaire') is-invalid @enderror" id="expeditaire" value="{{ old('expeditaire') ?? $sent->expeditaire }}" placeholder="Entrez le nom de l'expéditaire">
                                @error('expeditaire')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="destinataire">Destinataire</label>
                                <input type="text" name="destinataire" class="form-control @error('destinataire') is-invalid @enderror" id="destinataire" value="{{ old('destinataire') ?? $sent->destinataire }}" placeholder="Entrez le nom du destinataire">
                                @error('destinataire')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="livreur">Livreur</label>
                                <input type="text" name="livreur" class="form-control @error('livreur') is-invalid @enderror" id="livreur" value="{{ old('livreur') ?? $sent->livreur }}" placeholder="Entrez le nom du livreur">
                                @error('livreur')
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