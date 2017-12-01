
<?php
  class Model
  {
    public $string;

    function __construct()
    {
      $this->string = "The string has been loaded through the template.";
      $this->template = 'index.php';
    }
  }
?>
