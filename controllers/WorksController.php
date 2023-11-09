<?php

class WorksController extends MainController
{
    use inputfilter;
    use helper;
    public $pagination;
    private $model = "WorkModel";
    public $categories;
    public function defaultAction()
    {
        $start =1;
        $end =5;
        $viewData = $this->data[$this->controller] = $this->model::select_join_items($start,$end);
        $this->categories = CategoryModel::getAll();
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
        $categories = CategoryModel::getAll();
        $this->setData($categories);       
        $this->view();
        if (isset($_POST["add"])) {

            $this->sendFormData($_POST);
        }
    }
    public function sendFormData($data)
    {
        $data["user"] = $_SESSION["username"];
        $data["date"] = date("Y-m-d H:i:s");
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
        $viewData["categories"] = CategoryModel::getAll();
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
        $viewData["categories"] = CategoryModel::getAll();
        $this->setData($viewData);
        $this->view();
    }
    public function categoryAction()
    {

        $start =1;
        $end =5;
        $cat_id = $this->filterInt($this->params[0]);
        $viewData = $this->data[$this->controller] = $this->model::select_join_items($start,$end,$cat_id);
        // $viewData["categories"] = CategoryModel::getAll();
        $this->setData($viewData);       
        $this->pagination  = $this->model::pagination($start,$end);
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