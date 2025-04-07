<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <title><?php echo isset($page_title) ? $page_title : 'Demo'; ?></title>
</head>
<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
  <div class="d-flex justify-content-between w-100">
    <a class="navbar-brand" href="#">Demo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Заявка</a>
        </li>
      </ul>
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Регистрация</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Вход</a>
        </li>
      </ul>
      </div>
    </div>
  </div>
</nav>
</header>