<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";

class clView{
    
    function __construct()
    {
        $this->smarty = new Smarty();
    }
   public function showCl($c){
        $this->smarty->assign("cleaning", $c);
        $this->smarty->display("clTable.tpl");
    }
}