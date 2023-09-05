// 1480. Running Sum of 1d Array
// Level: Easy
// https://leetcode.com/problems/running-sum-of-1d-array/

public class Solution
{
  public int[] RunningSum(int[] nums)
  {
    var tempSum = 0;
    var sumResult = new int[nums.Length];

    for (int i = 0; i < nums.Length; i++)
    {
      tempSum += nums[i];
      sumResult[i] = tempSum;
    }
    return sumResult;
  }
}