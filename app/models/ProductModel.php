<?php
class ProductModel {
    private $db;
    public function __construct() { $this->db = new Database; }

    private function buildWhere($filters) {
        $where = " WHERE 1=1";
        if(!empty($filters['month'])) $where .= " AND dd.Month = '{$filters['month']}'";
        if(!empty($filters['country'])) $where .= " AND dr.Country = '{$filters['country']}'";
        if(!empty($filters['channel'])) $where .= " AND dc.Sales_Channel = '{$filters['channel']}'";
        return $where;
    }

    // PERBAIKAN: Menambahkan dp.Brand ke SELECT dan GROUP BY
    public function getTopProducts($filters = []) {
        $where = $this->buildWhere($filters);
        $this->db->query("SELECT dp.Product_Type, dp.Brand, SUM(fs.Revenue_USD) as revenue, SUM(fs.Units_Sold) as units FROM fact_sales fs JOIN dim_product dp ON fs.product_id = dp.product_id JOIN dim_date dd ON fs.date_id = dd.date_id JOIN dim_region dr ON fs.region_id = dr.region_id JOIN dim_channel dc ON fs.channel_id = dc.channel_id $where GROUP BY dp.Product_Type, dp.Brand ORDER BY revenue DESC LIMIT 5");
        return $this->db->resultSet();
    }
    
    // PERBAIKAN: Menambahkan dp.Brand ke SELECT dan GROUP BY
    public function getBottomProducts($filters = []) {
        $where = $this->buildWhere($filters);
        $this->db->query("SELECT dp.Product_Type, dp.Brand, SUM(fs.Revenue_USD) as revenue, SUM(fs.Units_Sold) as units FROM fact_sales fs JOIN dim_product dp ON fs.product_id = dp.product_id JOIN dim_date dd ON fs.date_id = dd.date_id JOIN dim_region dr ON fs.region_id = dr.region_id JOIN dim_channel dc ON fs.channel_id = dc.channel_id $where GROUP BY dp.Product_Type, dp.Brand ORDER BY revenue ASC LIMIT 5");
        return $this->db->resultSet();
    }
    
    public function getTopBrands($filters = []) {
        $where = $this->buildWhere($filters);
        $this->db->query("SELECT dp.Brand, SUM(fs.Revenue_USD) as revenue FROM fact_sales fs JOIN dim_product dp ON fs.product_id = dp.product_id JOIN dim_date dd ON fs.date_id = dd.date_id JOIN dim_region dr ON fs.region_id = dr.region_id JOIN dim_channel dc ON fs.channel_id = dc.channel_id $where GROUP BY dp.Brand ORDER BY revenue DESC LIMIT 5");
        return $this->db->resultSet();
    }

    public function getFilterOptions() {
        $options = [];
        $this->db->query("SELECT DISTINCT Month FROM dim_date ORDER BY CAST(Month AS UNSIGNED) ASC"); $options['months'] = $this->db->resultSet();
        $this->db->query("SELECT DISTINCT Country FROM dim_region"); $options['countries'] = $this->db->resultSet();
        $this->db->query("SELECT DISTINCT Sales_Channel FROM dim_channel"); $options['channels'] = $this->db->resultSet();
        return $options;
    }
}