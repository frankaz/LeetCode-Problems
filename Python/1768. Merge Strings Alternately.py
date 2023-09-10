# 1768. Merge Strings Alternately
# Level: Easy
# https://leetcode.com/problems/merge-strings-alternately/

class Solution:
    def mergeAlternately(self, word1: str, word2: str) -> str:
        str = ""
        i = 0;
        while i < len(word1) or i < len(word2):
            if i < len(word1):
                str += word1[i]
            if i < len(word2):
                str += word2[i]
            i += 1
        
        return str