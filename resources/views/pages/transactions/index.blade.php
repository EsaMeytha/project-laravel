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
            <th>Name Customer</th>
            <th>Kode Product</th>
            <th>Product</th>
            <th>Color</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
                {{-- $data adalah variabel yang dikirmkan dari controller dan diinisialisasi sebagai $item --}}
                {{-- sedangkan $k adalah index dari tiap data --}}
                @foreach ($data as $k => $item)
                    <tr>
                        {{-- karena index dimulai dari 0 maka kita perlu menambahkan angka 1 --}}
                        <td>{{$k+1}}</td> 
                        <td>{{$item->name_cust}}</td>
                        <td>{{$item->id_products}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->color}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->quantity}}</td>
                   
            <td>{{ $item->price * $item->quantity }}</td>
            <td>
                          @if ($item->status == 0)
                          <span class='badge badge-warning'>PENDING</span>
                          @elseif ($item->status == 1)
                          <span class='badge badge-success'>LUNAS</span>
                          @else
                          <span class='badge badge-danger'>CANCEL</span>
                          @endif
  
<td>
<a href="{{route('approved', $item->id)}}" class='badge badge-success'><i class='fa fa-check'></i></a>
<a href="{{route('rejected', $item->id)}}" class='badge badge-danger'><i class='fa fa-window-close'></i></a>
</td>
</tr>
@endforeach
</table>
</tbody>
</div>
</div>
</div>
</div>
</div>

@endsection
    