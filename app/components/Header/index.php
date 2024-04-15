<header>
    <h1>Cykelfaegen Admin</h1>
    <nav>
        <?php
            foreach ($nav as $key => $value) {
                echo "<a href='$value->path'>" . $value->title . "</a>";
            }
        ?>
    </nav>
</header>