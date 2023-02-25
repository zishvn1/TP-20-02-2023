<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<style>

    body {
        background-color: grey;
        font-family: 'Courier New', Courier, monospace;
        margin-top: 80px;
    }

    .maintitle {
        font-size: 70px;
        text-align: center;
        font-family: 'Courier New', Courier, monospace;
    }

    .main {
        font-size: 20px;
        text-align: center;
    }

    .cover {
        text-align: center;
        width: 1500px;
        display: flex;
    }

    .box1 {
        margin-top: 30px;
        margin-left: 30px;
    }

    .box2 {
        margin-top: 30px;
        margin-left: 150px;
    }

    .box3 {
        margin-top: 30px;
        margin-left: 150px;
    }

    .teamtitle {
        font-size: 50px;
        text-align: center;
        font-family: 'Courier New', Courier, monospace;
        margin-top: 30px;
    }
</style>

<body>
    <?php include 'navbar.php' ?>

    <div class="maintitle">
        <p>About Us</p>
    </div>

    <div class="main">
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
    </div>
    <div class="cover">
        <div class="box1">
            <h2>BOX 1</h2>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </div>

        <div class="box2">
            <h2>BOX 2</h2>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </div>

        <div class="box3">
            <h2>BOX 3</h2>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </div>
    </div>

    <div class="teamtitle">
        <p>Meet The Team:</p>
    </div>

    <?php include 'footer.php' ?>

</body>

</html>