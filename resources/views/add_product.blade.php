<!-- resources/views/add_product.blade.php -->
@extends('layout')

@section('content')
    <div style="background-color: #333; padding: 16px;">
        <nav style="max-width: 800px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
            <div style="color: #ffffff; font-size: 24px; font-weight: bold;">
                JointTable
            </div>
            <ul style="list-style: none; display: flex; margin: 0; padding: 0;">
                <li style="margin-right: 16px;"><a href="/" style="color: #ffffff; text-decoration: none;">Home</a></li>
                <li style="margin-right: 16px;"><a href="/about" style="color: #ffffff; text-decoration: none;">About</a></li>
                <li style="margin-right: 16px;"><a href="/contact" style="color: #ffffff; text-decoration: none;">Contact</a></li>
                <li style="margin-right: 16px;"><a href="/shop" style="color: #ffffff; text-decoration: none;">Shop</a></li>
                <li><a href="/" style="color: #ffffff; text-decoration: none;">Logout</a></li>
            </ul>
        </nav>
    </div>

    <div style="background-color: #f9f9f9; padding: 40px 20px; display: flex; justify-content: center; align-items: center;">
        <div style="background-color: #ffffff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); padding: 30px; border-radius: 8px; max-width: 600px; width: 100%;">
            <header style="text-align: center; margin-bottom: 30px;">
                <h2 style="font-size: 28px; color: #333;">Add a New Product</h2>
                <p style="color: #777;">Fill in the details below to add a new product to the shop.</p>
            </header>
            @if ($errors->any())
                <div style="background-color: #f8d7da; color: #721c24; padding: 15px; margin-bottom: 20px; border-radius: 4px;">
                    <ul style="margin: 0; padding-left: 20px;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="margin-bottom: 20px;">
                    <label for="product_name" style="display: block; font-weight: bold; color: #333;">Product Name:</label>
                    <input type="text" id="product_name" name="product_name" value="{{ old('product_name') }}" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px;" required>
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="price" style="display: block; font-weight: bold; color: #333;">Price:</label>
                    <input type="number" id="price" name="price" value="{{ old('price') }}" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px;" required>
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="quantity" style="display: block; font-weight: bold; color: #333;">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" value="{{ old('quantity') }}" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px;" required>
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="product_img" style="display: block; font-weight: bold; color: #333;">Product Image:</label>
                    <input type="file" id="product_img" name="product_img" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px;" required>
                </div>

                <div style="text-align: center;">
                    <button type="submit" style="background-color: #333; color: #ffffff; padding: 12px 24px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">
                        Add Product
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
