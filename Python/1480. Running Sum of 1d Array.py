# 1480. Running Sum of 1d Array
# Level: Easy
# https://leetcode.com/problems/running-sum-of-1d-array/

class Solution:
  def runningSum(self, nums: List[int]) -> List[int]:
    tempSum = 0
    sumResult = [0] * len(nums)

    for idx, val in enumerate(nums):
      tempSum += val
      sumResult[idx] = tempSum

    return sumResult
