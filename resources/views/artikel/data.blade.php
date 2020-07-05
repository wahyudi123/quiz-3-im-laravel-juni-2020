@extends('layouts.master')
@section('content')
	<div class="container-fluid">

	  <!-- Page Heading -->
		<div class="card shadow mb-4">
            <div class="card-header py-3">
              <a href="/artikel/create" class="btn btn-primary">Tambah Data Artikel</a>
               
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Slug</th>
                      <th>Isi</th>
                      <th>Tag</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Isi</th>
                      <th>Slug</th>
                      <th>Tag</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($artikels as $key => $item)
			            <tr>
			              <td>{{$key+1}}</td>
			              <td>{{$item->judul}}</td>
			              <td>{{$item->isi}}</td>
			              <td>{{$item->slug}}</td>
			              <td>{{$item->tag}}</td>
			              <td>
			              	<a href="/artikel/{{$item->idartikel}}" class="btn btn-info">Show</a> ||
			              	<a href="/artikel/{{$item->idartikel}}/edit" class="btn btn-warning">Edit</a> ||
			              	<!-- <a href="/artikel/{{$item->idartikel}}" class="btn btn-danger">Hapus</a> -->
			              	<form action="/artikel/{{$item->idartikel}}" method="post" style="display:inline">
			              		@csrf
			              		@method('DELETE')
			              		<button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
			              	</form>
			              </td>
			            </tr>
			         @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

	</div>
@endsection
@push('scripts')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript">
	swal({
		title: 'Berhasil',
		text: 'Memasangkan script sweet alert',
		icon: 'success',
		confirmButtonText: 'Cool'
	});
	
	

	// sweetAlert("Berhasil", "Memasangkan script sweet alert", "success","Cool");
</script>
@endpush