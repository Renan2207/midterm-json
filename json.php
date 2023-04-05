<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
$soaps = array(
    array(
        "barcode_id" => "1234567890",
        "name" => "Irish Spring",
        "type" => "Bar Soap",
        "size" => "8 oz",
        "price" => "₱ 119",
        "scent" => "Original",
        "ingredient" => "Sodium Tallowate Sodium Cocoate Fragrance Triclocarbon."
    ),
    array(
        "barcode_id" => "0987654321",
        "name" => "Safe Guard",
        "type" => "Bar Soap",
        "size" => "8 oz",
        "price" => "₱ 105",
        "scent" => "Cool Menthol",
        "ingredient" => "Sodium tallowate Sodium palmate Sodium pal kernelate."
    ),
    array(
        "barcode_id" => "1357924680",
        "name" => "Dove",
        "type" => "Bar Soap",
        "size" => "6oz",
        "price" => "₱ 130",
        "scent" => "Coconut Milk",
        "ingredient" => "Cocamidorpropyl betaine Sodium isethionate Tetrasodium water"
    ),
    array(
        "barcode_id" => "2468013579",
        "name" => "Olay",
        "type" => "Bar Soap",
        "size" => "5 oz",
        "price" => "₱ 133",
        "scent" => "Original",
        "ingredient" => "Sodium Cocoyl Stearic acid Coconut acid Sodium Cocoate Shea butter"
    ),
    array(
        "barcode_id" => "9876543210",
        "name" => "Palmolive",
        "type" => "Bar Soap",
        "size" => "5 oz",
        "price" => "₱27.10",
        "scent" => "Lavender",
        "ingredient" => "Sodium Palmate Sodium Cocoate Water Nonfat Dry milk Aloe Bardensis leaf "
    )
);

echo json_encode($soaps);
?>
