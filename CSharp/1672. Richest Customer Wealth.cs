// 1672. Richest Customer Wealth
// Level: Easy
// https://leetcode.com/problems/richest-customer-wealth/

public class Solution
{
  public int MaximumWealth(int[][] accounts)
  {
    var biggestAmount = -1;
    for (int i = 0; i < accounts.Length; i++)
    {
      var amount = 0;
      for (int j = 0; j < accounts[i].Length; j++)
      {
        amount += accounts[i][j];
      }
      biggestAmount = Math.Max(biggestAmount, amount);
    }
    return biggestAmount;
  }
}