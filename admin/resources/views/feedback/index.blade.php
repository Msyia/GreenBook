@include('templates.sidebar')


<div class="content">
    <div class="container mt-5">
        <h1 class="mb-4">Feedback List</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Feedback</th>
                    <th>Tanggal Dibuat</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($feedbacks as $feedback)
                <tr>
                    <td>{{ $feedback->id }}</td>
                    <td>{{ $feedback->nama }}</td>
                    <td>{{ $feedback->email }}</td>
                    <td>{{ $feedback->feedback }}</td>
                    <td>{{ $feedback->created_at->format('d M Y, H:i') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada feedback.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


@include('templates.footer')