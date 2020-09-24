<?php
    session_start();
    require_once('../services/commentService.php');
    require_once('../services/postService.php');
    require_once('../services/userService.php');
    $user = getByEmail($_SESSION['email']);
    $posts = getpostByid($_GET['postid']);
    $cmnt = getAllComments($_GET['postid']);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./assets/donor/css/style.css">
    <title>Dashboard</title>
</head>
<body>
    <?php include('_raiser_navbar.php'); ?>
    <div class="homepage">
        <div class="row">
            <div class="column">
                <button class="default-button"><a href="./raiser_postedit.php?postid=<?= $_GET['postid'] ?>">Edit this post</a></button>
            </div>
            <div class="column" style="text-align: end;">
                <button class="default-button-02"><a href="./raiser_postedit.php?postid=<?= $_GET['postid'] ?>" style="color: #f50c0c; text-decoration: none;">Delete this post</a></button>
            </div>
        </div>
        <div class="postDetails">
            <h3 class="postTile"><?=$posts['post_title']?></h3>
            <img width="300px" src="../uploads/<?=$posts['post_pic']?>"/>
            <p class="postTime">Posted on : <?=$posts['post_time']?></p>
            <p class="postDesc"><?=$posts['post_details']?></p>
            <p class="postAmount">Total Amount Raised: <?=$posts['getamount']?></p>
        </div>
        Add Comment:
        <form action="../php/commentController.php" method="post">
        <input type="text" name="comment" required>
        <input type="hidden" name="pid" value="<?php echo $_GET['postid'] ?>">
        <input type="hidden" name="uid" value="<?php echo $user['user_id'] ?>">
        <input type="hidden" name="name" value="<?php echo $user['fullname'] ?>">
        <button type="submit" name="submit">comment</button>
        </form>
        Recent Comments:
        <?php for($i=0; $i != count($cmnt); $i++ ){ ?>
	        <p><b>Name: <?= $cmnt[$i]['name'] ?></b></p>
	        <p> <?= $cmnt[$i]['comment'] ?></p>
	        <hr>
        <?php } ?>
 
    </div>
</body>
</html>