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
    if ($note < 0
        || $note > 20) {
        return false ;
    }
    if ($note >= 12
        && $note < 14) {
        return "AB";
    } 
    return "";
}

function testMention_CE1() 
    { if (mention(-1) === false) 
        { 
            echo " Test mention(-1) : OK " ; 
        } 
        else 
        { 
            echo " Test mention(-1) : Échec" ;
        } 
    }
testMention_CE1();
echo PHP_EOL;

function testMention_CE2() 
    { if (mention(21) === false) 
        { 
            echo " Test mention(21) : OK " ; 
        } 
        else 
        { 
            echo " Test mention(21) : Échec" ;
        } 
    }
    testMention_CE2();
    echo PHP_EOL;

    function testMention_CN1() 
    { if (mention(8) === "") 
        { 
            echo " Test mention(8) : OK " ; 
        } 
        else 
        { 
            echo " Test mention(8) : Échec" ;
        } 
    }
testMention_CN1();
echo PHP_EOL;

function testMention_CN2() 
    { if (mention(12) === "AB") 
        { 
            echo " Test mention(12) : OK " ; 
        } 
        else 
        { 
            echo " Test mention(12) : Échec" ;
        } 
    }
testMention_CN2();
echo PHP_EOL;

function testMention_CN3() 
    { if (mention(14) === "B") 
        { 
            echo " Test mention(14) : OK " ; 
        } 
        else 
        { 
            echo " Test mention(14) : Échec" ;
        } 
    }
testMention_CN3();
echo PHP_EOL;


