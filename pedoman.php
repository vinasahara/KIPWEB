<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pedoman KIP-Kuliah 2025</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #f9f9ff;
      overflow-x: hidden;
    }

    /* Header */
    .header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 65px;
      background: linear-gradient(90deg, #4a148c, #6a1b9a);
      display: flex;
      align-items: center;
      justify-content: space-between;
      color: white;
      padding: 0 20px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.2);
      z-index: 1001;
    }
    .header .logo {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .header img {
      width: 38px;
      height: 38px;
      border-radius: 50%;
    }
    .header h1 {
      font-size: 18px;
      margin: 0;
      font-weight: 600;
    }

    /* Sidebar */
    .sidebar {
      position: fixed;
      top: 0;
      left: -260px;
      width: 250px;
      height: 100vh;
      background-color: #2b0066;
      color: white;
      padding-top: 70px;
      transition: all 0.3s ease;
      z-index: 1002;
    }
    .sidebar.active {
      left: 0;
    }
    .sidebar ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .sidebar ul li {
      padding: 15px 25px;
      transition: background 0.3s;
      display: flex;
      align-items: center;
    }
    .sidebar ul li a {
      color: white;
      text-decoration: none;
      width: 100%;
      display: block;
    }
    .sidebar ul li:hover {
      background: rgba(255,255,255,0.2);
    }

    /* Main content */
    .main-content {
      transition: all 0.3s ease;
      margin-top: 90px;
      padding: 20px;
      display: flex;
      justify-content: center;
    }
    .main-content.shifted {
      margin-left: 125px;
      transition: margin-left 0.3s ease;
    }
  </style>
</head>
<body>

  <!-- HEADER -->
  <div class="header">
    <div class="logo">
      <i class="fas fa-bars menu-toggle" id="menu-btn" style="cursor:pointer;"></i>
      <img src="/KIPWEB/assets/logo-polinela.png" alt="Logo Polinela" class="w-14 mr-3 drop-shadow-lg">
      <h1>Sistem Informasi KIP-KULIAH POLINELA</h1>
    </div>
  </div>

  <!-- SIDEBAR -->
  <?php include 'sidebar.php'; ?>

  <!-- MAIN CONTENT -->
  <div class="main-content" id="main-content">
    <div class="w-full max-w-6xl">

      <!-- Bagian Judul -->
      <section class="text-center py-12 text-white bg-purple-900 rounded-2xl shadow-md mb-10">
        <h1 class="text-4xl font-extrabold">Pedoman KIP-Kuliah 2025</h1>
        <p class="mt-2 text-lg">Pahami alur pendaftaran, syarat, hak, kewajiban, serta manfaat dari program</p>
      </section>

      <!-- Pedoman 2025 Section -->
      <section id="pedoman" class="py-20 bg-gradient-to-br from-gray-50 to-purple-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

          <!-- Grid Cards -->
          <div class="grid md:grid-cols-2 gap-8">
            <!-- Pendahuluan -->
            <div class="bg-gradient-to-br from-purple-100 to-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition">
              <div class="flex items-center mb-4">
                <div class="bg-purple-custom text-white w-12 h-12 rounded-full flex items-center justify-center mr-3">🎯</div>
                <h3 class="text-2xl font-bold text-purple-custom">Tujuan Program</h3>
              </div>
              <p class="text-gray-700 leading-relaxed">
                Membuka akses pendidikan tinggi untuk siswa kurang mampu agar tetap dapat kuliah dengan dukungan biaya penuh & bantuan hidup.
              </p>
            </div>

            <!-- Syarat -->
            <div class="bg-gradient-to-br from-blue-100 to-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition">
              <div class="flex items-center mb-4">
                <div class="bg-blue-custom text-white w-12 h-12 rounded-full flex items-center justify-center mr-3">✅</div>
                <h3 class="text-2xl font-bold text-blue-custom">Persyaratan</h3>
              </div>
              <ul class="list-disc pl-6 text-gray-700 space-y-2">
                <li>Lulusan SMA/SMK/MA maksimal 2 tahun terakhir.</li>
                <li>Lulus seleksi SNBP, SNBT, atau Mandiri.</li>
                <li>Masuk DTKS atau memiliki KIP/PKH/KKS.</li>
              </ul>
            </div>
          </div>

          <!-- Jadwal & Tahapan -->
          <div class="mt-16 max-w-3xl mx-auto">
            <h3 class="text-3xl font-bold text-center text-purple-700 mb-10">Jadwal & Tahapan 2025</h3>
            <div class="space-y-6">
              <div class="flex items-center gap-4 p-5 bg-gradient-to-r from-purple-100 to-purple-50 rounded-xl shadow hover:shadow-lg transition">
                <div class="bg-purple-600 text-white w-10 h-10 flex items-center justify-center rounded-full font-bold">1</div>
                <div>
                  <h4 class="text-lg font-bold text-purple-700">Pendaftaran Akun</h4>
                  <p class="text-gray-600">4 Februari – 31 Oktober 2025</p>
                  <span class="text-xs text-gray-500">Langkah awal untuk membuat akun peserta seleksi.</span>
                </div>
              </div>
              <div class="flex items-center gap-4 p-5 bg-gradient-to-r from-blue-100 to-blue-50 rounded-xl shadow hover:shadow-lg transition">
                <div class="bg-blue-600 text-white w-10 h-10 flex items-center justify-center rounded-full font-bold">2</div>
                <div>
                  <h4 class="text-lg font-bold text-blue-700">Seleksi SNBP</h4>
                  <p class="text-gray-600">4 – 18 Februari 2025</p>
                  <span class="text-xs text-gray-500">Seleksi Nasional Berdasarkan Prestasi.</span>
                </div>
              </div>
              <div class="flex items-center gap-4 p-5 bg-gradient-to-r from-purple-100 to-purple-50 rounded-xl shadow hover:shadow-lg transition">
                <div class="bg-purple-500 text-white w-10 h-10 flex items-center justify-center rounded-full font-bold">3</div>
                <div>
                  <h4 class="text-lg font-bold text-purple-600">Seleksi SNBT</h4>
                  <p class="text-gray-600">11 – 27 Maret 2025</p>
                  <span class="text-xs text-gray-500">Seleksi Nasional Berbasis Tes.</span>
                </div>
              </div>
              <div class="flex items-center gap-4 p-5 bg-gradient-to-r from-indigo-100 to-indigo-50 rounded-xl shadow hover:shadow-lg transition">
                <div class="bg-indigo-600 text-white w-10 h-10 flex items-center justify-center rounded-full font-bold">4</div>
                <div>
                  <h4 class="text-lg font-bold text-indigo-600">Mandiri PTN</h4>
                  <p class="text-gray-600">4 Juni – 30 September 2025</p>
                  <span class="text-xs text-gray-500">Seleksi mandiri di Perguruan Tinggi Negeri.</span>
                </div>
              </div>
              <div class="flex items-center gap-4 p-5 bg-gradient-to-r from-green-100 to-green-50 rounded-xl shadow hover:shadow-lg transition">
                <div class="bg-green-600 text-white w-10 h-10 flex items-center justify-center rounded-full font-bold">5</div>
                <div>
                  <h4 class="text-lg font-bold text-green-600">Mandiri PTS</h4>
                  <p class="text-gray-600">4 Juni – 31 Oktober 2025</p>
                  <span class="text-xs text-gray-500">Seleksi mandiri di Perguruan Tinggi Swasta.</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Hak & Kewajiban -->
          <div class="grid md:grid-cols-2 gap-8 mt-16">
            <div class="bg-gradient-to-br from-green-100 to-white rounded-xl shadow-lg p-8 hover:scale-[1.02] transition">
              <h3 class="text-xl font-bold text-green-700 mb-3">🟢 Hak Penerima</h3>
              <ul class="space-y-2 text-gray-700">
                <li>✔ Bebas biaya kuliah (UKT/SPP).</li>
                <li>✔ Bantuan biaya hidup tiap bulan.</li>
              </ul>
            </div>
            <div class="bg-gradient-to-br from-red-100 to-white rounded-xl shadow-lg p-8 hover:scale-[1.02] transition">
              <h3 class="text-xl font-bold text-red-700 mb-3">🔴 Kewajiban</h3>
              <ul class="space-y-2 text-gray-700">
                <li>❗ Menjaga prestasi akademik.</li>
                <li>❗ Tidak melanggar aturan & hukum.</li>
              </ul>
            </div>
          </div>

          <!-- Komponen Pembiayaan -->
          <div class="mt-16 bg-gradient-to-br from-purple-50 to-blue-50 p-10 rounded-2xl shadow-lg">
            <h3 class="text-3xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600 mb-10">Komponen Pembiayaan</h3>
            <div class="grid md:grid-cols-2 gap-8">
              <div class="group bg-white shadow-md rounded-2xl p-8 text-center transition transform hover:-translate-y-2 hover:shadow-2xl duration-300">
                <div class="flex justify-center mb-4">
                  <div class="bg-purple-100 p-4 rounded-full group-hover:bg-purple-200 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422A12.083 12.083 0 016 8.1m6 5.9v6" />
                    </svg>
                  </div>
                </div>
                <h4 class="text-xl font-semibold text-purple-600 mb-3">Biaya Pendidikan</h4>
                <p class="text-gray-600 text-base leading-relaxed">Ditanggung penuh oleh pemerintah sesuai UKT/SPP.</p>
              </div>

              <div class="group bg-white shadow-md rounded-2xl p-8 text-center transition transform hover:-translate-y-2 hover:shadow-2xl duration-300">
                <div class="flex justify-center mb-4">
                  <div class="bg-blue-100 p-4 rounded-full group-hover:bg-blue-200 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-3.866 0-7 1.79-7 4v2c0 2.21 3.134 4 7 4s7-1.79 7-4v-2c0-2.21-3.134-4-7-4z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12v4m0-4c3.866 0 7-1.79 7-4s-3.134-4-7-4-7 1.79-7 4 3.134 4 7 4z" />
                    </svg>
                  </div>
                </div>
                <h4 class="text-xl font-semibold text-blue-600 mb-3">Biaya Hidup</h4>
                <p class="text-gray-600 text-base leading-relaxed">Bantuan bulanan berdasarkan klaster wilayah.</p>
              </div>
            </div>
          </div>

          <!-- Tabel Pedoman -->
          <div class="bg-white rounded-2xl shadow-lg p-8 mt-16">
            <div class="flex items-center justify-between mb-4 flex-wrap gap-2">
              <div>
                <label class="text-gray-700 font-medium">Tampilkan</label>
                <select class="border border-gray-300 rounded-lg px-2 py-1 ml-2 focus:ring-2 focus:ring-purple-600">
                  <option>10</option>
                  <option>25</option>
                  <option>50</option>
                </select>
                <span class="ml-2 text-gray-600">entri</span>
              </div>
              <div>
                <label class="text-gray-700 font-medium mr-2">Cari:</label>
                <input type="text" id="search" placeholder="Ketik nama panduan..." class="border border-gray-300 rounded-lg px-3 py-1 focus:ring-2 focus:ring-purple-600">
              </div>
            </div>

            <div class="overflow-x-auto">
              <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
                <thead class="bg-purple-700 text-white">
                  <tr>
                    <th class="py-3 px-4 text-left w-12">#</th>
                    <th class="py-3 px-4 text-left">Nama File</th>
                    <th class="py-3 px-4 text-center w-48">Aksi</th>
                  </tr>
                </thead>
                <tbody id="pedomanTable" class="divide-y divide-gray-200">
                  <?php
              $result = mysqli_query($koneksi, "SELECT * FROM pedoman ORDER BY id DESC");
              $no = 1;

              if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                      $file_path = $row['file_path']; // path relatif untuk browser
                $server_path = __DIR__ . '/' . $file_path;

                $file_exist = file_exists($server_path);

                      $btn_class = $file_exist ? "bg-purple-600 hover:bg-purple-700" : "bg-gray-400 cursor-not-allowed";
                      $btn_text = $file_exist ? "📥 Unduh" : "❌ File Hilang";

                      echo "
                      <tr class='hover:bg-purple-50 transition'>
                        <td class='py-3 px-4 text-center font-semibold text-gray-700'>{$no}</td>
                        <td class='py-3 px-4 text-gray-800'>{$row['nama_file']}</td>
                        <td class='py-3 px-4 text-center'>
                          <a href='" . ($file_exist ? $row['file_path'] : "#") . "'
                             " . ($file_exist ? "download" : "") . "
                             class='$btn_class text-white font-medium px-4 py-2 rounded-lg shadow-md transition'>
                             $btn_text
                          </a>
                        </td>
                      </tr>";
                      $no++;
                  }
              } else {
                  echo "<tr><td colspan='3' class='text-center py-6 text-gray-500 italic'>
                            Belum ada pedoman yang diunggah.
                        </td></tr>";
              }
              ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  <!-- SCRIPT -->
  <script>
    const menuBtn = document.getElementById('menu-btn');
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('main-content');

    menuBtn.addEventListener('click', () => {
      sidebar.classList.toggle('active');
      mainContent.classList.toggle('shifted');
    });

    // 🔍 Fungsi Pencarian
    document.getElementById('search').addEventListener('input', function() {
      const filter = this.value.toLowerCase();
      const rows = document.querySelectorAll('#pedomanTable tr');
      rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(filter) ? '' : 'none';
      });
    });
  </script>
</body>
</html>