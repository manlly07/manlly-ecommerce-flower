<?php
include './database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Thêm user mới
    if ($_POST['action'] == 'sale') {
        $filter = $_POST['filter'] || 'today';
        if($filter == 'today') {
            $sql = "SELECT DATE(CURDATE()) AS today,
                            IFNULL((
                                SUM(od.quantity)
                            ), 0) AS current_day_units_sold,
                            IFNULL((
                                SELECT SUM(od2.quantity)
                                FROM order_details od2
                                JOIN orders o2 ON od2.order_id = o2.id
                                WHERE DATE(o2.order_date) = DATE_SUB(CURDATE(), INTERVAL 1 DAY)
                            ), 1) AS previous_day_units_sold,
                            (
                                (       IFNULL((
                                SUM(od.quantity)
                            ), 1) - IFNULL((
                                    SELECT SUM(od2.quantity)
                                    FROM order_details od2
                                    JOIN orders o2 ON od2.order_id = o2.id
                                    WHERE DATE(o2.order_date) = DATE_SUB(CURDATE(), INTERVAL 1 DAY)
                                ), 1)) / IFNULL((
                                    SELECT SUM(od2.quantity)
                                    FROM order_details od2
                                    JOIN orders o2 ON od2.order_id = o2.id
                                    WHERE DATE(o2.order_date) = DATE_SUB(CURDATE(), INTERVAL 1 DAY)
                                ), 1) * 100
                            ) AS daily_sales_growth_rate
                    FROM order_details od
                    JOIN orders o ON od.order_id = o.id
                    WHERE DATE(o.order_date) = CURDATE()";
        }
        if($filter == 'month') {
            $sql = "SELECT DATE(CURDATE()) AS today,
                            IFNULL((
                                SUM(od.quantity)
                            ), 0) AS current_day_units_sold,
                            IFNULL((
                                SELECT SUM(od2.quantity)
                                FROM order_details od2
                                JOIN orders o2 ON od2.order_id = o2.id
                                WHERE MONTH(DATE(o2.order_date)) = MONTH(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
                                AND YEAR(DATE(o2.order_date)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
                            ), 1) AS previous_day_units_sold,
                            (
                                (       IFNULL((
                                SUM(od.quantity)
                            ), 1) - IFNULL((
                                    SELECT SUM(od2.quantity)
                                    FROM order_details od2
                                    JOIN orders o2 ON od2.order_id = o2.id
                                    WHERE MONTH(DATE(o2.order_date)) = MONTH(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
                                    AND YEAR(DATE(o2.order_date)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
                                ), 1)) / IFNULL((
                                    SELECT SUM(od2.quantity)
                                    FROM order_details od2
                                    JOIN orders o2 ON od2.order_id = o2.id
                                    WHERE MONTH(DATE(o2.order_date)) = MONTH(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
                                    AND YEAR(DATE(o2.order_date)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
                                ), 1) * 100
                            ) AS daily_sales_growth_rate
                    FROM order_details od
                    JOIN orders o ON od.order_id = o.id
                    WHERE MONTH(DATE(o.order_date)) = MONTH(CURDATE()) AND YEAR(DATE(o.order_date)) = YEAR(CURDATE()) ";
        }
        if($filter == 'year') {
            $sql = "SELECT DATE(CURDATE()) AS today,
                            IFNULL((
                                SUM(od.quantity)
                            ), 0) AS current_day_units_sold,
                            IFNULL((
                                SELECT SUM(od2.quantity)
                                FROM order_details od2
                                JOIN orders o2 ON od2.order_id = o2.id
                                WHERE YEAR(DATE(o2.order_date)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 YEAR))
                            ), 1) AS previous_day_units_sold,
                            (
                                (       IFNULL((
                                SUM(od.quantity)
                            ), 1) - IFNULL((
                                    SELECT SUM(od2.quantity)
                                    FROM order_details od2
                                    JOIN orders o2 ON od2.order_id = o2.id
                                    WHERE YEAR(DATE(o2.order_date)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 YEAR))
                                ), 1)) / IFNULL((
                                    SELECT SUM(od2.quantity)
                                    FROM order_details od2
                                    JOIN orders o2 ON od2.order_id = o2.id
                                    WHERE YEAR(DATE(o2.order_date)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 YEAR))
                                ), 1) * 100
                            ) AS daily_sales_growth_rate
                    FROM order_details od
                    JOIN orders o ON od.order_id = o.id
                    WHERE YEAR(DATE(o.order_date)) = YEAR(CURDATE())";
        }
        $result = executeQuery($connection, $sql, [], true);
        echo json_encode($result);
    }

    if ($_POST['action'] == 'revenue') {
        $filter = $_POST['filter'] || 'today';
        if($filter == 'today') {
            $sql = "SELECT DATE(CURDATE()) AS today,
                            IFNULL((
                                SUM(od.quantity*od.price)
                            ), 0) AS current_day_units_sold,
                            IFNULL((
                                SELECT SUM(od2.quantity*od2.price)
                                FROM order_details od2
                                JOIN orders o2 ON od2.order_id = o2.id
                                WHERE DATE(o2.order_date) = DATE_SUB(CURDATE(), INTERVAL 1 DAY)
                            ), 1) AS previous_day_units_sold,
                            (
                                (       IFNULL((
                                SUM(od.quantity*od.price)
                            ), 1) - IFNULL((
                                    SELECT SUM(od2.quantity*od2.price)
                                    FROM order_details od2
                                    JOIN orders o2 ON od2.order_id = o2.id
                                    WHERE DATE(o2.order_date) = DATE_SUB(CURDATE(), INTERVAL 1 DAY)
                                ), 1)) / IFNULL((
                                    SELECT SUM(od2.quantity*od2.price)
                                    FROM order_details od2
                                    JOIN orders o2 ON od2.order_id = o2.id
                                    WHERE DATE(o2.order_date) = DATE_SUB(CURDATE(), INTERVAL 1 DAY)
                                ), 1) * 100
                            ) AS daily_sales_growth_rate
                    FROM order_details od
                    JOIN orders o ON od.order_id = o.id
                    WHERE DATE(o.order_date) = CURDATE()";
        }
        if($filter == 'month') {
            $sql = "SELECT DATE(CURDATE()) AS today,
                            IFNULL((
                                SUM(od.quantity*od.price)
                            ), 0) AS current_day_units_sold,
                            IFNULL((
                                SELECT SUM(od2.quantity*od2.price)
                                FROM order_details od2
                                JOIN orders o2 ON od2.order_id = o2.id
                                WHERE MONTH(DATE(o2.order_date)) = MONTH(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
                                AND YEAR(DATE(o2.order_date)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
                            ), 1) AS previous_day_units_sold,
                            (
                                (       IFNULL((
                                SUM(od.quantity*od.price)
                            ), 1) - IFNULL((
                                    SELECT SUM(od2.quantity*od2.price)
                                    FROM order_details od2
                                    JOIN orders o2 ON od2.order_id = o2.id
                                    WHERE MONTH(DATE(o2.order_date)) = MONTH(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
                                    AND YEAR(DATE(o2.order_date)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
                                ), 1)) / IFNULL((
                                    SELECT SUM(od2.quantity*od2.price)
                                    FROM order_details od2
                                    JOIN orders o2 ON od2.order_id = o2.id
                                    WHERE MONTH(DATE(o2.order_date)) = MONTH(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
                                    AND YEAR(DATE(o2.order_date)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 MONTH))
                                ), 1) * 100
                            ) AS daily_sales_growth_rate
                    FROM order_details od
                    JOIN orders o ON od.order_id = o.id
                    WHERE MONTH(DATE(o.order_date)) = MONTH(CURDATE()) AND YEAR(DATE(o.order_date)) = YEAR(CURDATE()) ";
        }
        if($filter == 'year') {
            $sql = "SELECT DATE(CURDATE()) AS today,
                            IFNULL((
                                SUM(od.quantity*od.price)
                            ), 0) AS current_day_units_sold,
                            IFNULL((
                                SELECT SUM(od2.quantity*od2.price)
                                FROM order_details od2
                                JOIN orders o2 ON od2.order_id = o2.id
                                WHERE YEAR(DATE(o2.order_date)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 YEAR))
                            ), 1) AS previous_day_units_sold,
                            (
                                (       IFNULL((
                                SUM(od.quantity*od.price)
                            ), 1) - IFNULL((
                                    SELECT SUM(od2.quantity*od2.price)
                                    FROM order_details od2
                                    JOIN orders o2 ON od2.order_id = o2.id
                                    WHERE YEAR(DATE(o2.order_date)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 YEAR))
                                ), 1)) / IFNULL((
                                    SELECT SUM(od2.quantity*od2.price)
                                    FROM order_details od2
                                    JOIN orders o2 ON od2.order_id = o2.id
                                    WHERE YEAR(DATE(o2.order_date)) = YEAR(DATE_SUB(CURDATE(), INTERVAL 1 YEAR))
                                ), 1) * 100
                            ) AS daily_sales_growth_rate
                    FROM order_details od
                    JOIN orders o ON od.order_id = o.id
                    WHERE YEAR(DATE(o.order_date)) = YEAR(CURDATE())";
        }
        $result = executeQuery($connection, $sql, [], true);
        echo json_encode($result);
    }

    if($_POST['action'] == 'report') {
        $sql = "SELECT months.month, COALESCE(sale, 0) AS sale
                FROM (
                SELECT 1 AS month UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6
                UNION SELECT 7 UNION SELECT 8 UNION SELECT 9 UNION SELECT 10 UNION SELECT 11 UNION SELECT 12
                ) AS months
                LEFT JOIN (
                SELECT MONTH(o.order_date) AS month, SUM(od.quantity) AS sale
                FROM orders o
                LEFT JOIN order_details od ON o.id = od.order_id
                WHERE o.status = 'delivered'
                    AND YEAR(DATE(o.order_date)) = YEAR(CURDATE())
                GROUP BY MONTH(o.order_date)
                ) AS sales ON months.month = sales.month
                ORDER BY months.month";
        $sale = executeQuery($connection, $sql, [], true);
        $sql = "SELECT months.month, COALESCE(revenue, 0) AS revenue
                FROM (
                SELECT 1 AS month UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6
                UNION SELECT 7 UNION SELECT 8 UNION SELECT 9 UNION SELECT 10 UNION SELECT 11 UNION SELECT 12
                ) AS months
                LEFT JOIN (
                SELECT MONTH(o.order_date) AS month, SUM(od.quantity*od.price) AS revenue
                FROM orders o
                LEFT JOIN order_details od ON o.id = od.order_id
                WHERE o.status = 'delivered'
                    AND YEAR(DATE(o.order_date)) = YEAR(CURDATE())
                GROUP BY MONTH(o.order_date)
                ) AS sales ON months.month = sales.month
                ORDER BY months.month";
        $revenue = executeQuery($connection, $sql, [], true);
        for($i = 0; $i < count($sale); $i++) {
            $sale[$i]['revenue'] = $revenue[$i]['revenue'];
        }
        echo json_encode($sale);
        // YEAR(CURDATE())
    }

    if($_POST['action'] == 'products') {
        $sql = "SELECT
                    p.id,
                    p.name,
                    (
                        SELECT link
                        FROM images
                        WHERE product_id = p.id
                        LIMIT 1
                    ) AS image,
                    p.price,
                    SUM(od.quantity) AS total_quantity
                FROM
                    products p
                    INNER JOIN order_details od ON p.id = od.product_id
                    INNER JOIN orders o ON od.order_id = o.id
                WHERE
                    o.status = 'delivered'
                GROUP BY
                    p.id, p.name, p.price
                ORDER BY
                    total_quantity DESC
                LIMIT 5";
        $result = executeQuery($connection, $sql, [], true);
        echo json_encode($result);
    }
}
?>