<?php
/**
 * Created by PhpStorm.
 * User: TuanTran
 * Date: 1/31/2019
 * Time: 11:54 PM
 */
include('TennisGametest.php');
$tennisGame = new TennisGame();
$tennisGame->setPlayer1Score(3);
$tennisGame->setPlayer2Score(1);
$player1Score = $tennisGame->getPlayer1Score();
$player2Score = $tennisGame->getPlayer2Score();
if ($player1Score == $player2Score)
{
    $tennisGame->getDeuce($player1Score);
}
else if ($player1Score >= 4 || $player2Score >= 4)
{
    $tennisGame->getWin($player1Score,$player2Score);
}
else {
    $tennisGame->getScore($player1Score,$player2Score);
}
echo $tennisGame;