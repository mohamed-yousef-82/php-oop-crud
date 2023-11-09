<?php

class LoginController extends MainController
{
    use inputfilter;
    use helper;
    private $model = "LoginModel";
    public function defaultAction()
    {
        $this->view();
        if (isset($_POST["login"])) {
            $this->sendFormData($_POST);
        }
    }

    public function sendFormData($data)
    {
        // if (isset($_FILES["image"])) {
        //     $upload = new Upload();
        //     $data["image"] = $upload->filesrc;
        // }  public function loginAction(){
        $login_user = $this->filterString($_POST['username']);
        $login_pass = $_POST['password'];
        $model = new $this->model();
        if($model->login($login_user,$login_pass)){
            $_SESSION['username'] = $login_user;
            if(isset($_SESSION['username'])){
                $_SESSION['message'] = 'تم تسجيل الدخول بنجاح';
                header('Location:admin');
            }else{
                header('Location:/login');
                }
        }else{
            $_SESSION['message'] = 'بيانات الدخول خاطئة';
            header('Location:/login');
        }


        // $_SESSION['message'] = 'تمت الاضافة بنجاح';
        // $this->redirect(DS.$this->scope.DS.$this->controller);
    }



}