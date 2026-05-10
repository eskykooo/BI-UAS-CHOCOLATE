<?php
class PaymentModel {
    private $db;
    public function __construct() { $this->db = new Database; }
    private function buildWhere($filters) {
        $where = " WHERE 1=1";
        if(!empty($filters['month'])) $where .= " AND dd.Month = '{$filters['month']}'";
        if(!empty($filters['product'])) $where .= " AND dp.Product_Type = '{$filters['product']}'";
        if(!empty($filters['country'])) $where .= " AND dr.Country = '{$filters['country']}'";
        if(!empty($filters['channel'])) $where .= " AND dc.Sales_Channel = '{$filters['channel']}'";
        return $where;
    }
    public function getPaymentMethods($filters = []) {
        $where = $this->buildWhere($filters);
        $this->db->query("SELECT dp.Payment_Method, SUM(fs.Revenue_USD) as revenue, COUNT(fs.date_id) as transactions FROM fact_sales fs JOIN dim_payment dp ON fs.payment_id = dp.payment_id JOIN dim_date dd ON fs.date_id = dd.date_id JOIN dim_product dprod ON fs.product_id = dprod.product_id JOIN dim_region dr ON fs.region_id = dr.region_id JOIN dim_channel dc ON fs.channel_id = dc.channel_id $where GROUP BY dp.Payment_Method ORDER BY transactions DESC");
        return $this->db->resultSet();
    }
    public function getFilterOptions() {
        $options = [];
        $this->db->query("SELECT DISTINCT Month FROM dim_date ORDER BY CAST(Month AS UNSIGNED) ASC"); $options['months'] = $this->db->resultSet();
        $this->db->query("SELECT DISTINCT Product_Type FROM dim_product"); $options['products'] = $this->db->resultSet();
        $this->db->query("SELECT DISTINCT Country FROM dim_region"); $options['countries'] = $this->db->resultSet();
        $this->db->query("SELECT DISTINCT Sales_Channel FROM dim_channel"); $options['channels'] = $this->db->resultSet();
        return $options;
    }
}