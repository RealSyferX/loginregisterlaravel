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

    <div style="background-color: #f4f4f4; padding: 20px;">
        <header style="text-align: center; margin-bottom: 20px;">
            <h1>Welcome to Store</h1>
            <h5 style="color: red">Pick a Poison. Your Choice, Your Responsiblity</h5>
        </header>
        <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
            @foreach($products as $product)
                <div style="background-color: #ffffff; padding: 16px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 300px; text-align: center;">
                    <img src="{{ asset('storage/' . $product->product_img) }}" alt="{{ $product->product_name }}" style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">
                    <h2 style="font-size: 18px; margin: 12px 0;">{{ $product->product_name }}</h2>
                    <p style="font-size: 16px; color: #333;">Price: ${{ $product->price }}</p>
                    <p style="font-size: 14px; color: #777;">Quantity: {{ $product->quantity }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
