if (perch_get('s')) {

    $sku = perch_shop_products([
        'template'      =>'products/product_sku.html',
        'filter'=>array(
            array(
                'filter'=>'slug',
                'match'=>'eq',
                'value'=>perch_get('s')
            ),
            array(
                'filter'=>'sku',
                'match'=>'contains',
                'value' => 'DEP'
            ),
        )
    ], true);

    // Strips out all whitespace
    $tag = preg_replace('/\s+/', '', $sku);

    if (perch_member_has_tag($tag)) {

        perch_shop_product(perch_get('s'), [
            'template' => 'products/product_v2.html',
            'filter'=>array(
                array(
                    'filter'=>'slug',
                    'match'=>'eq',
                    'value'=>perch_get('s')
                ),
                array(
                    'filter'=>'sku',
                    'match'=>'contains',
                    'value' => 'BAL'
                ),
            )
        ]);

    } else {

        perch_shop_product(perch_get('s'), [
            'template' => 'products/product_v2.html',
            'filter'=>array(
                array(
                    'filter'=>'slug',
                    'match'=>'eq',
                    'value'=>perch_get('s')
                ),
                array(
                    'filter'=>'sku',
                    'match'=>'contains',
                    'value' => 'DEP'
                ),
            )
        ]);

    }
}
