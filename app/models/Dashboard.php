<?php
class Dashboard {
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

    public function getSummary($filters = []) {
        $where = $this->buildWhere($filters);
        $sql = "SELECT SUM(fs.Revenue_USD) as total_revenue, SUM(fs.Units_Sold) as total_units 
                FROM fact_sales fs 
                JOIN dim_date dd ON fs.date_id = dd.date_id
                JOIN dim_product dp ON fs.product_id = dp.product_id
                JOIN dim_region dr ON fs.region_id = dr.region_id
                JOIN dim_channel dc ON fs.channel_id = dc.channel_id " . $where;
        $this->db->query($sql);
        return $this->db->single();
    }

    public function getTopProducts($filters = []) {
        $where = $this->buildWhere($filters);
        $sql = "SELECT dp.Product_Type, SUM(fs.Units_Sold) as total_units 
                FROM fact_sales fs JOIN dim_product dp ON fs.product_id = dp.product_id 
                JOIN dim_date dd ON fs.date_id = dd.date_id
                JOIN dim_region dr ON fs.region_id = dr.region_id
                JOIN dim_channel dc ON fs.channel_id = dc.channel_id " . $where . " GROUP BY dp.Product_Type ORDER BY total_units DESC LIMIT 10";
        $this->db->query($sql); return $this->db->resultSet();
    }

    public function getRevenueTrend($filters = []) {
        $where = $this->buildWhere($filters);
        
        if (empty($filters['month'])) {
            // Jika kosong, tampilkan semua bulan yang diurutkan sebagai angka (UNSIGNED)
            $sql = "SELECT dd.Month AS time_period, SUM(fs.Revenue_USD) as revenue 
                    FROM fact_sales fs JOIN dim_date dd ON fs.date_id = dd.date_id 
                    JOIN dim_product dp ON fs.product_id = dp.product_id
                    JOIN dim_region dr ON fs.region_id = dr.region_id
                    JOIN dim_channel dc ON fs.channel_id = dc.channel_id " . $where . " 
                    GROUP BY dd.Month ORDER BY CAST(dd.Month AS UNSIGNED) ASC";
        } else {
            // Jika ada filter bulan, tampilkan per minggu
            $sql = "SELECT CONCAT('Minggu ', CEIL(DAY(dd.Date)/7)) AS time_period, SUM(fs.Revenue_USD) as revenue 
                    FROM fact_sales fs JOIN dim_date dd ON fs.date_id = dd.date_id 
                    JOIN dim_product dp ON fs.product_id = dp.product_id
                    JOIN dim_region dr ON fs.region_id = dr.region_id
                    JOIN dim_channel dc ON fs.channel_id = dc.channel_id " . $where . " 
                    GROUP BY time_period ORDER BY time_period ASC";
        }

        $this->db->query($sql); return $this->db->resultSet();
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