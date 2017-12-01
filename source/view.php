
<?php
  class View
  {
    private $model;

    function __construct($model)
    {
      $this->controller = $controller;
      $this->model = $model;
    }

    public function output()
    {
      $data = '<p>' . $this->model->string . '<p>';
      require_once $this->model->template;
    }
  }

?>
