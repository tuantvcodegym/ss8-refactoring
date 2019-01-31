<?php
/**
 * Created by PhpStorm.
 * User: TuanTran
 * Date: 1/31/2019
 * Time: 11:55 PM
 */
class TennisGame
{
    public $score = '';
    public $player1Score;
    public $player2Score;
    const LOVE = 0;
    const FIFTEEN = 1;
    const THIRTY = 2;
    const FOURTY = 3;
    public function getPlayer1Score()
    {
        return $this->player1Score;
    }
    public function getPlayer2Score()
    {
        return $this->player2Score;
    }
    public function setPlayer1Score($player1Score)
    {
        $this->player1Score = $player1Score;
    }
    public function setPlayer2Score($player2Score)
    {
        $this->player2Score = $player2Score;
    }
    public function getDeuce($scoreDeuce)
    {
        switch ($scoreDeuce) {
            case self::LOVE:
                $this->score = "Love-All";
                break;
            case self::FIFTEEN:
                $this->score = "Fifteen-All";
                break;
            case self::THIRTY:
                $this->score = "Thirty-All";
                break;
            case self::FOURTY:
                $this->score = "Forty-All";
                break;
            default:
                $this->score = "Deuce";
                break;
        }
    }
    public function getWin($player1Score, $player2Score)
    {
        $minusResult = $player1Score - $player2Score;
        if ($minusResult == 1) $this->score = "Advantage player1";
        else if ($minusResult == -1) $this->score = "Advantage player2";
        else if ($minusResult >= 2) $this->score = "Win for player1";
        else $this->score = "Win for player2";
    }
    public function getScore($player1Score, $player2Score)
    {
        switch ($player1Score) {
            case self::LOVE:
                $this->score .= "Love" . "-";
                break;
            case self::FIFTEEN:
                $this->score .= "Fifteen" . "-";
                break;
            case self::THIRTY:
                $this->score .= "Thirty" . "-";
                break;
            case self::FOURTY:
                $this->score .= "Forty" . "-";
                break;
        }
        switch ($player2Score) {
            case self::LOVE:
                $this->score .= "Love";
                break;
            case self::FIFTEEN:
                $this->score .= "Fifteen";
                break;
            case self::THIRTY:
                $this->score .= "Thirty";
                break;
            case self::FOURTY:
                $this->score .= "Forty";
                break;
        }
    }

    public function __toString()
    {
        return $this->score;
    }
}