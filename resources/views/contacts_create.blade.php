<!DOCTYPE html>
<html>
<head>
    <title>Add Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h1>Add New Contact</h1>

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            @error('name')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
            @error('email')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
        </div>

        <div class="mb-3">
            <label>Address</label>
            <textarea name="address" class="form-control">{{ old('address') }}</textarea>
        </div>

        <button class="btn btn-primary">Save</button>
        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back</a>
    </form>
</body>
</html>
