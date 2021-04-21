<!-- selon moi nous avons fait un appel de sb-admin/app dans la page dashboard -->
@extends('sb-admin/app')

<!-- fin selon moi nous avons fait un appel de sb-admin/app dans la page dashboard -->

@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>  {{ $categorie->nom_categorie }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('categories.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom categorie:</strong>
                {{ $categorie->nom_categorie }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description Categorie:</strong>
                {{ $categorie->description_categorie }}
            </div>
        </div>
    </div>
    @endsection