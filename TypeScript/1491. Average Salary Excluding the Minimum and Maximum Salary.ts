// 1491. Average Salary Excluding the Minimum and Maximum Salary
// Level: Easy
// https://leetcode.com/problems/average-salary-excluding-the-minimum-and-maximum-salary/

function average(salary: number[]): number {
  const totalSalary: number = salary.reduce(function(a,b){
      return a + b
    }, 0);
  const maxSalary: number = Math.max(... salary);
  const minSalary: number = Math.min(... salary);

  return (totalSalary - maxSalary - minSalary) / (salary.length - 2);
};