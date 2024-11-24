@include('templates.sidebar')


<div class="content">
    <div class="container">
        <h1>Daftar Users</h1>
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>ID User</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No HP</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id_user }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->no_hp }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('templates.footer')