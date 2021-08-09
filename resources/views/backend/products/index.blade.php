@extends('layouts.backend')

@Section('main')
    <h2 class="text-center mt-3">Product List</h2>
    <a href="{{route('admin.product.create')}}" class="btn btn-primary">Add New Product</a>

    <table class="table">
    <thead>
        <tr>
            <th scope="col">SN</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Photo</th>
            <th scope="col">Desc</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $key=>$product)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->price}} <strong class="text-primary">৳</strong></td>
                <td><img src="{{asset('upload/products/'.$product->photo)}}" alt="" width="50px"></td>
                <td>{{$product->desc}}</td>
                <td>
                    <a href="{{route('admin.product.edit',$product->id)}}" class="btn btn-warning" title="Edit Product">Edit</a>
                    <a href="{{route('admin.product.delete',$product->id)}}" class="btn btn-danger" title="Delete Product">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    {{$products->links()}}

@endSection()