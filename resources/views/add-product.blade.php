@extends("./components/layout")

@section("title")
    Add Product
@endsection

@section("main_content")

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/admin/product/check">
        @csrf
        <div class="form-group">
            <label for="image">
                Company Logo
            </label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="name">Product Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="description">Product Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" step="0.1" class="form-control" id="price" name="price">
        </div>

        <button type="submit" class="btn btn-primary">Create Product</button>
    </form>

@endsection
