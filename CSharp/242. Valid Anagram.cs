// 1. 242. Valid Anagram
// Level: Easy
// https://leetcode.com/problems/valid-anagram/


public class Solution
{
  public bool IsAnagram(string s, string t)
  {
    var map = new Dictionary<char, int>();

    for (var i = 0; i < s.Length; i++)
    {
      if (!map.ContainsKey(s[i]))
        map[s[i]] = 1;
      else
        map[s[i]]++;
    }

    for (var i = 0; i < t.Length; i++)
    {
      if (!map.ContainsKey(t[i]))
        return false;
      else
        map[t[i]]--;
    }

    foreach (var c in map)
    {
      if (c.Value != 0)
        return false;
    }
    return true;
  }
}