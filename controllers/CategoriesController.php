<?php

class CategoriesController extends MainController
{
    use inputfilter;
    use helper;
    private $model = "CategoryModel";
    public function defaultAction()
    {

        $viewData = $this->data[$this->controller] = $this->model::getAll();
        $this->setData($viewData);       
        $this->view();
    }

    public function addAction()
    {
        $viewData = $this->data[$this->controller] = $this->model::getAll();
        $this->setData($viewData);  

        $this->view();
        // $json = file_get_contents('php://input');

        // // Converts it into a PHP object
        //  $jsondata = json_decode($json);
        if (isset($_POST["add"])) {
            var_dump($jsondata);

            $this->sendFormData($_POST);
        }
    }
    public function sendFormData($data)
    {
        if (isset($_FILES["image"])) {
            $upload = new Upload();
            $data["image"] = $upload->filesrc;
        }
        $model = new $this->model();
        $model->getFormData($data);
        $_SESSION['message'] = 'تمت الاضافة بنجاح';
        $this->redirect(DS.$this->scope.DS.$this->controller);
    }
    public function editAction()
    {
        $id = $this->filterInt($this->params[0]);
        $viewData = $this->data[$this->controller] = $this->model::getByPK($id);
        $viewData["all"] = $this->model::getAll();
        $this->setData($viewData);
        $this->view();
        if (isset($_POST["edit"])) {

            $this->sendFormData($_POST);
        }
    }

    public function deleteAction()
    {
        $id = $this->filterInt($this->params[0]);
        if ($this->model::delete($id)) {
            $_SESSION['message'] = 'تم الحذف بنجاح';
            $this->redirect(DS.$this->scope.DS.$this->controller);
        }

    }
}