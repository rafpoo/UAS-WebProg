<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Data Guru - TK Islam Kinasih</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    </head>
    <body>
    @include('partials.navbar') 

    <div class="container my-5">
        <h2>Daftar Aktivitas</h2>
        <p>"Kami mengadakan berbagai aktivitas untuk meningkatkan keterampilan dan pengetahuan siswa." </p>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Aktivitas</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody>
                @foreach($activities as $activity)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $activity->name }}</td>
                        <td>{{ $activity->description }}</td>
                        <td>{{ \Carbon\Carbon::parse($activity->date)->format('d-m-Y') }}</td>
                        <td>{{ $activity->time }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('partials.footer') 

    </body>
</html>
