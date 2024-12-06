<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <div class="text-center bg-white p-5 rounded shadow">
        <h1 class="mb-3">Merci </h1>
        <p class="mb-4">votre participation a été enregistrée avec succès</p>

        <!-- Display success or error message -->
        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @elseif($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <!-- Add Event to Google Calendar Button -->
        <a href="{{ route('google.addEvent') }}" class="btn btn-primary google-calendar-btn">
            Ajouter l'événement à Google Agenda
        </a>
    </div>
    
    
    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    
    <style>
        .google-calendar-btn {
            background: url('../assets/img/btn.png') no-repeat center center fixed;
            background-size: cover;
            box-shadow: 0 10px 25px rgba(39, 35, 34, 0.4); /* Subtle shadow effect */
            transform: scale(1.05); /* Slight scaling effect */
            color: #fff; /* White text color */
            text-decoration: none; /* Remove underline */
            padding: 10px 20px; /* Add padding for better clickability */
            border: none; /* Remove default borders */
            border-radius: 50px; /* Rounded corners */
            transition: transform 0.2s ease-in-out; /* Smooth hover effect */
            display: inline-block; /* Ensures proper alignment for link styling */
        }
    
        /* Optional: Hover effect */
        .google-calendar-btn:hover {
            transform: scale(1.1); /* Slightly enlarge on hover */
            box-shadow: 0 15px 30px rgba(39, 35, 34, 0.6); /* Stronger shadow on hover */
        }

        .rounded {
    border-radius: 50px; /* Apply 50px radius */
}

    </style>
    
    
    
</body>
</html>
