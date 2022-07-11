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
<div class="card">
<div class="card-header">
<strong>Edit Customer</strong>
</div>
<div class="card-body card-block">
<form action="{{ route('customer.update', $item->id) }}" method="POST">
@method('PUT')
@csrf
<div class="form-group">
<label for="id_products" class="form-control-label"> Kode Product </label>
<input type="text" name="id_products" value="{{ old('id_products') ? old('id_products') : $item->id_products }}"
class="form-control @error('id_products') is=invalid @enderror"/>
@error('id_products') <div class="text-mute">{{ $message }}</div> 
@enderror
</div>
<div class="form-group">
<label for="name_cust" class="form-control-label"> Name Customer </label>
<input type="text" name="name_cust" value="{{ old('name_cust') ? old('name_cust') : $item->name_cust }}"
class="form-control @error('name_cust') is=invalid @enderror"/>
@error('name_cust') <div class="text-mute">{{ $message }}</div> 
@enderror
</div>
<div class="form-group">
<label for="address" class="form-control-label"> Address</label>
<input type="text" name="address" value="{{ old('address') ? old('address') : $item->address }}"
class="form-control @error('address') is=invalid @enderror"/>
@error('address') <div class="text-mute">{{ $message }}</div> 
@enderror
</div>
<div class="form-group">
<label for="number" class="form-control-label"> Number</label>
<input type="text" name="number" value="{{ old('number') ? old('number') : $item->number }}"
class="form-control @error('number') is=invalid @enderror"/>
@error('number') <div class="text-mute">{{ $message }}</div> 
@enderror
</div>
<div class="form-group">
<label for="quantity" class="form-control-label"> Qty</label>
<input type="text" name="quantity" value="{{ old('quantity') ? old('quantity') : $item->quantity }}"
class="form-control @error('quantity') is=invalid @enderror"/>
@error('quantity') <div class="text-mute">{{ $message }}</div> 
@enderror
</div>


<button class="btn btn-primary btn-block" type="submit">
Edit Customer
</button>
</form>
</div>
</div>
@endsection
    