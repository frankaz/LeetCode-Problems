// 28. Find the Index of the First Occurrence in a String
// Level: Easy
// https://leetcode.com/problems/find-the-index-of-the-first-occurrence-in-a-string/

function strStr(haystack: string, needle: string): number {
    let result = -1;
    let matchLoc = 0;
    
    for(let i = 0; i < haystack.length; i++){
        if(haystack[i] == needle[matchLoc]){
            matchLoc++;
            if(needle.length == matchLoc){
                result = i - matchLoc + 1;
                break;
            }
        }
        else {
            i -= matchLoc;
            matchLoc = 0;
        }
    }

    return result;
};