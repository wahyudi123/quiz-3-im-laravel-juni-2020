@extends('layouts.master')
@section('content')
	<div class="container-fluid">

	  <!-- Page Heading -->
		    <div class="card shadow mb-4">
          <div class="card-header py-3">
            <!-- <a href="/artikel/create" class="btn btn-primary">Form Artikel</a> -->
             <h5>Show Artikel</h5>
          </div>
          
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Judul: {{$show_item->judul}}</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">slug: {{$show_item->slug}}</div>
                      <p>{{$show_item->isi}}</p>
                      <p>
                        <?php 
                          $pecah = explode(" ", $show_item->tag);
                          for ($i=0; $i<count($pecah) ; $i++) { 
                            echo "<button class ='btn btn-sm btn-primary'>".$pecah[$i]."</button>". " ";
                          }

                        ?>
                        

                      </p>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

	</div>
@endsection
