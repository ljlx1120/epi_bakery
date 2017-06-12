<div class="frame">
  <div id="head">
    <?php
      $t = time();
      echo('Server time is ' . date('Y-m-d', $t));
     ?>
    <button onclick="alert('Hello!')">Say hello</button>

  </div>
  <div id="body">
    <div id="main">
      <?php print render($page['footer']); ?>
    </div>
    <button id="clickme">Click Me</button>
    <div id="header">
      <?php print render($page['header']); ?>
    </div>

    <hr>

    <div id="content">
      <?php print render($page['content']); ?>
    </div>
  </div>
</div>
