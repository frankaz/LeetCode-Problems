// 121. Best Time to Buy and Sell Stock
// Level: Easy
// https://leetcode.com/problems/best-time-to-buy-and-sell-stock/

function maxProfit(prices: number[]): number {
    let ptLow = Number.MAX_VALUE;
    let maxProf = 0;

    for(let i = 0; i < prices.length; i++){
        ptLow = Math.min(ptLow, prices[i]);
        maxProf = Math.max(maxProf, prices[i] - ptLow);
    }
    return maxProf;
};