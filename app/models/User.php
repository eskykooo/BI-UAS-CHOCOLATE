<?php
class User {
    private $db;
    public function __construct() { $this->db = new Database; }
    public function authenticate($username, $password) {
        if($username === 'admin' && $password === 'admin123') {
            return ['id' => 1, 'username' => 'admin', 'role' => 'Executive'];
        }
        return false;
    }
}