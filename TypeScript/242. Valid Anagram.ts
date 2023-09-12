// 1. 242. Valid Anagram
// Level: Easy
// https://leetcode.com/problems/valid-anagram/

function isAnagram(s: string, t: string): boolean {
    let map: {[key: string]: number} = {};

    for(let i = 0; i < s.length; i++){
        if(s[i] in map)
            map[s[i]]++;
        else
            map[s[i]] = 1;
    }

    for(let i = 0; i < t.length; i++){
        if(t[i] in map)
            map[t[i]]--;
        else
            return false;
    }

    for(let key in map){
        if(map[key] !== 0)
            return false;
    }
    return true;
};