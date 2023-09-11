<?php
// 28. Find the Index of the First Occurrence in a String
// Level: Easy
// https://leetcode.com/problems/find-the-index-of-the-first-occurrence-in-a-string/

class Solution
{
  function strStr($haystack, $needle)
  {
    $result = -1;
    $matchLoc = 0;
    for ($i = 0; $i < strlen($haystack); $i++) {
      if ($haystack[$i] == $needle[$matchLoc]) {
        $matchLoc++;
        if ($matchLoc == strlen($needle)) {
          $result = $i - $matchLoc + 1;
          break;
        }
      } else {
        $i -= $matchLoc;
        $matchLoc = 0;
      }
    }

    return $result;
  }
}
