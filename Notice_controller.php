<?php


    class Notice_controller extends CI_Controller {
        //생성자
        function __construct() {
            parent::__construct(); //부모에있는 생성자를 호출

            $this->load->database();
            $this->load->model('Notice_model');

        }
        public function index() {
            $this->load->view('Notice_views');
        }

        public function write() {
            $title=$_POST['ttitle'];
            $content=$_POST['ccontent'];
            $name=$_POST['nname'];
            $this->Notice_model->writer($title, $content, $name);
            echo "저장완료";
        }
    }
?>
