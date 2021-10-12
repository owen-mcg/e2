<!-- ### Set up

- Create a deck of cards
- Create an array of 52 cards
- Shuffle cards with randomizer
- Deal cards one per player until entire deck is dealt
- Create one new array per player containing the players hands
- The players do not know what is in their hand
- Count and display the total cards in each players' hands
- The hands will not be displayed on the HTML page

### Game play

- While jack is not present
- Players discard 1 card each into the center pile
- Create array for pile of cards from discarded player cards
- When jack is present
- Both players immediately try to slap the jack
- Generate random slap winner
- The winning player accumulates to their hand all cards in the pile
- Add all cards in pile to winning player's array -->

<?php

// Create a deck of cards
$deck = array(
    "Ace of Spades",
    "2 of Spades",
    "3 of Spades",
    "4 of Spades",
    "5 of Spades",
    "6 of Spades",
    "7 of Spades",
    "8 of Spades",
    "9 of Spades",
    "10 of Spades",
    "Jack of Spades",
    "Queen of Spades",
    "King of Spades",
    "Ace of Clubs",
    "2 of Clubs",
    "3 of Clubs",
    "4 of Clubs",
    "5 of Clubs",
    "6 of Clubs",
    "7 of Clubs",
    "8 of Clubs",
    "9 of Clubs",
    "10 of Clubs",
    "Jack of Clubs",
    "Queen of Clubs",
    "King of Clubs",
    "Ace of Diamonds",
    "2 of Diamonds",
    "3 of Diamonds",
    "4 of Diamonds",
    "5 of Diamonds",
    "6 of Diamonds",
    "7 of Diamonds",
    "8 of Diamonds",
    "9 of Diamonds",
    "10 of Diamonds",
    "Jack of Diamonds",
    "Queen of Diamonds",
    "King of Diamonds",
    "Ace of Hearts",
    "2 of Hearts",
    "3 of Hearts",
    "4 of Hearts",
    "5 of Hearts",
    "6 of Hearts",
    "7 of Hearts",
    "8 of Hearts",
    "9 of Hearts",
    "10 of Hearts",
    "Jack of Hearts",
    "Queen of Hearts",
    "King of Hearts",
);

// Create two players
$pA = "Player A";
$pB = "Player B";

// Create one array per player containing the players' hands
$paHand = [];
$pbHand = [];
$playerArray = [0 => $paHand, 1 => $pbHand];
$slapWinner = NULL;

// Create an array for the discard pile
$pile = [];

// Shuffle cards
shuffle($deck);

// Deal cards one per player until entire deck is dealt
while ((count($deck) > 0) && count($pbHand) != 26) {
    if (count($paHand) == count($pbHand)) {
        $paHand[] = array_pop($deck);
    } else {
        ($pbHand[] = array_pop($deck));
    }
}

// Count and display the total number of cards in each player's hand
echo count($paHand);
echo count($pbHand);

do {
    $card_check = strpos(end($pile), 'Jack');
    // Players alternate discarding one card each to pile
    if ($card_check == false) {
        if (count($pile) % 2 == 0) {
            $pile[] = array_pop($paHand);
            print('paPop');
        } else {
            $pile[] = array_pop($pbHand);
            print('pbPop');
        }
    } elseif ($card_check == true) {
        $slapWinner = rand(0, 1);
        if (($playerArray[$slapWinner]) == $paHand) {
            $paHand[] = $pile;
            print('paSlap');
        } elseif (($playerArray[$slapWinner]) == $pbHand) {
            $pbHand[] = $pile;
            print('pbSlap');
        }
    }
} while (count($paHand) != 0 && count($pbHand) != 0);

do {
    if (count($paHand) == 52) {
        echo "Player A wins!";
        print('paWin');
        goto end;
    } elseif (count($pbHand) == 52) {
        echo "Player B wins!";
        print('pbWin');
        goto end;
    } elseif (count($paHand) != 0 && count($pbHand) == 0) {
        $pile[] = array_pop($paHand);
        if (strpos((array_pop($paHand)), 'Jack')) {
            $slapWinner = rand(0, 1);
        }
    } elseif (count($paHand) == 0 && count($pbHand) != 0) {
        $pile[] = array_pop($pbHand);
        if (strpos((array_pop($pbHand)), 'Jack')) {
            $slapWinner = rand(0, 1);
        }
    }
} while ((count($paHand) == 0) || (count($pbHand) == 0));

// Cards discarded are removed from player's hand array and added to pile array
// If jack is discarded...
// Generate random slap winner
// Remove cards from pile array and put them in winning player's hand array

// If player's hand array is exhausted before a jack is discarded
// Other player continues to discard
// Player with no cards may attempt to slap back in

// When player's hand array contains all 52 cards, that player wins and the game ends

end:
require 'index-view.php';