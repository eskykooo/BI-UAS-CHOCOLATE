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
        $this->view('layouts/header', $data);
        $this->view('channels/index', $data);
        $this->view('layouts/footer');
    }
}