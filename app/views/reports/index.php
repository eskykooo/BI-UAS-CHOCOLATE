<div class="animate-fade-in-up flex flex-col md:flex-row md:items-center justify-between mb-8">
    <div>
        <h2 class="text-4xl font-light text-white mb-1">Data <span class="font-bold text-luxury-latte">Transaksi</span></h2>
        <p class="text-slate-400 font-light tracking-wide">Log aktivitas penjualan global mendetail.</p>
    </div>
    <div class="flex gap-3 mt-4 md:mt-0">
        <a href="<?= BASEURL; ?>/reports/export-excel?<?= http_build_query($data['applied_filters']) ?>" class="px-6 py-3 bg-emerald-500/10 hover:bg-emerald-500/20 text-emerald-400 rounded-full font-semibold text-sm transition-all border border-emerald-500/20">Export Excel</a>
        <button onclick="window.print()" class="px-6 py-3 bg-luxury-latte/10 hover:bg-luxury-latte/20 text-luxury-latte rounded-full font-semibold text-sm transition-all border border-luxury-latte/20">Print PDF</button>
    </div>
</div>

<div class="glass-panel p-3 mb-10 animate-fade-in-up animate-delay-1">
    <form action="<?= BASEURL; ?>/reports" method="GET" class="flex flex-wrap md:flex-nowrap gap-3">
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

<div class="glass-panel overflow-hidden animate-fade-in-up animate-delay-2">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm text-slate-300">
            <thead class="bg-black/20 text-luxury-muted">
                <tr>
                    <th class="p-5 font-light uppercase tracking-widest text-[10px]">Tanggal</th>
                    <th class="p-5 font-light uppercase tracking-widest text-[10px]">Produk</th>
                    <th class="p-5 font-light uppercase tracking-widest text-[10px]">Negara</th>
                    <th class="p-5 font-light uppercase tracking-widest text-[10px]">Channel</th>
                    <th class="p-5 font-light uppercase tracking-widest text-[10px]">Metode</th>
                    <th class="p-5 font-light uppercase tracking-widest text-[10px]">Revenue</th>
                    <th class="p-5 font-light uppercase tracking-widest text-[10px]">Units</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['sales'] as $row): ?>
                <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                    <td class="p-5 text-slate-400"><?= $row['Date'] ?></td>
                    <td class="p-5 text-white font-medium"><?= $row['Product_Type'] ?></td>
                    <td class="p-5"><?= $row['Country'] ?></td>
                    <td class="p-5"><?= $row['Sales_Channel'] ?></td>
                    <td class="p-5"><span class="px-3 py-1 bg-white/5 rounded-full text-[11px]"><?= $row['Payment_Method'] ?></span></td>
                    <td class="p-5 text-emerald-400 font-bold">$<?= number_format($row['Revenue_USD'], 2) ?></td>
                    <td class="p-5"><?= number_format($row['Units_Sold']) ?></td>
                </tr>
                <?php endforeach; ?>
                <?php if(empty($data['sales'])): ?>
                <tr>
                    <td colspan="7" class="p-20 text-center text-slate-500 italic">Tidak ada transaksi yang ditemukan untuk filter ini.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>