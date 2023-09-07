# 14. Longest Common Prefix
# Level: Easy
# https://leetcode.com/problems/longest-common-prefix/

class Solution:
    def longestCommonPrefix(self, strs: List[str]) -> str:
        result = strs[0]
        minLength = len(result)

        for i in range(1, len(strs)):
            minLength = min(minLength, len(strs[i]))
            for j in range(0, minLength):
                if result[j] == strs[i][j]:
                    continue
                minLength = min(minLength, j)
                break
        
        return result[0:minLength]
