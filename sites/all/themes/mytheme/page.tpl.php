<div class="frame">
  <div>
    <?php
      $t = time();
      echo('Server time is ' . date('Y-m-d', $t));
     ?>
  </div>
    <button onclick="alert('Hello!')">Say hello</button>
  <div id="body">
    <div id="main">
      <?php print render($page['footer']); ?>
    </div>
    <div id="header">
      <?php print render($page['header']); ?>
    </div>

    <hr>

    <div id="content">
      <?php print render($page['content']); ?>
    </div>
  </div>
</div>
