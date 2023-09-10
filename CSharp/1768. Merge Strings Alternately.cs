// 1768. Merge Strings Alternately
// Level: Easy
// https://leetcode.com/problems/merge-strings-alternately/

public class Solution
{
  public string MergeAlternately(string word1, string word2)
  {
    StringBuilder str = new StringBuilder();
    for (int i = 0; i < word1.Length || i < word2.Length; i++)
    {
      if (word1.Length > i)
        str.Append(word1[i]);
      if (word2.Length > i)
        str.Append(word2[i]);
    }
    return str.ToString();
  }
}