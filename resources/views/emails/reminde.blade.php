<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Reminder</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .email-header h1 {
            font-size: 24px;
            color: #333333;
            margin: 0;
        }
        .email-body p {
            font-size: 16px;
            line-height: 1.5;
            color: #555555;
            margin-bottom: 15px;
        }
        .btn-primary {
            display: block;
            width: fit-content;
            margin: 20px auto 0;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .email-footer {
            text-align: center;
            font-size: 12px;
            color: #999999;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>Event Reminder</h1>
        </div>
        <div class="email-body">
            <p>Dear {{ $participant->first_name }} {{ $participant->last_name }},</p>
            <p>This is a friendly reminder about the upcoming event. We look forward to seeing you there!</p>
            <p>If you have any questions, feel free to contact us.</p>
        </div>
        <a href="{{ $event_url }}" class="btn-primary">View Event Details</a>
        <div class="email-footer">
            <p>Best regards,<br>Your Event Team</p>
        </div>
    </div>
</body>
</html>

