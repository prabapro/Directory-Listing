<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Codechilli Sandbox</title>
  <link rel="stylesheet" href="includes/css/bootstrap.min.css">
  <link href="includes/css/style.css" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="includes/favicons/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="180x180" href="includes/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="includes/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="includes/favicons/favicon-16x16.png">
  <link rel="manifest" href="includes/favicons/manifest.json">
  <link rel="mask-icon" href="includes/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="theme-color" content="#ffffff">
</head>

<body>

  <div class="container">
    <div class="row mt-4 pt-4">
      <div class="col-lg-4 text-center">
        <img src="includes/img/logo.png" class="img-responsive" alt="Codechilli">
        <p>NodeServer</p>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-lg-4">
        <div class="list-group">
          <?php
                  // set to current directory
              $dir = '';

              // directories only. ignore files, etc.
              foreach (glob($dir . '*', GLOB_ONLYDIR) as $folder) {
              // do not include specific directories
                  if (($folder != '*') && (substr($folder, -6) != '.files') && ($folder != 'includes') && ($folder != 'dashboard') && ($folder != 'softaculous')) {
                      // list directories and their links
                      ?>
          <li class="list-group-item">
            <a href="<?php echo $dir . $folder;?>">
              <?php echo $folder;?>
            </a>

            <!-- 
                  // WordPress Admin Login
                  <mark>
                  <code>
                    <a href="<?php echo $dir . $folder; ?>/wp-admin">
                      <?php echo "login" ?>
                    </a>
                  </code>
                </mark> -->

            <?php } } ?>
        </div>
      </div>

      <div class="row mt-4">
        <ul class="admin-links">
          <li>
            <a href="phpmyadmin">PHPMyAdmin</a>
          </li>
          <li>
            <a href="https://github.com/prabapro">GitHub</a>
          </li>
          <li>
            <a href="vscode://#">VSCode</a>
          </li>
          <li>
            <a href="https://127.0.0.1:8443/phpmyadmin/index.php">AWS PHPMyAdmin</a> <span><small>Run
                <mark>aws-sql</mark> first</small></span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</body>
<script> // Open all the directories in new window
  var links = document.links;
  for (var i = 0; i < links.length; i++) {
    links[i].target = "_blank";
  }
</script>

</html>