// 14. Longest Common Prefix
// Level: Easy
// https://leetcode.com/problems/longest-common-prefix/

function longestCommonPrefix(strs: string[]): string {
    let result = strs[0];
    let minLength = result.length;

    for(let i = 1; i < strs.length; i++){
        minLength = Math.min(minLength, strs[i].length);
        for(let j = 0; j < minLength; j++){
            if(result[j] === strs[i][j]){
                continue;
            }
            minLength = Math.min(minLength, j);
            break;
        }
    }
    return result.substring(0, minLength);
};