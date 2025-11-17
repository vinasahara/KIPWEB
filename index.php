<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda KIP-KULIAH</title>


  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

 <script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          'primary-dark': '#5B21B6',   // ungu ke biru tua elegan
          'primary-mid':  '#6D28D9',   // ungu sedang natural
          'primary-light':'#8B5CF6',   // ungu muda lembut
          'accent-blue':  '#7C3AED',   // ungu kebiruan harmonis
          'soft-white':   '#F3F0FF'    // putih dengan sedikit ungu lembut
        }
      }
    }
  }
</script>


  <style>
    .main-content {
      transition: margin-left 0.3s ease;
      padding: 2.5rem;
    }
    .main-content.shifted {
      margin-left: 250px;
    }

    html {
      scroll-behavior: smooth;
    }

    .fade-in {
      animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>

<body class="bg-gradient-to-br from-primary-dark via-primary-mid to-accent-blue text-gray-100 relative overflow-x-hidden">

  <!-- Sidebar -->
  <?php include 'sidebar.php'; ?>

  <!-- Konten utama -->
  <div class="main-content space-y-20" id="main-content">

    <!-- HERO SECTION -->
    <section class="relative flex justify-center items-center py-8 fade-in">
      <div class="absolute top-[50%] left-1/2 transform -translate-x-1/2 w-[600px] h-[220px] bg-primary-light/40 blur-[130px] rounded-full"></div>

      <div class="bg-white/10 backdrop-blur-md rounded-3xl p-10 max-w-3xl text-center shadow-2xl border border-white/20 relative z-10">
        <h1 class="text-5xl font-extrabold mb-4 text-white drop-shadow-lg">
          Sistem Informasi <span class="text-indigo-200">KIP-Kuliah</span>
        </h1>
        <p class="text-lg text-indigo-100 mb-6 leading-relaxed">
          Politeknik Negeri Lampung menyediakan layanan digital terintegrasi untuk mengelola data penerima, 
          pendaftaran, dan pelaporan program KIP-Kuliah.
        </p>
        <a href="#tentang" 
           class="inline-block mt-4 px-8 py-3 bg-gradient-to-r from-primary-light to-accent-blue text-white font-semibold rounded-full hover:opacity-90 transition duration-300">
          Jelajahi Lebih Lanjut
        </a>
      </div>
    </section>

    <!-- TENTANG KIP-KULIAH -->
    <section id="tentang" class="pt-16 pb-20 bg-gradient-to-br from-soft-white via-purple-50 to-indigo-50 rounded-3xl shadow-2xl fade-in"> 
      <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold text-gray-900 mb-4">Tentang KIP-Kuliah</h2>
          <!-- Tambahan Cindy -->
          <p>Ini tambahan baris baru dari Cindy</p>

          <p class="text-lg text-gray-600">
            Membuka akses pendidikan tinggi yang lebih merata bagi seluruh generasi muda Indonesia.
          </p>
          <div class="w-32 h-1.5 bg-gradient-to-r from-primary-light via-accent-blue to-primary-light mx-auto mt-4 rounded-full shadow-md"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-start">
          <!-- Box kiri -->
          <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition duration-300 border border-purple-100">
            <h3 class="text-2xl font-bold text-primary-mid mb-6">Apa itu KIP-Kuliah?</h3>
            <!-- Tambahan Vina -->
            <p>Ini tambahan baris baru dari Vina</p>
            <p class="text-gray-700 mb-6 leading-relaxed text-justify">
              KIP-K merupakan bentuk dukungan biaya pendidikan berupa bantuan tunai yang ditujukan bagi siswa yang berkeinginan melanjutkan studi ke perguruan tinggi.
              Program ini digagas pemerintah untuk membuka akses pendidikan tinggi yang lebih luas bagi masyarakat kurang mampu,
              agar generasi muda Indonesia dapat kuliah tanpa terbebani masalah biaya.
            </p>
            <div class="bg-gradient-to-r from-purple-50 to-indigo-50 p-6 rounded-xl border border-purple-100">
              <h4 class="font-semibold text-primary-mid mb-3">Manfaat KIP-Kuliah:</h4>
              <!-- Tambahan  Putrianggraini -->
            <p>Ini tambahan baris baru dari Putrianggraini</p>
              <ul class="space-y-2 text-gray-700">
                <li class="flex items-center"><span class="text-green-500 mr-2">✔</span> Pembebasan biaya pendidikan</li>
                <li class="flex items-center"><span class="text-green-500 mr-2">✔</span> Bantuan biaya hidup</li>
              </ul>
            </div>
          </div>

          <!-- Box kanan -->
          <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition duration-300 border border-indigo-100">
            <h3 class="text-2xl font-bold text-accent-blue mb-6">Sejarah KIP-Kuliah</h3>
            <div class="bg-gradient-to-r from-indigo-50 to-purple-50 border-l-4 border-primary-light p-5 rounded-md shadow-sm">
              <p class="text-gray-700 text-justify leading-relaxed">
                Program Kartu Indonesia Pintar (KIP) pertama kali diperkenalkan pada tahun 2007.
                Sejak saat itu, program ini terus berkembang dan melahirkan KIP Kuliah (KIP-K)
                agar mahasiswa dari keluarga prasejahtera dapat menempuh pendidikan tinggi tanpa hambatan biaya.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Script sidebar -->
  <script>
    const toggleBtn = document.getElementById('toggle-btn');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    const mainContent = document.getElementById('main-content');

    toggleBtn.addEventListener('click', function() {
      sidebar.classList.toggle('active');
      overlay.classList.toggle('active');
      mainContent.classList.toggle('shifted');
    });

    overlay.addEventListener('click', function() {
      sidebar.classList.remove('active');
      overlay.classList.remove('active');
      mainContent.classList.remove('shifted');
    });
  </script>

  <!-- BERITA & KEGIATAN -->
<?php
include 'koneksi.php';
$berita = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id DESC LIMIT 6");
?>

<!-- BERITA & KEGIATAN -->
<section id="berita" class="bg-gradient-to-br from-primary-mid to-accent-blue py-20 px-6 text-white">
  <h3 class="text-3xl font-bold text-center mb-12">Berita & Kegiatan KIP-Kuliah</h3>

  <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
    <?php while ($b = mysqli_fetch_assoc($berita)) : ?>
      <div class="bg-white/10 rounded-2xl shadow-xl p-6 hover:scale-105 hover:bg-white/20 transition duration-300">
        <?php if (!empty($b['gambar'])): ?>
          <img src="uploads/berita/<?= htmlspecialchars($b['gambar']) ?>" 
               alt="<?= htmlspecialchars($b['judul']) ?>" 
               class="rounded-xl mb-4 w-full h-48 object-cover shadow-lg">
        <?php endif; ?>

        <h4 class="font-semibold text-xl mb-2 text-white">
          <?= htmlspecialchars($b['judul']) ?>
        </h4>

        <p class="text-indigo-100 text-sm mb-4 text-justify">
          <?= substr(strip_tags($b['isi']), 0, 100) ?>...
        </p>

        <a href="berita_detail.php?id=<?= $b['id'] ?>" 
           class="inline-block bg-white/20 px-4 py-2 rounded-lg font-medium hover:bg-white/30 transition">
          Baca Selengkapnya →
        </a>
      </div>
    <?php endwhile; ?>
  </div>
</section>

<!-- FOOTER -->
<!-- ===================== -->
<footer class="bg-gradient-to-br from-primary-dark via-primary-mid to-accent-blue text-gray-100 pt-14 pb-10">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-12">

    <!-- Kolom 1: Profil Kampus -->
    <div class="space-y-4">
      <div class="flex items-center">
        <img src="/KIPWEB/assets/logo-polinela.png" alt="Logo Polinela" class="w-14 mr-3 drop-shadow-lg">
        <div>
          <h4 class="font-bold text-lg text-white leading-tight">POLITEKNIK NEGERI LAMPUNG</h4>
          <p class="text-sm italic text-indigo-200">Kampus Unggul, Profesional, dan Mandiri</p>
        </div>
      </div>

      <p class="text-sm text-indigo-100 leading-relaxed">
        Jl. Soekarno Hatta No.10, Rajabasa Raya, Kec. Rajabasa,<br>
        Kota Bandar Lampung, Lampung 35144
      </p>

      <div class="space-y-1 text-sm">
        <p><span class="font-semibold">Telp:</span> (0721) 703995</p>
        <p><span class="font-semibold">Email:</span> humas@polinela.ac.id</p>
        <p><span class="font-semibold">WA:</span> 0812 7893 3860</p>
      </div>
    </div>

    <!-- Kolom 2: Laman Terkait -->
    <div class="space-y-4">
      <h4 class="font-semibold text-white text-lg">LAMAN TERKAIT</h4>
      <ul class="space-y-2 text-sm text-indigo-100">
        <li><a href="https://kip-kuliah.kemdikbud.go.id" target="_blank" class="hover:text-white hover:underline transition">Pendaftaran KIP-Kuliah</a></li>
        <li><a href="https://www.polinela.ac.id" target="_blank" class="hover:text-white hover:underline transition">Website Polinela</a></li>
        <li><a href="https://pddikti.kemdikbud.go.id" target="_blank" class="hover:text-white hover:underline transition">PDDIKTI</a></li>
        <li><a href="https://dikti.kemdikbud.go.id" target="_blank" class="hover:text-white hover:underline transition">Kemdikbudristek</a></li>
      </ul>
    </div>

  <!-- Kolom 3: Sosial Media Polinela -->
<div class="space-y-4">
  <h4 class="font-semibold text-white text-lg">SOSIAL MEDIA POLINELA</h4>
  <ul class="space-y-2 text-sm text-indigo-100">

    <!-- Instagram Polinela -->
    <li>
      <a href="https://www.instagram.com/politeknik_negeri_lampung/" 
         target="_blank" 
         class="hover:text-white hover:underline transition">
        Instagram: <span class="text-white">@politeknik_negeri_lampung</span>
      </a>
    </li>

    <!-- Facebook Polinela (BENAR) -->
    <li>
      <a href="https://www.facebook.com/politekniknegerilampung/"
         target="_blank"
         class="hover:text-white hover:underline transition">
        Facebook: <span class="text-white">Politeknik Negeri Lampung</span>
      </a>
    </li>

    <!-- YouTube Polinela -->
    <li>
      <a href="https://www.youtube.com/@politeknik_negeri_lampung"
         target="_blank"
         class="hover:text-white hover:underline transition">
        YouTube: <span class="text-white">Politeknik Negeri Lampung</span>
      </a>
    </li>

    <!-- Humas Polinela -->
    <li>
      <a href="https://www.facebook.com/humaspolinela/"
         target="_blank"
         class="hover:text-white hover:underline transition">
        Humas Polinela: <span class="text-white">facebook.com/humaspolinela</span>
      </a>
    </li>

  </ul>
</div>




    <!-- Kolom 4: Tentang Web -->
    <div class="space-y-4">
      <h4 class="font-semibold text-white text-lg">TENTANG WEB</h4>
      <p class="text-sm text-indigo-100 leading-relaxed">
        Portal resmi informasi KIP-Kuliah yang menyediakan berita, pengumuman,
        serta panduan lengkap bagi mahasiswa penerima KIP-K. Dikembangkan untuk
        memberikan kemudahan akses informasi secara cepat dan terpercaya.
      </p>
    </div>

  </div>

  <!-- Garis bawah + copyright -->
  <div class="border-t border-white/20 mt-12 pt-6 text-center text-indigo-200 text-sm">
    © <?= date('Y'); ?> Sistem Informasi KIP-Kuliah POLINELA. Semua hak cipta dilindungi.
  </div>
</footer>


</body>
</html>