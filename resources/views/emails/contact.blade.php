<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
</head>
<body>
    <p><strong>From:</strong> {{ $title }} {{ $first_name }} {{ $last_name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Country:</strong> {{ $country }}</p>
    <p><strong>Subject:</strong> {{ $subject }}</p>
    <p>{{ $message_body }}</p>
</body>
</html>
