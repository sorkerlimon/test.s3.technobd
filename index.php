<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechnoBD Limited Blog</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #0779e4 3px solid;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 3em;
        }

        header p {
            font-size: 1.2em;
            margin: 10px 0 20px;
        }

        nav {
            background: #0779e4;
            color: #fff;
            padding: 10px 0;
        }

        nav ul {
            padding: 0;
            list-style: none;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin: 0 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1.2em;
        }

        #main-content {
            padding: 30px 0;
            text-align: center;
        }

        #main-content h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        #main-content .post {
            background: #fff;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #main-content .post h3 {
            font-size: 1.8em;
            color: #333;
        }

        #main-content .post .date {
            color: #888;
            font-size: 0.9em;
            margin-bottom: 10px;
            display: block;
        }

        #main-content .post p {
            font-size: 1.1em;
            margin-bottom: 15px;
        }

        #main-content .post .read-more {
            display: inline-block;
            padding: 10px 20px;
            background: #0779e4;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
        }

        #main-content .post .read-more:hover {
            background: #0056b3;
        }

        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 20px;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>TechnoBD Limited</h1>
            <p>Leading Technology Solutions Provider</p>
        </div>
    </header>

    <nav>
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section id="main-content">
        <div class="container">
            <h2>Welcome to the TechnoBD Blog</h2>
            <p>Stay updated with our latest news, trends, and solutions in technology.</p>

            <!-- Blog posts dynamically loaded -->
            <?php
                // Simulated blog posts
                $posts = [
                    [
                        'title' => 'TechnoBD Launches New Cloud Solutions',
                        'date' => '2024-09-25',
                        'excerpt' => 'We are excited to announce the launch of our new cloud solutions platform...'
                    ],
                    [
                        'title' => 'The Future of AI in Business',
                        'date' => '2024-08-14',
                        'excerpt' => 'Artificial intelligence is rapidly transforming businesses worldwide...'
                    ],
                    [
                        'title' => 'How to Secure Your Digital Assets',
                        'date' => '2024-07-20',
                        'excerpt' => 'With the rise of cyber threats, securing your digital assets has become crucial...'
                    ]
                ];

                // Loop through posts
                foreach ($posts as $post) {
                    echo "<div class='post'>";
                    echo "<h3>" . $post['title'] . "</h3>";
                    echo "<span class='date'>" . $post['date'] . "</span>";
                    echo "<p>" . $post['excerpt'] . "</p>";
                    echo "<a href='#' class='read-more'>Read More</a>";
                    echo "</div>";
                }
            ?>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 TechnoBD Limited. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
