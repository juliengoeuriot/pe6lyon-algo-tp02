<?php

# Attribuer une mention

/*
CE1 : mention(-1) : false
CN1 : mention(8) : ""
CN2 : mention(12) : AB
CN3 : mention(14) : Bien
CN4 : mention(16) : TB
CN5 : mention(18) : Excellent
CE2 : mention(21) : false
*/

function mention($note)
{
    return false ;
}

function testMention_CE1() 
    { if (mention(-1) == false) 
        { 
            echo " Test mention(-1) : OK " ; 
        } 
        else 
        { 
            echo " Test mention(-1) : Échec" ;
        } 
    }
testMention_CE1();

