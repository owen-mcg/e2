<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>

    <body>
        <form method='POST' action='process.php'>
            <h1>Mystery Word Scramble</h1>

            <p>Mystery word: kiumppn</p>
            <p>Hint: Halloween’s favorite fruit</p>

            <label for='answer'>Your guess:</label>
            <input type='text' name='answer' id='answer'>

            <button type='submit'>Check answer</button>
        </form>

        <?php if(isset($results)) { ?>
        <h1>Results</h1>
        <?php if ($haveAnswer == false) { ?>
        Please enter an answer
        <?php } elseif ($correct) { ?>
        You got it correct! :)
        <?php } else { ?>
        Incorrect. <a href='index.php'>Please try again.</a>
        <?php } ?>
        <?php } ?>


        <ipt src="" async defer>
            </script>
    </body>

</html>