<?php
/**
 * Created by PhpStorm.
 * User: TuanTran
 * Date: 1/31/2019
 * Time: 11:54 PM
 */
include ('TennisGame.php');
$tennisGame = new TennisGame();
$tennisGame->getScore( 0, 4);
echo $tennisGame;