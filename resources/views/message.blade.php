<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Notification</title>
</head>
<body>
    <form action="{{ route('message.store') }}" method="POST">
        @csrf
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <button type="submit">Send Notification</button>
    </form>
</body>
</html>
