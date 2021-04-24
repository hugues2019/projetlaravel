
@extends('sb-admin/app')

@section('content')
<div class="content-wrapper" style="min-height: 436px;">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="text-center">Voir Categorie</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="content ">
        <div class="container">+
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title center">Information</h3>
                        </div>
                
                        <div class="card-body">
                        
                        <div class="form-group">
                            NOM : {{ $categorie->nom_categorie }}
                        </div>


                        <div class="form-group">
                            CATEGORIE : {!! $categorie->description_categorie !!}
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection