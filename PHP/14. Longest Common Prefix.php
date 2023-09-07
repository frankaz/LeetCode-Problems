<?php
// 14. Longest Common Prefix
// Level: Easy
// https://leetcode.com/problems/longest-common-prefix/

class Solution
{
  function longestCommonPrefix($strs)
  {
    $result = $strs[0];
    $minLength = strlen($result);
    for (
      $i = 1;
      $i < count($strs);
      $i++
    ) {
      $minLength = min($minLength, strlen($strs[$i]));
      for ($j = 0; $j < $minLength; $j++) {
        if ($result[$j] == $strs[$i][$j]) {
          continue;
        }
        $minLength = min($minLength, $j);
        break;
      }
    }
    return substr($result, 0, $minLength);
  }
}
