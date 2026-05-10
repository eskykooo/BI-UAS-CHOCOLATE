<?php
class ReportController extends Controller {
    public function index() {
        if(!isset($_SESSION['user'])) { header('Location: ' . BASEURL); exit; }
        $model = $this->model('Sales');
        
        $filters = [
            'month' => $_GET['month'] ?? '',
            'product' => $_GET['product'] ?? '',
            'country' => $_GET['country'] ?? '',
            'channel' => $_GET['channel'] ?? ''
        ];

        $data['title'] = 'Laporan Penjualan';
        $data['sales'] = $model->getAll($filters);
        $data['filter_options'] = $model->getFilterOptions();
        $data['applied_filters'] = $filters;

        $this->view('layouts/header', $data);
        $this->view('reports/index', $data);
        $this->view('layouts/footer');
    }

    public function exportExcel() {
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=Laporan_Chocolate_EIS.xls");
        $filters = ['month' => $_GET['month'] ?? '', 'product' => $_GET['product'] ?? '', 'country' => $_GET['country'] ?? '', 'channel' => $_GET['channel'] ?? ''];
        $sales = $this->model('Sales')->getAll($filters);
        echo "Tanggal\tProduk\tNegara\tChannel\tPembayaran\tRevenue\tUnits\n";
        foreach($sales as $row) {
            echo "{$row['Date']}\t{$row['Product_Type']}\t{$row['Country']}\t{$row['Sales_Channel']}\t{$row['Payment_Method']}\t{$row['Revenue_USD']}\t{$row['Units_Sold']}\n";
        }
    }

    public function exportPdf() {
        echo "<script>window.print();</script>";
    }
}