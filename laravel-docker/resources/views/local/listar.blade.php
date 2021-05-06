@extends('layouts.layoutAdmin')
@section('head')

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- jsGrid -->
  <link rel="stylesheet" href="{{ asset('plugins/jsgrid/jsgrid.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/jsgrid/jsgrid-theme.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@endsection

@section('conteudo')
    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <div class="w-100 d-flex justify-content-between align-itens-center">
            <h3 class="card-title align-middle">Listagem de Locais</h3>
            <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Cadastrar novo Local</button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Logradouro</th>
                <th>Número</th>
                <th>Bairro</th>
                <th>Cidade/Estado</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($locals as $local)
                  <tr>
                    <td>{{$local->logradouro}}</td>
                    <td>{{$local->numero}}</td>
                    <td>{{$local->bairro_distrito}}</td>
                    <td>{{$local->cidade}}/{{$local->estado}}</td>
                    <td>
                      <button class="btn btn-info">Informações</button>
                      <button class="btn btn-warning">Editar</button>
                      <button class="btn btn-danger">Deletar</button>
                    </td>
                  </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Novo Local</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('local.store')}}" id="form-create" method="POST">
          @csrf
          <div class="w-100 d-flex flex-column align-itens-center">
            <div class="form-group">
              <label for="">Logradouro</label>
              <input class="form-control" type="text" name="logradouro" id="">
            </div>
            <div class="form-group">
              <label for="">Número</label>
              <input class="form-control" type="text" name="numero" id="">
            </div>
            <div class="form-group">
              <label for="">Bairro/Distrito</label>
              <input class="form-control" type="text" name="bairro_distrito" id="">
            </div>
            <div class="form-group">
              <label for="">Cidade</label>
              <input class="form-control" type="text" name="cidade" id="">
            </div>
            <div class="form-group">
              <label for="">Estado</label>
              <input class="form-control" type="text" name="estado" id="">
            </div>
            <div class="form-group">
              <label for="">CEP</label>
              <input class="form-control" type="text" name="cep" id="">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary" form="form-create">Salvar</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- jsGrid -->
<script src="{{asset('plugins/jsgrid/demos/db.js')}}"></script>
<script src="{{asset('plugins/jsgrid/jsgrid.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('js/demo.js')}}"></script>
<!-- Page specific script -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>  
<script>
  $(document).ready(function() {
    $('#classes-select').select2();
    $('#document-select').select2();
  });
  
</script>
@endsection