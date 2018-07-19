insert into customers (name, address, city) values
  ('Melissa Jones', '','Nar Nar Goon North');

insert into customers
set name = 'Micheal Archer',
  address = '12 Adderley Avenue',
  city = 'Leeton';

select name, city from customers

select * from order_items;

select * from orders where customerid = 3;

select * from orders where customerid = 3 or customerid = 4;

--简单的双表关联
select orders.orderid, orders.amount, orders.date
from customers, orders
where customers.name = 'Julie Smith'
and customers.customerid = orders.customerid;

--关联多个表
select customers.name
from customers, orders, order_items, books
where customers.customerid = orders.customerid
and orders.orderid = order_items.orderid
and order_items.isbn = books.isbn
and books.title like '%Java%';

--查找不匹配项
select customers.customerid, customers.name, orders.orderid
from customers left join orders
on customers.customerid = orders.customerid;

select customers.customerid, customers.name
from customers left join orders
using (customerid)
where orders.orderid is null;

--使用表的别名
select c.name
from customers as c, orders as o, order_items as oi, books as b
where c.customerid = o.customerid
and o.orderid = oi.orderid
and oi.isbn = b.isbn
and b.title like '%Java%';

select c1.name, c2.name, c1.city
from customers as c1, customers as c2
where c1.city = c2.city
and c1.name != c2.name;

--以特定的顺序获取数据
select name, address
from customers
order by name;

select name, address
from customers
order by name asc;

select name, address
from customers
order by name desc;

--计算一个订单总金额的平均值
select avg(amount) from orders;

--哪个顾客的订单总金额最大
select customerid, avg(amount) from orders group by customerid;

--哪些顾客的平均订单总金额超过$50
select customerid, avg(amount) from orders group by customerid having avg(amount) > 50;

--选择要返回的行
select name from customers limit 2, 3;

--使用子查询
select customerid, amount from orders
where amount = (select max(amount) from orders);

select customerid, amount from orders order by amount desc limit 1;

--关联子查询
select isbn, title from books
where not exists
(select * from order_items where order_items.isbn = books.isbn);

--使用子查询作为临时表
select * from (select customerid, name from customers where city = 'Box Hill')
as box_hill_customers;
