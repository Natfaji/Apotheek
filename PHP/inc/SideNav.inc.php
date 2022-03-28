<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<nav class="AdminNavigation">
    <a href="/apo_ahmad/AdminPage/" class="item <?php if($page=='AdminDashboard'){echo 'active';}?>">
        <i class=""></i><span>Dashboard </span>
    </a>
    <a href="/apo_ahmad/AdminPage/AdminProducts" class="item <?php if($page=='AdminProducts'){echo 'active';}?>">
        <i class=""></i><span>Products</span>
    </a>
    <a href="/apo_ahmad/AdminPage/AdminNews" class="item <?php if($page=='AdminNews'){echo 'active';}?>">
        <i class=""></i><span>News</span>
    </a>
    <a href="/apo_ahmad/AdminPage/AdminContact" class="item <?php if($page=='AdminContact'){echo 'active';}?>">
        <i class=""></i><span>Message</span>
    </a>
</nav>