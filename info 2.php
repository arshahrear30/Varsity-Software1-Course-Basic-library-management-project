<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nerd Herd Software Solutions</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
            color: #333;
        }

        header {
            background-color: #1a1a2e;
            color: #fff;
            padding: 30px;
            text-align: center;
        }

        header h1 {
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 5px #00adb5, 0 0 10px #00adb5;
            }
            to {
                text-shadow: 0 0 20px #00fff7, 0 0 30px #00fff7;
            }
        }

        nav {
            background-color: #16213e;
            padding: 10px 0;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        nav ul li {
            margin: 10px 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        nav ul li a::after {
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%) scale(0);
            width: 100%;
            height: 100%;
            background-color: rgba(0, 173, 181, 0.2);
            border-radius: 8px;
            transition: transform 0.3s ease;
            z-index: 0;
        }

        nav ul li a:hover::after {
            transform: translate(-50%, -50%) scale(1);
        }

        nav ul li a:hover {
            color: #00adb5;
        }

        main {
            padding: 40px;
            text-align: center;
        }

        .coming-soon {
            font-size: 1.8em;
            color: #ff5722;
            font-weight: bold;
            animation: pulse 1.5s infinite;
            margin-top: 10px;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.1);
                opacity: 0.7;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        footer {
            background-color: #1a1a2e;
            color: white;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Nerd Herd Software Solutions</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">Our Project Member</a></li>
            <li><a href="https://www.facebook.com/arshahrear.cse" target="_blank">A R Shahrear</a></li>
            <li><a href="https://www.facebook.com/sumon.arafat.reja.2024" target="_blank">Sumon Arafat Reja</a></li>
            <li><a href="https://www.facebook.com/ahnaf.tanvir.942" target="_blank">Tanvir Ahmed</a></li>
            <li><a href="https://www.facebook.com/profile.php?id=100016928915093" target="_blank">Tawsif Wazed</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <h2>Our Project</h2>
            <p class="coming-soon">Coming soon...</p>

            <?php
                $currentTime = date("Y-m-d H:i:s");
                echo "<p>Current Time: " . $currentTime . "</p>";
            ?>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> NubSoft</p>
    </footer>

</body>
</html>
