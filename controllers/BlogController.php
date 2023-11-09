<?php

class BlogController extends MainController
{
    use inputfilter;
    use helper;
    public $pagination;
    private $model = "BlogModel";
    public function defaultAction()
    {
        $start =1;
        $end =5;
        $viewData = $this->data[$this->controller] = $this->model::getAll($start,$end);
        $this->setData($viewData);       
        $this->pagination  = $this->model::pagination($start,$end);
        $this->view();
    }
    public function searchAction()
    {
        if (isset($_POST["search"])) {
            $search = $_POST["search"];
            $viewData = $this->data[$this->controller] = $this->model::search($search);
            $this->setData($viewData);  
        }
            $this->view();    
    }
    public function addAction()
    {
        $this->view();
        if (isset($_POST["add"])) {

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
        $this->setData($viewData);
        $this->view();
        if (isset($_POST["edit"])) {

            $this->sendFormData($_POST);
        }
    }
    public function articleAction()
    {

        $id = $this->filterInt($this->params[0]);
        $viewData = $this->data[$this->controller] = $this->model::getByPK($id);
        $this->setData($viewData);
        $this->view();
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