<?php

class AboutController extends MainController
{
    use inputfilter;
    use helper;
    private $model = "AboutModel";
    public function defaultAction()
    {
        $allData = $this->data[$this->controller] = $this->model::getAll();
        if($allData){
            $id = $this->filterInt($allData[0]["id"]);
            $viewData = $this->data[$this->controller] = $this->model::getByPK($id);
        }
            $this->setData($viewData ?? null);

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


}