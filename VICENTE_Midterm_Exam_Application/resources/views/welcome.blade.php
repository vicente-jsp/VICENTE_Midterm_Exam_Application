<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Body background with gradient */
        body {
            background: linear-gradient(135deg, #f5f7fa,rgb(146, 169, 206));
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Header styling */
        .header {
            background: linear-gradient(90deg, #ff7e5f, #feb47b);
            color: #fff;
            padding: 60px 0;
            text-align: center;
            margin-bottom: 40px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 25px 0px 25px 0px;
        }

        .header h1 {
            font-size: 3rem;
            font-weight: bold;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Restaurant card styling */
        .restaurant-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            margin-bottom: 20px;
            position: relative;
        }

        .restaurant-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .restaurant-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .restaurant-card .card-body {
            padding: 20px;
        }

        .restaurant-card h3 {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .restaurant-card p {
            color: #666;
            font-size: 1rem;
            margin-bottom: 10px;
        }

        .restaurant-card .items {
            color: #888;
            font-size: 0.9rem;
        }

        .restaurant-card .rating {
            color: #ffc107;
            font-size: 1.2rem;
            font-weight: bold;
        }

        /* Background pattern for cards */
        .restaurant-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://www.transparenttextures.com/patterns/45-degree-fabric-light.png');
            opacity: 0.1;
            pointer-events: none;
        }

        /* Container styling */
        .container {
            padding: 20px;
        }

        /* Footer styling */
        .footer {
            background: linear-gradient(90deg, #ff7e5f, #feb47b);
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 25px 0px 25px 0px;
        }

        .footer p {
            margin: 0;
            font-size: 1rem;
            
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Discover the Best Restaurants in Pampanga</h1>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($restaurants as $restaurant)
                <div class="col-md-4 mb-4">
                    <div class="restaurant-card">
                        <img src="{{ $restaurant['image'] }}" alt="{{ $restaurant['name'] }}">
                        <div class="card-body">
                            <h3>{{ $restaurant['name'] }}</h3>
                            <p>{{ $restaurant['description'] }}</p>
                            <div class="items">
                                <strong>Popular Items:</strong>
                                <ul>
                                    @foreach ($restaurant['items'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="rating">
                                Rating: {{ $restaurant['rating'] }} ⭐
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2025 Pampanga Restaurants. All rights reserved.</p>
    </div>
</body>
</html>