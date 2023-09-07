# 9. Palindrome Number
# Level: Easy
# https://leetcode.com/problems/palindrome-number/

class Solution:
    def isPalindrome(self, x: int) -> bool:
        if x < 0:
            return False
        
        xStr = str(x)
        pLeft = 0
        pRight = len(xStr) -1

        while pLeft < pRight:
            if xStr[pLeft] == xStr[pRight]:
                pLeft += 1
                pRight -= 1
                continue;
            return False
        return True
        