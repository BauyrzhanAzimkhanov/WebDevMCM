<?php
	
	include 'config-comment-db.php';

	if (isset($_POST['post_comment'])) {

		$name = $_POST['name'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO demo (name, message)
		VALUES ('$name', '$message')";

		if ($conn->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}

	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Find 'kdb through the years' on TikTok | TikTok Search</title>
    <link rel="icon" href="https://seeklogo.com/images/T/tiktok-app-icon-logo-0F5AD7AE01-seeklogo.com.png">
    <script src="https://kit.fontawesome.com/44bb0c178e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="forYouCommentPage-style.css">
</head>
<body>
    <div id="app">
        <div class="header-container">
            <div class="header-wrapper-main">
                <a class="tt-link-logo" href="for_you.html">
                    <img class="close-btn" src="./images/tiktok-icons/close-button.png" width="40px" height="40px">
                    <img class="tt-logo" src="./images/tiktok-icons/tt-round-logo.png" width="40px" height="40px">
                </a>
                <div class="report-btn">
                    <i class="far fa-flag"></i> Report
                </div>
                <div class="header-center-container"></div>
            </div>
        </div>
        <div class="body-container">
            <div class="video-container">
                <div class="video-wrapper">
                    <div class="video-wrapper-container">
                        <a class="video-edit-link" href="video-edit.php">
                            <i class="fas fa-cut"></i>
                        </a>
                        <img src="./images/tiktok-icons/volume.png">
                        <div class="player-wrapper">
                            <video class="video-item" mediatype="video" autoplay controls muted src="./videos/mancity-video.mp4"></video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-container">
                <div class="info-container">
                    <a class="club-logo" href="https://www.tiktok.com/@mancity">
                        <img src="./images/tiktok-icons/mc-logo.png" width="40px" height="40px">
                    </a>
                    <a class="club-name" href="https://www.tiktok.com/@mancity">mancity <i class="fas fa-check-circle"></i></a>
                    <button type="button" class="follow-btn">Follow</button>
                   
                </div>
                <div class="text-info">
                    <p class="user-txt">
                        KDB through the years 📸📆 @kevindebruyne #teenagedirtbag #football #premierleague #kdb #teamphoto #kevindebruyne <br> #weetus
                    </p>
                    <p class="user-acc">
                        <a href="https://www.tiktok.com/music/teenage-dirtbag-7130039735665314566" target="_blank">
                            <i class="fas fa-music"></i>
                            teenage dirtbag - user19192570443
                        </a>
                    </p>
                    <div class="like-comments">
                        <button class="like-btn">
                            <span id="icon"><i class="fas fa-heart"></i></span>
                            <span id="count">632200</span> 
                         </button>
                        <img class="comment" src="./images/tiktok-icons/comment-button-icon.png" width="32px" height="32px">
                        1935 
                        <div class="wrapper">
                            <form action="" method="post" class="form">
                                <input type="text" class="name" name="name" placeholder="Name">
                                <br>
                                <textarea name="message" cols="30" rows="10" class="message" placeholder="Message"></textarea>
                                <br>
                                <button type="submit" class="btn" name="post_comment">Post Comment</button>
                            </form>
                        </div>

                        <div class="content">
                            <?php

                                $sql = "SELECT * FROM demo";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                            ?>
                                        <h3><?php echo $row['name']; ?></h3>
                                        <p><?php echo $row['message']; ?></p>   
                            <?php 
                                    } 
                                } 
                            ?>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>

const likeBtn = document.querySelector(".like-btn");
let likeIcon = document.querySelector("#icon"),
    count = document.querySelector("#count");

let clicked = false;

likeBtn.addEventListener("click", () => {
  if (!clicked) {
    clicked = true;
    likeIcon.style.color = "red";
    count.textContent++;
  } else {
    clicked = false;
    likeIcon.style.color = "grey";
    count.textContent--;
  }
});

</script>

</body>