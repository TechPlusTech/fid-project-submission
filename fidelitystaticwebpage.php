<?php
        $dbHost = "localhost";
        $dbUser = "root";
        $dbPass = "";
        $dbName = ""; //desired database

    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    if(!$conn) {
        die("Something went wrong. Database is not connected;");
    }

?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fidelity Forum/Community Blog by TB</title>
        <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/4256/4256900.png">
        <style>
                h1 {
                    text-align: center;
                    font-family: Arial, Helvetica, sans-serif;
                    color: white;
                }

                p {
                    text-align: center;
                    font-family: Arial, Helvetica, sans-serif;
                    color: white;
                }

                body {
                    background-image: linear-gradient(black, green);
                    ;
                }

                .input {
                    resize: both;
                    overflow: auto;
                }

                .content {
                    text-align: center;
                }

                .overlay {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(0, 0, 0, 0.5);
                    color: white;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    opacity: 0;
                    transition: opacity 0.3s ease;
                }

                .image-wrapper:hover .overlay {
                    opacity: 1;
                }

        </style>
    </head>
    <body>

        <h1>This isn't Financial Advice: 
            <br>A Static Webpage for Stock Brokers</br>
            (and Real Estate Investors)
    </h1>
        
        <div class="content">
            <p>Invest in real estate and stocks but perhaps not in that exact order.
                <br>There is a school of thought that money does not grow on trees.</br>
                And gold does not fall out of the sky.
                <br>But if prices are falling in my portfolio</br>
                I would buy low and sell high.
                <br>Easier said than done</br>
                Like a time series forecasting neural network.
                <br>Or as I like to call them, stock trading bots</br>
                Of course here's a picture of two kittens.
            </p>
            <div class="image-wrapper">
                <img src="data:image/jpeg;base64,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" alt="Image">
            <div class="overlay">
            <p>This is not financial advice but my personal stock picks are
                <br> mcdonalds, boeing, and NNN Reit or some other third </br>
                high dividend paying stock.</p>
            </div>
            </div>
            <p>Let's get serious I'll be honest. 
                <br>I sort of went crazy trying to connect the db</br> 
                to input field gave up and said you know what,
                <br>my skills my be limited, </br>
                but I am passionate about enhancing them
                <br>in this realm you call the world of computer science.</br>
                Dare I say Hello World.
                <br>I thought the world would say something back like</br>
                what up dev but unfortunately it did not.
                <br> I also forgot how to make<br> the background gradient image thingy</br>
                stop repeating itself.
                <br>I hope this looks good on mobile <br> and is dynamically responsive.</p>
        </div>

    </body>
    </html>