# 28. Find the Index of the First Occurrence in a String
# Level: Easy
# https://leetcode.com/problems/find-the-index-of-the-first-occurrence-in-a-string/

class Solution:
    def strStr(self, haystack: str, needle: str) -> int:
        result = -1
        matchLoc = 0
        i = 0
        
        while i < len(haystack):
            if haystack[i] == needle[matchLoc]:
                matchLoc += 1
                if (matchLoc == len(needle)):
                    result = i - matchLoc + 1
                    break;
            else:
                i -= matchLoc
                matchLoc = 0
            i += 1

        return result