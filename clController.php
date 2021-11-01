<?php
require_once "clView.php";
require_once "clModel.php";
require_once "clApiView.php";

class clController{
    private $view;
    private $model;
    private $apiview;

    function __construct()
    {
        $this->view = new clView();
        $this->model = new clModel();
        $this->apiview = new clApiView();
    }
    
    public function getAll($params = null){
        /* $s = $params[":some"]; */

        $tableCl = $this->model->bringAll();
        /* $this->view->showCl($tableCl); */
        if (isset($tableCl) && !empty($tableCl)) {
            return $this->apiview->response($tableCl, 200);
        } else {
            return $this->apiview->response("La solicitud no existe", 404);
        }
    }

    public function insertInto($params = null){
        /* $i = $params[":insert"]; */

        $body = $this->getBody();

        $lastId = $this->model->insertCl($body->nombre, $body->descripcion, $body->precio);

        if ($lastId != 0) {
           $this->apiview->response('El objeto se insertó con el ID= '.$lastId.'', 200);
        } else {
            $this->apiview->response('El objeto no pudo insertarse', 500);
        }

    }

    public function updateCl($params = null){
        $i = $params[":id"];
        $b = $this->getBody();

        $object = $this->model->bringOne($i);

        if (isset($object) && !empty($object)) {
            $this->model->updateInto($b->nombre, $b->descripcion, $b->precio, $i);
            $this->apiview->response('El objeto ha sido modificado según el ID= '.$i.'', 200);
        } else {
            $this->apiview->response('El objeto de ID= '.$i.' no pudo modificarse porque no existe', 404);
        }
    }
    
    public function deleteCl($params = null){
        $i = $params[":id"];
        $object = $this->model->bringOne($i);

        if (isset($object) && !empty($object)) {
           $this->model->deleteOneCl($i);
           $this->apiview->response('El objeto de ID= '.$i.' fue eliminado', 200);
        } else {
            $this->apiview->response('El objeto de ID= '.$i.' no pudo ser eliminado porque no existe', 404);
        }
    }

    private function getBody() {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }
}