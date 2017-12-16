<?php
/**
 * user controller class
 */
class userController extends Controller {

    // db initialisation
    protected function init(){
        $this->db = new SqlDataAdapter(
            $this->cfg['db']['type'],
            $this->cfg['db']['hostname'],
            $this->cfg['db']['database'],
            $this->cfg['db']['username'],
            $this->cfg['db']['password']
        );
    }

    public function index(){
        return $this->view();
    }

    public function login() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = array(
                'login' => $_POST['login'],
                'pwd' => $_POST['pwd']
            );
            $this->_model->login($data);
        }
    }
}
