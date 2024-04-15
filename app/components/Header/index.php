<header class="main-header">
    <h1>Cykelfaegen Admin</h1>
    <nav class="navigation">
        <?php
            foreach ($nav as $key => $value) {
                echo "<a href='$value->path'>" . $value->title . "</a>";
            }
        ?>
    </nav>
</header>