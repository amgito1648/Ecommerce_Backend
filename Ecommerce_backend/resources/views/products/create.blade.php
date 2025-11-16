@extends('admin.layouts.app')
    
@section('content')  
    <h2>New Product</h2>

    <div class="card">
        <div class="card-body">

          
          <form action ="{{route('admin.products.store')}}" method="POST">
            @csrf

      <!-- Nombre del producto -->
      <div class="input-group input-group-outline mb-3">
        <label for="productName" class="form-label">Product Name</label>
        <input type="text"  class= "form-control" id="productName" name="name" value="{{ old('name') }}">
      </div>
      @error('name')
            <small class= "text-danger">{{ $message }} </small>   
        @enderror
      <!-- Descripcion del producto -->
      <div class="input-group input-group-outline mb-3">
        <label for="productDescription" class="form-label">Descripcion</label>
        <textarea class="form-control" id="productDescription" rows="3" name ="description">"{{ old('description') }}"</textarea>
      </div>
      @error('description')
            <small class= "text-danger">{{ $message }} </small>   
        @enderror

      <!-- Precio del producto-->
      <div class="input-group input-group-outline mb-3">
        <label for="productPrice" class = "form-label">Price</label>
        <input type="text" class = "form-control" id="productPrice"
          step="0.01"  name="price"  value ="{{ old('price') }}">  
      </div> 
      @error('price')
            <small class= "text-danger">{{ $message }} </small>   
        @enderror   

      <!-- Categoria del Producto -->
      <div class="input-group input-group-outline mb-3">
        <select class= "form-control" id="productCategory" name="category">
            <option selected disabled>-- Category --</option>
             @foreach ( $categories as $item)
             <option value = "{{$item->id}}">{{$item->name}}</option>    
            @endforeach
          </select>   


      </div>
      @error('category')
            <small class= "text-danger">{{ $message }} </small>   
        @enderror

      <!-- Marca del Producto -->
      <div class="input-group input-group-outline mb-3">
        <select class= "form-control" id="productBrand" name= "brand">
            <option selected disabled>-- Brand --</option>
            @foreach ($brands as $item )
                <option value="{{$item->id}}">{{$item->name}}</option>             
            @endforeach
        </select> 
      </div>
      @error('brand')
            <small class= "text-danger">{{ $message }} </small>   
        @enderror

      <!-- Boton de envio-->
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Create Product</button>
      </div>
    </form>

        </div>

    </div>

    
@endsection
