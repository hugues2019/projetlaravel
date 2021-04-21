<!-- selon moi nous avons fait un appel de sb-admin/app dans la page dashboard -->
@extends('sb-admin/app')

<!-- fin selon moi nous avons fait un appel de sb-admin/app dans la page dashboard -->

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
      <div class="container">
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
          <!-- fin erreur -->
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('categories.store') }}" method="POST">
              @csrf
                <div class="card-body">
                  <!-- <div class="form-group">
                    <label>Custom Select</label>
                    <select class="custom-select">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div> -->
                  
                  <div class="form-group">
                    <label for="nom_categorie">Ajouter Categorie Produits</label>
                    <input type="text" class="form-control" name="nom_categorie" id="nom_categorie" placeholder="categorie formation">
                  </div>

                  <div class="mb-3">
                      <label for="description_categorie">Description Categorie produits</label>
                        <textarea class="textarea" id="description_categorie" name="description_categorie" placeholder="Place some text here"
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </div>

                  
                <!-- /.card-body -->

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