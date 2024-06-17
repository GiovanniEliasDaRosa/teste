<link rel="stylesheet" href="dumpper.css">
<script src="dumpper.js" async></script>

<?php
  function dump($code){
    
    $trace = debug_backtrace()[0];

    $file = str_replace('C:\xampp\htdocs\\', '', $trace['file']);
    $line = $trace["line"];

    echo "<div class='dumpper__div'>
    <span class='dumpper__header'>$file | $line</span>
    <pre class='dumpper'>";
    var_dump($code);
    echo "</pre></div>";
  }
?>