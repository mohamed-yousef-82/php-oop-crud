<?php

class UsersController extends MainController
{
    use inputfilter;
    use helper;
    // use lang;
    public function defaultAction()
    {
        $viewData = $this->data[$this->controller] = UserModel::getAll();
        $this->setData($viewData);
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
        $model = new UserModel();
        $model->getFormData($data);
        $_SESSION['message'] = 'تمت الاضافة بنجاح';
        $this->redirect(DS.$this->scope.DS.$this->controller);
    }
    public function editAction()
    {

        $id = $this->filterInt($this->params[0]);
        $viewData = $this->data[$this->controller] = UserModel::getByPK($id);
        $this->setData($viewData);
        $this->view();
        if (isset($_POST["edit"])) {

            $this->sendFormData($_POST);
        }
    }

    public function deleteAction()
    {
        $id = $this->filterInt($this->params[0]);
        if (UserModel::delete($id)) {
            $_SESSION['message'] = 'تم الحذف بنجاح';
            $this->redirect(DS.$this->scope.DS.$this->controller);
        }

    }
}