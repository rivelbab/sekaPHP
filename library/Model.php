<?php
class Model {

	protected $_model;
    public $db, $controller;

    //Constructor for Model
	public function __construct($db) {
        $this->db = $db;
		$this->_model = get_class($this);
        $defaultModel = ($this->_model=='Model');

        if(!$defaultModel){
            $this->table = preg_replace('/Model$/', '', $this->_model);// remove ending Model
        }

        $this->init();
	}

	protected function init(){
        //code here(for derived class)
    }
}
