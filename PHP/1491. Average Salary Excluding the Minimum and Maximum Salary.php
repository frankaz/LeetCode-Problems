<?php
// 1491. Average Salary Excluding the Minimum and Maximum Salary
// Level: Easy
// https://leetcode.com/problems/average-salary-excluding-the-minimum-and-maximum-salary/

class Solution
{
  function average($salary)
  {
    $totalSalary = array_sum($salary);
    $minSalary = min($salary);
    $maxSalary = max($salary);

    return ($totalSalary - $minSalary - $maxSalary) / (count($salary) - 2);
  }
}
