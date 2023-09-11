// 28. Find the Index of the First Occurrence in a String
// Level: Easy
// https://leetcode.com/problems/find-the-index-of-the-first-occurrence-in-a-string/

class Solution {
    public int strStr(String haystack, String needle) {
        int result = -1;
        int matchLoc = 0;
        
        for(int i = 0; i < haystack.length(); i++){
            if(haystack.charAt(i) == needle.charAt(matchLoc)){
                matchLoc++;
                if(needle.length() == matchLoc){
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
    }
}