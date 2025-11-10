<header class="topbar">
  <button id="toggle-btn" class="toggle-btn"><i class="bi bi-list"></i></button>
  <div class="topbar-brand">
    <img src="http://localhost/KIPWEB/uploads/Logo_Polinela.png" alt="Logo Polinela" class="logo-img">
    <h1 class="topbar-title">Sistem Informasi KIP-Kuliah</h1>
  </div>
</header>

<aside class="sidebar" id="sidebar">
  <div class="sidebar-header">
    <img src="http://localhost/KIPWEB/uploads/Logo_Polinela.png" alt="Logo Polinela" class="sidebar-logo">
    <h2 class="sidebar-title">KIP-Kuliah<br>POLINELA</h2>
  </div>

  <nav class="nav-links">
    <a href="/kipweb/index.php" class="<?= basename($_SERVER['PHP_SELF'])=='index.php'?'active':'' ?>">
      <i class="bi bi-house-door"></i> Beranda
    </a>

    <a href="/kipweb/pedoman.php" class="<?= basename($_SERVER['PHP_SELF'])=='pedoman.php'?'active':'' ?>">
      <i class="bi bi-book"></i> Pedoman 2025
    </a>


    <a href="/kipweb/pelaporan.php" class="<?= basename($_SERVER['PHP_SELF'])=='pelaporan.php'?'active':'' ?>">
      <i class="bi bi-pencil-square"></i> Pelaporan
    </a>
</aside>

<div class="overlay" id="overlay"></div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

<style>
/* ===== TOPBAR ===== */
.topbar {
  width: 100%;
  display: flex;
  align-items: center;
  background: linear-gradient(90deg, #4B0082, #673AB7);
  color: #fff;
  padding: 10px 20px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.2);
  position: fixed;
  top: 0;
  left: 0;
  z-index: 3000;
}

.topbar-brand {
  display: flex;
  align-items: center;
  gap: 10px;
}

.toggle-btn {
  background: none;
  border: none;
  color: #fff;
  font-size: 1.8rem;
  cursor: pointer;
  margin-right: 15px;
  transition: transform 0.2s, color 0.2s;
}

.toggle-btn:hover {
  color: #E0B0FF;
  transform: scale(1.1);
}

.logo-img {
  height: 38px;
  width: auto;
  border-radius: 50%;
}

.topbar-title {
  font-size: 1.1rem;
  font-weight: 600;
  letter-spacing: 0.5px;
  margin: 0;
}

/* ===== SIDEBAR ===== */
.sidebar {
  background-color: #4B0082;
  width: 250px;
  height: 100vh;
  position: fixed;
  left: -250px;
  top: 0;
  display: flex;
  flex-direction: column;
  padding: 20px 0;
  color: #fff;
  box-shadow: 4px 0 15px rgba(0,0,0,0.2);
  transition: left 0.3s ease;
  z-index: 2500;
}

.sidebar.active {
  left: 0;
}

.sidebar-header {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-bottom: 30px;
}

.sidebar-logo {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  margin-bottom: 10px;
}

/* ✅ warna tulisan sidebar jadi putih */
.sidebar-title {
  text-align: center;
  font-weight: 700;
  font-size: 1.2rem;
  line-height: 1.3;
  color: #fff; /* <-- tambah baris ini */
}

.nav-links {
  display: flex;
  flex-direction: column;
}

.nav-links a {
  text-decoration: none;
  color: #fff;
  padding: 12px 25px;
  font-weight: 500;
  display: flex;
  align-items: center;
  transition: background 0.2s;
}

.nav-links a i {
  margin-right: 12px;
  font-size: 1.2rem;
}

.nav-links a:hover {
  background-color: rgba(255, 255, 255, 0.15);
}

.nav-links a.active {
  background-color: rgba(255, 255, 255, 0.25);
  border-left: 4px solid #fff;
}

/* ===== DROPDOWN ===== */
.dropdown {
  display: flex;
  flex-direction: column;
}

.dropdown-btn {
  background: none;
  border: none;
  color: #fff;
  text-align: left;
  padding: 12px 25px;
  font-weight: 500;
  display: flex;
  align-items: center;
  cursor: pointer;
  width: 100%;
}

.dropdown-btn i {
  margin-right: 12px;
}

.dropdown-btn:hover {
  background-color: rgba(255, 255, 255, 0.15);
}

.dropdown-content {
  display: none;
  flex-direction: column;
  background-color: rgba(75, 0, 130, 0.9);
}

.dropdown-content a {
  padding: 10px 45px;
  font-size: 0.95rem;
  color: #fff; /* pastikan tetap putih */
}

.dropdown-content a:hover {
  background-color: rgba(255, 255, 255, 0.15);
}

.dropdown-content a.active {
  color: #fff !important;
  background-color: rgba(255, 255, 255, 0.25);
  border-left: 4px solid #fff;
}

.dropdown.open .dropdown-content {
  display: flex;
}

.arrow {
  margin-left: auto;
  transition: transform 0.3s;
}

.dropdown.open .arrow {
  transform: rotate(180deg);
}

/* ===== OVERLAY ===== */
.overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.4);
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.3s ease;
  z-index: 2400;
}

.overlay.active {
  opacity: 1;
  visibility: visible;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
  .topbar-title { font-size: 1rem; }
  .logo-img { height: 32px; }
  .sidebar-logo { width: 60px; height: 60px; }
}
</style>

<script>
const toggleBtn = document.getElementById('toggle-btn');
const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('overlay');
const dropdownBtns = document.querySelectorAll('.dropdown-btn');

toggleBtn.addEventListener('click', () => {
  sidebar.classList.toggle('active');
  overlay.classList.toggle('active');
});

overlay.addEventListener('click', () => {
  sidebar.classList.remove('active');
  overlay.classList.remove('active');
});

// Dropdown Toggle
dropdownBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    const dropdown = btn.parentElement;
    dropdown.classList.toggle('open');
  });
});
</script>