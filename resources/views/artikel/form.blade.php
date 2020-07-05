@extends('layouts.master')
@section('content')
	<div class="container-fluid">

	  <!-- Page Heading -->
		<div class="card shadow mb-4">
            <div class="card-header py-3">
              <!-- <a href="/artikel/create" class="btn btn-primary">Form Artikel</a> -->
               <h5>Form Artikel</h5>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                  <form role="form" action="/artikel" method="post">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="judul">Judul Artikel</label>
                        <input type="text" class="form-control" id="judul" name="judul" >
                      </div>
                      <div class="form-group">
                        <label for="isi">Isi Artikel</label>
                        <input type="text" class="form-control" id="isi" name="isi">
                      </div>
                      <!-- <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug">
                      </div> -->
                      <div class="form-group">
                        <label for="tag">Tag</label>
                        <input type="text" class="form-control" id="tag" name="tag">
                      </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>                
              </div>
            </div>
          </div>

	</div>
@endsection
