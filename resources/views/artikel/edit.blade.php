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
                  <form role="form" action="/artikel/{{$show_item->idartikel}}" method="post">
                    @csrf
                    @method('PUT')
                    
                    <div class="card-body">
                      <div class="form-group">
                        <label for="judul">Judul Artikel</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{$show_item->judul}}">
                      </div>
                      <div class="form-group">
                        <label for="isi">Isi Artikel</label>
                        <input type="text" class="form-control" id="isi" name="isi" value="{{$show_item->isi}}">
                      </div>
                      <!-- <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug">
                      </div> -->
                      <div class="form-group">
                        <label for="tag">Tag</label>
                        <input type="text" class="form-control" id="tag" name="tag" value="{{$show_item->tag}}">
                      </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </form>                
              </div>
            </div>
          </div>

	</div>
@endsection
