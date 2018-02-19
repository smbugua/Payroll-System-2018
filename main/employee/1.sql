SELECT E.name NAME,SUM(D.sales_amount) as fast_moving
FROM products E NATURAL JOIN product_sales D WHERE SUM(D.sales_amount)>1000000  