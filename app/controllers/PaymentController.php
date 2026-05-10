<?php
class PaymentController extends Controller {
    public function index() {
        if(!isset($_SESSION['user'])) { header('Location: ' . BASEURL); exit; }
        $model = $this->model('PaymentModel');
        $filters = ['month' => $_GET['month'] ?? '', 'product' => $_GET['product'] ?? '', 'country' => $_GET['country'] ?? '', 'channel' => $_GET['channel'] ?? ''];
        $data['title'] = 'Analisis Pembayaran';
        $data['payments'] = $model->getPaymentMethods($filters);
        $data['filter_options'] = $model->getFilterOptions();
        $data['applied_filters'] = $filters;
        $this->view('layouts/header', $data);
        $this->view('payments/index', $data);
        $this->view('layouts/footer');
    }
}