@extends('user.layouts.default', ['title' => 'Welcome'])
@section('content')
    <!-- Bread crumb and right sidebar toggle - CONTENT HEADER -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Tableau de bord</h4>
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
                            {{-- <li class="breadcrumb-item active" aria-current="page">Library</li> --}}
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end Bread crumb and right sidebar toggle - END CONTENT HEADER -->

    <div class="container">
        <!--dashbord-->
        <div class="card-group">
            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                            <a href="{{route('sent.index')}} ">
                                <span class="btn btn-circle btn-lg bg-danger">
                                    <i class="ti-clipboard text-white"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ml-2">
                            Courriers envoyés
                        </div>
                        <div class="ml-auto">
                            <h2 class="m-b-0 font-light">{{ $send->count() }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                            <a href="{{route('receved.index')}} ">
                                <span class="btn btn-circle btn-lg btn-info">
                                    <i class="ti-wallet text-white"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ml-2">
                            Courriers récus
                        </div>
                        <div class="ml-auto">
                            <h2 class="m-b-0 font-light">{{ $receved->count() }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                            <a href="{{route('visits.index')}}">
                                <span class="btn btn-circle btn-lg bg-success">
                                    <i class="ti-shopping-cart text-white"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ml-2">
                            Visites
                        </div>
                        <div class="ml-auto">
                            <h2 class="m-b-0 font-light">{{ $visits->count() }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <!-- Column -->
        </div>

        <br><br><br><br><br>
        <!--end dashbord-->

        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">
                            Bienvenue sur votre appli de gestion des courriers !
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Page Content -->
        <br><br><br><br>

    </div>

@endsection