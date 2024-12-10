<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TK Islam Kinasih</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  @include('global_css.css')
  @include('css_in_view.aboutUs_css')
  
</head>

<body>

  @include('partials.navbar')

  <div class="container welcome-section">
    <h1>Tentang Kami</h1>
    <p>Page ini berisi informasi tentang TK Islam Kinasih</p>
  </div>
  <div class="container welcome-section" style="padding: 50px;">
    <h2>Kenapa pilih TK Islam Kinasih ?</h2>
    <img class="img-TK" src="{{ URL('images/illustration5.png') }}" class="img-fluid rounded float-end" style="padding: 50px;" />
    <p style="font-size: large;">
      TK Islam Kinasih merupakan lembaga Pendidikan Anak Usia Dini
      (PAUD) yang mencakup Taman Penitipan Anak (TPA), Kelompok
      Bermain (KB), dan Taman Kanak-Kanak (TK). TK ini berada di bawah
      naungan Yayasan Islam Kinasih.
      Lembaga ini berdedikasi untuk memberikan pendidikan berkualitas
      bagi anak-anak usia dini, dengan memadukan pendekatan Islami dan
      metode pembelajaran kreatif. Melalui tenaga pendidik yang
      profesional dan penyayang, TK Islam Kinasih bertujuan untuk
      membangun karakter, keterampilan, dan pengetahuan anak-anak
      sebagai bekal mereka dalam menghadapi jenjang pendidikan berikutnya.
      TK Islam Kinasih juga menyediakan berbagai fasilitas penunjang,
      seperti ruang kelas yang nyaman, area bermain yang aman, dan
      kegiatan pembelajaran tematik yang menyenangkan. Dengan
      pendekatan holistik, lembaga ini berupaya mengembangkan
      potensi anak-anak secara menyeluruh, baik dari sisi kognitif, emosional,
      maupun spiritual.
    </p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </div>

  @include('partials.footer')
</body>

</html>
