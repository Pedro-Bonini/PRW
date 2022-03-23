<?php
    $n1 = 20;
    $n2 = 10;
    $n3 = 50;

    if($n1 < $n2 and $n1 < $n3)
    {
        if($n2 < $n3)
        {   
            echo $n1.", ".$n2." e ".$n3;
        }
        else
        {
            if($n2 > $n3)
            {
                echo $n1.", ".$n3." e ".$n2;
            }
            else
            {
                if($n2 < $n1 and $n2 < $n3)
                {
                    if($n1 < $n3)
                    {
                        echo $n2.", ".$n1." e ".$n3; 
                    }
                    else
                    {
                        if($n1 > $n3)
                        {
                            echo $n2.", ".$n3." e ".$n1;
                        }
                        else
                        {
                            if($n3 < $n1 and $n3 < $n2)
                            {
                                if($n1 < $n2)
                                {
                                    echo $n3.", ".$n1." e ".$n2;
                                }
                                else
                                {
                                    if($n1 > $n2)
                                    {
                                        echo $n3.", ".$n2." e ".$n1;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
?>