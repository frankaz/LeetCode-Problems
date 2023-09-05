// 2839. Check if Strings Can be Made Equal With Operations I
// Level: Easy
// https://leetcode.com/problems/check-if-strings-can-be-made-equal-with-operations-i/

public class Solution
{
  public bool CanBeEqual(string s1, string s2)
  {
    if (s1 == s2)
      return true;
    if (s1 == string.Join("", new char[] { s2[0], s2[3], s2[2], s2[1] }))
      return true;
    if (s1 == string.Join("", new char[] { s2[2], s2[1], s2[0], s2[3] }))
      return true;
    if (s1 == string.Join("", new char[] { s2[2], s2[3], s2[0], s2[1] }))
      return true;

    return false;
  }
}