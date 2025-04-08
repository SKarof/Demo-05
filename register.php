<?php
$page_title = 'Регистрация'; // Задаем заголовок страницы
include 'components/header.php';
?>
<body class="bg-body-tertiary">
    <main>
        <section class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h1 class="text-center display-4 mb-3">Регистрация</h1>
                    <div class="registrationblock">
                        <?php require('components/sections/registration/register_form.php') ?> 
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
<?php include 'components/footer.php' ?>