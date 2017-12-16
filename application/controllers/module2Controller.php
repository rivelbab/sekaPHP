<?php
class module2Controller extends Controller {

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

    //do nothing else than returning view now
	public function index(){
        return $this->view();
    }
}
