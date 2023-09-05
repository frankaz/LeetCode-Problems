-- 1757. Recyclable and Low Fat Products
-- Level: Easy
-- https://leetcode.com/problems/recyclable-and-low-fat-products/

select product_id 
  from Products 
  where low_fats = 'Y' and recyclable = 'Y'

