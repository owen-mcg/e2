<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="w3.css">
    <title>E2 Project 2</title>
</head>

<body>
    <div class="w3-container">
    <h1>Project 2</h1>
    <form method='POST' action='process.php'>
        <h2>Fifty!</h2>
            <h3>Objective</h3>
                <p>Roll the "dice" and be the first player to reach 50 points</p>
            <h3>Scoring</h3>
                <ul>
                    <li>Only doubles accrue points</li>
                    <li>Double sixes are worth <em>25 points</em></li>
                    <li>Double fives, double fours, double twos, double ones are each worth <em>5 points</em></li>
                    <li><strong>Beware!</strong> Double threes will reset your score to <em>zero</em>!</li>
                </ul>
            <h3>Ready? Click "Roll" to play!</h3>
        <div class='play_form'>
            <label for='answer'>Your turn!</label>
            <button type='submit' name='answer' value='roll'>Roll!</button>
        </div>
    </div>
    </form>
    <div class='w3-container'>
    <?php if (isset($_SESSION)) { ?>
    <h2>Results</h2>
        <table class='w3-table'>
            <thead>
                <tr>
                    <th scope='col'>Round</th>
                    <th scope='col'>Player Score</th>
                    <th scope='col'>Player Roll</th>
                    <th scope='col'>Computer Score</th>
                    <th scope='col'>Computer Roll</th>
                </tr>
            </thead>
            <tbody>
            <?php $roundCount = 1; ?>
            <?php foreach ($roundIndex as $data) { ?>
                <tr>
                    <th scope='row'><?php echo $count; ?></th>
                    <td><?php echo $playerPoints; ?></td>
                    <td><?php echo $playerRoll; ?></td>
                    <td><?php echo $computerPoints[$count]; ?></td>
                    <td><?php echo $computerRoll; ?></td>
                    <?php $roundCount++; ?>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    <?php } ?>
    </div>
</body>

</html>