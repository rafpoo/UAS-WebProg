<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Form Pendaftaran</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>

    @include('global_css.css')
    @include('css_in_view.ppdb_css')

  </head>
  <body>

    @include('partials.navbar')

    <div class="container">
      <div class="form-container ">
        <form action="/submit-ppdb" method="POST">
          @csrf
          <h2>Form Pendaftaran</h2>

          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" required>

          <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
          <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" required>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
          </select>

          <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
          <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" placeholder="Kota/Kabupaten" required>

          <label for="nama_orang_tua" class="form-label">Nama Orang Tua</label>
          <input type="text" id="nama_orang_tua" name="nama_orang_tua" class="form-control" placeholder="Nama Ayah/Ibu" required>

          <label for="no_telepon" class="form-label">No Telepon Orang Tua</label>
          <div class="input-group">
              <input readonly="" style="width: 50px; margin-right: 10px;" type="text" value="+62"/>
              <input class="form-control" id="no_telepon" placeholder="Phone number" type="tel" name="no_telepon" required/>
          </div>
          
          <label for="alamat" class="form-label">Alamat</label>
          <textarea id="alamat" name="alamat" rows="2" class="form-control" placeholder="Alamat Lengkap" required></textarea>

          <Br />
          <button type="submit">DAFTAR</button>
        </form>
        <div class="col-md-6 illustration">
          <img src="{{ URL('images/illustration.jpg') }}" alt="Illustration 1" class="img-fluid mb-4">
          <img src="{{ URL('images/illustration2.jpg') }}" alt="Illustration 2" class="img-fluid mb-4">
          <img src="{{ URL('images/illustration3.jpg') }}" alt="Illustration 3" class="img-fluid mb-4">
        </div>
      </div>
      
    </div>

    
    @include('partials.footer')
    <script>
  document.addEventListener('DOMContentLoaded', function() {
  // Pilih form berdasarkan atribut action atau elemen form secara langsung
  const form = document.querySelector('form[action="/submit-ppdb"]');

  // Tambahkan event listener untuk event submit
  form.addEventListener('submit', function(event) {
    // Ambil nilai dari field input
    const nama = document.getElementById('nama').value.trim();
    const no_telepon = document.getElementById('no_telepon').value.trim();

    // Validasi sederhana untuk memastikan semua field terisi
    if (nama && no_telepon) {
      // Tampilkan alert dengan pesan yang disesuaikan
      alert(`Terima kasih telah mendaftar, ${nama}. Kami akan segera menghubungi Anda melalui nomor ${no_telepon}.`);
    } else {
      // Jika ada field kosong, cegah pengiriman form
      event.preventDefault();
      alert('Mohon lengkapi semua field pendaftaran sebelum mengirim form!');
    }
  });
});

</script>
  </body>
</html>
