# 1. 242. Valid Anagram
# Level: Easy
# https://leetcode.com/problems/valid-anagram/

class Solution:
    def isAnagram(self, s: str, t: str) -> bool:
        map = dict()

        for idx, val in enumerate(s):
            if val not in map:
                map[val] = 1
            else:
                map[val] += 1
        
        for idx, val in enumerate(t):
            if val not in map:
                return False
            else:
                map[val] -= 1
        
        for key, value in map.items():
            if value != 0:
                return False
        
        return True