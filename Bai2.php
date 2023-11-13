<?php

// Mảng kết hợp chứa thông tin sản phẩm
$products = [
  "product1" => ["name" => "Áo thun", "price" => 100000, "quantity" => 10],
  "product2" => ["name" => "Quần jean", "price" => 200000, "quantity" => 5],
  "product3" => ["name" => "Giày thể thao", "price" => 300000, "quantity" => 3]  
];

// Hàm tính tổng giá trị 
function totalValue($products) {
  $total = 0;
  foreach ($products as $product) {
    $total += $product['price'] * $product['quantity'];
  }
  return $total;
}

// Hiển thị thông tin tất cả sản phẩm và tổng giá trị
echo "Danh sách sản phẩm: \n";
foreach ($products as $product) {
  echo "Tên: {$product['name']}\n"; 
  echo "Giá: " . number_format($product['price']) . "\n";
  echo "Số lượng: {$product['quantity']}\n\n";
}
echo "Tổng giá trị: " . number_format(totalValue($products));
//output Tổng giá trị: 2,900,000
?>
