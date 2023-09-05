<?php
// 1. Two Sum
// Level: Easy
// https://leetcode.com/problems/two-sum/

class Solution
{
  function twoSum($nums, $target)
  {
    $map = [];
    for ($i = 0; $i < count($nums); $i++) {
      if (array_key_exists($nums[$i], $map))
        return [
          $i, $map[$nums[$i]]
        ];
      $map[$target - $nums[$i]]  = $i;
    }
    return [-1, -1];
  }
}
