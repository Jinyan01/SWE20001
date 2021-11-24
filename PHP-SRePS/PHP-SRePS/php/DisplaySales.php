<?php
	//DisplaySales for PHP-SRePS - used to display all, monthly or weekly sales

     include_once('sale.php');
	 include_once('product.php');

     //Get parameters
     $reportType = $_GET['ReportType'];
     $startDate = $_GET['StartDate'];

     If ($reportType == "All")
     {
        $allSale = new Sale('1');
        $sqlstring = "SELECT Sale.ID, Sale.SaleDateTime, Product.name ,SUM(SaleLine.Quantity) AS TotalItems, SUM(Product.Price * SaleLine.Quantity) AS TotalValue FROM Sale JOIN SaleLine ON Sale.ID = SaleLine.SaleId JOIN Product ON SaleLine.ProductId = Product.Id GROUP BY Sale.ID";
        $allSale->GetData($sqlstring);
     } elseif ($reportType == "Weekly")
     {
       $endDate = new DateTime($startDate);
       $endDate->modify('+1 week');
       $endDateString = $endDate->format('Y-m-d H:i:s');
       $allSale = new Sale('1');
       $sqlstring = "SELECT Sale.ID, Sale.SaleDateTime, Product.name ,SUM(SaleLine.Quantity) AS TotalItems, SUM(Product.Price * Product.QuantitySold) AS TotalValue ".
          "FROM Sale JOIN SaleLine ON Sale.ID = SaleLine.SaleId JOIN Product ON SaleLine.ProductId = Product.Id ".
          "WHERE Sale.SaleDateTime BETWEEN '$startDate' AND '$endDateString' GROUP BY Sale.ID";
        $allSale->GetData($sqlstring);
     } elseif ($reportType == "Monthly")
     {
       $endDate = new DateTime($startDate);
       $endDate->modify('+1 month');
       $endDateString = $endDate->format('Y-m-d H:i:s');
       $allSale = new Sale('1');
       $sqlstring = "SELECT Sale.ID, Sale.SaleDateTime, Product.name ,SUM(SaleLine.Quantity) AS TotalItems, SUM(Product.Price * Product.QuantitySold) AS TotalValue ".
          "FROM Sale JOIN SaleLine ON Sale.ID = SaleLine.SaleId JOIN Product ON SaleLine.ProductId = Product.Id ".
          "WHERE Sale.SaleDateTime BETWEEN '$startDate' AND '$endDateString' GROUP BY Sale.ID";
        $allSale->GetData($sqlstring);
     }elseif ($reportType == "Stock")
     {
        $allproduct = new Product('1');
        $sqlstring = "SELECT Product.ID, Product.name, Product.Quantity , QuantitySold";
        $allproduct->GetData($sqlstring);
     }

?>
