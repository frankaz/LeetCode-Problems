<?php
// 1672. Richest Customer Wealth
// Level: Easy
// https://leetcode.com/problems/richest-customer-wealth/

class Solution
{
  function maximumWealth($accounts)
  {
    $biggestAmount = -1;

    for ($i = 0; $i < count($accounts); $i++) {
      $amount = 0;
      for ($j = 0; $j < count($accounts[$i]); $j++) {
        $amount += $accounts[$i][$j];
      }
      $biggestAmount = max($biggestAmount, $amount);
    }
    return $biggestAmount;
  }
}
