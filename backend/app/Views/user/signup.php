<!DOCTYPE html>
<html>

<head style="background-color: Blue">
    <title>Sign up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <style>
        body {
            /* background-color: #FCE7C8; */
            margin: 0;
            background-image: url('https://static.vecteezy.com/system/resources/previews/047/137/304/non_2x/a-glass-of-coffee-with-whipped-cream-and-bananas-free-photo.jpg');
        }

        .hed {
            border: 1px;
            padding: 4px;
            background-color: #ede6ddff;
        }

        .table th,
        td {
            width: 100%;
            border-collapse: collapse;
            padding: 10px;
            padding-left: 20px;
        }

        #h1-banana {
            text-align: left;
            color: black;
        }

        .heh1 a {
            align-content: right;
            /* margin-left: 70%; */
            color: black;
            font-size: 20px;
            word-spacing: 10px;
        }

        .singg {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
            /* Adjust height for full view */
            padding: 40px 20px;
            text-align: center;
        }

        .signuppage {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        form {
            border: 3px solid #f1f1f1;
        }

        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>

    <?php

    ?>

    <div class="hed">
        <div>
            <table class="table1">
                <td>
                    <h1 id="h1-banana">Banana Milk Cafe</h1>
                </td>
                <td class="heh1">
                    <a href="/">Home</a>
                </td>
                <td class="heh1">
                    <a href="/menu">Menu</a>
                </td>
                <td class="heh1">
                    <a href="/about">About</a>
                </td>
                <td class="heh1">
                    <a href="/login">Login</a>
                </td>
                <td class="heh1">
                    <a href="/signup">Sign Up</a>
                </td>
            </table>
        </div>
    </div>

    <!-- signup -->
    <div class="singg">
        <div class="signuppage">

            <h1>Sign up</h1>
            <form class="sig" method="Post" action="/handle-signup">
                <input type="text" id="fullname" name="fullname" placeholder="Fullname" required>
                <input type="text" id="username" name="username" placeholder="Username" required>
                <input type="text" id="pass" name="password" placeholder="Password" required>
                <button type="submit">Sign Up
                    <button type="button" class="cancelbtn" onclick="window.location.href='/'">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
            </form>
            <div>
                <a href="/login">Login</a>
            </div>
        </div>
    </div>



    <body>

</html>