<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('title')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
    <style>
        body {
            overflow-x: hidden;
        }


        .video-container {
            position: fixed;
            z-index: -99;
            width: 100%;
            /* height: 113%; */
            color: rgba(0, 0, 0, 0.6);
        }

        iframe {
            height: 100%;
            width: 100%
        }

        #text {
            position: absolute;
            color: #FFFFFF;
            left: 50%;
            top: 10%;
            transform: translate(-50%, -50%);
        }

        @media (max-width: 600px) {
            .video-container {
                height: 80%;
                width: 100%;
            }
        }
        @media (min-width: 768px) {
            .video-container {
                height: 100%;
                width: 100%;
            }
        }
        @media (min-width: 1024px) {
            .video-container {
                height: 100%;
                width: 100%;
            }
        }
        #notification {
    position:fixed;
    top:0px;
    width:100%;
    z-index:105;
    text-align:center;
    font-weight:normal;
    font-size:14px;
    font-weight:bold;
    color:white;
    background-color:#2563eb;
    padding:5px;
}
#notification span.dismiss {
    border:2px solid #FFF;
    padding:0 5px;
    cursor:pointer;
    float:right;
    margin-right:10px;
}
#notification a {
    color:white;
    text-decoration:none;
    font-weight:bold
}

    </style>

<body>
