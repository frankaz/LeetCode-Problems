// 1768. Merge Strings Alternately
// Level: Easy
// https://leetcode.com/problems/merge-strings-alternately/

function mergeAlternately(word1: string, word2: string): string {
    let str = "";
    for(let i = 0; i < word1.length || i < word2.length; i++){
        if(i < word1.length)
            str += word1[i];
        if(i < word2.length)
            str += word2[i];
    }
    return str;
};