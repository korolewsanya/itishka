<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Приложение к проекту Ковка</title>
    <link rel="stylesheet" type="text/css" href="app.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Marck+Script&family=Lobster&display=swap" rel="stylesheet">
</head>

<body>
   <header>
        <?php include "header.html"; ?>
    </header>
    
    <main>
         <!-- Шапка проекта kovka-laravel/ Описание -->
        <section class="project-intro">
            <h2>Админ-панель + CRM для интернет-магазина кованых изделий</h2>
            <p class="tech-stack">
                Стек: Android (Java) · Volley · Gson · Glide · REST API (JSON) · MySQL (backend)
            </p>    
            <div class="project-links">
                <a href="https://www.rustore.ru/catalog/app/com.example.kovka" target="_blank" rel="noopener">🔗 Ссылка на RuStore (логин: admin@kovka.com, пароль:12345678)</a>&nbsp;&nbsp;
                <a href="https://github.com/korolewsanya/kovka-laravel-android" target="_blank" rel="noopener">💻 Ссылка на GitHub</a>
            </div>
        </section>

        <!-- Сетка с макетами страниц -->
        <section class="layout-grid">
            
            <!-- 1. Главная -->
            <article class="layout-card">
                <h2>Главная страница</h2>
                <div class="card-preview">
                    <img src="img/App/kovka-laravel/Главная.png" alt="Главная страница">
                </div>
                <br>
            </article>

            <!-- 2. Заказы -->
            <article class="layout-card">
                <h2>Заказы</h2>
                <div class="card-preview">
                    <img src="img/App/kovka-laravel/Заказы.png" alt="Заказы">
                </div>
            </article>

            <!-- 3. ЗаказыРедактирование -->
            <article class="layout-card">
                <h2>Изменить заказ</h2>
                <div class="card-preview">
                    <img src="img/App/kovka-laravel/ЗаказыРедактирование.png" alt="Редактирование заказов">
                </div>
            </article>

            <!-- 4. Товары -->
            <article class="layout-card">
                <h2>Товары</h2>
                <div class="card-preview">
                    <img src="img/App/kovka-laravel/Товары.png" alt="Товары">
                </div>
            </article>

            <!-- 5. ТоварыСоздание -->
            <article class="layout-card">
                <h2>Создание товаров</h2>
                <div class="card-preview">
                    <img src="img/App/kovka-laravel/ТоварыСоздание.png" alt="Создание товаров">
                </div>
            </article>

             <!-- 6. Финансы -->
            <article class="layout-card">
                <h2>Финансы</h2>
                <div class="card-preview">
                    <img src="img/App/kovka-laravel/Финансы.png" alt="Финансы">
                </div>
                <br>
            </article>

            <!-- 7. МатериалыРедактирование -->
            <article class="layout-card">
                <h2>Замена материала</h2>
                <div class="card-preview">
                    <img src="img/App/kovka-laravel/МатериалыРедактирование.png" alt="Добавление материалов">
                </div>
            </article>

            <!-- 8. Материалы -->
            <article class="layout-card">
                <h2>Материалы</h2>
                <div class="card-preview">
                    <a href="#img1">
                        <img src="img/App/kovka-laravel/Материалы.png" alt="Материалы">
                    </a>
                    <a href="#" class="lightbox" id="img1">
                        <img src="img/App/kovka-laravel/Материалы.png" alt="Материалы">
                    </a>
                </div>
            </article>

            <!-- 9. Отчеты -->
            <article class="layout-card">
                <h2>Отчеты</h2>
                <div class="card-preview">
                    <a href="#img2">
                        <img src="img/App/kovka-laravel/Отчеты.png" alt="Отчеты">
                    </a>
                    <a href="#" class="lightbox" id="img2">
                        <img src="img/App/kovka-laravel/Отчеты.png" alt="Отчеты">
                    </a>    
                </div>
            </article>

            <!-- 10. ОтчетыРедактирование -->
            <article class="layout-card">
                <h2>Действие с отчетом </h2>
                <div class="card-preview">
                    <a href="#img3">
                        <img src="img/App/kovka-laravel/ОтчетыРедактирование.png" alt="...">
                    </a>
                    <a href="#" class="lightbox" id="img3">
                        <img src="img/App/kovka-laravel/ОтчетыРедактирование.png" alt="...">
                    </a>
                </div>
            </article>

        </section>
    </main>
    
    <footer>
        <?php include "footer.html"; ?>
    </footer>

</body>

</html>