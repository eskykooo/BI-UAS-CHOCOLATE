<?php
class ChannelController extends Controller {
    public function index() {
        if(!isset($_SESSION['user'])) { header('Location: ' . BASEURL); exit; }
        $model = $this->model('ChannelModel');
        $filters = ['month' => $_GET['month'] ?? '', 'product' => $_GET['product'] ?? '', 'country' => $_GET['country'] ?? ''];
        
        $data['title'] = 'Analisis Channel';
        $data['channels'] = $model->getChannelSales($filters);
        $data['filter_options'] = $model->getFilterOptions();
        $data['applied_filters'] = $filters;

        // AUTOMATED INSIGHT
        $topC = $data['channels'][0]['Sales_Channel'] ?? 'N/A';
        $data['automated_insight'] = "Kanal <span class='text-luxury-latte font-bold'>$topC</span> terbukti paling efektif. Optimalkan biaya marketing pada kanal ini untuk ROI maksimal.";

        $this->view('layouts/header', $data);
        $this->view('channels/index', $data);
        $this->view('layouts/footer');
    }
}