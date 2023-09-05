// 1480. Running Sum of 1d Array
// Level: Easy
// https://leetcode.com/problems/running-sum-of-1d-array/

function runningSum(nums: number[]): number[] {
  let tempSum = 0;
  let sumResult:number[] = [];

  for(let i = 0; i < nums.length; i++){
    tempSum += nums[i];
    sumResult[i] = tempSum;
  }

  return sumResult;
};