<div class="animate-fade-in-up mb-6">
    <h2 class="text-4xl font-light text-white mb-1">Analisis <span class="font-bold text-luxury-latte">Metode Pembayaran</span></h2>
    <p class="text-slate-400 font-light tracking-wide">Tren preferensi transaksi pelanggan.</p>
</div>

<div class="glass-panel p-3 mb-10 animate-fade-in-up animate-delay-1">
    <form action="<?= BASEURL; ?>/payments" method="GET" class="flex flex-wrap md:flex-nowrap gap-3">
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

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10 animate-fade-in-up animate-delay-2">
    <div class="glass-panel p-8 w-full">
        <h3 class="text-lg font-light tracking-wide text-white mb-6">Preferensi <span class="font-bold text-luxury-latte">(Jumlah Transaksi)</span></h3>
        <div class="relative h-64 w-full"><canvas id="paymentChart"></canvas></div>
    </div>
    <div class="glass-panel overflow-hidden flex flex-col">
        <div class="p-6 border-b border-white/5"><h3 class="text-lg font-light text-white">Detail Transaksi Pembayaran</h3></div>
        <table class="w-full text-left text-sm text-slate-300 flex-1">
            <thead class="bg-black/20 text-slate-400"><tr><th class="p-4 font-light">Metode Pembayaran</th><th class="p-4 font-light">Total Transaksi</th><th class="p-4 font-light">Total Revenue</th></tr></thead>
            <tbody>
                <?php foreach($data['payments'] as $py): ?>
                <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                    <td class="p-4 text-white"><?= $py['Payment_Method'] ?></td><td class="p-4"><?= number_format($py['transactions']) ?> Trx</td><td class="p-4 text-emerald-400 font-bold">$<?= number_format($py['revenue'], 2) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    const lattePalette = ['#c59a6c', '#a87f54', '#8c6b4a', '#dcb78f', '#968170', '#baa697'];
    new Chart(document.getElementById('paymentChart'), {
        type: 'doughnut',
        data: { labels: <?= json_encode(array_column($data['payments'], 'Payment_Method')); ?>, datasets: [{ data: <?= json_encode(array_column($data['payments'], 'transactions')); ?>, backgroundColor: lattePalette, borderWidth: 2, borderColor: '#0a0807' }] },
        options: { maintainAspectRatio: false, responsive: true, cutout: '80%', plugins: { legend: { position: 'right', labels: { color: '#a8a29e', usePointStyle: true, padding: 20 } } } }
    });
</script>