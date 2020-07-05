@extends('layouts.master')
@section('content')
	<div class="container-fluid">

	  <!-- Page Heading -->
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <a href="#" class="btn btn-primary">Tambah Data Artikel</a>
               
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
                      <th>Slug</th>
                      <th>Isi</th>
                      <th>Tag</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

	</div>
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script type="text/javascript">
	// Swal.fire({
	// 	title: 'Berhasil',
	// 	text: 'Memasangkan script sweet alert',
	// 	icon: 'success',
	// 	confirmButtonText: 'Cool'
	// })
	sweetAlert("Berhasil", "Memasangkan script sweet alert", "success","Cool");
</script>
@endpush