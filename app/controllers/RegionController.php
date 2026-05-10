<?php
class RegionController extends Controller {
    public function index() {
        if(!isset($_SESSION['user'])) { header('Location: ' . BASEURL); exit; }
        $model = $this->model('RegionModel');
        $filters = ['month' => $_GET['month'] ?? '', 'product' => $_GET['product'] ?? '', 'channel' => $_GET['channel'] ?? ''];
        $data['title'] = 'Penjualan Regional';
        $data['regions'] = $model->getRegionalSales($filters);
        $data['filter_options'] = $model->getFilterOptions();
        $data['applied_filters'] = $filters;
        $this->view('layouts/header', $data);
        $this->view('regions/index', $data);
        $this->view('layouts/footer');
    }
}