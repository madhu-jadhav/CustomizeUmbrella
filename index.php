<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/Yello.png" type="image/icon type">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Customize umbrella</title>
</head>
<body style="background-color: rgb(197, 224, 220);">
    <div class="container">
        <div class="image-container">
          <div id="loader-container" class="loader-container">
            <img src="./assets/loader_icon.svg" alt="loader" width="100px">
          </div>
          <div id="logo-container" class="logo-container">
            <img id="uploaded-logo" class="uploaded-logo" src="" alt="" width="40px">
          </div>
          <img id="umbrella-image" class="umbrella-image" src="assets/Blue%20umbrella.png" alt="blue umbrella">
        </div>
        <div class="themes-container">
          <h1>Custom Umbrella</h1>
          <div class="themes">
            <!-- <button id="blue-theme"> -->
              <img id="blue-theme"src="coloricon/blue.ico" alt="blue theme">
            <!-- </button> -->
            <!-- <button id="yellow-theme"> -->
              <img id="yellow-theme"src="coloricon/yellow.ico" alt="yellow theme">
            <!-- </button> -->
            <!-- <button id="pink-theme"> -->
              <img id="pink-theme"src="coloricon/pink.ico" alt="pink theme">
              
            <!-- </button> -->
            <div class="pera">
                <h3>Customize your umbrella</h3>
                <p>
                    Upload a logo for an instant preview. <br>
                    .png and .jpg files only. Max file size 5MB.
                </p>
            </div>
            <div class="uploadbutton">
              <input type="file" id="logo-upload-input" accept=".png,.jpg" style="display:none">
              <button id="logo-upload-button">
                <img src="./assets/upload_icon.svg" alt="upload logo" style="align-self: start;">
                Upload Logo
              </button>
            </div>
          </div>
        </div>
      </div>
    <script src="JS/script.js"></script>
</body>
</html>