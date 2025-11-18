<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <title>Message Sent | </title>
    <style>
        body {
            background-color: #f4f7fc;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .email-container {
            max-width: 600px;
            background: #ffffff;
            margin: 0 auto;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background: #007bff;
            color: #ffffff;
            text-align: center;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        .email-body {
            padding: 20px;
            color: #333;
        }
        .email-body p {
            font-size: 16px;
            line-height: 1.6;
        }
        .email-footer {
            background: #f1f1f1;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            color: #666;
        }
        .email-footer a {
            color: #007bff;
            text-decoration: none;
        }
        .email-content {
            padding: 10px 0;
        }
        .email-content strong {
            color: #007bff;
        }
    </style>
</head>

<body>

    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <a href="https://orizer.in/">Orizer Erp </a>
            <br>Message Sent Successfully
        </div>

        <!-- Body -->
        <div class="email-body">
            <div class="email-content">
                <p><strong>Name:</strong> {{ $contact['name'] }}</p>
                <p><strong>Email:</strong> {{ $contact['email'] }}</p>
                <p><strong>Message:</strong><br> {{ $contact['message'] }}</p>
            </div>


        </div>
    </div>

</body>
</html>