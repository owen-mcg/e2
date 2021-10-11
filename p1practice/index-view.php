<!DOCTYPE html>
<html>

    <head></head>

    <body>
        <ul>
            <?php foreach ($paHand as $value) { ?>
            <li><?php echo $value; ?></li>
            <?php } ?>
        </ul>
        <ul>
            <?php foreach ($pbHand as $value) { ?>
            <li><?php echo $value; ?></li>
            <?php } ?>
        </ul>
    </body>

</html>

<body>

    <h1>War (card game) Simulator</h1>

    <h2>Mechanics</h2>

    <ul>
        <li>Each player starts with half the deck (26 cards), shuffled in a
            random order.</li>
        <li>For each round, a card is picked from the “top” of each player’s
            cards.</li>
        <li>Player whose card is highest wins that round and keeps both cards.
        </li>
        <li>If the two cards are of the same value, it’s a tie and those cards
            are discarded.</li>
        <li>The player who ends up with 0 cards is the loser.</li>
    </ul>

    <h2>Results</h2>

    <ul>
        <li>Rounds played: 128 </li>
        <li>Winner: Player 2 </li>
    </ul>

    <h2>Rounds</h2>

</body>