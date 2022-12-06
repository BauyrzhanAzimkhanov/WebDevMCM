<!--Мы установили библиотеку ffmpeg. 
ffmpeg — это кроссплатформенная open-source библиотека для обработки видео- и аудиофайлов -->
<?php
    if (isset($_POST["submit"]))
    {
        $file_name = $_FILES["video"]["tmp_name"];
        $cut_from = $_POST["cut_from"];
        $duration = $_POST["duration"];
        $command = "/usr/local/bin/ffmpeg -i " . $file_name . " -vcodec copy -ss " . $cut_from . " -t " . $duration . " output.mp4";
        system($command);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Video editor</title>
    <link rel="icon" href="https://seeklogo.com/images/T/tiktok-app-icon-logo-0F5AD7AE01-seeklogo.com.png">
    <script src="https://kit.fontawesome.com/44bb0c178e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top: 100px;">
    <div class="row">
    <div class="offset-md-4 col-md-4">
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Video</label>
                    <input type="file" name="video" class="form-control" onchange="onFileSelected(this);">
                    <video width="500" height="320" id="video" controls></video>
            </div>
 
               <div class="form-group">
                   <label>Cut from</label>
                   <input type="text" name="cut_from" class="form-control" placeholder="00:00:00">
               </div>
 
               <div class="form-group">
                   <label>Duration</label>
                   <input type="text" name="duration" class="form-control" placeholder="00:00:00">
              </div>
              <br>
              <input type="submit" name="submit" class="btn btn-primary" value="Split">
 
        </form>
    </div>
    </div>
</div>
<script>
    function onFileSelected(self) {
        var file = self.files[0]; //We have to get the file which user has selected
        var reader = new FileReader(); //Create a new built-in file reader object 
        reader.onload = function (event) { //When the video is fully loaded this function will be called
            var src = event.target.result; //We can get the source of video from event target object in result variable
            var video = document.getElementById("video"); 
            video.setAttribute("src", src); //Set the video source attribute to this src variable
        };
 
        reader.readAsDataURL(file); //This function will load the video in this file reader
    }
</script>
</body> 