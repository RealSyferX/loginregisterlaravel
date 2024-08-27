@extends('layout')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgba(0, 0, 0, 0.29);
            margin: 0;
            padding: 0;
        }

        .hero-section {
            background-image: url('./images/hero-bg.jpeg');
            background-size: cover;
            background-position: center;
            padding: 100px 20px;
            text-align: center;
            color: #fff;
        }

        .hero-section h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 20px;
            margin-bottom: 40px;
        }

        .hero-section a {
            background-color: #007bff;
            color: #fff;
            padding: 14px 28px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 18px;
        }

        .features-section {
            padding: 60px 20px;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            background-color: rgba(0, 0, 0, 0);
        }

        .feature-box {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 8px;
            width: 30%;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 10px 0;
        }

        .feature-box h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #007bff;
        }

        .feature-box p {
            font-size: 16px;
            color: #6c757d;
        }

        @media (max-width: 768px) {
            .feature-box {
                width: 100%;
            }

            .hero-section h1 {
                font-size: 36px;
            }

            .hero-section p {
                font-size: 18px;
            }

            .hero-section a {
                font-size: 16px;
                padding: 12px 24px;
            }
        }
    </style>

    <div class="hero-section">
        <h1 style="color: #bf12ba">Welcome to JointTable</h1>
        <p style="color: #007bff">Your one-stop solution for all awesome ecstasy effect.</p>
        <a href="/register">Let's Get Crac'kin</a>
    </div><br>
    <div style="text-align: center; !important;" ><h3>Why Us?</h3></div><br>
    <div class="features-section">
        <div class="feature-box">
            <h3>Reason 1</h3>
            <p>Discover amazing things with our first feature. It's designed to help you become failure forever and ever!!!! LOL.</p>
        </div>

        <div class="feature-box">
            <h3>Reason 2</h3>
            <p>Our second feature is just as awesome. Learn more about Good Music, Not some trash song emo song, Stay Hype & Drink Water.</p>
        </div>

        <div class="feature-box">
            <h3>Reason 3</h3>
            <p>And don't forget here we only provide the best quality product, if the seller unable to satisfied you we will send our <p style="color: red; ">HITMAN</p> to their address.</p>
        </div>
    </div>
@endsection
