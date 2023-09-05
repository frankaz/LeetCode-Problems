# 1672. Richest Customer Wealth
# Level: Easy
# https://leetcode.com/problems/richest-customer-wealth/

class Solution:
  def maximumWealth(self, accounts: List[List[int]]) -> int:
    biggestAmount = -1
    for account in accounts:
      amount = 0
      for n in account:
        amount += n
      biggestAmount = max(biggestAmount, amount)
      
    return biggestAmount
