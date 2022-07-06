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
<strong>Edit Product</strong>
</div>
<div class="card-body card-block">
<form action="{{ route('product.update', $item->id) }}" method="POST">
@method('PUT')
@csrf
<div class="form-group">
<label for="name" class="form-control-label"> Name Product </label>
<input type="text" name="name" value="{{ old('name') ? old('name') : $item->name }}"
class="form-control @error('name') is=invalid @enderror"/>
@error('name') <div class="text-mute">{{ $message }}</div> 
@enderror
</div>
<div class="form-group">
<label for="color" class="form-control-label"> Color</label>
<input type="text" name="color" value="{{ old('color') ? old('color') : $item->color }}"
class="form-control @error('color') is=invalid @enderror"/>
@error('color') <div class="text-mute">{{ $message }}</div> 
@enderror
</div>
<div class="form-group">
<label for="description" class="form-control-label"> Description </label>
<textarea name="description" 
class="form-control @error('description') is=invalid @enderror"> 
{{ old('description') ? old('description') : $item->description }}
</textarea>
@error('description') <div class="text-mute">{{ $message }}</div> 
@enderror
</div>
<div class="form-group">
<label for="price" class="form-control-label"> Price</label>
<input type="text" name="price" value="{{ old('price') ? old('price') : $item->price }}"
class="form-control @error('price') is=invalid @enderror"/>
@error('price') <div class="text-mute">{{ $message }}</div> 
@enderror
</div>

<button class="btn btn-primary btn-block" type="submit">
Edit Product
</button>
</form>
</div>
</div>
@endsection
    