@extends('layouts.app')

@section('content')
  <h1>Todos</h1>
  <a href="{{ route('todos.create') }}" class="btn btn-primary mb-3">Create New</a>

  @if($todos->count())
    <table class="table table-bordered">
      <thead><tr><th>Title</th><th>Completed</th><th>Actions</th></tr></thead>
      <tbody>
        @foreach($todos as $todo)
          <tr>
            <td><a href="{{ route('todos.show', $todo) }}">{{ $todo->title }}</a></td>
            <td>{{ $todo->completed ? 'Yes' : 'No' }}</td>
            <td>
              <a class="btn btn-sm btn-secondary" href="{{ route('todos.edit', $todo) }}">Edit</a>

              <form action="{{ route('todos.destroy', $todo) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @else
    <p>No todos yet.</p>
  @endif
@endsection
