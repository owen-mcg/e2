<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>E2 Project 2</title>
</head>

<body>
    <h1>Project 2</h1>
    <form method='POST' action='process.php'>
        <h2>Fifty!</h2>
        <div class='play_form'>
            <label for='answer'>Your turn!</label>
            <button type='submit' name='answer' value='roll'>Roll!</button>
        </div>
    </form>
    <?php if (isset($_SESSION)) { ?>
    <h2>Results</h2>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>Round</th>
                    <th scope='col'>Player</th>
                    <th scope='col'>Computer</th>
                </tr>
            </thead>
            <tbody>
            <?php var_dump($roundIndex); ?>
            <?php $roundCount = 1; ?>
            <?php foreach ($roundIndex as $data) { ?>
                <tr>
                    <th scope='row'><?php echo $roundCount; ?></th>
                    <td><?php echo $playerPoints; ?></td>
                    <td><?php echo $computerPoints; ?></td>
                    <?php $roundCount++; ?>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    <?php } ?>
</body>

</html>