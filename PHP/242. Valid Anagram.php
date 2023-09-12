<?php
// 1. 242. Valid Anagram
// Level: Easy
// https://leetcode.com/problems/valid-anagram/

class Solution
{
  function isAnagram($s, $t)
  {
    $map = [];

    for ($i = 0; $i < strlen($s); $i++) {
      if (!array_key_exists($s[$i], $map))
        $map[$s[$i]] = 1;
      else
        $map[$s[$i]]++;
    }

    for ($i = 0; $i < strlen($t); $i++) {
      if (!array_key_exists($t[$i], $map))
        return false;
      else
        $map[$t[$i]]--;
    }

    foreach ($map as $key => $value) {
      if ($value != 0)
        return false;
    }
    return true;
  }
}
