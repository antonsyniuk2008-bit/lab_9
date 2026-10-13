<?php
?>
<nav>
    <ul>
        <li><a href="index.php">Головна</a></li>
     
        <?php 
        if (!empty($_SESSION['is_logged'])): 
        ?>
            <li><a href="cabinet.php">Кабінет</a></li>
            <li><a href="logout.php">Вихід</a></li>
        <?php endif; ?>
    </ul>
</nav>