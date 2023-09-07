// 9. Palindrome Number
// Level: Easy
// https://leetcode.com/problems/palindrome-number/

public class Solution
{
  public bool IsPalindrome(int x)
  {
    if (x < 0)
      return false;

    var strX = x.ToString();
    int pLeft = 0;
    int pRight = strX.Length - 1;
    while (pLeft < pRight)
    {
      if (strX[pLeft] == strX[pRight])
      {
        pLeft++;
        pRight--;
        continue;
      }
      return false;
    }
    return true;
  }
}