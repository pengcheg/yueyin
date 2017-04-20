<?php
namespace Student\Controller;
use Common\Controller\HomebaseController;

class IndexController extends HomebaseController{
    function index(){
    $this->display(":index");
  }
}