<?php
session_start();

include('functions.php');
include('connection.php');

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>replit</title>
    <link href="profile.css" rel="stylesheet" type="text/css" />
</head>

<div class = 'container'>
    <div class = 'main'>

        <!--Topbar-->
        <div class = 'topbar'>
            <a href = 'choicepage.php'>Home</a>
            <a href = 'logout.php'>Logout</a>
        </div>

        <!--Sidebar-->
        <div class = 'row'>
            <div class = 'col-md-4 mt-1'>
                <div class = 'card-side text-center sidebar'>
                    <div class = 'card body'>
                        <img src = 'logo.png' class = 'img' width = '150'>
                        <div class = 'mt-3'>
                            <h3 class = 'username'><?php echo $user_data['username'];?></h3>
                            <a href = 'subs.html'>Subclasses</a>
                            <a href = 'Races.html'>Races</a>
                            <a href = 'Feats.html'>Feats</a>
                            <a href = 'Backstories.html'>Backstories</a>
                            <a href = 'dice.html'>Dice</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Contnet-->
        <div class = 'col-md-8 mt-1'>
            <div class = 'card mb-3 content'>
                <h1 class = 'm-3'>About</h1>
                <div class = 'card body'>

                    <div class = 'row-content'>
                        <div class = 'col-md-3'>
                            <h5>Name</h5>
                        </div>
                        <div class = 'col-md-9 text-secondary'>
                            <p><?php echo $user_data['Name'];?></p>
                        </div>
                    </div>

                    <hr>

                    <div class = 'row-content'>
                        <div class = 'col-md-3'>
                            <h5>E-mail</h5>
                        </div>
                        <div class = 'col-md-9 text-secondary'>
                            <p><?php echo $user_data['Email'];?></p>
                        </div>
                    </div>

                    <hr>

                    <div class = 'row'>
                        <div class = 'col-md-3'>
                            <h5>user id</h5>
                        </div>
                        <div class = 'col-md-9 text-secondary'>
                            <p><?php echo $user_data['user_id'];?></p>
                        </div>
                    </div>

                    <hr>
                    <?php if(is_null($user_data['Description'])) : ?>
                    <div class = 'row'>
                        <div class = 'col-md-3'>
                            <h5>Description</h5>
                        </div>
                        <div class = 'col-md-9 text-secondary'>
                            <p>Description not set, plaese set it in editing part of your profile</p>
                        </div>
                    </div>
                    <?php else :?>
                        <div class = 'col-md-3'>
                            <h5>Description</h5>
                        </div>
                        <div class = 'col-md-9 text-secondary'>
                            <p><?php echo $user_data['Description'];?></p>
                        </div>
                    <?php endif?>
                </div>
            </div>
            <div class = 'card mb-3 content'>
                <h1 class = 'm3'>Editing</h1>
                <div class = 'card body'>
                    <div class = 'row'>
                        <div class = 'col-md-3'>
                            <h5>Edit description</h5>
                        </div>
                        <div class = 'col-md-9 text-secondary'>
                            <form method = "Post" action = 'Edit_desc.php'>
                                <input type = 'text' id = 'Edesc' name = 'Edesc' placeholder="Enter your new description">
                                <button type = 'submit'>Submit</button>
                            </form>
                        </div>
                    </div>

                    <div class = 'row'>
                        <div class = 'col-md-3'>
                            <h5>Edit username</h5>
                        </div>
                        <div class = 'col-md-9 text-secondary'>
                            <form method = "Post" action = 'Edit_user.php'>
                                <input type = 'text' id = 'Euser' name = 'Euser' placeholder="Enter your new username">
                                <button type = 'submit'>Submit</button>
                            </form>
                        </div>
                    </div>

                    <div class = 'row'>
                        <div class = 'col-md-3'>
                            <h5>Edit password</h5>
                        </div>
                        <div class = 'col-md-9 text-secondary'>
                            <form method = "Post" action = 'Edit_pass.php'>
                                <input type = 'text' id = 'Epass' name = 'Epass' placeholder="Enter your new password">
                                <button type = 'submit'>Submit</button>
                            </form>
                        </div>
                    </div>

                    <div class = 'row'>
                        <div class = 'col-md-3'>
                            <h5>Edit name</h5>
                        </div>
                        <div class = 'col-md-9 text-secondary'>
                            <form method = "Post" action = 'Edit_name.php'>
                                <input type = 'text' id = 'Ename' name = 'Ename' placeholder="Enter your new name">
                                <button type = 'submit'>Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class = 'card mb-3 content'>
                <h1 class = 'm3'>Comments</h1>
                <div class = 'card body'>
                    <div class = 'row'>
                        <div class = 'col-md-3'>
                            <h5>ENTRY NAME</h5>
                        </div>
                        <div class = 'col-md-9 text-secondary'>
                            <p>COMMENT</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</html>