<?php
class DashboardController extends Controller {
    public function index() {
        if(!isset($_SESSION['user'])) { header('Location: ' . BASEURL); exit; }
        $db = $this->model('Dashboard');
        
        $filters = [
            'month' => $_GET['month'] ?? '',
            'product' => $_GET['product'] ?? '',
            'country' => $_GET['country'] ?? '',
            'channel' => $_GET['channel'] ?? ''
        ];

        $data['title'] = 'Dashboard';
        $data['summary'] = $db->getSummary($filters);
        $data['top_products'] = $db->getTopProducts($filters);
        $data['monthly_rev'] = $db->getRevenueTrend($filters);
        $data['filter_options'] = $db->getFilterOptions();
        $data['applied_filters'] = $filters;
        
        $data['time_label'] = empty($filters['month']) ? 'Per Bulan' : 'Per Minggu';

        // LOGIKA AUTOMATED INSIGHT DENGAN PROTEKSI KEY
        $insights = [];
        $trendData = $data['monthly_rev'];
        $topProducts = $data['top_products'];

        if (count($trendData) >= 2) {
            $currentPeriod = end($trendData);
            $prevPeriod = prev($trendData);
            if ($currentPeriod['revenue'] > $prevPeriod['revenue'] && $prevPeriod['revenue'] > 0) {
                $pct = round((($currentPeriod['revenue'] - $prevPeriod['revenue']) / $prevPeriod['revenue']) * 100);
                $insights[] = "Tren positif terdeteksi pada <span class='font-bold text-emerald-400'>{$currentPeriod['time_period']}</span>, revenue naik <span class='font-bold text-emerald-400'>$pct%</span>.";
            } elseif ($currentPeriod['revenue'] < $prevPeriod['revenue'] && $currentPeriod['revenue'] > 0) {
                $pct = round((($prevPeriod['revenue'] - $currentPeriod['revenue']) / $prevPeriod['revenue']) * 100);
                $insights[] = "Waspada penurunan revenue <span class='font-bold text-red-400'>$pct%</span> pada <span class='font-bold text-red-400'>{$currentPeriod['time_period']}</span>.";
            }
        }

        if (!empty($topProducts)) {
            $topP = $topProducts[0];
            $brandName = $topP['Brand'] ?? 'Unknown Brand'; // Proteksi Undefined Key
            $insights[] = "Produk <span class='font-bold text-luxury-latte'>{$topP['Product_Type']}</span> dari brand <span class='font-bold text-white'>{$brandName}</span> mendominasi pasar.";
        }

        $data['automated_insight'] = !empty($insights) ? implode(" ", $insights) : "Sistem sedang menganalisis data...";
        
        $this->view('layouts/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('layouts/footer');
    }
}