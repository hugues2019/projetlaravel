<!-- selon moi nous avons fait un appel de sb-admin/app dans la page dashboard -->
@extends('sb-admin/app')

<!-- fin selon moi nous avons fait un appel de sb-admin/app dans la page dashboard -->

@section('content')
<div class="content-wrapper" style="min-height: 436px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Text Editors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
       <!-- Main content -->
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tableau parametre Site</h3>
              </div>
              <!-- --------------message laravel -->
              <!-- <div class="pull-right">
                <a class="btn btn-success" href=""> Create New Post</a>
            </div> -->
            <!-- fin message laravel -->
            <!-- message laravel -->
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
           @endif
           <!-- fin message laravel -->
              
              <!-- /.card-header -->
              <div class="card-body">
              <a href="{{route ('categories.create') }}" class="btn btn-success btn-circle" style="margin-left: 77.6em;;"><i class="fas fa-plus"></i></a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nom Categorie</th>
                    <th>Description Categorie</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($categories as $categorie)
                  <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $categorie->nom_categorie }}</td>
                  <td>{{ \Str::limit($categorie->description_categorie, 100) }}</td>
                  <td>{{ date_format($categorie->created_at, 'jS M Y') }}</td>

                  <td>
                <form action="{{ route('categories.destroy', $categorie->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('categories.show', $categorie->id) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ route('categories.edit', $categorie->id) }}">Edit</a> 

                    @csrf
                    @method('DELETE') 

                    <button type="submit" title="delete" class="btn btn-danger">Delete</button>
                </form>
                </td>

                  </tr>
                  @endforeach
                  </tbody>
                  <!-- <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                    <th>CSS grade</th>

                  </tr>
                  </tfoot> -->
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
    <!-- /.content -->
  </div>

 @endsection
  