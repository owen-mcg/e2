<?php

// <!-- ### Set up
// 
// - Create a deck of cards
// - Create an array of 52 cards
// - Shuffle cards with randomizer
// - Deal cards one per player until entire deck is dealt
// - Create one new array per player containing the players hands
// - The players do not know what is in their hand
// - Count and display the total cards in each players' hands
// - The hands will not be displayed on the HTML page
// 
// ### Game play
// 
// - While jack is not present
// - Players discard 1 card each into the center pile
// - Create array for pile of cards from discarded player cards
// - When jack is present
// - Both players immediately try to slap the jack
// - Generate random slap winner
// - The winning player accumulates to their hand all cards in the pile
// - Add all cards in pile to winning player's array -->


// Create a deck of cards
$deck = array(
    "Aspades",
    "2spades",
    "3spades",
    "4spades",
    "5spades",
    "6spades",
    "7spades",
    "8spades",
    "9spades",
    "10spades",
    "Jspades",
    "Qspades",
    "Kspades",
    "Aclubs",
    "2clubs",
    "3clubs",
    "4clubs",
    "5clubs",
    "6clubs",
    "7clubs",
    "8clubs",
    "9clubs",
    "10clubs",
    "Jclubs",
    "Qclubs",
    "Kclubs",
    "Adiamonds",
    "2diamonds",
    "3diamonds",
    "4diamonds",
    "5diamonds",
    "6diamonds",
    "7diamonds",
    "8diamonds",
    "9diamonds",
    "10diamonds",
    "Jdiamonds",
    "Qdiamonds",
    "Kdiamonds",
    "Ahearts",
    "2hearts",
    "3hearts",
    "4hearts",
    "5hearts",
    "6hearts",
    "7hearts",
    "8hearts",
    "9hearts",
    "10hearts",
    "Jhearts",
    "Qhearts",
    "Khearts",
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
    }
    else { ($pbHand[] = array_pop($deck));
    }
}

// Count and display the total number of cards in each player's hand
echo count($paHand);
echo count($pbHand);

do {
    // Players alternate discarding one card each to pile
    if ((str_contains(end($pile), "J")) == false) {
        if (count($pile) % 2 == 0) {
            $pile[] = array_pop($paHand);
        }
        else {
            $pile[] = array_pop($pbHand);
        }
    }
    echo strpos(end($pile), "J");
    goto end;
    if (str_contains(end($pile), "J") == true) {
        $slapWinner = rand(0, 1);
        if (($playerArray[$slapWinner]) == $paHand) {
            $paHand[] = $pile;
        }
        elseif (($playerArray[$slapWinner]) == $pbHand) {
            $pbHand[] = $pile;
        }
    }
} while (count($paHand) != 0 && count($pbHand) != 0);

// do {
//     if (count($paHand) == 52) {
//         echo "Player A wins!";
//         break;
//     }
//     elseif (count($pbHand) == 52) {
//         echo "Player B wins!";
//         goto end;
//     }
//     elseif (count($paHand) != 0 && count($pbHand) == 0) {
//         $pile[] = array_pop($paHand);
//         if (strpos((array_pop($paHand)), "J")) {
//             $slapWinner = rand(0, 1);
//             break;
//         }
//     }
//     elseif (count($paHand) == 0 && count($pbHand) != 0) {
//         $pile[] = array_pop($pbHand);
//         if (strpos((array_pop($pbHand)), "J")) {
//             $slapWinner = rand(0, 1);
//             break;
//         }
//     }
// } while ((count($paHand) == 0) || (count($pbHand) == 0));

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

// Create a deck of cards
// $deck = array(
//     "Aspades",
//     "2spades",
//     "3spades",
//     "4spades",
//     "5spades",
//     "6spades",
//     "7spades",
//     "8spades",
//     "9spades",
//     "10spades",
//     "Jspades",
//     "Qspades",
//     "Kspades",
//     "Aclubs",
//     "2clubs",
//     "3clubs",
//     "4clubs",
//     "5clubs",
//     "6clubs",
//     "7clubs",
//     "8clubs",
//     "9clubs",
//     "10clubs",
//     "Jclubs",
//     "Qclubs",
//     "Kclubs",
//     "Adiamonds",
//     "2diamonds",
//     "3diamonds",
//     "4diamonds",
//     "5diamonds",
//     "6diamonds",
//     "7diamonds",
//     "8diamonds",
//     "9diamonds",
//     "10diamonds",
//     "Jdiamonds",
//     "Qdiamonds",
//     "Kdiamonds",
//     "Ahearts",
//     "2hearts",
//     "3hearts",
//     "4hearts",
//     "5hearts",
//     "6hearts",
//     "7hearts",
//     "8hearts",
//     "9hearts",
//     "10hearts",
//     "Jhearts",
//     "Qhearts",
//     "Khearts",
// );

// // Create two players
// $pA = "Player A";
// $pB = "Player B";

// // Create one array per player containing the players' hands
// $paHand = [];
// $pbHand = [];
// $playerArray = [0 => $paHand, 1 => $pbHand];

// // Create an array for the discard pile
// $pile = [];

// // Shuffle cards
// shuffle($deck);

// // Deal cards one per player until entire deck is dealt
// while ((count($deck) > 0) && count($pbHand) != 26) {
//     if (count($paHand) == count($pbHand)) {
//     $paHand[] = array_pop($deck);
//     }
//     else { ($pbHand[] = array_pop($deck));
//     }
// }

// // Count and display the total number of cards in each player's hand
// echo count($paHand);
// echo count($pbHand);

// while ((count($paHand) > 0) || (count($pbHand) > 0) && (count($paHand) < 52) || (count($pbHand) < 52)) {
//     if (strpos((array_pop($paHand) || (array_pop($pbHand))), "J")) {
//         $slapWinner = rand(0, 1);
//         if (($playerArray[$slapWinner]) == $paHand) {
//             $paHand[] = $pile;
//         }
//         else { ($pbHand[] = $pile);
//         }
//     }
//     else {
//         // Players alternate discarding one card each to pile
//         if (count($pile) % 2 == 0) {
//             $pile[] = array_pop($paHand);
//         }
//         else {
//             $pile[] = array_pop($pbHand);
//         }
//     }
// }
// while ((count($paHand) == 0) || (count($pbHand) == 0)) {
//     if ((count($paHand) == 52) || (count($pbHand) == 52)) {
//         if (count($paHand) == 52) {
//             echo "Player A wins!";
//         }
//         elseif (count($pbHand) == 52) {
//             echo "Player B wins!";
//         }
//     }
// }

// Cards discarded are removed from player's hand array and added to pile array
// If jack is discarded...
// Generate random slap winner
// Remove cards from pile array and put them in winning player's hand array

// If player's hand array is exhausted before a jack is discarded
// Other player continues to discard
// Player with no cards may attempt to slap back in

// When player's hand array contains all 52 cards, that player wins and the game ends

// require 'index-view.php';