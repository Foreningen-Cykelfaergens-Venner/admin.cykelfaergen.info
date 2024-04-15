<body>
    <header class="main-header">
        <?php include_once __DIR__."/../Logo/index.php"; ?>
        <nav class="navigation">
            <?php
                foreach ($nav as $key => $value) {
                    echo "<a href='$value->path'>" . $value->title . "</a>";
                }
            ?>
        </nav>
    </header>