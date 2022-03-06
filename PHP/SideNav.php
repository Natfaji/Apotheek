<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<nav class="AdminNavigation">
    <a href="/AdminPage/" class="item <?php if($page=='Dashboard'){echo 'active';}?>" title="Dashboard">
        <i class=""></i><span> Dashboard </span>
    </a>
    <a href="/AdminPage/Products" class="item <?php if($page=='Products'){echo 'active';}?>" title="Products">
        <i class=""></i><span> Products</span>
    </a>
    <a href="/AdminPage/console" class="item <?php if($page=='console'){echo 'active';}?>" title="Console">
        <i class=""></i><span> Console</span>
    </a>
    <a href="/AdminPage/log" class="item <?php if($page=='log'){echo 'active';}?>" title="Log">
        <i class=""></i><span> Log </span>
    </a>
    <a href="/AdminPage/players" class="item <?php if($page=='players'){echo 'active';}?>" title="Players">
        <i class=""></i><span> Players</span>
    </a>
    <a href="/AdminPage/files" class="item <?php if($page=='files'){echo 'active';}?>" title="Files">
        <i class=""></i><span> Files</span>
    </a>
    <a href="/AdminPage/worlds" class="item <?php if($page=='worlds'){echo 'active';}?>" title="Worlds">
        <i class=""></i><span> Worlds</span>
    </a>
    <a href="/AdminPage/backups" class="item <?php if($page=='backups'){echo 'active';}?>" title="Backups">
        <i class=""></i><span> Backups</span>
    </a>
    <a href="/AdminPage/access" class="item <?php if($page=='access'){echo 'active';}?>" title="Access">
        <i class=""></i><span> Access</span>
    </a>
</nav>