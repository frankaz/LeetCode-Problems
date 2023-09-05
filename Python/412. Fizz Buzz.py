# 412. Fizz Buzz
# Level: Easy
# https://leetcode.com/problems/fizz-buzz/

class Solution:
  def fizzBuzz(self, n: int) -> List[str]:
    zzList = []
    for i in range(1, n+1):
      temp = ""
      if (i%3 == 0):
        temp = "Fizz"
      if (i%5 == 0):
        temp += "Buzz"
      zzList.append(str(i) if temp == "" else temp)

    return zzList
