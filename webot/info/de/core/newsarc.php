    <h1 class="blue-white">NEWS ARCHIVE</h1>
        <?php
        for ($i = 1; $i <= 3; $i++) {
            $x = "../news/archive/2014/" . date('ymd') . ".html";
            $time = time() - 60 * 60 * 24 * $i;
            $date = date('ymd', $time);
            $year = date('Y', $time);
            $text = date('F j, Y', $time);
            echo '<a href="http://en.webot.org/news/archive/' . $year . '/?q=' . $date . '.html">' . $text . '</a> | ';
        }
        ?>