<?php require "header.php" ?>
<?php if ($this->controller != "home" && $this->controller != "login"){require "inner-header.php";} ?>
{{content}}
<?php if ($this->controller != "home" && $this->controller != "login"){require "inner-footer.php";} ?>
<?php require "footer.php" ?>