<?php
class Sales {
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

    public function getAll($filters = []) {
        $where = $this->buildWhere($filters);
        $sql = "SELECT fs.*, dp.Product_Type, dr.Country, dc.Sales_Channel, dpay.Payment_Method, dd.Date 
                FROM fact_sales fs 
                JOIN dim_product dp ON fs.product_id = dp.product_id 
                JOIN dim_region dr ON fs.region_id = dr.region_id 
                JOIN dim_channel dc ON fs.channel_id = dc.channel_id 
                JOIN dim_payment dpay ON fs.payment_id = dpay.payment_id 
                JOIN dim_date dd ON fs.date_id = dd.date_id 
                $where 
                ORDER BY dd.date_id DESC LIMIT 100";
        $this->db->query($sql);
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