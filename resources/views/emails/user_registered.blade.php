<!DOCTYPE html>
<html>

<head>
    <title>Welcome to The Emerging Economy</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 8px;
        }

        h1 {
            color: #ff6f0f;
        }

        p {
            color: #555;
        }

        .info {
            margin: 10px 0;
        }

        .info strong {
            display: block;
            margin: 5px 0;
        }

        .info i {
            color: #ff6f0f;
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Hello, {{ $user->first_name }}!</h1>

        <p>Thank you for registering for The Emerging Economy.</p>
        <p>We are excited to have you on board.</p>

        <div class="info">
            <strong>
                <i class="fas fa-calendar-alt"></i>
                Date: <italics>Wednesday, 23rd August 2024</italics>
            </strong>
            <strong>
                <i class="fas fa-clock"></i>
                Time: <italics>10:00 am - 2:00 pm</italics>
            </strong>
            <strong>
                <i class="fas fa-map-marker-alt"></i>
                Venue: <italics>Abuja, Nigeria</italics>
            </strong>
        </div>

        <p>Best regards,<br>The Emerging Economy Team</p>
    </div>
</body>

</html>
