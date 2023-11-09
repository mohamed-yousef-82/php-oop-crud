<?php

class HomeController extends MainController
{
    use inputfilter;
    use helper;
    use lang;
    public $slider;
    public function defaultAction()
    {
        // $viewData = $this->data[$this->controller] = UserModel::getAll();
        // $this->setData($viewData);
         
        $viewData['blogscount'] = MainModel::counter('id','blog');
        $viewData['workscount'] = MainModel::counter('id','works');
        $viewData['slidercount']= MainModel::counter('id','slider');
        $viewData['userscount'] = MainModel::counter('id','users');
        $viewData['blog']       = BlogModel::getAll(0,3);
        $viewData['works']       = WorkModel::getAll(0,3);
        $this->setData($viewData);
        $this->slider = SliderModel::getAll();     
        $this->view();
    }


}