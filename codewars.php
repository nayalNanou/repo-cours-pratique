<?php
/* CODEWARS DU 24-01-2023*/
function spinWords(string $str): string {
  $tabChaine = explode(" ", $str);
  $taille = count($tabChaine);
  for($i=0; $i<$taille; $i++)
  {
    if(strlen($tabChaine[$i]) < 5)
    {
    
    }
    else
    {
      $tabChaine[$i]=strrev($tabChaine[$i]);
    }
 
  }
    $newChaine="";
    $newChaine=implode(" ",$tabChaine);
    return $newChaine;
}
/***************************************************************************************************************************** */