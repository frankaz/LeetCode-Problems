<?php
// 9. Palindrome Number
// Level: Easy
// https://leetcode.com/problems/palindrome-number/

class Solution
{
  function isPalindrome($x)
  {
    if ($x < 0) {
      return false;
    }

    $strX = strval($x);
    $pLeft = 0;
    $pRight = strlen($strX) - 1;

    while ($pLeft < $pRight) {
      if ($strX[$pLeft] == $strX[$pRight]) {
        $pLeft++;
        $pRight--;
        continue;
      }
      return false;
    }
    return true;
  }
}
