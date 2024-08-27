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
                <li><a href="/login" style="color: #ffffff; text-decoration: none;">Login</a></li>
            </ul>
        </nav>
    </div>

    <div style="max-width: 800px; margin: 0 auto; padding: 16px;">
        <div style="background-color: #ffffff; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 24px;">
            <header style="text-align: center; margin-bottom: 16px;">
                <h2 style="font-size: 24px; font-weight: bold; text-transform: uppercase; margin: 0;">Contact Us</h2>
                <p style="color: #4a5568;">We would love to hear from you!</p>
            </header>

            <form method="POST" action="/contact/submit">
                @csrf

                <div style="display: flex; flex-wrap: wrap; margin: -8px;">
                    <div style="width: 100%; padding: 8px;">
                        <label for="name" style="display: block; color: #4a5568; font-size: 14px; font-weight: bold; margin-bottom: 8px;">Name</label>
                        <input type="text" id="name" name="name" style="width: 100%; padding: 12px; border: 1px solid #cbd5e0; border-radius: 4px; background-color: #edf2f7;" value="{{ old('name') }}" required>
                        @error('name')
                        <p style="color: #e53e3e; font-size: 12px; font-style: italic;">{{ $message }}</p>
                        @enderror
                    </div>

                    <div style="width: 100%; padding: 8px;">
                        <label for="email" style="display: block; color: #4a5568; font-size: 14px; font-weight: bold; margin-bottom: 8px;">Email</label>
                        <input type="email" id="email" name="email" style="width: 100%; padding: 12px; border: 1px solid #cbd5e0; border-radius: 4px; background-color: #edf2f7;" value="{{ old('email') }}" required>
                        @error('email')
                        <p style="color: #e53e3e; font-size: 12px; font-style: italic;">{{ $message }}</p>
                        @enderror
                    </div>

                    <div style="width: 100%; padding: 8px;">
                        <label for="message" style="display: block; color: #4a5568; font-size: 14px; font-weight: bold; margin-bottom: 8px;">Message</label>
                        <textarea id="message" name="message" rows="4" style="width: 100%; padding: 12px; border: 1px solid #cbd5e0; border-radius: 4px; background-color: #edf2f7;" required>{{ old('message') }}</textarea>
                        @error('message')
                        <p style="color: #e53e3e; font-size: 12px; font-style: italic;">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div style="text-align: center; margin: 16px 0;">
                    <button type="submit" style="background-color: #ed8936; color: #ffffff; font-weight: bold; padding: 12px 24px; border-radius: 4px; border: none; cursor: pointer;">Send Message</button>
                </div>
            </form>
        </div>
    </div>
@endsection
