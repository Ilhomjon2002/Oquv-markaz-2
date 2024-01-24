<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
    }

    header,
    nav,
    main,
    footer {
        padding: 20px;
    }

    header {
        background-color: #333;
        color: white;
    }

    .container {
        display: flex;
    }

    nav {
        background-color: #eee;
        flex: 1;
    }

    nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    nav li {
        margin-bottom: 10px;
    }

    nav a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    main {
        background-color: #f8f8f8;
        flex: 3;
        padding: 20px;
    }

    footer {
        background-color: #333;
        color: white;
        text-align: center;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend Interfeys</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Header</h1>
    </header>

    <div class="container">
        <nav>
            <ul>
                <li><a href="#">Menu Item 1</a></li>
                <li><a href="#">Menu Item 2</a></li>
                <li><a href="#">Menu Item 3</a></li>
            </ul>
        </nav>

        <main>
            <section>
                <h2>Content Section 1</h2>
                <p>This is the main content of section 1.</p>
            </section>

            <section>
                <h2>Content Section 2</h2>
                <p>This is the main content of section 2.</p>
            </section>

            <section>
                <h2>Content Section 3</h2>
                <p>This is the main content of section 3.</p>
            </section>
        </main>
    </div>

    <footer>
        <p>Footer &copy; 2023</p>
    </footer>
</body>

</html>