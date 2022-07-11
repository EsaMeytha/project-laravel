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
    <h4 class="box-title">View Customers</h4>
</div>
<div class="card-body">
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Kode Product</th>
            <th>Name Customer</th>
            <th>Address</th>
            <th>Number</th>
            <th>Qty</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @forelse($items as $e=>$item)
            <tr>
            <td>{{ $e+1 }}
            <td>{{ $item->id_products }}</td>
            <td>{{ $item->name_cust }}</td>
            <td>{{ $item->address }}</td>
            <td>{{ $item->number }}</td>
            <td>{{ $item->quantity }}</td>
<td>
<a href="{{ route('customer.edit', $item->id)  }}" class="btn btn-primary btn-sm">
<i class="fa fa-pen"></i>
</a>
<form action="{{ route('customer.destroy', $item->id) }}" method="POST" class="d-inline">
@csrf
@method('delete')
    <button class="btn btn-danger btn-sm">
        <i class="fa fa-trash"></i>
    </button>
    </form>
    </td>
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
    