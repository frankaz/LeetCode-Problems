// 1672. Richest Customer Wealth
// Level: Easy
// https://leetcode.com/problems/richest-customer-wealth/

function maximumWealth(accounts: number[][]): number {
  let biggestAmount = -1;
  for(let i = 0; i < accounts.length; i++){
    let amount = 0;
    for(let j=0; j < accounts[i].length; j++){
      amount += accounts[i][j];
    }
    biggestAmount = Math.max(biggestAmount, amount);
  }
  return biggestAmount;
};