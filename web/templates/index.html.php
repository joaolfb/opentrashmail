<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/pico.min.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link rel="stylesheet" href="css/prism.css">
  <link rel="stylesheet" href="css/opentrashmail.css">
  <title>Open Trashmail</title>
</head>

<body>
  <div class="topnav" id="OTMTopnav">
    <a href="/"><i class="fa fa-home" style="font-size:28px;"></i> Home <small class="version"><?=getVersion()?></small></a>
    <a href="/random" hx-get="/api/random" hx-target="#main"><i class="fas fa-random"></i> Generate random Email</a>
    <?php if($this->settings['ADMIN_ENABLED']==true):?><a href="/admin" hx-get="/api/admin" hx-target="#main" hx-push-url="/admin"><i class="fas fa-user-shield"></i> Admin</a><?php endif; ?>
    <a href="javascript:void(0);" class="icon" onclick="navbarmanager()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  <button class="htmx-indicator" aria-busy="true">Loading…</button>

  <main id="main" class="container" hx-get="/api/<?= $url ?>" hx-trigger="load">

  </main>

  <script src="/js/opentrashmail.js"></script>
  <script src="/js/htmx.min.js"></script>
  <script src="/js/moment-with-locales.min.js"></script>
</body>

</html>