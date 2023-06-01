<?php
namespace libs\system;
use libs\system\view;
class controller
{
    protected $view;
    public function __construct()
    {
        $this->view = new view();
    }

}

?>