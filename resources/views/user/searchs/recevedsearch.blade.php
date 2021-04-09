@extends('user.layouts.default', ['title' => 'Resultats de recherce de courriers reçu'])
@section('content')
    <!-- Bread crumb and right sidebar toggle - CONTENT HEADER -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Resultats de recherce de courriers reçu</h4>
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
                            <li class="breadcrumb-item active" aria-current="page">Resultats de recherce de courriers reçu</li>
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
            <div class="col-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center">Resultats de recherce de courriers reçu</h1>
                    </div>
                </div>
            </div>
        </div> 
@endsection