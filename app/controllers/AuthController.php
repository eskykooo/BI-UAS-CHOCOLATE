<?php
class AuthController extends Controller {
    public function index() {
        if(isset($_SESSION['user'])) { header('Location: ' . BASEURL . '/dashboard'); exit; }
        $this->view('auth/index');
    }
    public function login() {
        $user = $this->model('User')->authenticate($_POST['username'], $_POST['password']);
        if($user) { $_SESSION['user'] = $user; header('Location: ' . BASEURL . '/dashboard'); } 
        else { header('Location: ' . BASEURL); }
    }
    public function logout() { session_destroy(); header('Location: ' . BASEURL); }
}