<?php
class indexController extends Controller {

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
    // just retuen the view
    public function index(){
        return $this->view();
    }

}
