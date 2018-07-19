# Trigger example

DELIMITER //

# delete order_items before order to avoid referential integrity sqlerror
create trigger Delete_Order_Items
before delete on Orders for each row

BEGIN
  DECLARE FROM Order_Items WHERE OLD.OrderID = OrderID;
END
//

DELIMITER ;