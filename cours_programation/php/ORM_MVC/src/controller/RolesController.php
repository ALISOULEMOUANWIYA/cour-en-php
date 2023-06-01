<?php
// namespace src\controller;

use libs\system\Controller;
use src\model\RolesDb;

class RolesController extends Controller
{
    public $tableau = array("delete", "update", "edite");
    public function add()
    {
        return $this->view->load("roles/add");
    }

    public function getall() 
    {
        $roles_dao = new RolesDb();
        $roles = $roles_dao->findAll();
        print_r($roles);
        // $roles = array("ROLE_USER", "ROLE_ADMIN");
        //return $this->view->load("roles/getAll", $roles);
    }

    public function delete($id)
    {
        echo "Delete : " . $id;
        // return $this->view->load("roles/add");
    }

    public function edite($id)
    {
        echo "Edite : " . $id;
    }

    public function update($id)
    {
        echo "Edite : " . $id;
    }

    
}
