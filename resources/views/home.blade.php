<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dilesin Academy</title>
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  <link rel="icon" type="image/png" href="{{ asset('images/logo-dilesin.png') }}">

</head>
<body>
  <header class="navbar">
    <div class="container">
    <a href="/" class="logo">
      <img src="{{ asset('images/logo-dilesin.png') }}" alt="Dilesin Academy Logo">
    </a>
      <nav>
        <ul>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#programs">Program</a></li>
          <li><a href="#mentors">Mentor</a></li>
          <li><a href="#testimoni">Testimoni</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="hero-content">
      <h2>Bingung Belajar IT?<br><span>Dilesin Aja di Dilesin Academy!</span></h2>
      <p>Belajar pemrograman dari mentor berpengalaman dengan sistem online & offline yang fleksibel.</p>
      <a href="#programs" class="btn-primary">Lihat Program</a>
    </div>
  </section>

  <section id="about" class="about section">
    <div class="container">
      <h2>Tentang Kami</h2>
      <p>Dilesin Academy adalah lembaga pelatihan pemrograman yang berfokus pada pembelajaran interaktif dan praktis. Kami menyediakan kelas online dan offline dengan mentor berpengalaman di bidang teknologi terkini.</p>
    </div>
  </section>

  <section id="programs" class="programs section">
    <div class="container">
      <h2>Program Unggulan</h2>
      <div class="program-grid">
        <div class="program-card">
          <h3>Offline Bootcamp Intensive</h3>
          <p>Belajar langsung bersama mentor dalam kelompok kecil (2-5 orang) dengan modul ajar dan project portofolio.</p>
        </div>
        <div class="program-card">
          <h3>Online Bootcamp Intensive</h3>
          <p>Belajar dari mana saja dengan sesi live, rekaman tiap pertemuan, dan sertifikat kelulusan.</p>
        </div>
        <div class="program-card">
          <h3>Short Class</h3>
          <p>Kelas singkat topik spesifik seperti C++, Python, atau Digital Marketing untuk upgrade skill cepat.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="mentors" class="mentors section">
    <div class="container">
      <h2>Mentor Kami</h2>
      <div class="mentor-grid">
        <div class="mentor-card">
          <img src="https://dilesin.com/app/img/program/offline-bootcamp(1).png" alt="Mentor 1">
          <h4>Anggayudha Okta Pratama</h4>
          <p>UI/UX Design</p>
        </div>
        <div class="mentor-card">
          <img src="https://dilesin.com/app/img/program/offline-bootcamp(1).png" alt="Mentor 2">
          <h4>M Rizky Sendiko</h4>
          <p>Kotlin & C# Developer</p>
        </div>
        <div class="mentor-card">
          <img src="https://dilesin.com/app/img/program/offline-bootcamp(1).png" alt="Mentor 3">
          <h4>Muhamad Ananta Fathur</h4>
          <p>Cloud Computing</p>
        </div>
      </div>
    </div>
  </section>

  <section id="testimoni" class="testimoni section">
    <div class="container">
      <h2>Apa Kata Mereka</h2>
      <div class="testi-slider">
        <div class="testi-item active">
          <p>“Mentornya seru dan materi mudah dipahami! Cocok untuk pemula.”</p>
          <h4>- Fajar, Peserta Bootcamp</h4>
        </div>
        <div class="testi-item">
          <p>“Belajar di Dilesin bikin ngerti logika pemrograman dengan cepat.”</p>
          <h4>- Nabila, Siswa Online Class</h4>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="contact section">
    <div class="container">
      <h2>Hubungi Kami</h2>
      <p>📍 JL. Kalibener, Purwanegara, Purwokerto Timur, Kab. Banyumas, Jawa Tengah</p>
      <a href="https://wa.me/6281234567890" class="btn-primary">Hubungi via WhatsApp</a>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 Dilesin Academy. All rights reserved.</p>
  </footer>

  <script src="{{ asset('js/script.js')}}"></script>
</body>
</html>