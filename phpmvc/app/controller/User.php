<?php 
Class User extends Controller {
    public function index(){
        $data['judul'] = "user";
        $data['nama'] = "Alfian Zaqi";
        $data['pekerjaan'] = "Direktur";
        $this->view("templates/header", $data);
        $this->view("user/index", $data);
        $this->view("templates/footer", $data);
    }

    public function profile(){
        $data['judul'] = 'User';
        $data['nama'] = "Alfian Zaqi";
        $data['pekerjaan'] = "Pelajar";
        $this->view("templates/header", $data);
        $this->view("user/profile", $data);
        $this->view("templates/footer", $data);

    }
}
?>