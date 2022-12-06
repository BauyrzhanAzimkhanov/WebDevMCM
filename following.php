<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Following - Watch videos from creators you follow | TikTok </title>
    <link rel="icon" href="https://seeklogo.com/images/T/tiktok-app-icon-logo-0F5AD7AE01-seeklogo.com.png">
    <script src="https://kit.fontawesome.com/44bb0c178e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="following-style.css">
</head>
  <body>
    <header>
      <nav class="navbar">
        <img class="logo" src="assets/logo.png" alt="Tiktok" />
        <?php
        // Create connection
        $conn = mysqli_connect('localhost', 'root', 'root', 'search_db');
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        if (isset($_POST['submit'])) {
          $searchAcc = $_POST['search'];

          $sql = "SELECT * FROM accounts WHERE username LIKE '%$searchAcc%' OR firstName LIKE '%$searchAcc%' OR lastName LIKE '%$searchAcc%'";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                if ($row['username'] == 'kagiristwins') {
                  echo '<a href="https://www.tiktok.com/@kagiristwins?lang=en">'.$row['firstName']." ".$row['lastName'].'</a>'; 
                }
                elseif ($row['username'] == 'kbtu_official') {
                  echo '<a href="https://www.tiktok.com/@kbtu_official?lang=en">'.$row['firstName']." ".$row['lastName'].'</a>'; 
                }
                elseif ($row['username'] == 'justking_real') {
                  echo '<a href="https://www.tiktok.com/@justking_real?lang=en">'.$row['firstName']." ".$row['lastName'].'</a>'; 
                }
                elseif ($row['username'] == 'fcbarcelona') {
                  echo '<a href="https://www.tiktok.com/@fcbarcelona?lang=en">'.$row['firstName']." ".$row['lastName'].'</a>'; 
                }
              }
          }
          else {
              echo "There is no such account!";
          }
        }
        mysqli_close($conn);
        ?>
        <form action="following.php" method="post" autocomplete="off">
        <div class="search-bar">
          <input type="text" id="search-input" placeholder="Search accounts and videos" name="search" />
          <button class="search-btn" name="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
        </form>

        <script src="following-script.js"></script>

        <div class="nav-right">
          <button class="upload-btn">
            <i class="far fa-plus"></i>Upload
          </button>
          <button class="login-btn">Log in</button>
          <div class="drop-down">
            <i class="fas fa-ellipsis-v fa-lg"></i>
          </div>
        </div>
      </nav>
    </header>

    <main>
        <div class="left">
            <div class="btns">
                <a href="for_you.html">
                    <i class="fas fa-home"></i>For You
                </a>
                <a href="#">
                    <i class="fas fa-user-friends"></i>Following
                </a>
                <a href="live.html">
                    <i class="fas fa-video"></i>Live
                </a>
            </div>
            <div class="login">
                <p>Log in to follow creators, like videos, and view <br>comments.</p>
                <button>Log in</button>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
            
            <div class="links">
                    <div class="linkgroup1">
                        <a href="about.html">About</a>
                        <a href="contact.html">TikTok Browse</a>
                        <a href="#">Contact</a>
                        <a href="#">Careers</a><br>
                        <a href="#">ByteDance</a><br><br>
                    </div>
                    <div class="linkgroup2">
                        <a href="#">TikTok for Good</a>
                        <a href="#">Advertise</a>
                        <a href="tt-for-dev.html">Developers</a>
                        <a href="#">Transparency</a><br>
                        <a href="#">TikTok Rewards</a><br><br>
                    </div>
                    <div class="linkgroup3">
                        <a href="help.html" target="_blank">Help</a>
                        <a href="#">Safety</a>
                        <a href="#">Terms</a>
                        <a href="#">Privacy</a>
                        <a href="creator-portal.html" target="_blank">Creator Portal</a>
                        <a href="#">Community Guidelines</a>
                    </div>
                    <div class="copyright">
                        <h5>&copy; 2022 TikTok</h5>
                    </div>
            </div>
        </div>

        <div class="right">
            <div class="users">
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava1.jpeg" width="48" height="48"> 
                  <h4>Kagiris Twins</h4>
                  <h5>kagiristwins<i class="fas fa-check-circle"></i></h5>
                  <img class="user-img" src="assets/following-1.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava2.jpeg" width="48" height="48"> 
                  <h4>mr_keks</h4>
                  <h5>mr_keks<i class="fas fa-check-circle"></i></h5>
                  <img class="user-img" src="assets/following-2.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava3.jpeg" width="48" height="48"> 
                  <h4>New Story</h4>
                  <h5>korimia_</h5>
                  <img class="user-img" src="assets/following-3.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava4.jpeg" width="48" height="48"> 
                  <h4>DWoIFSRaY</h4>
                  <h5>datwolfsray</h5>
                  <img class="user-img" src="assets/following-4.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava5.jpeg" width="48" height="48"> 
                  <h4>JustKing</h4>
                  <h5>justking_real<i class="fas fa-check-circle"></i></h5>
                  <img class="user-img" src="assets/following-5.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava6.jpeg" width="48" height="48"> 
                  <h4>ANITOKI</h4>
                  <h5>ani.toki</h5>
                  <img class="user-img" src="assets/following-6.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava7.jpeg" width="48" height="48"> 
                  <h4>Sergei</h4>
                  <h5>sergei_03.04.851985<i class="fas fa-check-circle"></i></h5>
                  <img class="user-img" src="assets/following-7.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava8.jpeg" width="48" height="48"> 
                  <h4>i_am_doshik</h4>
                  <h5>i_am_doshik1<i class="fas fa-check-circle"></i></h5>
                  <img class="user-img" src="assets/following-8.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava9.jpeg" width="48" height="48"> 
                  <h4>zhekafatbelly01</h4>
                  <h5>zheka_fatbellyy<i class="fas fa-check-circle"></i></h5>
                  <img class="user-img" src="assets/following-9.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava1.jpeg" width="48" height="48"> 
                  <h4>Kagiris Twins</h4>
                  <h5>kagiristwins<i class="fas fa-check-circle"></i></h5>
                  <img class="user-img" src="assets/following-1.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava2.jpeg" width="48" height="48"> 
                  <h4>mr_keks</h4>
                  <h5>mr_keks<i class="fas fa-check-circle"></i></h5>
                  <img class="user-img" src="assets/following-2.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava3.jpeg" width="48" height="48"> 
                  <h4>New Story</h4>
                  <h5>korimia_</h5>
                  <img class="user-img" src="assets/following-3.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava4.jpeg" width="48" height="48"> 
                  <h4>DWoIFSRaY</h4>
                  <h5>datwolfsray</h5>
                  <img class="user-img" src="assets/following-4.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava5.jpeg" width="48" height="48"> 
                  <h4>JustKing</h4>
                  <h5>justking_real<i class="fas fa-check-circle"></i></h5>
                  <img class="user-img" src="assets/following-5.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava6.jpeg" width="48" height="48"> 
                  <h4>ANITOKI</h4>
                  <h5>ani.toki</h5>
                  <img class="user-img" src="assets/following-6.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava7.jpeg" width="48" height="48"> 
                  <h4>Sergei</h4>
                  <h5>sergei_03.04.851985<i class="fas fa-check-circle"></i></h5>
                  <img class="user-img" src="assets/following-7.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava8.jpeg" width="48" height="48"> 
                  <h4>i_am_doshik</h4>
                  <h5>i_am_doshik1<i class="fas fa-check-circle"></i></h5>
                  <img class="user-img" src="assets/following-8.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava9.jpeg" width="48" height="48"> 
                  <h4>zhekafatbelly01</h4>
                  <h5>zheka_fatbellyy<i class="fas fa-check-circle"></i></h5>
                  <img class="user-img" src="assets/following-9.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava1.jpeg" width="48" height="48"> 
                  <h4>Kagiris Twins</h4>
                  <h5>kagiristwins<i class="fas fa-check-circle"></i></h5>
                  <img class="user-img" src="assets/following-1.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava2.jpeg" width="48" height="48"> 
                  <h4>mr_keks</h4>
                  <h5>mr_keks<i class="fas fa-check-circle"></i></h5>
                  <img class="user-img" src="assets/following-2.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava3.jpeg" width="48" height="48"> 
                  <h4>New Story</h4>
                  <h5>korimia_</h5>
                  <img class="user-img" src="assets/following-3.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava4.jpeg" width="48" height="48"> 
                  <h4>DWoIFSRaY</h4>
                  <h5>datwolfsray</h5>
                  <img class="user-img" src="assets/following-4.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava5.jpeg" width="48" height="48"> 
                  <h4>JustKing</h4>
                  <h5>justking_real<i class="fas fa-check-circle"></i></h5>
                  <img class="user-img" src="assets/following-5.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava6.jpeg" width="48" height="48"> 
                  <h4>ANITOKI</h4>
                  <h5>ani.toki</h5>
                  <img class="user-img" src="assets/following-6.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava7.jpeg" width="48" height="48"> 
                  <h4>Sergei</h4>
                  <h5>sergei_03.04.851985<i class="fas fa-check-circle"></i></h5>
                  <img class="user-img" src="assets/following-7.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava8.jpeg" width="48" height="48"> 
                  <h4>i_am_doshik</h4>
                  <h5>i_am_doshik1<i class="fas fa-check-circle"></i></h5>
                  <img class="user-img" src="assets/following-8.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
                <div class="user">
                  <img class="user-ava" src="assets/flw-ava9.jpeg" width="48" height="48"> 
                  <h4>zhekafatbelly01</h4>
                  <h5>zheka_fatbellyy<i class="fas fa-check-circle"></i></h5>
                  <img class="user-img" src="assets/following-9.jpeg" width="226" height="302">
                  <button class="follow-btn">Follow</button>
                </div>
               
            </div>
        </div>
    </main>

  </body>
</html>
