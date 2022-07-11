@extends('layouts.default')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$total_product}}</h3>
                <p>Total Products</p>
                <br>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{$total_customer}}</h3>
                <p>Total Customers</p>
                <br>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
            </div>
          </div>
          
        
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$total_pending}}</h3>
                <p>Customers Pending</p>
                <h6>Rp. {{ number_format($total_pendingsum,0,",",".") }}</h6>
              </div>
              <div class="icon">
                <i class="fa fa-search-dollar"></i>
              </div>
            </div>
          </div>
          
        <!-- /.row -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $total_payment }}</h3>

                <p>Customers Payment</p>
                <h6>Rp. {{ number_format($total_lunas,0,",",".") }}</h6>
              </div>
              <div class="icon">
                <i class="fa fa-dollar-sign"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $total_cancel }}</h3>
                <p>Customers Cancel</p>
                <h6>Rp. {{ number_format($total_cancelsum,0,",",".") }}</h6>
              </div>
              
              <div class="icon">
                <i class="fa fa-window-close"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- Main row -->
        
    </section>
    @endsection

