<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="vc_row wpb_row vc_row-fluid vc-col-no-pt">
        <div class="wpb_column vc_column_container vc_col-sm-3">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="gel-heading gel-heading-style-01 text-left">
                        <h2 class="gel-heading-title gel-cbb3c8ac96b0f1654c27db34dfe093b2">
                            Orders<br>
                            &amp; Shipping </h2>
                    </div>
                    <div class="gel-space gel-0a02b8aa50d868e2a2c0a91afd28b252"></div>
                </div>
            </div>
        </div>
        <div class="wpb_column vc_column_container vc_col-sm-9">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="vc_toggle vc_toggle_default vc_toggle_color_accent  vc_toggle_size_md vc_toggle_active">
                        <div class="vc_toggle_title">
                            <h4>How did my package ship?</h4><i class="vc_toggle_icon"></i>
                        </div>
                        <div class="vc_toggle_content">
                            <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                                vitamins, and other skin-nourishing nutrients. Creamy liquid formula sets with a
                                pristine matte finish for soft, velvety smooth skin.</p>
                            <p>Say hello to flawless, long-lasting foundation that comes in 7 melt-into-your-skin
                                shades. This lightweight, innovative formula creates a smooth, natural matte finish that
                                won’t settle into lines. It’s the perfect fit for your skin. 1 fl. oz.</p>
                        </div>
                    </div>
                    <div class="vc_toggle vc_toggle_default vc_toggle_color_accent  vc_toggle_size_md">
                        <div class="vc_toggle_title">
                            <h4>Why does my USPS tracking number state 1-Day, 2-Day, 3-Day Delivery?</h4><i
                                class="vc_toggle_icon"></i>
                        </div>
                        <div class="vc_toggle_content">
                            <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                                vitamins, and other skin-nourishing nutrients. Creamy liquid formula sets with a
                                pristine matte finish for soft, velvety smooth skin.</p>
                            <p>Say hello to flawless, long-lasting foundation that comes in 7 melt-into-your-skin
                                shades. This lightweight, innovative formula creates a smooth, natural matte finish that
                                won’t settle into lines. It’s the perfect fit for your skin. 1 fl. oz.</p>
                        </div>
                    </div>
                    <div class="vc_toggle vc_toggle_default vc_toggle_color_accent  vc_toggle_size_md">
                        <div class="vc_toggle_title">
                            <h4>How long will my package take to arrive?</h4><i class="vc_toggle_icon"></i>
                        </div>
                        <div class="vc_toggle_content">
                            <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                                vitamins, and other skin-nourishing nutrients. Creamy liquid formula sets with a
                                pristine matte finish for soft, velvety smooth skin.</p>
                            <p>Say hello to flawless, long-lasting foundation that comes in 7 melt-into-your-skin
                                shades. This lightweight, innovative formula creates a smooth, natural matte finish that
                                won’t settle into lines. It’s the perfect fit for your skin. 1 fl. oz.</p>
                        </div>
                    </div>
                    <div class="vc_toggle vc_toggle_default vc_toggle_color_accent  vc_toggle_size_md">
                        <div class="vc_toggle_title">
                            <h4>What are business days?</h4><i class="vc_toggle_icon"></i>
                        </div>
                        <div class="vc_toggle_content">
                            <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                                vitamins, and other skin-nourishing nutrients. Creamy liquid formula sets with a
                                pristine matte finish for soft, velvety smooth skin.</p>
                            <p>Say hello to flawless, long-lasting foundation that comes in 7 melt-into-your-skin
                                shades. This lightweight, innovative formula creates a smooth, natural matte finish that
                                won’t settle into lines. It’s the perfect fit for your skin. 1 fl. oz.</p>
                        </div>
                    </div>
                    <div class="vc_toggle vc_toggle_default vc_toggle_color_accent  vc_toggle_size_md">
                        <div class="vc_toggle_title">
                            <h4>How do I know my package has shipped?</h4><i class="vc_toggle_icon"></i>
                        </div>
                        <div class="vc_toggle_content">
                            <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                                vitamins, and other skin-nourishing nutrients. Creamy liquid formula sets with a
                                pristine matte finish for soft, velvety smooth skin.</p>
                            <p>Say hello to flawless, long-lasting foundation that comes in 7 melt-into-your-skin
                                shades. This lightweight, innovative formula creates a smooth, natural matte finish that
                                won’t settle into lines. It’s the perfect fit for your skin. 1 fl. oz.</p>
                        </div>
                    </div>
                    <div class="vc_toggle vc_toggle_default vc_toggle_color_accent  vc_toggle_size_md">
                        <div class="vc_toggle_title">
                            <h4>Why are certain products unavailable to ship to Internationally?</h4><i
                                class="vc_toggle_icon"></i>
                        </div>
                        <div class="vc_toggle_content">
                            <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                                vitamins, and other skin-nourishing nutrients. Creamy liquid formula sets with a
                                pristine matte finish for soft, velvety smooth skin.</p>
                            <p>Say hello to flawless, long-lasting foundation that comes in 7 melt-into-your-skin
                                shades. This lightweight, innovative formula creates a smooth, natural matte finish that
                                won’t settle into lines. It’s the perfect fit for your skin. 1 fl. oz.</p>
                        </div>
                    </div>
                    <div class="vc_toggle vc_toggle_default vc_toggle_color_accent  vc_toggle_size_md">
                        <div class="vc_toggle_title">
                            <h4>Why is my tracking number not updating?</h4><i class="vc_toggle_icon"></i>
                        </div>
                        <div class="vc_toggle_content">
                            <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                                vitamins, and other skin-nourishing nutrients. Creamy liquid formula sets with a
                                pristine matte finish for soft, velvety smooth skin.</p>
                            <p>Say hello to flawless, long-lasting foundation that comes in 7 melt-into-your-skin
                                shades. This lightweight, innovative formula creates a smooth, natural matte finish that
                                won’t settle into lines. It’s the perfect fit for your skin. 1 fl. oz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="gel-space gel-3960fa377cab4e7efba84b755e5e7fb8"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>