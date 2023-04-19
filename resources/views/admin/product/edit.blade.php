@extends('layouts.admin_layout')

@section('title', 'Edit product')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit product: {{ $product['title'] }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('product.update', $product['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" value="{{ $product['title'] }}" name="title" class="form-control" id="exampleInputEmail1"
                                           placeholder="Enter the title of product" required>
                                </div>
                                <div class="form-group">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Select category</label>
                                        <select name="cat_id" class="form-control" required>
                                            @foreach($categories as $category)
                                                <option value="{{ $category['id'] }}"@if($category['id'] == $product['cat_id']) selected @endif>{{ $category['title'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Short Description</label>
                                    <input type="text" value="{{ $product['short_description'] }}" name="short_description" class="form-control" id="exampleInputEmail1"
                                           placeholder="Enter the short description" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea type="text" name="description" class="form-control" id="exampleInputEmail1"
                                              placeholder="Enter the description" required>{{ $product['description'] }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="feature_image">Feature Image</label>
                                    <img src="/{{$product['img']}}" class="img-uploaded" style="display: block; width: 300px">
                                    <input type="text" value="{{ $product['img'] }}" name="img" class="form-control" id="feature_image" name="feature_image" value="" readonly>
                                    <a href="" class="popup_selector" data-inputid="feature_image">Select Image</a>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
