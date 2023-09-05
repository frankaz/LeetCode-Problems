# 13. Roman to Integer
# Level: Easy
# https://leetcode.com/problems/roman-to-integer/

class Solution:
  def romanToInt(self, s: str) -> int:
    total = 0
    map = {'I': 1,
           'V': 5,
           'X':10,
           'L':50,
           'C':100,
           'D':500,
           'M':1000
           }
    for idx, x in enumerate(s):
      if idx < len(s) - 1:
        if map[x] < map[s[idx+1]]:
          total -= map[x] 
        else:
          total += map[x]
      else:
        total += map[x]

    return total
