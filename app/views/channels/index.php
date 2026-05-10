<div class="animate-fade-in-up mb-6">
    <h2 class="text-4xl font-light text-white mb-1">Analisis <span class="font-bold text-luxury-latte">Sales Channel</span></h2>
    <p class="text-slate-400 font-light tracking-wide">Evaluasi performa distribusi dan kanal penjualan.</p>
</div>

<div class="glass-panel p-3 mb-10 animate-fade-in-up animate-delay-1">
    <form action="<?= BASEURL; ?>/channels" method="GET" class="flex flex-wrap md:flex-nowrap gap-3">
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
    </form>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10 animate-fade-in-up animate-delay-2">
    <div class="glass-panel p-8 w-full">
        <h3 class="text-lg font-light tracking-wide text-white mb-6">Revenue by <span class="font-bold text-luxury-latte">Channel</span></h3>
        <div class="relative h-64 w-full"><canvas id="channelRevChart"></canvas></div>
    </div>
    <div class="glass-panel p-8 w-full">
        <h3 class="text-lg font-light tracking-wide text-white mb-6">Distribusi <span class="font-bold text-luxury-latte">Volume (Units)</span></h3>
        <div class="relative h-64 w-full"><canvas id="channelUnitChart"></canvas></div>
    </div>
</div>

<div class="glass-panel overflow-hidden animate-fade-in-up animate-delay-3">
    <table class="w-full text-left text-sm text-slate-300">
        <thead class="bg-black/20 text-slate-400"><tr><th class="p-5 font-light">Sales Channel</th><th class="p-5 font-light">Total Revenue (USD)</th><th class="p-5 font-light">Units Sold</th></tr></thead>
        <tbody>
            <?php foreach($data['channels'] as $ch): ?>
            <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                <td class="p-5 text-white"><?= $ch['Sales_Channel'] ?></td><td class="p-5 text-emerald-400 font-bold">$<?= number_format($ch['revenue'], 2) ?></td><td class="p-5"><?= number_format($ch['units']) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    const lattePalette = ['#c59a6c', '#a87f54', '#8c6b4a', '#dcb78f', '#968170', '#baa697'];
    new Chart(document.getElementById('channelRevChart'), {
        type: 'bar',
        data: { labels: <?= json_encode(array_column($data['channels'], 'Sales_Channel')); ?>, datasets: [{ label: 'Revenue ($)', data: <?= json_encode(array_column($data['channels'], 'revenue')); ?>, backgroundColor: '#c59a6c', borderRadius: 6 }] },
        options: { maintainAspectRatio: false, responsive: true, indexAxis: 'y', plugins: { legend: { display: false } }, scales: { y: { grid: { display: false } } } }
    });
    new Chart(document.getElementById('channelUnitChart'), {
        type: 'doughnut',
        data: { labels: <?= json_encode(array_column($data['channels'], 'Sales_Channel')); ?>, datasets: [{ data: <?= json_encode(array_column($data['channels'], 'units')); ?>, backgroundColor: lattePalette, borderWidth: 2, borderColor: '#0a0807' }] },
        options: { maintainAspectRatio: false, responsive: true, cutout: '80%', plugins: { legend: { position: 'right', labels: { color: '#a8a29e', usePointStyle: true, padding: 20 } } } }
    });
</script>