1. select a.* from articles a left outer join comments c on a.id = c.article_id where c.article_id is null

2. SELECT a.*, COUNT(c.article_id) AS 'comments_count' FROM articles a LEFT JOIN comments c ON a.id = c.article_id GROUP BY a.id ORDER BY comments_count DESC 

3. SELECT u.*, COUNT(c.user_id) AS comments_count FROM users u LEFT JOIN comments c ON u.id = c.user_id GROUP BY u.id order by comments_count DESC LIMIT 1 