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
// Check for the jack
// $card_check = in_array('Jack of Spades' || 'Jack of Clubs' || 'Jack of Hearts' || 'Jack of Diamonds', $pile);
//
//
// Create hands for each player
$paHand = [];
$pbHand = [];
//
//
// Deal cards one per player until entire deck is dealt
while (count($deck) != 0) {
    if (count($deck) % 2 == 0) {
        $paHand[] = (array_pop($deck));
    } else {
        $pbHand[] = (array_pop($deck));
    }
}
//
//
print_r(count($paHand) > 0);
print_r(count($pbHand) > 0);

$pile = [];
$card_check = in_array('Jack of Spades' || 'Jack of Clubs' || 'Jack of Hearts' || 'Jack of Diamonds', $pile);
// Each player discards by turn
// Each player discards by turn
while (count($paHand) != 0 && count($pbHand) != 0); {
    if (count($paHand) % 2 == 0) {
        $pile[] = (array_pop($paHand));
    } else {
        $pile[] = (array_pop($pbHand));
    }
}
//
//
// // Slap progression
// if ($card_check == true) {
//     $slapWinner = rand(0, 1);
//     if (($playerArray[$slapWinner]) == $paHand) {
//         $paHand[] = $pile;
//         print('paSlap');
//     } elseif (($playerArray[$slapWinner]) == $pbHand) {
//         $pbHand[] = $pile;
//         print('pbSlap');
//     }
// }
