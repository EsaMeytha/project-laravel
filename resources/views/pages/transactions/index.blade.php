@extends('layouts.default')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
      <div class="container-fluid">
<div class="order">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
    <h4 class="box-title">List Transactions</h4>
</div>
<div class="card-body">
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>No.HP</th>
            <th>id-product</th>
            <th>Name</th>
            <th>Color</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
            <th>Status</th>
            <!-- <th>Action</th> -->
        </tr>
    </thead>
    <tbody>
        @forelse($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name_cust }}</td>
            <td>{{ $item->number }}</td>
            <td>{{ $item->id_products }}</td>

            <td>{{ $item->name }}</td>
            <td>{{ $item->color }}</td>
            <td>{{ $item->price }}</td>
              
            <td>{{ $item->quantity }}</td>
            <td>{{ $item->price * $item->qty }}</td>
            <td>
                          @if ($item->status == 0)
                          <span class='badge badge-warning'>Pending</span>
                          @elseif ($item->status == 1)
                          <span class='badge badge-success'>LUNAS</span>
                          @else
                          <span class='badge badge-danger'>CANCEL</span>
                          @endif
            </td>

            

<!-- <td>
<a href="{{route('approved', $item->id)}}" class='badge badge-success'>LUNAS</a>
<a href="{{route('rejected', $item->id)}}" class='badge badge-danger'>CANCEL</a>
</td> -->
</tr>
@empty
<tr><td colspan="6" class="text-center">Data Tidak Ditemukan</td></tr>
@endforelse
    </tbody>
</table>
</div>
</div>
</div>
</div>
</div>

@endsection
    