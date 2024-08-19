@extends('layout')

@section('content')
    <div style="max-width: 800px; margin: 0 auto; padding: 16px;">
        <div style="background-color: #ffffff; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 24px;">
            <header style="text-align: center; margin-bottom: 16px;">
                <h2 style="font-size: 24px; font-weight: bold; text-transform: uppercase; margin: 0;">Login</h2>
                <p style="color: #4a5568;">Login to post gigs</p>
            </header>

            <form method="POST" action="/login/done">
                @csrf

                <div style="display: flex; flex-wrap: wrap; margin: -8px;">
                    <div style="width: 100%; padding: 8px;">
                        <label for="email" style="display: block; color: #4a5568; font-size: 14px; font-weight: bold; margin-bottom: 8px;">Email</label>
                        <input type="email" id="email" name="email" style="width: 100%; padding: 12px; border: 1px solid #cbd5e0; border-radius: 4px; background-color: #edf2f7;" value="{{ old('email') }}" required>
                        @error('email')
                        <p style="color: #e53e3e; font-size: 12px; font-style: italic;">{{ $message }}</p>
                        @enderror
                    </div>

                    <div style="width: 100%; padding: 8px;">
                        <label for="password" style="display: block; color: #4a5568; font-size: 14px; font-weight: bold; margin-bottom: 8px;">Password</label>
                        <input type="password" id="password" name="password" style="width: 100%; padding: 12px; border: 1px solid #cbd5e0; border-radius: 4px; background-color: #edf2f7;" required>
                        @error('password')
                        <p style="color: #e53e3e; font-size: 12px; font-style: italic;">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div style="text-align: center; margin: 16px 0;">
                    <button type="submit" style="background-color: #ed8936; color: #ffffff; font-weight: bold; padding: 12px 24px; border-radius: 4px; border: none; cursor: pointer;">Login</button>
                </div>

                <div style="text-align: center;">
                    <a href="/register" style="color: #4a5568; text-decoration: none;">Don't have an account? Sign up</a>
                </div>
            </form>
        </div>
    </div>
@endsection
