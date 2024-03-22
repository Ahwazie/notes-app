<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome!</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'figtree', sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f7f7f7;
            color: #333;
        }
        .welcome-container {
            text-align: center;
            max-width: 400px;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5em;
            font-family: 'Brush Script MT', cursive;
        }
        p {
            font-size: 1.25rem;
            margin-bottom: 1.5em;
        }
        a {
            display: inline-block;
            background-color: #0056b3;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .button {
        display: inline-block;
        padding: 10px 25px;
        font-size: 1rem;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #007bff; /* Bootstrap primary blue */
        border: none;
        border-radius: 15px;
        box-shadow: 0 6px #0056b3; /* Darker blue */
        transition: all 0.3s ease 0s;
         }

        .button:hover { 
            background-color: #0056b3; /* Even darker on hover */
            box-shadow: 0 4px #003d7a; /* Adjusted shadow color for hover */
        }

        .button:active {
            background-color: #0056b3;
            box-shadow: 0 2px #003d7a;
            transform: translateY(2px);
        }
        a:hover {
            background-color: #003580;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome to Notes App Website</h1>
        @auth
            <p>Welcome back, {{ auth()->user()->name }}!</p>
            <a href="{{ route('notes.index') }}" class="button">Go to Dashboard</a>
        @else
            <p>Login or Register below!</p>
            <a href="{{ route('login') }}" class="button">Login</a>
            <a href="{{ route('register') }}" class="button">Register</a>
        @endauth
    </div>
</body>
</html>

