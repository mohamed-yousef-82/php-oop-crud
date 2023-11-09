<?php

class AdminController extends MainController
{
    use inputfilter;
    use helper;
    public function defaultAction()
    {
        $this->view();

    }


}