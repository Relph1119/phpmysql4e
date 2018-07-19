alter table customers modify name char(70) not null;

alter table orders add tax float(6, 2) after amount;

alter table orders drop tax;