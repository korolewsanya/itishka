<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Marck+Script&family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="site.css" />
    <title>CRM системы</title>
</head>

<body>
 <header>
        <?php include "header.html"; ?>
    </header>
    
    <main>
        <!-- Сетка с макетами страниц -->
        <section class="layout-grid">
            
            <!-- 1. Главная страница kovka-->
            <article class="layout-card">
                <h2>Админ-панель + CRM на PHP без фреймворков</h2>
                <div class="card-preview">
                    <img src="img/CRM/kovka/admin.png" alt="Главная страница kovka">
                </div>
                <br>
                <a href="CRM_kovka.php" target="_blank" rel="noopener">🔗 Подробнее</a>
            </article>

            <!-- 2. Главная страница kovka-Laravel -->
            <article class="layout-card">
                <h2>Админ-панель + CRM на Laravel + Filament</h2>
                <div class="card-preview">
                    <img src="img/CRM/kovka-laravel/Инфопанель.png" alt="Главная страница kovka-Laravel">
                </div>
                <br>
                <a href="CRM_kovka-laravel.php" target="_blank" rel="noopener">🔗 Подробнее</a>
            </article>

        </section>
    </main>
    
    <footer>
        <?php include "footer.html"; ?>
    </footer>

</body>

</html>