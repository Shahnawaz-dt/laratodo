<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h1>Edit Contact</h1>

    <form action="{{ route('contacts.update', $contact) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $contact->name) }}">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="{{ old('email', $contact->email) }}">
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone', $contact->phone) }}">
        </div>

        <div class="mb-3">
            <label>Address</label>
            <textarea name="address" class="form-control">{{ old('address', $contact->address) }}</textarea>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back</a>
    </form>
</body>
</html>
