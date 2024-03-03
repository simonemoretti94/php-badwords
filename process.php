<?php
$phrase = $_POST["phrase"];
$word = $_POST["word"];

echo "Phrase: " . $phrase . "<br>";
echo "Phrase length: " . strlen($phrase) . "<br>";

$censored_phrase = str_replace($word, "***", $phrase);

echo "Censored phrase: " . $censored_phrase . "<br>";
echo "Censored phrase length: " . strlen($censored_phrase);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>process</title>
</head>

<body>

    <div class="container">
        <table class="table">
            <tr>
                <th>Original word: <?php echo $word ?></th>
                <th>Original phrase: <?php echo $phrase ?></th>
            </tr>
            <tr>
                <td>New word: <?php echo str_replace($word, '***', $word) ?></td>
                <td>New phrase: <?php echo $censored_phrase ?></td>
            </tr>
        </table>
    </div>

</body>

<style>
    body {
        background: linear-gradient(45deg, grey, white);
        min-height: 100vh;
    }

    .container {
        display: flex;
        justify-content: center;

        & table {
            margin-top: 1rem;

            & tr {
                & th {
                    color: red;

                    padding: .5rem;

                    text-align: center;
                }

                & td {
                    color: blue;

                    text-align: center;
                }
            }
        }
    }
</style>

</html>