alter table orders ENGINE=innodb;
alter table order_items ENGINE=innodb;

insert into orders values (5, 2, 69.98, '2008-06-18');
insert into order_items values (5, '0-672-31697-8', 1);

select * from orders where orderid = 5;
commit;

