<?php
class dashboard{
  public function getPage(){
    return '<!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>

        <meta charset="utf-8">
        <title></title>
        <script type="text/javascript">
          function preventBack() { window.history.forward(); }
          setTimeout("preventBack()", 0);
          window.onunload = function () { null };
      </script>

      <script>
      window.location.hash="no-back-button";
      window.location.hash="Again-No-back-button";//again because google chrome don\'t insert first hash into history
      window.onhashchange=function(){window.location.hash="no-back-button";}
      </script>
      </head>
      <body>
        <form class="" action="try.php" method="post">
          <button type="submit" name="newentry">New Entry</button>
          <button type="submit" name="myapp">My Apllication</button>
        </form>

      </body>
    </html>
';
  }
} ?>
