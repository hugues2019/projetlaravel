
@extends('sb-admin/app')

@section('content')
<div class="content-wrapper" style="min-height: 436px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="text-center">Categorie Produits</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content ">
      <div class="container">+
        <div class="row justify-content-center">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title center">Categorie Produits</h3>
              </div>
              <!-- message erreur -->
              @if ($errors->any())
              <div class="alert alert-danger">
                  <strong>Whoops!</strong> There were some problems with your input.<br><br>
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
              <form action="{{ route('categories.update',$categorie->id) }}" method="POST">
              
              
                @csrf
                @method('PUT')
                
                <div class="card-body">
                  
                  <div class="form-group">
                    <label >Ajouter Categorie Produits</label>
                    <input type="text" class="form-control" name="nom_categorie" value="{{ $categorie->nom_categorie }}">
                  </div>


                  <div class="mb-3">
                      <label >Description Categorie produits</label>
                        <textarea class="textarea" name="description_categorie" 
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $categorie->description_categorie }}</textarea>
                      </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
                
              
            </div>
            </form>
            <!-- /.card -->

 

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div></section>
    <!-- /.content -->
  </div>
  @endsection