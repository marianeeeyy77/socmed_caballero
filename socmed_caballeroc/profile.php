<?php include 'views/header.php'; ?>
<div class="container">
    <div class="caballero"> 
        <div class="pro-pic">
            
        </div>
        <div class="name">
            <h2><?= $_SESSION['firstname']." ".$_SESSION['lastname'];?></h2>
        </div>
    </div>
    <div class="post-container">
        <form id="post-form" action="models/add_post.php" method="post">
            <textarea id="post-area" name="post-area" placeholder="What's on your mind"></textarea>
            <input type="submit" id="post-button" value="post">
        </form>
    </div>
    
</div>
<div class="user-posts">
        <?php include 'models/load_userpost.php'?>
    </div>
<?php include 'views/footer.php';