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
                <h2 style="font-size: 24px; font-weight: bold; text-transform: uppercase; margin: 0;">About Us</h2>
                <p style="color: #4a5568;">Learn more about our company and values</p>
            </header>

            <section style="margin-bottom: 24px;">
                <h3 style="font-size: 20px; color: #333; font-weight: bold;">Our Mission</h3>
                <p style="color: #4a5568; line-height: 1.6;">
                    Our mission is to provide the best products and services to our customers. We believe in quality, innovation, and customer satisfaction. Our team works hard to bring you the best experience possible.
                </p>
            </section>

            <section style="margin-bottom: 24px;">
                <h3 style="font-size: 20px; color: #333; font-weight: bold;">Our Team</h3>
                <p style="color: #4a5568; line-height: 1.6;">
                    We are a group of passionate individuals dedicated to making a difference. Our team is comprised of experts from various fields, all working together to achieve our goals.
                </p>
            </section>

            <section style="margin-bottom: 24px;">
                <h3 style="font-size: 20px; color: #333; font-weight: bold;">Our Values</h3>
                <p style="color: #4a5568; line-height: 1.6;">
                    Integrity, commitment, and excellence are at the core of everything we do. We strive to be leaders in our industry and to make a positive impact on the communities we serve.
                </p>
            </section>

            <div style="text-align: center;">
                <a href="/contact" style="color: #ed8936; text-decoration: none; font-weight: bold;">Get in Touch</a>
            </div>
        </div>
    </div>
@endsection
