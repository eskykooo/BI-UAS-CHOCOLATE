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
        
        // Penamaan judul grafik dinamis berdasarkan filter
        $data['time_label'] = empty($filters['month']) ? 'Per Bulan' : 'Per Minggu';

        $topProd = $data['top_products'][0]['Product_Type'] ?? 'Data';
        $data['insight'] = "Berdasarkan filter saat ini, produk $topProd mendominasi volume penjualan.";

        $this->view('layouts/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('layouts/footer');
    }
}