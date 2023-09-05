// 1. Two Sum
// Level: Easy
// https://leetcode.com/problems/two-sum/

function twoSum(nums: number[], target: number): number[] {
  let map : {[key: number]: number} = {}
  for(let i = 0; i < nums.length; i++)
  {
    debugger;
    if(nums[i] in map){
      return [i, map[nums[i]]];
    }
    map[target - nums[i]] = i;
  }
  return [-1, -1];
};