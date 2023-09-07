// 14. Longest Common Prefix
// Level: Easy
// https://leetcode.com/problems/longest-common-prefix/

public class Solution
{
  public string LongestCommonPrefix(string[] strs)
  {
    var result = strs[0];
    var minLength = result.Length;

    for (var i = 1; i < strs.Length; i++)
    {
      minLength = Math.Min(minLength, strs[i].Length);
      for (var j = 0; j < minLength; j++)
      {
        if (result[j] == strs[i][j])
        {
          continue;
        }
        minLength = Math.Min(minLength, j);
        break;
      }
    }
    return result.Substring(0, minLength);
  }
}