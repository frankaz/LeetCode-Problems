-- 1148. Article Views I
-- Level: Easy
-- https://leetcode.com/problems/article-views-i/

select author_id as id 
from Views
where author_id = viewer_id
group by author_id
order by author_id