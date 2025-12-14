<!DOCTYPE html>
<html>

<head>
    <title>Reset Your Password - Rezon Security Bank</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #033d75;
            padding: 20px;
            text-align: center;
        }

        .header img {
            max-height: 50px;
        }

        .content {
            padding: 30px;
            background-color: #f9f9f9;
        }

        .button {
            display: inline-block;
            padding: 12px 30px;
            background-color: #033d75;
            color: white !important;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
        }

        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            font-size: 12px;
            color: #666;
        }

        .warning {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            padding: 15px;
            margin: 15px 0;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('dash/logo.png') }}" alt="Rezon Security Bank">
        </div>

        <div class="content">
            <h2>Password Reset Request</h2>

            <p>Hello,</p>

            <p>You are receiving this email because we received a password reset request for your account.</p>

            <div style="text-align: center;">
                <a href="{{ $resetUrl }}" class="button">Reset Password</a>
            </div>

            <p>This password reset link will expire in 60 minutes.</p>

            <div class="warning">
                <strong>Security Notice:</strong>
                <p>If you did not request a password reset, no further action is required. Please ignore this email.</p>
                <p>For your security, never share this link with anyone. Rezon Security Bank will never ask for your
                    password or secret code.</p>
            </div>

            <p>If you're having trouble clicking the "Reset Password" button, copy and paste the URL below into your web
                browser:</p>
            <p style="word-break: break-all; background-color: #eee; padding: 10px; border-radius: 3px;">
                {{ $resetUrl }}
            </p>
        </div>

        <div class="footer">
            <p>This email was sent to {{ $email }}.</p>
            <p>&copy; {{ date('Y') }} Rezon Security Bank. All Rights Reserved.</p>
            <p>This is an automated message, please do not reply to this email.</p>
            <p>Rezon Security Bank | Federal Insurance</p>
        </div>
    </div>
</body>

</html>