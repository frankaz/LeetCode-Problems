<?php
// 1480. Running Sum of 1d Array
// Level: Easy
// https://leetcode.com/problems/running-sum-of-1d-array/

class Solution
{
  function runningSum($nums)
  {
    $tempSum = 0;
    $sumResult = array_fill(
      0,
      count($nums),
      0
    );

    for ($i = 0; $i < count($nums); $i++) {
      $tempSum += $nums[$i];
      $sumResult[$i] = $tempSum;
    }
    return $sumResult;
  }
}
