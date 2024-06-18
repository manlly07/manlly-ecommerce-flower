<?php
include './database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST['action'] == 'sale') {
        $filter = $_POST['filter'] ?? 'today';
        if ($filter == 'today') {
            $sql = "SELECT DATE(CURDATE()) AS today,
       IFNULL((SUM(od.quantity)), 0) AS current_day_units_sold,
       IFNULL((
           SELECT SUM(od2.quantity)
           FROM OrderDetail od2
           JOIN Orders o2 ON od2.order_id = o2.id
           WHERE DATE(o2.created_at) = DATE_SUB(CURDATE(), INTERVAL 1 DAY)
       ), 1) AS previous_day_units_sold,
       (
           (IFNULL((SUM(od.quantity)), 1) - IFNULL((
               SELECT SUM(od2.quantity)
               FROM OrderDetail od2
               JOIN Orders o2 ON od2.order_id = o2.id
               WHERE DATE(o2.created_at) = DATE_SUB(CURDATE(), INTERVAL 1 DAY)
           ), 1)) / IFNULL((
               SELECT SUM(od2.quantity)
               FROM OrderDetail od2
               JOIN Orders o2 ON od2.order_id = o2.id
               WHERE DATE(o2.created_at) = DATE_SUB(CURDATE(), INTERVAL 1 DAY)
           ), 1) * 100
       ) AS daily_sales_growth_rate
FROM OrderDetail od
JOIN Orders o ON od.order_id = o.id
WHERE DATE(o.created_at) = CURDATE()";
        }
        if ($filter == 'month') {
            $sql = "SELECT DATE(CURDATE()) AS today,
       IFNULL((SUM(od.quantity)), 0) AS current_day_units_sold,
       IFNULL((
           SELECT SUM(od2.quantity)
           FROM OrderDetail od2
           JOIN Orders o2 ON od2.order_id = o2.id
           WHERE MONTH(DATE(o2.created_at)) = MONTH(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
           AND YEAR(DATE(o2.created_at)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
       ), 1) AS previous_month_units_sold,
       (
           (IFNULL((SUM(od.quantity)), 1) - IFNULL((
               SELECT SUM(od2.quantity)
               FROM OrderDetail od2
               JOIN Orders o2 ON od2.order_id = o2.id
               WHERE MONTH(DATE(o2.created_at)) = MONTH(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
               AND YEAR(DATE(o2.created_at)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
           ), 1)) / IFNULL((
               SELECT SUM(od2.quantity)
               FROM OrderDetail od2
               JOIN Orders o2 ON od2.order_id = o2.id
               WHERE MONTH(DATE(o2.created_at)) = MONTH(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
               AND YEAR(DATE(o2.created_at)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
           ), 1) * 100
       ) AS monthly_sales_growth_rate
FROM OrderDetail od
JOIN Orders o ON od.order_id = o.id
WHERE MONTH(DATE(o.created_at)) = MONTH(CURDATE()) 
  AND YEAR(DATE(o.created_at)) = YEAR(CURDATE()) ";
        }
        if ($filter == 'year') {
            $sql = "SELECT DATE(CURDATE()) AS today,
       IFNULL((SUM(od.quantity)), 0) AS current_day_units_sold,
       IFNULL((
           SELECT SUM(od2.quantity)
           FROM OrderDetail od2
           JOIN Orders o2 ON od2.order_id = o2.id
           WHERE YEAR(DATE(o2.created_at)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 YEAR))
       ), 1) AS previous_year_units_sold,
       (
           (IFNULL((SUM(od.quantity)), 1) - IFNULL((
               SELECT SUM(od2.quantity)
               FROM OrderDetail od2
               JOIN Orders o2 ON od2.order_id = o2.id
               WHERE YEAR(DATE(o2.created_at)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 YEAR))
           ), 1)) / IFNULL((
               SELECT SUM(od2.quantity)
               FROM OrderDetail od2
               JOIN Orders o2 ON od2.order_id = o2.id
               WHERE YEAR(DATE(o2.created_at)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 YEAR))
           ), 1) * 100
       ) AS annual_sales_growth_rate
FROM OrderDetail od
JOIN Orders o ON od.order_id = o.id
WHERE YEAR(DATE(o.created_at)) = YEAR(CURDATE()) ";
        }
        $result = executeQuery($connection, $sql, [], true);
        echo json_encode($result);
    }

    if ($_POST['action'] == 'revenue') {
        $filter = $_POST['filter'] ?? 'today';
        if ($filter == 'today') {
            $sql = "SELECT DATE(CURDATE()) AS today,
       IFNULL(SUM(od.quantity * od.price), 0) AS current_day_units_sold,
       IFNULL((
           SELECT SUM(od2.quantity * od2.price)
           FROM OrderDetail od2
           JOIN Orders o2 ON od2.order_id = o2.id
           WHERE DATE(o2.created_at) = DATE_SUB(CURDATE(), INTERVAL 1 DAY)
       ), 1) AS previous_day_revenue,
       (
           (IFNULL(SUM(od.quantity * od.price), 1) - IFNULL((
               SELECT SUM(od2.quantity * od2.price)
               FROM OrderDetail od2
               JOIN Orders o2 ON od2.order_id = o2.id
               WHERE DATE(o2.created_at) = DATE_SUB(CURDATE(), INTERVAL 1 DAY)
           ), 1)) / IFNULL((
               SELECT SUM(od2.quantity * od2.price)
               FROM OrderDetail od2
               JOIN Orders o2 ON od2.order_id = o2.id
               WHERE DATE(o2.created_at) = DATE_SUB(CURDATE(), INTERVAL 1 DAY)
           ), 1) * 100
       ) AS daily_sales_growth_rate
FROM OrderDetail od
JOIN Orders o ON od.order_id = o.id
WHERE DATE(o.created_at) = CURDATE() 
  AND o.status = 'delivered'";
        }
        if ($filter == 'month') {
            $sql = "SELECT DATE(CURDATE()) AS today,
       IFNULL(SUM(od.quantity * od.price), 0) AS current_day_units_sold,
       IFNULL((
           SELECT SUM(od2.quantity * od2.price)
           FROM OrderDetail od2
           JOIN Orders o2 ON od2.order_id = o2.id
           WHERE MONTH(DATE(o2.created_at)) = MONTH(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
             AND YEAR(DATE(o2.created_at)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
       ), 1) AS previous_month_revenue,
       (
           (IFNULL(SUM(od.quantity * od.price), 1) - IFNULL((
               SELECT SUM(od2.quantity * od2.price)
               FROM OrderDetail od2
               JOIN Orders o2 ON od2.order_id = o2.id
               WHERE MONTH(DATE(o2.created_at)) = MONTH(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
                 AND YEAR(DATE(o2.created_at)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
           ), 1)) / IFNULL((
               SELECT SUM(od2.quantity * od2.price)
               FROM OrderDetail od2
               JOIN Orders o2 ON od2.order_id = o2.id
               WHERE MONTH(DATE(o2.created_at)) = MONTH(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
                 AND YEAR(DATE(o2.created_at)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
           ), 1) * 100
       ) AS monthly_sales_growth_rate
FROM OrderDetail od
JOIN Orders o ON od.order_id = o.id
WHERE MONTH(DATE(o.created_at)) = MONTH(CURDATE())
  AND YEAR(DATE(o.created_at)) = YEAR(CURDATE())
  AND o.status = 'delivered'";
        }
        if ($filter == 'year') {
            $sql = "SELECT DATE(CURDATE()) AS today,
       IFNULL(SUM(od.quantity * od.price), 0) AS current_day_units_sold,
       IFNULL((
           SELECT SUM(od2.quantity * od2.price)
           FROM OrderDetail od2
           JOIN Orders o2 ON od2.order_id = o2.id
           WHERE YEAR(DATE(o2.created_at)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 YEAR))
       ), 1) AS previous_year_revenue,
       (
           (IFNULL(SUM(od.quantity * od.price), 1) - IFNULL((
               SELECT SUM(od2.quantity * od2.price)
               FROM OrderDetail od2
               JOIN Orders o2 ON od2.order_id = o2.id
               WHERE YEAR(DATE(o2.created_at)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 YEAR))
           ), 1)) / IFNULL((
               SELECT SUM(od2.quantity * od2.price)
               FROM OrderDetail od2
               JOIN Orders o2 ON od2.order_id = o2.id
               WHERE YEAR(DATE(o2.created_at)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 YEAR))
           ), 1) * 100
       ) AS annual_sales_growth_rate
FROM OrderDetail od
JOIN Orders o ON od.order_id = o.id
WHERE YEAR(DATE(o.created_at)) = YEAR(CURDATE())";
        }
        $result = executeQuery($connection, $sql, [], true);
        echo json_encode($result);
    }

    if ($_POST['action'] == 'report') {
        $sql = "SELECT months.month, COALESCE(sale, 0) AS sale
FROM (
    SELECT 1 AS month UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6
    UNION SELECT 7 UNION SELECT 8 UNION SELECT 9 UNION SELECT 10 UNION SELECT 11 UNION SELECT 12
) AS months
LEFT JOIN (
    SELECT MONTH(o.created_at) AS month, SUM(od.quantity) AS sale
    FROM Orders o
    LEFT JOIN OrderDetail od ON o.id = od.order_id
    WHERE YEAR(DATE(o.created_at)) = YEAR(CURDATE())
    GROUP BY MONTH(o.created_at)
) AS sales ON months.month = sales.month
ORDER BY months.month";
        $sale = executeQuery($connection, $sql, [], true);
        $sql = "SELECT months.month, COALESCE(revenue, 0) AS revenue
FROM (
    SELECT 1 AS month UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6
    UNION SELECT 7 UNION SELECT 8 UNION SELECT 9 UNION SELECT 10 UNION SELECT 11 UNION SELECT 12
) AS months
LEFT JOIN (
    SELECT MONTH(o.created_at) AS month, SUM(od.quantity * od.price) AS revenue
    FROM Orders o
    LEFT JOIN OrderDetail od ON o.id = od.order_id
    WHERE YEAR(DATE(o.created_at)) = YEAR(CURDATE())
    GROUP BY MONTH(o.created_at)
) AS sales ON months.month = sales.month
ORDER BY months.month";
        $revenue = executeQuery($connection, $sql, [], true);
        for ($i = 0; $i < count($sale); $i++) {
            $sale[$i]['revenue'] = $revenue[$i]['revenue'];
        }
        echo json_encode($sale);
        // YEAR(CURDATE())
    }

    if ($_POST['action'] == 'products') {
        $sql = "SELECT
    ps.id AS product_id,
    ps.name AS product_name,
    ods.price AS product_price,
    (
        SELECT image
        FROM ProductImage
        WHERE product_id = ps.id
        LIMIT 1
    ) AS image,
    COALESCE(SUM(ods.quantity), 0) AS total_quantity_sold
FROM
    ProductSpus ps
    LEFT JOIN SpuToSku sts ON ps.id = sts.spu_id
    LEFT JOIN ProductSkus psk ON sts.sku_id = psk.id
    LEFT JOIN OrderDetail ods ON psk.id = ods.product_id
    LEFT JOIN Orders o ON ods.order_id = o.id
WHERE
    o.status = 'delivered'
GROUP BY
    ps.id, ps.name
ORDER BY
    total_quantity_sold DESC
LIMIT 5";
        $result = executeQuery($connection, $sql, [], true);
        echo json_encode($result);
    }
}
