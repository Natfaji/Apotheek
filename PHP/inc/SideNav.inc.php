<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<nav class="AdminNavigation">
    <a href="/apo_ahmad/AdminPage/" class="item <?php if($page=='AP_Dashboard'){echo 'active';}?>">
        <i class=""></i><span>Dashboard </span>
    </a>
    <a href="/apo_ahmad/AdminPage/AP_Products" class="item <?php if($page=='AP_Products'){echo 'active';}?>">
        <i class=""></i><span>Products</span>
    </a>
    <a href="/apo_ahmad/AdminPage/AP_News" class="item <?php if($page=='AP_News'){echo 'active';}?>">
        <i class=""></i><span>News</span>
    </a>
    <a href="/apo_ahmad/AdminPage/AP_Contact" class="item <?php if($page=='AP_Contact'){echo 'active';}?>">
        <i class=""></i><span>Message</span>
    </a>
</nav>