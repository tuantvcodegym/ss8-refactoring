<?php
/**
 * Created by PhpStorm.
 * User: TuanTran
 * Date: 1/31/2019
 * Time: 11:53 PM
 */
class TennisGame
{
    public $score = '';
    public function getScore($m_score1, $m_score2)
    {
        $tempScore=0;
        if ($m_score1==$m_score2) {
            switch ($m_score1)
            {
                case 0:
                    $this->score = "Love-All";
                    break;
                case 1:
                    $this->score = "Fifteen-All";
                    break;
                case 2:
                    $this->score = "Thirty-All";
                    break;
                case 3:
                    $this->score = "Forty-All";
                    break;
                default:
                    $this->score = "Deuce";
                    break;
            }
        }
        else if ($m_score1>=4 || $m_score2>=4)
        {
            $minusResult = $m_score1-$m_score2;
            if ($minusResult==1) $this->score ="Advantage player1";
            else if ($minusResult ==-1) $this->score ="Advantage player2";
            else if ($minusResult>=2) $this->score = "Win for player1";
            else $this->score ="Win for player2";
        }
        else
        {
            for ($i=1; $i<3; $i++)
            {
                if ($i==1) $tempScore = $m_score1;
                else { $this->score.="-"; $tempScore = $m_score2;}
                switch($tempScore)
                {
                    case 0:
                        $this->score.="Love";
                        break;
                    case 1:
                        $this->score.="Fifteen";
                        break;
                    case 2:
                        $this->score.="Thirty";
                        break;
                    case 3:
                        $this->score.="Forty";
                        break;
                }
            }
        }
    }
    public function __toString()
    {
        return $this->score;
    }
}