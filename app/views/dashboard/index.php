<div class="animate-fade-in-up">
    <h2 class="text-4xl font-light text-white mb-1">Executive <span class="font-bold text-luxury-latte">Overview</span></h2>
    <p class="text-slate-400 font-light tracking-wide mb-8">Analisis data penjualan cokelat premium.</p>
</div>

<div class="glass-panel p-3 mb-10 animate-fade-in-up animate-delay-1">
    <form action="<?= BASEURL; ?>/dashboard" method="GET" class="flex flex-wrap md:flex-nowrap gap-3" id="filterForm">
        <div class="flex-1 min-w-[150px]">
            <select name="month" onchange="this.form.submit()" class="w-full glass-input px-5 py-3 text-sm cursor-pointer appearance-none bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23c59a6c%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E')] bg-no-repeat bg-[position:right_1.5rem_center] bg-[length:0.6rem_auto] pr-10">
                <option value="" class="bg-black text-white">Semua Bulan</option>
                <?php foreach($data['filter_options']['months'] as $m): ?><option value="<?= $m['Month'] ?>" class="bg-black text-white" <?= $data['applied_filters']['month'] == $m['Month'] ? 'selected' : '' ?>><?= $m['Month'] ?></option><?php endforeach; ?>
            </select>
        </div>
        <div class="flex-1 min-w-[150px]">
            <select name="product" onchange="this.form.submit()" class="w-full glass-input px-5 py-3 text-sm cursor-pointer appearance-none bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23c59a6c%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E')] bg-no-repeat bg-[position:right_1.5rem_center] bg-[length:0.6rem_auto] pr-10">
                <option value="" class="bg-black text-white">Semua Produk</option>
                <?php foreach($data['filter_options']['products'] as $p): ?><option value="<?= $p['Product_Type'] ?>" class="bg-black text-white" <?= $data['applied_filters']['product'] == $p['Product_Type'] ? 'selected' : '' ?>><?= $p['Product_Type'] ?></option><?php endforeach; ?>
            </select>
        </div>
        <div class="flex-1 min-w-[150px]">
            <select name="country" onchange="this.form.submit()" class="w-full glass-input px-5 py-3 text-sm cursor-pointer appearance-none bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23c59a6c%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E')] bg-no-repeat bg-[position:right_1.5rem_center] bg-[length:0.6rem_auto] pr-10">
                <option value="" class="bg-black text-white">Semua Negara</option>
                <?php foreach($data['filter_options']['countries'] as $c): ?><option value="<?= $c['Country'] ?>" class="bg-black text-white" <?= $data['applied_filters']['country'] == $c['Country'] ? 'selected' : '' ?>><?= $c['Country'] ?></option><?php endforeach; ?>
            </select>
        </div>
        <div class="flex-1 min-w-[150px]">
            <select name="channel" onchange="this.form.submit()" class="w-full glass-input px-5 py-3 text-sm cursor-pointer appearance-none bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23c59a6c%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E')] bg-no-repeat bg-[position:right_1.5rem_center] bg-[length:0.6rem_auto] pr-10">
                <option value="" class="bg-black text-white">Semua Channel</option>
                <?php foreach($data['filter_options']['channels'] as $ch): ?><option value="<?= $ch['Sales_Channel'] ?>" class="bg-black text-white" <?= $data['applied_filters']['channel'] == $ch['Sales_Channel'] ? 'selected' : '' ?>><?= $ch['Sales_Channel'] ?></option><?php endforeach; ?>
            </select>
        </div>
    </form>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10 animate-fade-in-up animate-delay-2">
    <div class="glass-panel p-8 flex justify-between items-center group cursor-default">
        <div>
            <p class="text-luxury-muted text-xs font-bold uppercase tracking-[0.2em] mb-2">Total Revenue Filtered</p>
            <p class="text-5xl font-light text-white tracking-tight">$<span class="font-bold text-emerald-400"><?= number_format($data['summary']['total_revenue'] ?? 0, 2); ?></span></p>
        </div>
    </div>
    <div class="glass-panel p-8 flex justify-between items-center group cursor-default">
        <div>
            <p class="text-luxury-muted text-xs font-bold uppercase tracking-[0.2em] mb-2">Total Volume Sold</p>
            <p class="text-5xl font-light text-white tracking-tight"><span class="font-bold text-luxury-latte"><?= number_format($data['summary']['total_units'] ?? 0); ?></span> <span class="text-2xl text-slate-500">Pcs</span></p>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10 animate-fade-in-up animate-delay-3">
    <div class="glass-panel p-8 w-full">
        <h3 class="text-lg font-light tracking-wide text-white mb-6">Pendapatan <span class="font-bold text-luxury-latte"><?= $data['time_label']; ?></span></h3>
        <div class="relative h-64 w-full"><canvas id="revChart"></canvas></div>
    </div>
    <div class="glass-panel p-8 w-full">
        <h3 class="text-lg font-light tracking-wide text-white mb-6">Distribusi <span class="font-bold text-luxury-latte">Produk</span></h3>
        <div class="relative h-64 w-full"><canvas id="prodChart"></canvas></div>
    </div>
</div>

<script>
    const lattePalette = ['#c59a6c', '#a87f54', '#8c6b4a', '#dcb78f', '#968170', '#baa697'];
    let revCtx = document.getElementById('revChart').getContext('2d');
    let gradientFill = revCtx.createLinearGradient(0, 0, 0, 300);
    gradientFill.addColorStop(0, 'rgba(197, 154, 108, 0.4)');
    gradientFill.addColorStop(1, 'rgba(197, 154, 108, 0)');

    new Chart(revCtx, {
        type: 'line',
        data: {
            labels: <?= json_encode(array_column($data['monthly_rev'], 'time_period')); ?>,
            datasets: [{ 
                label: 'Revenue', 
                data: <?= json_encode(array_column($data['monthly_rev'], 'revenue')); ?>, 
                borderColor: '#c59a6c', backgroundColor: gradientFill, borderWidth: 3, 
                pointBackgroundColor: '#0a0807', pointBorderColor: '#c59a6c', fill: true, tension: 0.4 
            }]
        },
        options: { maintainAspectRatio: false, responsive: true, plugins: { legend: { display: false } }, scales: { y: { border: { display: false } }, x: { border: { display: false } } } }
    });

    new Chart(document.getElementById('prodChart'), {
        type: 'doughnut',
        data: {
            labels: <?= json_encode(array_column($data['top_products'], 'Product_Type')); ?>,
            datasets: [{ data: <?= json_encode(array_column($data['top_products'], 'total_units')); ?>, backgroundColor: lattePalette, borderWidth: 2, borderColor: '#0a0807' }]
        },
        options: { maintainAspectRatio: false, responsive: true, cutout: '80%', plugins: { legend: { position: 'right', labels: { color: '#a8a29e', usePointStyle: true, padding: 20 } } } }
    });
</script>