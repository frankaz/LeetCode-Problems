# 121. Best Time to Buy and Sell Stock
# Level: Easy
# https://leetcode.com/problems/best-time-to-buy-and-sell-stock/

class Solution:
    def maxProfit(self, prices: List[int]) -> int:
        ptLow = sys.maxsize
        maxProf = 0

        for idx, val in enumerate(prices):
            ptLow = min(ptLow, val)
            maxProf = max(maxProf, val - ptLow)
        
        return maxProf