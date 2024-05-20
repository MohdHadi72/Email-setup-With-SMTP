<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Form Submission</title>
</head>
<body>
    <h2>New Form Submission</h2>
    <p><strong>Number:</strong> {{ $validatedData['number'] }}</p>
    <p><strong>Email:</strong> {{ $validatedData['email'] }}</p>
    <p><strong>Text:</strong> {{ $validatedData['text'] }}</p>
</body>
</html>
