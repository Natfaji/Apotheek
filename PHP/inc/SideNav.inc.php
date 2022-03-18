<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<nav class="AdminNavigation">
    <a href="/apo_ahmad/AdminPage/" class="item <?php if($page=='Dashboard'){echo 'active';}?>" title="Dashboard">
        <i class=""></i><span>Dashboard </span>
    </a>
    <a href="/apo_ahmad/AdminPage/Products" class="item <?php if($page=='Products'){echo 'active';}?>" title="Products">
        <i class=""></i><span>Products</span>
    </a>
    <a href="/apo_ahmad/AdminPage/News" class="item <?php if($page=='News'){echo 'active';}?>" title="News">
        <i class=""></i><span>News</span>
    </a>
</nav>