<div class="animate-fade-in-up mb-6">
    <h2 class="text-4xl font-light text-white mb-1">Analisis <span class="font-bold text-luxury-latte">Produk & Brand</span></h2>
    <p class="text-slate-400 font-light tracking-wide">Evaluasi performa portofolio produk dan merk cokelat.</p>
</div>

<div class="glass-panel p-3 mb-10 animate-fade-in-up animate-delay-1">
    <form action="<?= BASEURL; ?>/products" method="GET" class="flex flex-wrap md:flex-nowrap gap-3">
        <div class="flex-1 min-w-[150px]">
            <select name="month" onchange="this.form.submit()" class="w-full glass-input px-5 py-3 text-sm cursor-pointer appearance-none">
                <option value="" class="bg-black text-white">Semua Bulan</option>
                <?php foreach($data['filter_options']['months'] as $m): ?><option value="<?= $m['Month'] ?>" class="bg-black text-white" <?= $data['applied_filters']['month'] == $m['Month'] ? 'selected' : '' ?>><?= $m['Month'] ?></option><?php endforeach; ?>
            </select>
        </div>
        <div class="flex-1 min-w-[150px]">
            <select name="country" onchange="this.form.submit()" class="w-full glass-input px-5 py-3 text-sm cursor-pointer appearance-none">
                <option value="" class="bg-black text-white">Semua Negara</option>
                <?php foreach($data['filter_options']['countries'] as $c): ?><option value="<?= $c['Country'] ?>" class="bg-black text-white" <?= $data['applied_filters']['country'] == $c['Country'] ? 'selected' : '' ?>><?= $c['Country'] ?></option><?php endforeach; ?>
            </select>
        </div>
        <div class="flex-1 min-w-[150px]">
            <select name="channel" onchange="this.form.submit()" class="w-full glass-input px-5 py-3 text-sm cursor-pointer appearance-none">
                <option value="" class="bg-black text-white">Semua Channel</option>
                <?php foreach($data['filter_options']['channels'] as $ch): ?><option value="<?= $ch['Sales_Channel'] ?>" class="bg-black text-white" <?= $data['applied_filters']['channel'] == $ch['Sales_Channel'] ? 'selected' : '' ?>><?= $ch['Sales_Channel'] ?></option><?php endforeach; ?>
            </select>
        </div>
    </form>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10 animate-fade-in-up animate-delay-2">
    <div class="glass-panel p-8 w-full">
        <h3 class="text-lg font-light tracking-wide text-white mb-6">Top 5 Produk <span class="font-bold text-luxury-latte">(Revenue)</span></h3>
        <div class="relative h-64 w-full"><canvas id="topProdChart"></canvas></div>
    </div>
    <div class="glass-panel p-8 w-full">
        <h3 class="text-lg font-light tracking-wide text-white mb-6">Pangsa Pasar <span class="font-bold text-luxury-latte">Brand Utama</span></h3>
        <div class="relative h-64 w-full"><canvas id="brandChart"></canvas></div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 animate-fade-in-up animate-delay-3">
    
    <div class="glass-panel overflow-hidden">
        <div class="p-6 border-b border-white/5"><h3 class="text-lg font-light text-white">Produk Kurang Laku <span class="font-bold text-red-400">(Bottom 5)</span></h3></div>
        <table class="w-full text-left text-sm text-slate-300">
            <thead class="bg-black/20 text-slate-400">
                <tr>
                    <th class="p-5 font-light">Kategori Produk</th>
                    <th class="p-5 font-light">Brand</th>
                    <th class="p-5 font-light">Total Revenue</th>
                    <th class="p-5 font-light">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['bottom_products'] as $bp): ?>
                <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                    <td class="p-5 text-white"><?= $bp['Product_Type'] ?></td>
                    <td class="p-5 text-slate-400"><?= $bp['Brand'] ?></td>
                    <td class="p-5 text-red-400 font-bold">$<?= number_format($bp['revenue'], 2) ?></td>
                    <td class="p-5"><span class="bg-red-900/30 text-red-400 px-3 py-1 rounded-full text-[10px] uppercase tracking-wider border border-red-800">Review</span></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="glass-panel overflow-hidden">
        <div class="p-6 border-b border-white/5"><h3 class="text-lg font-light text-white">Performa <span class="font-bold text-luxury-latte">Brand Teratas</span></h3></div>
        <table class="w-full text-left text-sm text-slate-300">
            <thead class="bg-black/20 text-slate-400"><tr><th class="p-5 font-light">Nama Brand</th><th class="p-5 font-light">Total Revenue</th></tr></thead>
            <tbody>
                <?php foreach($data['top_brands'] as $tb): ?>
                <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                    <td class="p-5 text-white font-medium"><?= $tb['Brand'] ?></td>
                    <td class="p-5 text-emerald-400 font-bold">$<?= number_format($tb['revenue'], 2) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

<script>
    const lattePalette = ['#c59a6c', '#a87f54', '#8c6b4a', '#dcb78f', '#968170', '#baa697'];
    
    // PERBAIKAN: Menggabungkan nama produk dan nama brand untuk label chart
    <?php
        $chartLabels = array_map(function($p) {
            return $p['Product_Type'] . ' (' . $p['Brand'] . ')';
        }, $data['top_products']);
    ?>

    new Chart(document.getElementById('topProdChart'), {
        type: 'bar',
        data: { 
            labels: <?= json_encode($chartLabels); ?>, 
            datasets: [{ 
                label: 'Revenue ($)', 
                data: <?= json_encode(array_column($data['top_products'], 'revenue')); ?>, 
                backgroundColor: '#c59a6c', 
                borderRadius: 6 
            }] 
        },
        options: { 
            maintainAspectRatio: false, 
            responsive: true, 
            plugins: { legend: { display: false } }, 
            scales: { x: { grid: { display: false } } } 
        }
    });

    new Chart(document.getElementById('brandChart'), {
        type: 'doughnut',
        data: { labels: <?= json_encode(array_column($data['top_brands'], 'Brand')); ?>, datasets: [{ data: <?= json_encode(array_column($data['top_brands'], 'revenue')); ?>, backgroundColor: lattePalette, borderWidth: 2, borderColor: '#0a0807' }] },
        options: { maintainAspectRatio: false, responsive: true, cutout: '80%', plugins: { legend: { position: 'right', labels: { color: '#a8a29e', usePointStyle: true, padding: 20 } } } }
    });
</script>