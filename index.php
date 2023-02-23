<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<style>
    .mainimg {
        max-width: 100%;
        max-height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        filter: blur(2px);
    }

    .image-container {
        position: relative;
    }

    .image-text-main {
        position: absolute;
        top: 20%;
        left: 20%;
        color: white;
        font-size: 50px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .image-text-sec {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
        color: white;
        text-align: center;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .highlight {
        color: #bf1E2E;
    }
    
</style>

<body>
    <?php include 'navbar.php' ?>

    <div class="image-container">
        <img src="images/indexbmw.png" class="mainimg">
        <div class="image-text-main">
            <p>We Provide <span class="highlight">Luxury Cars</span></p>
            <p>at low cost.</p>
        </div>
        <div class="image-text-sec">
            <p>SHOP BY BRANDS</p>
        </div>
    </div>
    </div>

</body>

</html>