<?php
    include "header.php";
    require "data.php";
    require "../database/dbconnection.php";
    require "../includes/login.check.admin.php";
    require "../includes/login.admin.php";
    
    $all_members=allMembers($conn);
    $no_of_all_members=$all_members->num_rows;

    $all_admins = allAdmins($conn);
    $no_of_all_admins = $all_admins->num_rows;

    $all_users = allUsers($conn);
    $no_of_all_users = $all_users->num_rows;

    $all_inactive_admins = allInactiveAdmins($conn);
    $no_of_inactive_admins = $all_inactive_admins->num_rows;

    $all_inactive_users = allInactiveUsers($conn);
    $no_of_inactive_users = $all_inactive_users->num_rows; 

    $all_posts=allPosts($conn);
    $no_of_all_posts = $all_posts->num_rows;
?>
<h1>Admin Dashboard</h1>
<?php
    if(isset($_GET["promote"])){
        echo "<p>User promoted successfully.</p>";
    }
?>
<div class="cards">
    <div class="card">
        <div class="card-text">
            <h2>Members</h2>
            <p class="card-no"><?php echo $no_of_all_members ?></p>
        </div>
        <div class="card-button">
            <a href="members.all.php"> View More...</a>
        </div>
    </div>
    <div class="card">
        <div class="card-text">
            <h2>Admins</h2>
            <p class="card-no"><?php echo $no_of_all_admins ?></p>
        </div>
        <div class="card-button">
            <a href="members.admins.php"> View More...</a>
        </div>
    </div>
    <div class="card">
        <div class="card-text">
            <h2>Users</h2>
            <p class="card-no"><?php echo $no_of_all_users ?></p>
        </div>
        <div class="card-button">
            <a href="members.users.php"> View More...</a>
        </div>
    </div>
    <div class="card">
        <div class="card-text">
            <h2>Inactive Admins</h2>
            <p class="card-no"><?php echo $no_of_inactive_admins ?></p>
        </div>
        <div class="card-button">
            <a href="members.admins.incative.php"> View More...</a>
        </div>
    </div>
    <div class="card">
        <div class="card-text">
            <h2>Inactive Users</h2>
            <p class="card-no"><?php echo $no_of_inactive_users ?></p>
        </div>
        <div class="card-button">
            <a href="members.users.inactive.php"> View More...</a>
        </div>
    </div>
    <div class="card">
        <div class="card-text">
            <h2>Posts</h2>
            <p class="card-no"><?php echo $no_of_all_posts ?></p>
        </div>
        <div class="card-button">
            <a href="post.view.php"> View More...</a>
        </div>
    </div>
</div>

<?php
    include_once("../footer.php");
?>