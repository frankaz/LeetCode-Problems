// 13. Roman to Integer
// Level: Easy
// https://leetcode.com/problems/roman-to-integer/

public class Solution
{
  public int RomanToInt(string s)
  {
    int total = 0;
    var map = new Dictionary<char, int>
    {
      { 'I', 1 },
      { 'V', 5 },
      { 'X', 10 },
      { 'L', 50 },
      { 'C', 100 },
      { 'D', 500 },
      { 'M', 1000 }
    };
    for (int i = 0; i < s.Length; i++)
    {
      if (i < s.Length - 1)
      {
        if (map[s[i]] < map[s[i + 1]])
          total -= map[s[i]];
        else
          total += map[s[i]];
      }
      else
        total += map[s[i]];
    }

    return total;
  }
}