// 121. Best Time to Buy and Sell Stock
// Level: Easy
// https://leetcode.com/problems/best-time-to-buy-and-sell-stock/

class Solution {
    public int maxProfit(int[] prices) {
        int ptLow = Integer.MAX_VALUE;
        int maxProf = 0;

        for(int i = 0; i < prices.length; i++){
            ptLow = Math.min(ptLow, prices[i]);
            maxProf = Math.max(maxProf, prices[i] - ptLow);
        }
        return maxProf;
    }
}