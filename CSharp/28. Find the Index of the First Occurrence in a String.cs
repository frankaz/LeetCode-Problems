// 28. Find the Index of the First Occurrence in a String
// Level: Easy
// https://leetcode.com/problems/find-the-index-of-the-first-occurrence-in-a-string/

public class Solution
{
  public int StrStr(string haystack, string needle)
  {
    int result = -1;
    int matchLoc = 0;

    for (int i = 0; i < haystack.Length; i++)
    {
      if (haystack[i] == needle[matchLoc])
      {
        matchLoc++;
        if (matchLoc == needle.Length)
        {
          result = i - matchLoc + 1;
          break;
        }
      }
      else
      {
        i -= matchLoc;
        matchLoc = 0;
      }
    }
    return result;
  }
}