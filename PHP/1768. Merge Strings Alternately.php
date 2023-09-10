<?php
// 1768. Merge Strings Alternately
// Level: Easy
// https://leetcode.com/problems/merge-strings-alternately/

class Solution
{
  function mergeAlternately($word1, $word2)
  {
    $str = "";
    for ($i = 0; $i < strlen($word1) || $i < strlen($word2); $i++) {
      if ($i < strlen($word1)) {
        $str .= $word1[$i];
      }
      if ($i < strlen($word2)) {
        $str .= $word2[$i];
      }
    }
    return $str;
  }
}
