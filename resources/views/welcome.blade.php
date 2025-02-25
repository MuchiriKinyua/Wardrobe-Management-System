<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wardrobe Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f4f4f4;
        }
        .hero {
            background: url('wardrobe.jpg') no-repeat center center/cover;
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            font-size: 2rem;
        }
        .outfit-card {
            transition: transform 0.3s;
        }
        .outfit-card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Wardrobe Manager</a>
            <div>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-light">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-light">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>
    
    <header class="hero">
        <div>
            <h1>Plan Your Outfits Like a Pro</h1>
            <p>Effortlessly organize your weekly wardrobe</p>
        </div>
    </header>
    
    <section class="container mt-5">
        <div class="row">
            @php
                $outfits = [
                    'Monday' => 'monday.jpg',
                    'Tuesday' => 'tuesday.jpg',
                    'Wednesday' => 'wednesday.jpg',
                    'Thursday' => 'thursday.jpg',
                    'Friday' => 'friday.jpg',
                    'Saturday' => 'saturday.jpg',
                    'Sunday' => 'sunday.jpg'
                ];
            @endphp

            @foreach($outfits as $day => $image)
                <div class="col-md-4 mb-4">
                    <div class="card outfit-card">
                        <img height="400px" src="{{ asset('img/' . $image) }}" class="card-img-top" alt="{{ $day }} Outfit">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $day }} Outfit</h5>
                            <p class="card-text">Choose a stylish look for {{ $day }}.</p>
                            <a href="#" class="btn btn-primary">View Options</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    
    <footer class="bg-dark text-white text-center p-3 mt-5">
        <p>&copy; Made with <span style="color: red;">❤️</span> by Muchiri Kinyua</p>
    </footer>

    
</body>
</html>
