<?php include "../parts/meta.php";?>
<header class="navbar">
    <div class="container display-flex">
        <div class="flex-none">
           <h1>User Admin</h1>
        </div>
        <div class="flex-stretch"></div>
        <nav class="nav nav-flex flex-none">
            <ul>
                <li><a href="<?= $_SERVER['PHP_SELF'] ?>">User List</a></li>
                <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a></li>

            </ul>
        </nav>
    </div>
</header>