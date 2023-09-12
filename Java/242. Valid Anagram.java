// 1. 242. Valid Anagram
// Level: Easy
// https://leetcode.com/problems/valid-anagram/

class Solution {
    public boolean isAnagram(String s, String t) {
        Map<Character, Integer> map = new HashMap<>();

        for(int i = 0; i < s.length(); i++){
            if(!map.containsKey(s.charAt(i)))
                map.put(s.charAt(i), 1);
            else
                map.merge(s.charAt(i), 1, Integer::sum);
        }

        for(int i = 0; i < t.length(); i++){
            if(!map.containsKey(t.charAt(i)))
                return false;
            else
                map.merge(t.charAt(i), -1, Integer::sum);
        }

        for (Map.Entry<Character, Integer> e : map.entrySet()) {
            if(e.getValue() != 0)
                return false;
        }

        return true;
    }
}