<!DOCTYPE html>
<html>
<head>
    <title>View Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h1>{{ $contact->name }}</h1>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Phone:</strong> {{ $contact->phone }}</p>
    <p><strong>Address:</strong> {{ $contact->address }}</p>

    <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back</a>
</body>
</html>
