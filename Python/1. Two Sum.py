# 1. Two Sum
# Level: Easy
# https://leetcode.com/problems/two-sum/

class Solution:
  def twoSum(self, nums: List[int], target: int) -> List[int]:
    map = dict()
    for idx, x in enumerate(nums):
      if x in map:
        return [idx, map[x]]
      map[target - x] = idx

    return [-1, -1]