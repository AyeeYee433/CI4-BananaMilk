<!DOCTYPE html>
<html>
<header>
    <style>
        .Banana:hover {
            box-shadow: 0 6px 12px rgba(29, 53, 87, 0.1);
            transform: translate(-5px);
        }

        .Banana img {
            width: 100%;
            height: 200px;
            display: block;
            object-fit: cover;
        }

        .Banana {
            background-color: #ede6ddff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 12px rgba(29, 53, 87, 0.1);
            transition: transform 0.3s;
        }

        .desc {
            padding: 20px;
            text-align: center;
        }

        .desc h3 {
            color: #1d3557;
        }

        .desc p.des {
            color: #457b9d;

        }
    </style>
</header>

<body>
    <div class="Banana">
        <img src="https://images.everydayhealth.com/images/diet-nutrition/bananas-nutrition-facts-1440x810.jpg?sfvrsn=5e5dc687_3" alt="Banana">
        <div class="desc">
            <h3>Banana</h3>
            <p class="des">A fruit</p>
        </div>
    </div>
</body>

</html>