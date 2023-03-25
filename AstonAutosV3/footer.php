<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
    .footer {
        font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: white;
        text-align: center;
        border-top: 1px solid black;
        z-index: 200;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .footer i {
        font-size: 2em;
    }

    .footer span {
        font-size: 1.7em;
    }



    .footer-icons {
        width: 150px;
        margin: 0 auto;
        margin-left: 45%;
        text-align: center;
    }

    .fa-facebook {
        color: black;
    }

    .fa-instagram {
        color: black;
    }

    .fa-facebook:hover {
        color: #bf1E2E;
    }

    .fa-instagram:hover {
        color: #bf1E2E;
    }
</style>

<body>

    <div class="footer">
        <div class="footer-icons">
            <a href="https://www.facebook.com"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/astonautos/"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <div>
            <span>Established in 2023.</span>
        </div>
    </div>
</body>

</html>