<div class="animate-fade-in-up flex items-center justify-between mb-8">
    <div>
        <h2 class="text-4xl font-light text-white mb-1">Executive <span class="font-bold text-luxury-latte">Overview</span></h2>
        <p class="text-slate-400 font-light tracking-wide">Analisis data penjualan cokelat premium.</p>
    </div>
</div>

<div class="glass-panel p-6 mb-10 animate-fade-in-up animate-delay-1 flex items-start gap-4 border-l-4 border-luxury-latte bg-[#0f0c0a]">
    <div class="flex-shrink-0 text-luxury-latte mt-1">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 01-2 2 2 2 0 01-2-2v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
    </div>
    <div>
        <h4 class="text-sm font-bold text-luxury-muted uppercase tracking-[0.2em] mb-1">Automated Strategic Insight</h4>
        <p class="text-slate-300 font-light leading-relaxed text-base"><?= $data['automated_insight']; ?></p>
    </div>
</div>

<div class="glass-panel p-3 mb-10 animate-fade-in-up animate-delay-2 filter-container">
    <form action="<?= BASEURL; ?>/dashboard" method="GET" class="flex flex-wrap md:flex-nowrap gap-3">
        <div class="flex-1 min-w-[150px]">
            <select name="month" onchange="this.form.submit()">
                <option value="">Semua Bulan</option>
                <?php foreach($data['filter_options']['months'] as $m): ?><option value="<?= $m['Month'] ?>" <?= $data['applied_filters']['month'] == $m['Month'] ? 'selected' : '' ?>><?= $m['Month'] ?></option><?php endforeach; ?>
            </select>
        </div>
        <div class="flex-1 min-w-[150px]">
            <select name="product" onchange="this.form.submit()">
                <option value="">Semua Produk</option>
                <?php foreach($data['filter_options']['products'] as $p): ?><option value="<?= $p['Product_Type'] ?>" <?= $data['applied_filters']['product'] == $p['Product_Type'] ? 'selected' : '' ?>><?= $p['Product_Type'] ?></option><?php endforeach; ?>
            </select>
        </div>
        <div class="flex-1 min-w-[150px]">
            <select name="country" onchange="this.form.submit()">
                <option value="">Semua Negara</option>
                <?php foreach($data['filter_options']['countries'] as $c): ?><option value="<?= $c['Country'] ?>" <?= $data['applied_filters']['country'] == $c['Country'] ? 'selected' : '' ?>><?= $c['Country'] ?></option><?php endforeach; ?>
            </select>
        </div>
        <div class="flex-1 min-w-[150px]">
            <select name="channel" onchange="this.form.submit()">
                <option value="">Semua Channel</option>
                <?php foreach($data['filter_options']['channels'] as $ch): ?><option value="<?= $ch['Sales_Channel'] ?>" <?= $data['applied_filters']['channel'] == $ch['Sales_Channel'] ? 'selected' : '' ?>><?= $ch['Sales_Channel'] ?></option><?php endforeach; ?>
            </select>
        </div>
    </form>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10 animate-fade-in-up animate-delay-3">
    <div class="glass-panel p-8 flex justify-between items-center group">
        <div>
            <p class="text-luxury-muted text-xs font-bold uppercase tracking-[0.2em] mb-2">Total Revenue Filtered</p>
            <p class="text-5xl font-light text-white tracking-tight">$<span class="font-bold text-emerald-400"><?= number_format($data['summary']['total_revenue'] ?? 0, 2); ?></span></p>
        </div>
        <div class="w-16 h-16 rounded-full bg-emerald-500/10 flex items-center justify-center text-emerald-400 border border-emerald-500/20 shadow-[0_0_20px_rgba(16,185,129,0.1)]">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        </div>
    </div>
    <div class="glass-panel p-8 flex justify-between items-center group">
        <div>
            <p class="text-luxury-muted text-xs font-bold uppercase tracking-[0.2em] mb-2">Total Volume Sold</p>
            <p class="text-5xl font-light text-white tracking-tight"><span class="font-bold text-luxury-latte"><?= number_format($data['summary']['total_units'] ?? 0); ?></span> <span class="text-2xl text-slate-500">Pcs</span></p>
        </div>
        <div class="w-16 h-16 rounded-full bg-luxury-latte/10 flex items-center justify-center text-luxury-latte border border-luxury-latte/20 shadow-[0_0_20px_rgba(197,154,108,0.1)]">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10 animate-fade-in-up animate-delay-4">
    <div class="glass-panel p-8 min-h-[420px] flex flex-col">
        <h3 class="text-lg font-light tracking-wide text-white mb-6">Analisis Tren <span class="font-bold text-luxury-latte"><?= $data['time_label']; ?></span></h3>
        <div class="flex-1 relative">
            <canvas id="revChartFinal"></canvas>
        </div>
    </div>
    <div class="glass-panel p-8 min-h-[420px] flex flex-col">
        <h3 class="text-lg font-light tracking-wide text-white mb-6">Pangsa Pasar <span class="font-bold text-luxury-latte">Produk</span></h3>
        <div class="flex-1 relative">
            <canvas id="prodChartFinal"></canvas>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const lattePalette = ['#c59a6c', '#a87f54', '#8c6b4a', '#dcb78f', '#968170', '#baa697'];
    
    // 1. Line Chart Calibration
    const revCtx = document.getElementById('revChartFinal').getContext('2d');
    const grad = revCtx.createLinearGradient(0, 0, 0, 400);
    grad.addColorStop(0, 'rgba(197, 154, 108, 0.3)');
    grad.addColorStop(1, 'rgba(197, 154, 108, 0)');

    new Chart(revCtx, {
        type: 'line',
        data: {
            labels: <?= json_encode(array_column($data['monthly_rev'], 'time_period')); ?>,
            datasets: [{
                label: 'Revenue USD',
                data: <?= json_encode(array_column($data['monthly_rev'], 'revenue')); ?>,
                borderColor: '#c59a6c',
                backgroundColor: grad,
                borderWidth: 3,
                fill: true,
                tension: 0.4,
                pointRadius: 5,
                pointBackgroundColor: '#0a0807',
                pointBorderColor: '#c59a6c',
                pointBorderWidth: 2
            }]
        },
        options: {
            maintainAspectRatio: false,
            responsive: true,
            plugins: { legend: { display: false } },
            scales: {
                y: { 
                    beginAtZero: true, 
                    grid: { color: 'rgba(255,255,255,0.05)' },
                    ticks: { callback: value => '$' + value.toLocaleString() }
                },
                x: { grid: { display: false } }
            }
        }
    });

    // 2. Doughnut Chart Calibration
    const prodCtx = document.getElementById('prodChartFinal').getContext('2d');
    new Chart(prodCtx, {
        type: 'doughnut',
        data: {
            labels: <?= json_encode(array_column($data['top_products'], 'Product_Type')); ?>,
            datasets: [{
                data: <?= json_encode(array_column($data['top_products'], 'total_units')); ?>,
                backgroundColor: lattePalette,
                borderWidth: 2,
                borderColor: '#0a0807',
                hoverOffset: 15
            }]
        },
        options: {
            maintainAspectRatio: false,
            responsive: true,
            cutout: '75%',
            plugins: {
                legend: {
                    position: 'right',
                    labels: { color: '#a8a29e', usePointStyle: true, padding: 20, font: { size: 12 } }
                }
            }
        }
    });
});
</script>