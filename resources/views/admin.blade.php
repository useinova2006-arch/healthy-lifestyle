<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Admin Panel</title>
</head>
<body>
    <header><h1>Admin Dashboard</h1></header>
    <nav><a href="/">Back to Site</a></nav>
    <div class="container">
        <h2>User Management</h2>
        <table border="1" style="width:100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background: #eee;">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach(\App\Models\User::all() as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        @if($user->id !== auth()->id())
                        <form action="{{ route('admin.delete.user', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: red; color: white; border: none; padding: 5px 10px; cursor: pointer;">Delete</button>
                        </form>
                        @else
                            <span style="color: gray;">(You)</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>