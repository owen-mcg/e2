<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E2 Project 2</title>
</head>

<body>
  <div class='container-fluid'>
  <h1>Project 2</h1>
    <h2>Fifty!</h2>
    <div class='container-fluid'>
      <h3>Objective</h3>
        <p>Roll the "dice" and be the first player to reach 50 points</p>
    </div>
    <div class='container-fluid'>
      <h3>Scoring</h3>
        <ul>
          <li>Only doubles accrue points</li>
          <li>Double sixes are worth <em>25 points</em></li>
          <li>Double fives, double fours, double twos, double ones are each worth <em>5 points</em></li>
          <li><strong>Beware!</strong> Double threes will reset your score to <em>zero</em>!</li>
        </ul>
    </div>
    <div class='container-fluid'>
      <form method='POST' action='process.php'>
          <h3>Ready? Click "Roll" to play!</h3>
            <div class='container-fluid'>
              <button type='submit' name='answer' value='roll' class='btn btn-primary btn-lg margin'>Roll!</button>
            </div>
        </form>
    </div>
  </div>
  <div class='container-fluid'>
  <?php if (isset($_SESSION['results'])) { ?>
  <h2>Results</h2>
    <table class='table table-striped'>
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
      <?php if ($winner != true) { ?>
      <?php $row = 1; ?>
      <?php foreach($roundIndex as $round) { ?>
        <tr>
          <?php $index = $row - 1; ?>
          <th scope='row'><?php echo $row; ?></th>
          <td><?php echo $playerPoints[$index]; ?></td>
          <td><?php echo $playerRolls[$index][0].', '.$playerRolls[$index][1]; ?> </td>
          <td><?php echo $computerPoints[$index]; ?></td>
          <td><?php echo $computerRolls[$index][0].', '.$computerRolls[$index][1]; ?> </td>
        </tr>
      <?php $row++; ?>
      <?php } ?>
        <tr>
          <th scope='row'>Totals</th>
          <td><?php echo array_sum($playerPoints); ?></td>
          <td><?php  ?></td>
          <td><?php echo array_sum($computerPoints); ?></td>
          <td><?php  ?></td>
        </tr>
      </tbody>
    </table>
    <div class='container-fluid'>
      <form method='POST' action='process.php'>
        <button type='submit' name='answer' value='roll' class='btn btn-primary btn-lg margin'>
          Your Turn!
        </button>
      </form>
    </div>
  <?php } else { ?>
    <div class='alert alert-success'>
      <h3><?php echo ucfirst($winner).' won!' ?></h3>
      <?php session_destroy(); ?>
      <a href="index.php";>Play Again?</a>
    </div>
  <?php } ?>
  <?php } ?>
  </div>
</body>

</html>