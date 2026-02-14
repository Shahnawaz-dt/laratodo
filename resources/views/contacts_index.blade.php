<!DOCTYPE html>
<html>
<head>
    <title>Contacts List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h1>Contacts</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">Add New Contact</a>

    @if($contacts->count())
        <table class="table table-bordered">
            <thead><tr><th>Name</th><th>Email</th><th>Phone</th><th>Actions</th></tr></thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td><a href="{{ route('contacts.show', $contact) }}">{{ $contact->name }}</a></td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>
                            <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-sm btn-secondary">Edit</a>

                            <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this contact?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No contacts found.</p>
    @endif
</body>
</html>
