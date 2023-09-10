// 121. Best Time to Buy and Sell Stock
// Level: Easy
// https://leetcode.com/problems/best-time-to-buy-and-sell-stock/

public class Solution
{
  public int MaxProfit(int[] prices)
  {
    int ptLow = int.MaxValue;
    int maxProf = 0;
    for (int i = 0; i < prices.Length; i++)
    {
      ptLow = Math.Min(ptLow, prices[i]);
      maxProf = Math.Max(maxProf, prices[i] - ptLow);
    }
    return maxProf;
  }
}