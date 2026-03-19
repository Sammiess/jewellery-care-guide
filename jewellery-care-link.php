add_action('woocommerce_after_single_product_summary', 'yazzys_add_care_link', 15);

function yazzys_add_care_link() {
    if (is_product()) {
        echo '<p style="margin-top:10px;font-size:14px;">
        Care tips for your jewellery: 
        <a href="https://yazzys.com/jewellery-care-guide/" target="_blank">
        Read our guide</a></p>';
    }
}
