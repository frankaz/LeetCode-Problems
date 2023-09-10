<?php
// 121. Best Time to Buy and Sell Stock
// Level: Easy
// https://leetcode.com/problems/best-time-to-buy-and-sell-stock/

class Solution
{
  function maxProfit($prices)
  {
    $ptLow = PHP_INT_MAX;
    $maxProf = 0;

    for ($i = 0; $i < count($prices); $i++) {
      $ptLow = min($ptLow, $prices[$i]);
      $maxProf = max($maxProf, $prices[$i] - $ptLow);
    }
    return $maxProf;
  }
}
