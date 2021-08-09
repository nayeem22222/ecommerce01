@extends('layouts.backend')

@Section('main')

    <div class="row">
    
         <div class="col-md-3"></div> 
            <div class="col-md-6">
                <h2 class="text-center mt-3">Edit Product</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{route('admin.product.edit',$product->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$product->name}}">                        
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Product Price</label>
                        <input type="number" name="price" class="form-control" id="price" value="{{$product->price}}">                        
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Product Description</label>
                        <textarea name="desc" class="form-control" id="desc">{{$product->desc}}</textarea>                      
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Product Photo</label>
                        <input type="file" name="photo" class="form-control" id="photo" >
                        <img src="{{asset('upload/products/'.$product->photo)}}" alt="" width="100px" class="mt-3">
                    </div>     
                    <button type="submit" class="btn btn-primary">Update</button>

                </form>
            </div>

    </div>
        
@endSection()