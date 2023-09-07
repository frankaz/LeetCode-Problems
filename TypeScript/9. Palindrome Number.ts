// 9. Palindrome Number
// Level: Easy
// https://leetcode.com/problems/palindrome-number/

function isPalindrome(x: number): boolean {
    if (x < 0)
        return false;
    
    const xStr = x.toString();
    let pLeft = 0;
    let pRight = xStr.length - 1;

    while (pLeft < pRight){
        if(xStr[pLeft] === xStr[pRight]){
            pLeft++;
            pRight--;
            continue;
        }
        return false;
    }
    return true;
};