<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Математика</title>
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
            <h2>Android-приложение тренажёр по математике для начальной школы</h2>
            <p class="tech-stack">
                Стек: Android (Java) · SQLite
            </p>    
            <div class="project-links">
                <a href="https://example.com" target="_blank" rel="noopener">🔗 Ссылка на RuStore </a>&nbsp;&nbsp;
                <a href="https://github.com/korolewsanya/Matematika" target="_blank" rel="noopener">💻 Ссылка на GitHub</a>
            </div>
        </section>

        <!-- Сетка с макетами страниц -->
        <section class="layout-grid">
            
            <!-- 1. Главная -->
            <article class="layout-card">
                <h2>Главная страница</h2>
                <div class="card-preview">
                    <img src="img/App/Matemaka/Главная.png" alt="Главная страница">
                </div>
                <br>
            </article>

            <!-- 2. Время -->
            <article class="layout-card">
                <h2>Время</h2>
                <div class="card-preview">
                    <img src="img/App/Matemaka/Время.png" alt="Время">
                </div>
            </article>

            <!-- 3. Длина -->
            <article class="layout-card">
                <h2>Длина</h2>
                <div class="card-preview">
                    <img src="img/App/Matemaka/Длина.png" alt="Длина">
                </div>
            </article>

            <!-- 4. ДлинаПеревод -->
            <article class="layout-card">
                <h2>Перевод длины</h2>
                <div class="card-preview">
                    <img src="img/App/Matemaka/ДлинаПеревод.png" alt="ДлинаПеревод">
                </div>
            </article>

            <!-- 5. ДлинаСравнить -->
            <article class="layout-card">
                <h2>Сравнить длину</h2>
                <div class="card-preview">
                    <img src="img/App/Matemaka/ДлинаСравнить.png" alt="ДлинаСравнить">
                </div>
            </article>

             <!-- 6. Жидкость -->
            <article class="layout-card">
                <h2>Жидкость</h2>
                <div class="card-preview">
                    <img src="img/App/Matemaka/Жидкость.png" alt="Жидкость">
                </div>
                <br>
            </article>

            <!-- 7. Масса -->
            <article class="layout-card">
                <h2>Масса</h2>
                <div class="card-preview">
                    <img src="img/App/Matemaka/Масса.png" alt="Масса">
                </div>
            </article>

            <!-- 8. Пример -->
            <article class="layout-card">
                <h2>Примеры</h2>
                <div class="card-preview">
                        <img src="img/App/Matemaka/Пример.png" alt="Пример">
                </div>
            </article>

            <!-- 9. Сравнение -->
            <article class="layout-card">
                <h2>Сравнение выражений</h2>
                <div class="card-preview">
                        <img src="img/App/Matemaka/Сравнение.png" alt="Сравнение">  
                </div>
            </article>

            <!-- 10. Результаты -->
            <article class="layout-card">
                <h2>Результаты </h2>
                <div class="card-preview">
                        <img src="img/App/Matemaka/Результаты.png" alt="Результаты">
                </div>
            </article>

        </section>
    </main>
    
    <footer>
        <?php include "footer.html"; ?>
    </footer>

</body>

</html>