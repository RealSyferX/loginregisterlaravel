@extends('layout')

@section('content')
    <div style="max-width: 800px; margin: 0 auto; padding: 16px;">
        <div style="background-color: #f7fafc; border: 1px solid #e2e8f0; padding: 40px; border-radius: 8px; margin-top: 96px;">
            <header style="text-align: center; margin-bottom: 24px;">
                <h2 style="font-size: 24px; font-weight: bold; text-transform: uppercase; margin: 0 0 8px 0;">Register</h2>
                <p>Create an account if you got infected by corona virus</p>
            </header>

            <form method="POST" action="/users">
                @csrf

                <div style="margin-bottom: 24px;">
                    <label for="name" style="display: block; font-size: 16px; margin-bottom: 8px;">Name</label>
                    <input type="text" id="name" name="name" style="width: 100%; padding: 12px; border: 1px solid #e2e8f0; border-radius: 4px;" value="{{ old('name') }}" required>
                    @error('name')
                    <p style="color: #e53e3e; font-size: 12px; margin-top: 8px;">{{ $message }}</p>
                    @enderror
                </div>

                <div style="margin-bottom: 24px;">
                    <label for="email" style="display: block; font-size: 16px; margin-bottom: 8px;">Email</label>
                    <input type="email" id="email" name="email" style="width: 100%; padding: 12px; border: 1px solid #e2e8f0; border-radius: 4px;" value="{{ old('email') }}" required>
                    @error('email')
                    <p style="color: #e53e3e; font-size: 12px; margin-top: 8px;">{{ $message }}</p>
                    @enderror
                </div>

                <div style="margin-bottom: 24px;">
                    <label for="password" style="display: block; font-size: 16px; margin-bottom: 8px;">Password</label>
                    <input type="password" id="password" name="password" style="width: 100%; padding: 12px; border: 1px solid #e2e8f0; border-radius: 4px;" required>
                    @error('password')
                    <p style="color: #e53e3e; font-size: 12px; margin-top: 8px;">{{ $message }}</p>
                    @enderror
                </div>

                <div style="margin-bottom: 24px;">
                    <label for="password_confirmation" style="display: block; font-size: 16px; margin-bottom: 8px;">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" style="width: 100%; padding: 12px; border: 1px solid #e2e8f0; border-radius: 4px;" required>
                    @error('password_confirmation')
                    <p style="color: #e53e3e; font-size: 12px; margin-top: 8px;">{{ $message }}</p>
                    @enderror
                </div>

                <div style="margin-bottom: 24px; text-align: center;">
                    <button type="submit" style="background-color: #f56565; color: #ffffff; padding: 12px 24px; border-radius: 4px; border: none; cursor: pointer;">Register</button>
                </div>

                <div style="text-align: center;">
                    <p>Already have an account? <a href="/login" style="color: #f56565; text-decoration: none;">Login</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection
