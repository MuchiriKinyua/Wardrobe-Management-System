@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- Date & Clock Section -->
        <div class="row mb-4">
            <div class="col-md-12 text-center">
                <h4 id="current-date" class="fw-bold d-inline display-5"></h4>
                <span class="fw-bold mx-2"> </span>
                <h4 id="current-time" class="fw-bold d-inline display-5"></h4>
            </div>
        </div>

        <div class="row d-flex justify-content-start">


<style>
    .hover-card {
        transition: transform 0.3s ease-in-out;
    }
    .hover-card:hover {
        transform: scale(1.05);
    }
    .icon-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 60px;
    }
</style>

<!-- Total Clothes -->
<div class="col-md-3">
    <div class="card shadow-lg bg-primary text-white hover-card">
        <div class="icon-container text-center mt-3">
            <i class="fas fa-tshirt fa-2x"></i>
        </div>
        <div class="card-body text-center">
            <h2 class="display-4">{{ $totalItems }}</h2>
            <h4 class="lead">Clothes</h4>
        </div>
        <div class="border-top">
            <a href="{{ route('items.index') }}" class="text-decoration-none text-white p-3 d-block text-center">
                Manage Clothes <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

<!-- Total Occasions -->
<div class="col-md-3">
    <div class="card shadow-lg bg-success text-white hover-card">
        <div class="icon-container text-center mt-3">
            <i class="fas fa-calendar-alt fa-2x"></i>
        </div>
        <div class="card-body text-center">
            <h2 class="display-4">{{ $totalOccassions }}</h2>
            <h4 class="lead">Occasions</h4>
        </div>
        <div class="border-top">
            <a href="{{ route('occassions.index') }}" class="text-decoration-none text-white p-3 d-block text-center">
                Manage Occasions <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

<!-- Total Outfits -->
<div class="col-md-3">
    <div class="card shadow-lg bg-danger text-white hover-card">
        <div class="icon-container text-center mt-3">
            <i class="fas fa-tshirt fa-2x"></i>
        </div>
        <div class="card-body text-center">
            <h2 class="display-4">{{ $totalOutfits }}</h2>
            <h4 class="lead">Outfits</h4>
        </div>
        <div class="border-top">
            <a href="{{ route('outfits.index') }}" class="text-decoration-none text-white p-3 d-block text-center">
                Manage Outfits <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

<!-- Total Purchases -->
<div class="col-md-3">
    <div class="card shadow-lg bg-warning text-dark hover-card">
        <div class="icon-container text-center mt-3">
            <i class="fas fa-shopping-cart fa-2x"></i>
        </div>
        <div class="card-body text-center">
            <h2 class="display-4">{{ $totalPurchases }}</h2>
            <h4 class="lead">Purchases</h4>
        </div>
        <div class="border-top">
            <a href="{{ route('purchases.index') }}" class="text-decoration-none text-dark p-3 d-block text-center">
                Manage Purchases <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

<!-- Total Favorites -->
<div class="col-md-3">
    <div class="card shadow-lg bg-info text-white hover-card">
        <div class="icon-container text-center mt-3">
            <i class="fas fa-heart fa-2x"></i>
        </div>
        <div class="card-body text-center">
            <h2 class="display-4">{{ $totalFavorites }}</h2>
            <h4 class="lead">Favorites</h4>
        </div>
        <div class="border-top">
            <a href="{{ route('favorites.index') }}" class="text-decoration-none text-white p-3 d-block text-center">
                Manage Favorites <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

<!-- Total Laundries -->
<div class="col-md-3">
    <div class="card shadow-lg bg-secondary text-white hover-card">
        <div class="icon-container text-center mt-3">
            <i class="fas fa-soap fa-2x"></i>
        </div>
        <div class="card-body text-center">
            <h2 class="display-4">{{ $totalLaundries }}</h2>
            <h4 class="lead">Laundries</h4>
        </div>
        <div class="border-top">
            <a href="{{ route('laundries.index') }}" class="text-decoration-none text-white p-3 d-block text-center">
                Manage Laundries <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

<!-- Total Logs -->
<div class="col-md-3">
    <div class="card shadow-lg bg-dark text-white hover-card">
        <div class="icon-container text-center mt-3">
            <i class="fas fa-clipboard-list fa-2x"></i>
        </div>
        <div class="card-body text-center">
            <h2 class="display-4">{{ $totalLogs }}</h2>
            <h4 class="lead">Logs</h4>
        </div>
        <div class="border-top">
            <a href="{{ route('logs.index') }}" class="text-decoration-none text-white p-3 d-block text-center">
                Manage Logs <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

<!-- Total Users -->
<div class="col-md-3">
    <div class="card shadow-lg bg-light text-dark hover-card">
        <div class="icon-container text-center mt-3">
            <i class="fas fa-users fa-2x"></i>
        </div>
        <div class="card-body text-center">
            <h2 class="display-4">{{ $totalUsers }}</h2>
            <h4 class="lead">Users</h4>
        </div>
        <div class="border-top">
            <a href="{{ route('users.index') }}" class="text-decoration-none text-dark p-3 d-block text-center">
                Manage Users <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

            
        </div>
    </div>

    <!-- Real-Time Date & Time Script -->
    <script>
        function updateDateTime() {
            const now = new Date();
            const optionsDate = { day: '2-digit', month: '2-digit', year: 'numeric' };
            const optionsTime = { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false };

            document.getElementById('current-date').innerText = now.toLocaleDateString('en-GB', optionsDate);
            document.getElementById('current-time').innerText = now.toLocaleTimeString('en-GB', optionsTime);
        }

        setInterval(updateDateTime, 1000);
        updateDateTime();
    </script>
@endsection
