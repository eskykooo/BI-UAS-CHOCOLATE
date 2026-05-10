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

        // AUTOMATED INSIGHT
        $topR = $data['regions'][0]['Country'] ?? 'N/A';
        $data['automated_insight'] = "Pasar di <span class='text-luxury-latte font-bold'>$topR</span> berkontribusi paling besar terhadap total revenue. Pertimbangkan ekspansi logistik di wilayah ini.";

        $this->view('layouts/header', $data);
        $this->view('regions/index', $data);
        $this->view('layouts/footer');
    }
}