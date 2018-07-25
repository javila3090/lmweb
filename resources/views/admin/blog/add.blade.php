  @extends('admin.layouts.app')

  @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item"><a href="#">Blog</a></li>
              <li class="breadcrumb-item active">Agregar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!--Incluir mensaje de error-->
      @if (count($errors) > 0)
      @include('admin.partials.errors')
      @endif

      <!--Incluir mensaje de éxito-->
      @include('admin.partials.messages')

      <div class="row">
        <div class="col-md-12">
          <div class="card card-info card-outline">
            <div class="card-header">
              <h3 class="card-title">
                Nueva entrada
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm"
                data-widget="collapse"
                data-toggle="tooltip"
                title="Collapse">
                <i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool btn-sm"
              data-widget="remove"
              data-toggle="tooltip"
              title="Remove">
              <i class="fa fa-times"></i>
            </button>
          </div>
          <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <form action="/admin/blog/store" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputTitulo">Título</label>
              <input type="text" name="title" class="form-control" id="exampleInputTitulo" placeholder="Ingrese un título">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Imagen</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" id="exampleInputFile" class="form-control" name="image">                
                </div>                
              </div>
            </div>
            <div class="form-group">
              <label>Etiqueta</label>
              {!! Form::select('tag_id', $tags, null, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Elija una opción']) !!}   
            </div>                
            <div class="form-group">
              <label for="exampleInputContenido">Contenido</label>
              <textarea id="editor1" name="content" style="width: 100%;"></textarea>
            </div>            
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{url('admin/section')}}" class="btn btn-danger">Volver</a>
          </div>
        </form>
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col-->
  </div>
  <!-- ./row -->
</section>
<!-- /.content -->
</div>


@endsection