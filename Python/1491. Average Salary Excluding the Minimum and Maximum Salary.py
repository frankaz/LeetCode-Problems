# 1491. Average Salary Excluding the Minimum and Maximum Salary
# Level: Easy
# https://leetcode.com/problems/average-salary-excluding-the-minimum-and-maximum-salary/

class Solution:
  def average(self, salary: List[int]) -> float:
    totalSalary = sum(salary)
    maxSalary = max(salary)
    minSalary = min(salary)

    return (totalSalary - maxSalary - minSalary) / (len(salary)-2)