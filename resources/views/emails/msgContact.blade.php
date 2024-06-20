<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <p>name: {{ $data['name'] }}</p>
    <p>email: {{ $data['email'] }}</p>
    <p>subject: {{ $data['subject'] }}</p>
    <p>Message: {{ $data['message'] }}</p>
</body>
</html>