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
        $this->view('layouts/header', $data);
        $this->view('products/index', $data);
        $this->view('layouts/footer');
    }
}