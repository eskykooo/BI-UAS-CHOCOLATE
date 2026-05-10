<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?? 'Luxury EIS Chocolate'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        tailwind.config = { 
            darkMode: 'class', 
            theme: { 
                extend: { 
                    colors: { luxury: { bg: '#0a0807', latte: '#c59a6c', gold: '#d4af37', muted: '#8c6b4a' } },
                    animation: { 'fade-in-up': 'fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards', 'float': 'float 6s ease-in-out infinite' },
                    keyframes: {
                        fadeInUp: { '0%': { opacity: 0, transform: 'translateY(30px)' }, '100%': { opacity: 1, transform: 'translateY(0)' } },
                        float: { '0%, 100%': { transform: 'translateY(0)' }, '50%': { transform: 'translateY(-15px)' } }
                    }
                } 
            } 
        };
        Chart.defaults.color = '#a8a29e'; 
        Chart.defaults.font.family = "'Inter', sans-serif"; 
        Chart.defaults.scale.grid.color = 'rgba(255, 255, 255, 0.05)';
    </script>
    <style>
        /* PERBAIKAN: Background diperkaya dengan gradasi radial dan pola abstrak */
        body { 
            background-color: #0c0a09; /* Stone 950 */
            color: #e7e5e4; 
            background-image: 
                radial-gradient(circle at 10% 10%, rgba(197, 154, 108, 0.05) 0%, transparent 30%),
                radial-gradient(circle at 90% 90%, rgba(212, 175, 55, 0.03) 0%, transparent 30%),
                url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgdmlld0JveD0iMCAwIDgwIDgwIj48ZyBmaWxsPSIjYzU5YTZjIiBmaWxsLW9wYWNpdHk9IjAuMDMiPjxwYXRoIGQ9Ik0wIDBoNDB2NDBIMHptNDAgNDBoNDB2NDBINDB6TTAgNDBoNDB2NDBIMHptNDAgLTQwcmQ0MHY0MEg0MHoiLz48L2c+PC9zdmc+'); /* Pola geometris kotak tipis */
            background-attachment: fixed;
        }
        .glass-panel { background: rgba(255, 255, 255, 0.015); backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.04); border-radius: 32px; position: relative; box-shadow: 0 10px 30px rgba(0,0,0,0.3); }
        .filter-container { overflow: visible !important; z-index: 50; }
        .glass-sidebar { background: rgba(10, 8, 7, 0.8); backdrop-filter: blur(24px); border-right: 1px solid rgba(255, 255, 255, 0.05); }
        .nav-item { border-radius: 9999px; margin: 4px 16px; transition: all 0.3s ease; color: #94a3b8; }
        .nav-active { background: linear-gradient(90deg, rgba(197,154,108,0.2) 0%, transparent 100%); border-left: 4px solid #c59a6c; color: #c59a6c; border-radius: 0 9999px 9999px 0; margin-left: 0; padding-left: 20px; }
    </style>
</head>
<body class="h-screen flex overflow-hidden selection:bg-luxury-latte/20 selección:text-white">
    <aside class="w-72 glass-sidebar flex flex-col hidden md:flex z-40">
        <div class="p-8 pb-4">
            <h1 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-luxury-latte to-luxury-gold tracking-wider">CHOCO<span class="text-white font-light">EIS</span></h1>
            <p class="text-[10px] text-luxury-muted mt-2 uppercase tracking-[0.3em]">Premium Analytics</p>
        </div>
        <nav class="flex-1 mt-6 overflow-y-auto text-sm Custom-scrollbar">
            <div class="mb-6"><p class="px-8 text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em] mb-2 border-b border-white/5 pb-2">Overview</p><a href="<?= BASEURL; ?>/dashboard" class="block px-6 py-3 nav-item <?= (isset($data['title']) && $data['title'] == 'Dashboard') ? 'nav-active' : '' ?>">Dashboard Eksekutif</a></div>
            <div class="mb-6"><p class="px-8 text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em] mb-2 border-b border-white/5 pb-2">Fokus Analisis</p><a href="<?= BASEURL; ?>/products" class="block px-6 py-3 nav-item <?= (isset($data['title']) && $data['title'] == 'Analisis Produk') ? 'nav-active' : '' ?>">Produk & Brand</a><a href="<?= BASEURL; ?>/regions" class="block px-6 py-3 nav-item <?= (isset($data['title']) && $data['title'] == 'Penjualan Regional') ? 'nav-active' : '' ?>">Pasar & Regional</a><a href="<?= BASEURL; ?>/channels" class="block px-6 py-3 nav-item <?= (isset($data['title']) && $data['title'] == 'Analisis Channel') ? 'nav-active' : '' ?>">Sales Channel</a><a href="<?= BASEURL; ?>/payments" class="block px-6 py-3 nav-item <?= (isset($data['title']) && $data['title'] == 'Analisis Pembayaran') ? 'nav-active' : '' ?>">Metode Pembayaran</a></div>
            <div class="mb-6"><p class="px-8 text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em] mb-2 border-b border-white/5 pb-2">Laporan Internal</p><a href="<?= BASEURL; ?>/reports" class="block px-6 py-3 nav-item <?= (isset($data['title']) && $data['title'] == 'Laporan Penjualan') ? 'nav-active' : '' ?>">Data Transaksi</a></div>
        </nav>
        <div class="p-6"><a href="<?= BASEURL; ?>/logout" class="block px-4 py-3 bg-red-500/10 text-red-400 rounded-full font-semibold text-center border border-red-500/20 hover:bg-red-500/20 transition-colors">Sign Out</a></div>
    </aside>
    <main class="flex-1 overflow-y-auto relative Custom-scrollbar"><div class="p-10 max-w-7xl mx-auto relative z-10">