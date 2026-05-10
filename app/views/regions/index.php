<div class="animate-fade-in-up mb-6">
    <h2 class="text-4xl font-light text-white mb-1">Analisis <span class="font-bold text-luxury-latte">Pasar & Regional</span></h2>
    <p class="text-slate-400 font-light tracking-wide">Kontribusi revenue berdasarkan negara operasional.</p>
</div>

<div class="glass-panel p-3 mb-10 animate-fade-in-up animate-delay-1">
    <form action="<?= BASEURL; ?>/regions" method="GET" class="flex flex-wrap md:flex-nowrap gap-3">
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
            <select name="channel" onchange="this.form.submit()" class="w-full glass-input px-5 py-3 text-sm cursor-pointer appearance-none bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23c59a6c%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E')] bg-no-repeat bg-[position:right_1.5rem_center] bg-[length:0.6rem_auto] pr-10">
                <option value="" class="bg-black text-white">Semua Channel</option>
                <?php foreach($data['filter_options']['channels'] as $ch): ?><option value="<?= $ch['Sales_Channel'] ?>" class="bg-black text-white" <?= $data['applied_filters']['channel'] == $ch['Sales_Channel'] ? 'selected' : '' ?>><?= $ch['Sales_Channel'] ?></option><?php endforeach; ?>
            </select>
        </div>
    </form>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-10 animate-fade-in-up animate-delay-2">
    <div class="glass-panel p-8 lg:col-span-2 w-full">
        <h3 class="text-lg font-light tracking-wide text-white mb-6">Peta Pendapatan <span class="font-bold text-luxury-latte">Regional (USD)</span></h3>
        <div class="relative h-72 w-full"><canvas id="regionChart"></canvas></div>
    </div>
    <div class="glass-panel overflow-hidden flex flex-col">
        <div class="p-6 border-b border-white/5"><h3 class="text-lg font-light text-white">Data Per Negara</h3></div>
        <div class="overflow-y-auto flex-1 max-h-72">
            <table class="w-full text-sm text-left text-slate-300">
                <thead class="bg-black/20 text-slate-400"><tr><th class="p-4 font-light">Negara</th><th class="p-4 font-light">Revenue</th><th class="p-4 font-light">Units</th></tr></thead>
                <tbody>
                    <?php foreach($data['regions'] as $rg): ?>
                    <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                        <td class="p-4 text-white"><?= $rg['Country'] ?></td><td class="p-4 text-emerald-400 font-bold">$<?= number_format($rg['revenue']) ?></td><td class="p-4"><?= number_format($rg['units']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    new Chart(document.getElementById('regionChart'), {
        type: 'bar',
        data: { labels: <?= json_encode(array_column($data['regions'], 'Country')); ?>, datasets: [{ label: 'Total Revenue', data: <?= json_encode(array_column($data['regions'], 'revenue')); ?>, backgroundColor: '#dcb78f', borderRadius: 6 }] },
        options: { maintainAspectRatio: false, responsive: true, plugins: { legend: { display: false } }, scales: { x: { grid: { display: false } } } }
    });
</script>