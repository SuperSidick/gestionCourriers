@extends('user.layouts.default', ['title' => 'Nouvelle reception'])
@section('content')
    <!-- Bread crumb and right sidebar toggle - CONTENT HEADER -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Nouvelle reception</h4>
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
                            <li class="breadcrumb-item active" aria-current="page">Nouvelle reception</li>
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
                        <h2 class="text-center">Nouvelle reception de courrier</h2> 
                        <form method="POST" action="{{ route('receved.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="objet">Objet</label>
                                <input type="text" class="form-control @error('objet') is-invalid @enderror" name="objet" id="objet" value="{{ old('objet') ?? '' }}" placeholder="Entrez l'objet du courrier">
                                @error('objet')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="expeditaire">Expeditaire</label>
                                <input type="text" class="form-control @error('expeditaire') is-invalid @enderror" id="expeditaire" name="expeditaire" value="{{ old('expeditaire') ?? '' }}" placeholder="Entrez le nom de l'expéditaire">
                                @error('expeditaire')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="destinataire">Destinataire</label>
                                <input type="text" class="form-control @error('destinataire') is-invalid @enderror" id="destinataire" name="destinataire" value="{{ old('destinataire') ?? '' }}" placeholder="Entrez le nom du destinataire">
                                @error('destinataire')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="livreur">Livreur</label>
                                <input type="text" class="form-control @error('livreur') is-invalid @enderror" id="livreur" name="livreur" value="{{ old('livreur') ?? '' }}" placeholder="Entrez le nom du livreur">
                                {{-- <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> --}}
                                @error('livreur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">PDF</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="file" id="file" class="custom-file-input @error('file') is-invalid @enderror">
                                    <label class="custom-file-label" for="file">Choisir le pdf</label>
                                </div>
                            </div>
                            @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <button type="submit" class="btn btn-default btn-lg"><i class="fa fa-save"></i> Enregistrer</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Page Content -->
    </div>
@endsection