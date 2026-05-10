<div class="animate-fade-in-up mb-6">
    <h2 class="text-4xl font-light text-white mb-1">Analisis <span class="font-bold text-luxury-latte">Pasar & Regional</span></h2>
    <p class="text-slate-400 font-light tracking-wide">Kontribusi revenue berdasarkan negara operasional.</p>
</div>

<div class="glass-panel p-6 mb-10 animate-fade-in-up animate-delay-1 flex items-start gap-4 border-l-4 border-luxury-latte bg-[#0f0c0a]">
    <div class="flex-shrink-0 text-luxury-latte mt-1"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
    <div><h4 class="text-sm font-bold text-luxury-muted uppercase tracking-[0.2em] mb-1">Regional Strategic Insight</h4><p class="text-slate-300 font-light"><?= $data['automated_insight']; ?></p></div>
</div>

<div class="glass-panel p-3 mb-10 animate-fade-in-up animate-delay-2 filter-container">
    <form action="<?= BASEURL; ?>/regions" method="GET" class="flex flex-wrap md:flex-nowrap gap-3">
        <div class="flex-1 min-w-[150px]"><select name="month" onchange="this.form.submit()"><option value="">Semua Bulan</option><?php foreach($data['filter_options']['months'] as $m): ?><option value="<?= $m['Month'] ?>" <?= $data['applied_filters']['month'] == $m['Month'] ? 'selected' : '' ?>><?= $m['Month'] ?></option><?php endforeach; ?></select></div>
        <div class="flex-1 min-w-[150px]"><select name="product" onchange="this.form.submit()"><option value="">Semua Produk</option><?php foreach($data['filter_options']['products'] as $p): ?><option value="<?= $p['Product_Type'] ?>" <?= $data['applied_filters']['product'] == $p['Product_Type'] ? 'selected' : '' ?>><?= $p['Product_Type'] ?></option><?php endforeach; ?></select></div>
        <div class="flex-1 min-w-[150px]"><select name="channel" onchange="this.form.submit()"><option value="">Semua Channel</option><?php foreach($data['filter_options']['channels'] as $ch): ?><option value="<?= $ch['Sales_Channel'] ?>" <?= $data['applied_filters']['channel'] == $ch['Sales_Channel'] ? 'selected' : '' ?>><?= $ch['Sales_Channel'] ?></option><?php endforeach; ?></select></div>
    </form>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-10 animate-fade-in-up animate-delay-3">
    <div class="glass-panel p-8 lg:col-span-2 w-full"><div class="relative h-72 w-full"><canvas id="regionChartFinal"></canvas></div></div>
    <div class="glass-panel overflow-hidden flex flex-col">
        <div class="p-6 border-b border-white/5"><h3 class="text-lg font-light text-white">Data Per Negara</h3></div>
        <div class="overflow-y-auto flex-1 max-h-72 Custom-scrollbar">
            <table class="w-full text-sm text-left text-slate-300">
                <thead class="bg-black/20 text-slate-400"><tr><th class="p-4 font-light">Negara</th><th class="p-4 font-light">Revenue</th><th class="p-4 font-light">Units</th></tr></thead>
                <tbody>
                    <?php foreach($data['regions'] as $rg): ?>
                    <tr class="border-b border-white/5 hover:bg-white/5 transition-colors"><td class="p-4 text-white"><?= $rg['Country'] ?></td><td class="p-4 text-emerald-400 font-bold">$<?= number_format($rg['revenue']) ?></td><td class="p-4"><?= number_format($rg['units']) ?></td></tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    new Chart(document.getElementById('regionChartFinal'), {
        type: 'bar',
        data: { labels: <?= json_encode(array_column($data['regions'], 'Country')); ?>, datasets: [{ label: 'Revenue (USD)', data: <?= json_encode(array_column($data['regions'], 'revenue')); ?>, backgroundColor: '#c59a6c', borderRadius: 6 }] },
        options: { maintainAspectRatio: false, responsive: true, plugins: { legend: { display: false } }, scales: { y: { beginAtZero: true, grid: { color: 'rgba(255,255,255,0.05)' } }, x: { grid: { display: false } } } }
    });
});
</script>