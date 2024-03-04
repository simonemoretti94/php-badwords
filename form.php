<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>form</title>
</head>

<body>
    <div class="container">
        <form action="process.php" method="post">
            <div class="wrapper">
                <label for="phrase">Phrase:</label><input required type="text" name="phrase" id="phrase" placeholder="Write here your phrase">
            </div>
            <div class="wrapper">
                <label for="word">Word:</label><input required type="text" name="word" id="word" placeholder="Write here your word">
            </div>
            <button class="btn btn-primary mt-3" type="submit">submit</button>
        </form>
    </div>
</body>

<style>
    body {
        background: linear-gradient(-45deg, grey, white);
        min-height: 100vh;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;

        >form {
            margin-top: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;

            & div.wrapper {
                display: flex;
                flex-direction: row;

                margin-top: 1rem;

                >label {
                    margin-right: .3rem;
                    font-weight: 600;
                    transform: skewX(-10deg);
                }

                >input {
                    border-radius: 8px;

                    font-size: medium;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    text-align: center;
                    color: blue;
                }
            }
        }
    }
</style>

</html>