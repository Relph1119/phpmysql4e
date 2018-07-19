create table Customers
( CustomerID int unsigned not null auto_increment primary key,
  Name char(50) not null,
  Address char(100) not null,
  City char(30) not null
);

create table Orders
( OrderID int unsigned not null auto_increment primary key,
  CustomerID int unsigned not null,
  Amount float(6,2),
  Date date not null,
  foreign key (CustomerID) REFERENCES Customers(CustomerID)
);

create table Books
(  ISBN char(13) not null primary key,
   Author char(50),
   Title char(100),
   Price float(4,2)
);

create table Order_Items
( OrderID int unsigned not null,
  ISBN char(13) not null,
  Quantity tinyint unsigned,

  primary key (OrderID, ISBN),
  foreign key (OrderID) REFERENCES Orders(OrderID),
  foreign key (ISBN) REFERENCES Books(ISBN)

);

create table Book_Reviews
(
  ISBN char(13) not null primary key,
  Review TEXT,

  FOREIGN KEY (ISBN) REFERENCES Books(ISBN)
);
