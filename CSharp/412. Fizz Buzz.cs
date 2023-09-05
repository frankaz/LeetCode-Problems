// 412. Fizz Buzz
// Level: Easy
// https://leetcode.com/problems/fizz-buzz/

public class Solution {
  public IList<string> FizzBuzz(int n) {
    var zzList = new List<String>(n);

    for (int i = 1; i <= n; i++) {
      var temp = "";
      if (i % 3 == 0) temp = "Fizz";
      if (i % 5 == 0) temp += "Buzz";
      zzList.Add(string.IsNullOrWhiteSpace(temp) ? i.ToString() : temp);
    }

    return zzList;
  }
}