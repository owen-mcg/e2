<?php
//
// VARIABLES
//
// Create a deck of cards
$deck = [
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
];
//
//
// Shuffle cards
shuffle($deck);
//
//
// Create two players
$pA = "Player A";
$pB = "Player B";
//
//
// Create one array per player containing the players' hands
$paHand = [];
$pbHand = [];
//
//
// Create array for randomizer
$playerArray = [0 => $paHand, 1 => $pbHand];
//
//
// Create an array for the discard pile
$pile = [];
//
//
// Check the pile for jacks
$card_check = in_array('Jack of Spades' || 'Jack of Clubs' || 'Jack of Hearts' || 'Jack of Diamonds', $deck);
//
//
// Create variable for the winner of the slap
$slapWinner = NULL;
//
//
// FUNCTIONS
//
// Function for the deal
function deal($deck, $paHand, $pbHand)
{
    // Deal cards one per player until entire deck is dealt
    while (count($deck) > 0) {
        if (count($deck) % 2 == 0) {
            $paHand[] = array_pop($deck);
        } else {
            $pbHand[] = array_pop($deck);
        }
    }
};
//
//
// Function for both players discarding
function each_discard($card_check, $pile, $paHand, $pbHand)
{
    if ($card_check == false) {
        if (count($pile) % 2 == 0) {
            $pile = [array_pop($paHand)];
            print('paPop');
        } else {
            $pile = [array_pop($pbHand)];
            print('pbPop');
        }
    }
}
//
//
// Function for slap
function slap($card_check, $pile, $playerArray, $paHand, $pbHand)
{
    if ($card_check == true) {
        $slapWinner = rand(0, 1);
        if (($playerArray[$slapWinner]) == $paHand) {
            $paHand[] = $pile;
            print('paSlap');
        } elseif (($playerArray[$slapWinner]) == $pbHand) {
            $pbHand[] = $pile;
            print('pbSlap');
        }
    }
}
//
//
// Function to find winner
function winner($paHand, $pbHand)
{
    if (count($paHand) == 52) {
        echo "Player A wins!";
        print('paWin');
    } elseif (count($pbHand) == 52) {
        echo "Player B wins!";
        print('pbWin');
    }
}
// goto end;
//
//
// Function to slap back in
function slap_in($paHand, $pbHand, $pile)
{
    if (count($paHand) != 0 && count($pbHand) == 0) {
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
}
//
//
// Count and display the total number of cards in each player's hand
echo count($paHand);
echo count($pbHand);
//
//
// GAME PLAY
//
// TEST
while (!((count($paHand)) == 52 || (count($pbHand)) == 52)) {
    deal($deck, $paHand, $pbHand);
    // each_discard($card_check, $pile, $paHand, $pbHand);
    // slap($card_check, $pile, $playerArray, $paHand, $pbHand);
    // slap_in($paHand, $pbHand, $pile);
    // winner($paHand, $pbHand);
}




// if ((count($paHand)) == 52 || (count($pbHand)) == 52)

// while (count($paHand) != 0 && count($pbHand) != 0); {
//     // Players alternate discarding one card each to pile
//     if (!slap($card_check, $pile, $playerArray, $paHand, $pbHand)) {
//         each_discard($card_check, $pile);
//     }
// }


// while ((count($paHand) == 0) || (count($pbHand) == 0)); {

// }

// end:
// require "index-view.php";