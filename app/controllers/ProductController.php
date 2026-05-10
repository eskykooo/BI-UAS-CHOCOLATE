<?php
class ProductController extends Controller {
    public function index() {
        if(!isset($_SESSION['user'])) { header('Location: ' . BASEURL); exit; }
        $model = $this->model('ProductModel');
        $filters = ['month' => $_GET['month'] ?? '', 'country' => $_GET['country'] ?? '', 'channel' => $_GET['channel'] ?? ''];
        
        $data['title'] = 'Analisis Produk';
        $data['top_products'] = $model->getTopProducts($filters);
        $data['bottom_products'] = $model->getBottomProducts($filters);
        $data['top_brands'] = $model->getTopBrands($filters);
        $data['filter_options'] = $model->getFilterOptions();
        $data['applied_filters'] = $filters;

        // AUTOMATED INSIGHT
        $topB = $data['top_brands'][0]['Brand'] ?? 'N/A';
        $botP = $data['bottom_products'][0]['Product_Type'] ?? 'N/A';
        $data['automated_insight'] = "Brand <span class='text-luxury-latte font-bold'>$topB</span> memimpin revenue global saat ini. Perlu perhatian khusus pada <span class='text-red-400 font-bold'>$botP</span> karena performanya di bawah rata-rata target.";

        $this->view('layouts/header', $data);
        $this->view('products/index', $data);
        $this->view('layouts/footer');
    }
}