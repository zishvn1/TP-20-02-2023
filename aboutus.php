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
        background: url("images/carsaboutus.jpg") center center / cover no-repeat;
        font-family: 'Courier New', Courier, monospace;
        margin-top: 80px;
        color: #eeeeee;
    }

    .maintitle {
        font-size: 70px;
        text-align: center;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        color: #bf1E2E;
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

    .box1 h2{
        color: #bf1E2E;
    }

    .box2 h2{
        color: #bf1E2E;
    }

    .box3 h2{
        color: #bf1E2E;
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
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        margin-top: 30px;
        color: #bf1E2E;
    }

    .team-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin: 20px 0;
    }

    .team-member {
        width: 150px;
        margin: 30px;
    }

    .team-member img {
        width: 100px;
        height: 100px;
    }

    .team-member h3 {
        font-size: 24px;
        margin: 5px 0;
    }

    .team-member p {
        font-size: 18px;
        margin: 2px 0;
    }
</style>

<body>
    <?php include 'navbar.php' ?>

    <div class="maintitle">
        <p>About Us</p>
    </div>

    <div class="main">
        <p>"At Aston Autos, our main goal is to give our clients a calm, straightforward and pleasant vehicle purchasing experience. We are focused on offering a different scope of great vehicles, serious valuing, and uncommon client care. We want to assemble durable associations with our clients and to be their confided in hotspot for their car needs in general. We endeavour to establish a positive and steady workplace for our representatives, and to be a capable and contributing individual from our local area.”</p>
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

    <div class="team-container">
        <div class="team-member">
            <img src="images/person.png">
            <h3>SHAHED ABDULALEEM</h3>
            <p>Front-end</p>
        </div>
        <div class="team-member">
            <img src="images/person.png">
            <h3>AHDIL‏‏‎ ‎ BUTT</h3>
            <p>Front-end</p>
        </div>
        <div class="team-member">
            <img src="images/person.png">
            <h3>RENIECE BALAMAGA</h3>
            <p>Front-end</p>
        </div>
        <div class="team-member">
            <img src="images/person.png">
            <h3>AVJIT BASRA</h3>
            <p>Front-end</p>
        </div>
        <div class="team-member">
            <img src="images/person.png">
            <h3>PARAMVEER HUNDAL</h3>
            <p>Front-end</p>
        </div>
    </div>

    <div class="team-container">
        <div class="team-member">
            <img src="images/person.png">
            <h3>ZISHAN ASHFAQ</h3>
            <p>Back-end</p>
        </div>
        <div class="team-member">
            <img src="images/person.png">
            <h3>OLUWATOMISIN OGUNNUSI</h3>
            <p>Back-end</p>
        </div><div class="team-member">
            <img src="images/person.png">
            <h3>XAVIER WALKER</h3>
            <p>Back-end</p>
        </div><div class="team-member">
            <img src="images/person.png">
            <h3>PANTELIS XIOUROUPPAS</h3>
            <p>Back-end</p>
    </div>

    <?php include 'footer.php' ?>

</body>

</html>