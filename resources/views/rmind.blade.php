<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Confirmation</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #dadada; /* Match the design background */
        }

        .email-container {
            max-width: 600px;
            margin: 50px auto;
            background: url(../assets/img/back.png) no-repeat center center;
            background-size: cover;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.6);
            text-align: center;
            padding: 0;
        }

        .header {
            background: url('../assets/img/btn.png') no-repeat center center;
            background-size: cover;
            color: #fff;
            padding: 20px;
            font-size: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .card-section {
            padding: 20px;
        }

        .card-section h2 {
            font-size: 18px;
            color: #000;
            font-weight: 900;
        }

        .invitation-text {
            font-size: 16px;
            color: #000;
            margin: 10px 0;
            padding: 0rem 6.5rem 0 6.5rem;
           
        }

        @media (max-width: 575.98px) {
    .invitation-text {
            padding: 1rem ;
           
        }
       }

        .event-details {
            margin: 20px 0;
            font-size: 14px;
            color: #000;
        }

        .logos img {
            height: 50px;
            transition: transform 0.3s ease-in-out;
        }

        .logos img:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="container email-container">
        <!-- Header -->
        <div class="header">
            <h1>CONFIRMATION </h1>
        </div>

        <!-- Card Section -->
        <div class="card-section">
            <img src="../assets/img/card.png" alt="Card Image" class="img-fluid rounded mb-3">
            <h2>Objet : Email de confirmation :</h2>
            <p class="invitation-text mb-3 text-center"><strong>
                Nous vous remercions de votre inscription à l’évènement MasterCard, 
                qui se tiendra le 17 Décembre 2024 à 18h00 à l’hôtel Four Seasons, Casablanca.</strong>
            </p>
            
        </div>

        <!-- Logos -->
        <div class="logos d-flex justify-content-center gap-3 mt-3 mb-3">
            <img src="../assets/img/logo.png" alt="Logo Crédit Agricole" class="logo">
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

