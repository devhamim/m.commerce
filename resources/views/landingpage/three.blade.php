<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    @if ($setting->first()->title != null)
        <title>{{ $setting->first()->title }}</title>
    @endif

    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <style id='wp-emoji-styles-inline-css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='CF_block-cartflows-style-css-css'
        href='{{ asset('landingpage/mabrummoreom') }}/wp-content/plugins/cartflows/modules/gutenberg/build/style-blocksa7f4.css?ver=2.0.8'
        media='all' />
    <link rel='stylesheet' id='CFP_block-cfp-style-css-css'
        href='{{ asset('landingpage/mabrummoreom') }}/wp-content/plugins/cartflows-pro/modules/gutenberg/build/style-blocks1717.css?ver=2.0.6'
        media='all' />
    <style id='classic-theme-styles-inline-css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel='stylesheet' id='custom-google-fonts-css'
        href='http://fonts.googleapis.com/css?family=Hind+Siliguri&amp;ver=3.2.5' media='all' />
    <link rel='stylesheet' id='chaty-front-css-css'
        href='{{ asset('landingpage/mabrummoreom') }}/wp-content/plugins/chaty/css/chaty-front.min6462.css?ver=3.2.51701069151'
        media='all' />
    <link rel='stylesheet' id='rwitpf-frontend-css'
        href='{{ asset('landingpage/mabrummoreom') }}/wp-content/plugins/rwit-phone-formatter/assets/css/frontendadc6.css?ver=6.5.5'
        media='all' />
    <link rel='stylesheet' id='select2-css'
        href='{{ asset('landingpage/mabrummoreom') }}/wp-content/plugins/woocommerce/assets/css/select28257.css?ver=9.0.1'
        media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='{{ asset('landingpage/mabrummoreom') }}/wp-content/plugins/woocommerce/assets/css/woocommerce-layout8257.css?ver=9.0.1'
        media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='{{ asset('landingpage/mabrummoreom') }}/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen8257.css?ver=9.0.1'
        media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='{{ asset('landingpage/mabrummoreom') }}/wp-content/plugins/woocommerce/assets/css/woocommerce8257.css?ver=9.0.1'
        media='all' />
    <style id='woocommerce-inline-inline-css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='elementor-frontend-css'
        href='{{ asset('landingpage/mabrummoreom') }}/wp-content/plugins/elementor/assets/css/frontend-lite.min4d52.css?ver=3.22.1'
        media='all' />
    <link rel='stylesheet' id='elementor-post-6-css'
        href='{{ asset('landingpage/mabrummoreom') }}/wp-content/uploads/elementor/css/post-629d7.css?ver=1719398918'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href='{{ asset('landingpage/mabrummoreom') }}/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.mine94d.css?ver=5.30.0'
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='{{ asset('landingpage/mabrummoreom') }}/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5'
        media='all' />
    <link rel='stylesheet' id='elementor-pro-css'
        href='{{ asset('landingpage/mabrummoreom') }}/wp-content/plugins/elementor-pro/assets/css/frontend-lite.min225e.css?ver=3.19.0'
        media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href='{{ asset('landingpage/mabrummoreom') }}/wp-content/uploads/elementor/css/globalee36.css?ver=1719399009'
        media='all' />
    <link rel='stylesheet' id='elementor-post-15926-css'
        href='{{ asset('landingpage/mabrummoreom') }}/wp-content/uploads/elementor/css/post-159263baf.css?ver=1719399537'
        media='all' />
    <link rel='stylesheet' id='wcf-normalize-frontend-global-css'
        href='{{ asset('landingpage/mabrummoreom') }}/wp-content/plugins/cartflows/assets/css/cartflows-normalizea7f4.css?ver=2.0.8'
        media='all' />
    <link rel='stylesheet' id='wcf-frontend-global-css'
        href='{{ asset('landingpage/mabrummoreom') }}/wp-content/plugins/cartflows/assets/css/frontenda7f4.css?ver=2.0.8'
        media='all' />
    <link rel='stylesheet' id='wcf-pro-frontend-global-css'
        href='{{ asset('landingpage/mabrummoreom') }}/wp-content/plugins/cartflows-pro/assets/css/frontend1717.css?ver=2.0.6'
        media='all' />
    <link rel='stylesheet' id='wcf-checkout-template-css'
        href='{{ asset('landingpage/mabrummoreom') }}/wp-content/plugins/cartflows/assets/css/checkout-templatea7f4.css?ver=2.0.8'
        media='all' />
    <link rel='stylesheet' id='wcf-pro-checkout-css'
        href='{{ asset('landingpage/mabrummoreom') }}/wp-content/plugins/cartflows-pro/assets/css/checkout-styles1717.css?ver=2.0.6'
        media='all' />
    <link rel='stylesheet' id='wcf-pro-multistep-checkout-css'
        href='{{ asset('landingpage/mabrummoreom') }}/wp-content/plugins/cartflows-pro/assets/css/multistep-checkout1717.css?ver=2.0.6'
        media='all' />
    <link rel='stylesheet' id='dashicons-css'
        href='{{ asset('landingpage/mabrummoreom') }}/wp-includes/css/dashicons.minadc6.css?ver=6.5.5'
        media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CHind+Siliguri%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.5.5'
        media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src="{{ asset('landingpage/mabrummoreom') }}/wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1"
        id="jquery-core-js"></script>
    <script src="{{ asset('landingpage/mabrummoreom') }}/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
    <meta name="facebook-domain-verification" content="y3fpqtq0wiyuma6lkw4kvq79sk0h0j" /> <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Favicon -->
    @if($setting->first()->favicon != null)
        <link rel="shortcut icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}">
    @endif
</head>

<body
    class="cartflows_step-template cartflows_step-template-cartflows-default single single-cartflows_step postid-15926 theme-hello-elementor woocommerce-checkout woocommerce-page woocommerce-no-js cartflows-2.0.8  cartflows-pro-2.0.6 elementor-default elementor-kit-6 elementor-page elementor-page-15926 cartflows-default">


    <div class="cartflows-container">
        <div class="cartflows-primary">
            <div data-elementor-type="wp-post" data-elementor-id="15926" class="elementor elementor-15926"
                data-elementor-post-type="cartflows_step">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-6104e15 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="6104e15" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b6b419f"
                            data-id="b6b419f" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-aff5e5b e-transform elementor-widget elementor-widget-image"
                                    data-id="aff5e5b" data-element_type="widget"
                                    data-settings="{&quot;_transform_scale_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1.1999999999999999555910790149937383830547332763671875,&quot;sizes&quot;:[]},&quot;_transform_scale_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                    data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <style>
                                            /*! elementor - v3.22.0 - 17-06-2024 */
                                            .elementor-widget-image {
                                                text-align: center
                                            }

                                            .elementor-widget-image a {
                                                display: inline-block
                                            }

                                            .elementor-widget-image a img[src$=".svg"] {
                                                width: 48px
                                            }

                                            .elementor-widget-image img {
                                                vertical-align: middle;
                                                display: inline-block
                                            }
                                        </style> <img fetchpriority="high" decoding="async" width="1500"
                                            height="1500"
                                            src="{{ asset('landingpage/mabrummoreom') }}/wp-content/uploads/2024/03/WhatsApp-Image-2024-03-22-at-12.37.36-PM.jpg"
                                            class="elementor-animation-bounce-in attachment-1536x1536 size-1536x1536 wp-image-15931"
                                            alt=""
                                            srcset="{{ asset('landingpage/images/product/2.jpeg') }} 1500w, {{ asset('landingpage/images/product/2.jpeg') }} 300w, {{ asset('landingpage/images/product/2.jpeg') }} 1024w, {{ asset('landingpage/images/product/2.jpeg') }} 150w, {{ asset('landingpage/images/product/2.jpeg') }} 768w, {{ asset('landingpage/images/product/2.jpeg') }} 600w, {{ asset('landingpage/images/product/2.jpeg') }} 100w"
                                            sizes="(max-width: 1500px) 100vw, 1500px" />
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-d5a0259 elementor-widget elementor-widget-heading"
                                    data-id="d5a0259" data-element_type="widget"
                                    data-settings="{&quot;_animation_mobile&quot;:&quot;zoomIn&quot;}"
                                    data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <style>
                                            /*! elementor - v3.22.0 - 17-06-2024 */
                                            .elementor-heading-title {
                                                padding: 0;
                                                margin: 0;
                                                line-height: 1
                                            }

                                            .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                                color: inherit;
                                                font-size: inherit;
                                                line-height: inherit
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                font-size: 15px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                font-size: 19px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                font-size: 29px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                font-size: 39px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                font-size: 59px
                                            }
                                        </style>
                                        <h2 class="elementor-heading-title elementor-size-default">মাব্রুমের সাথে <span
                                                style="color: #f8ff00;">গাছ পাকা</span> সুক্কারি খেজুর- এ যেন এক অনন্য
                                            স্বাদ।</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-d3aa61c elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button"
                                    data-id="d3aa61c" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;pulse&quot;}"
                                    data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-bounce-in"
                                                href="#order">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-text"><span
                                                            style="color: #f8ff00;">আমি নিতে</span> চাই</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-ca5b5de elementor-widget elementor-widget-heading"
                                    data-id="ca5b5de" data-element_type="widget"
                                    data-settings="{&quot;_animation_mobile&quot;:&quot;bounceInRight&quot;}"
                                    data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h3 class="elementor-heading-title elementor-size-default"><b>(<span
                                                    style="color: #009629;">মাব্রুম</span> গাছ পাকা <span
                                                    style="color: #009629;">রসালো সুক্কারি খেজুর</span> স্বাদ দ্বিগুন
                                                করে)</b></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-6fa5d96 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="6fa5d96" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-83940a8"
                            data-id="83940a8" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-523e7cc elementor-mobile-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                    data-id="523e7cc" data-element_type="widget"
                                    data-widget_type="icon-list.default">
                                    <div class="elementor-widget-container">
                                        <link rel="stylesheet"
                                            href="{{ asset('landingpage/mabrummoreom') }}/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">
                                        <ul class="elementor-icon-list-items">
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-chevron-circle-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">মাব্রুম মধ্যপ্রাচ্য ও পূর্ব
                                                    ভূমধ্যসাগরীয় অঞ্চলের একটি জনপ্রিয় খাবার।</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-chevron-circle-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">ইফতারে মাব্রুমের সাথে কয়েকটা গাছ
                                                    পাকা সুক্কারি খেজুর খেলে তাৎক্ষনিক এনার্জি ফিরে আসে।</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-chevron-circle-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">পুষ্টিগুণে ভরপুর মাব্রুম এবং
                                                    খেজুরে রয়েছে ভিটামিন, ক্যালসিয়াম, আয়রণ, ফসফরাস, পটাশিয়াম,
                                                    ম্যাগনেশিয়াম ও জিঙ্ক যা দেহের জন্য খুবই দরকারি</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-chevron-circle-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">কোলেস্টেরল মাত্রা কমিয়ে হার্ট
                                                    অ্যাটাকের ঝুঁকি কমায়</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-chevron-circle-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">রোগ - প্রতিরোধ ক্ষমতা বৃদ্ধি
                                                    করে</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-chevron-circle-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">হজম শক্তি বৃদ্ধি করে</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-chevron-circle-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">গ্যাস্ট্রিক সমস্যা দূর করতে খুবই
                                                    উপকারি</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-chevron-circle-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">স্মৃতিশক্তি বৃদ্ধি ও ক্লান্তিভাব
                                                    দূর করতে পারে</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-chevron-circle-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">খেজুরে অনেক ভিটামিন এবং খনিজ
                                                    রয়েছে যা শরীরকে ভালো অবস্থায় রাখতে সাহায্য করে</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-5270f42 elementor-widget elementor-widget-image"
                                    data-id="5270f42" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img decoding="async" width="800" height="534"
                                            src="{{ asset('landingpage/images/product/1.jpeg') }}"
                                            class="attachment-large size-large wp-image-15940" alt=""
                                            srcset="{{ asset('landingpage/images/product/1.jpeg') }} 1024w, {{ asset('landingpage/images/product/1.jpeg') }} 300w, {{ asset('landingpage/images/product/1.jpeg') }} 768w, {{ asset('landingpage/images/product/1.jpeg') }} 1536w, {{ asset('landingpage/images/product/1.jpeg') }} 2048w, {{ asset('landingpage/images/product/1.jpeg') }} 600w"
                                            sizes="(max-width: 800px) 100vw, 800px" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-b0bae91 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="b0bae91" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-72fb616"
                            data-id="72fb616" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-69f0968 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button"
                                    data-id="69f0968" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;pulse&quot;}"
                                    data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-bounce-in"
                                                href="#order">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-text"><span
                                                            style="color: #f8ff00;">আমি নিতে</span> চাই</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-e7725ae elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="e7725ae" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-215883a"
                            data-id="215883a" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-d117637 elementor-widget elementor-widget-image"
                                    data-id="d117637" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img decoding="async" width="768" height="768"
                                            src="{{ asset('landingpage/images/product/3.jpeg') }}"
                                            class="attachment-medium_large size-medium_large wp-image-15956"
                                            alt=""
                                            srcset="{{ asset('landingpage/images/product/3.jpeg') }} 768w, {{ asset('landingpage/images/product/3.jpeg') }} 300w, {{ asset('landingpage/images/product/3.jpeg') }} 1024w, {{ asset('landingpage/images/product/3.jpeg') }} 150w, {{ asset('landingpage/images/product/3.jpeg') }} 600w, {{ asset('landingpage/images/product/3.jpeg') }} 100w, {{ asset('landingpage/images/product/3.jpeg') }} 1500w"
                                            sizes="(max-width: 768px) 100vw, 768px" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ac780d7"
                            data-id="ac780d7" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-100d469 elementor-widget elementor-widget-heading"
                                    data-id="100d469" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">অন্যদের থেকে আমরা
                                            কেন আলাদা??</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-1efb2b8 elementor-mobile-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                    data-id="1efb2b8" data-element_type="widget"
                                    data-widget_type="icon-list.default">
                                    <div class="elementor-widget-container">
                                        <ul class="elementor-icon-list-items">
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <i class="fa-solid fa-check"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">নতুন সিজনের গাছ পাকা, ফ্রেশ,
                                                    রসালো খেজুর।</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <i class="fa-solid fa-check"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">দেখতে গাঢ় লাল বর্ণের ও সাইজে
                                                    বেশ বড়।</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <i class="fa-solid fa-check"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">শতভাগ কেমিক্যালমুক্ত, বাছাইকৃত ও
                                                    স্বাস্থ্যসম্মত উপায়ে প্যাকেটজাত করা</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <i class="fa-solid fa-check"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">এ খেজুর রসালো এবং নরম প্রকৃতির
                                                    হয়ে থাকে</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <i class="fa-solid fa-check"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">সম্পূর্ণ প্রাকৃতিক উপায়ে
                                                    সংরক্ষিত</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-check-circle"></i> </span>
                                                <span class="elementor-icon-list-text"><span
                                                        style="color:#a41a1a;">কথায় কাজে মিল না থাকলে 100% টাকা
                                                        ফেরত।</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-4f8de1f elementor-widget elementor-widget-text-editor"
                                    data-id="4f8de1f" data-element_type="widget"
                                    data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <style>
                                            /*! elementor - v3.22.0 - 17-06-2024 */
                                            .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                background-color: #69727d;
                                                color: #fff
                                            }

                                            .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                color: #69727d;
                                                border: 3px solid;
                                                background-color: transparent
                                            }

                                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                margin-top: 8px
                                            }

                                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                width: 1em;
                                                height: 1em
                                            }

                                            .elementor-widget-text-editor .elementor-drop-cap {
                                                float: left;
                                                text-align: center;
                                                line-height: 1;
                                                font-size: 50px
                                            }

                                            .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                display: inline-block
                                            }
                                        </style>
                                        <h3 style="text-align: center;"><span class="S1PPyQ">প্রয়োজনে☎️-<span
                                                    style="color: #000000;">
                                                    @if ($setting->first()->number_two != null)
                                                        <a
                                                            href="tel:{{ $setting->first()->number_two }}">{{ $setting->first()->number_two }}</a>
                                                    @endif
                                                </span> এই নাম্বারে</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-22a39d2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="22a39d2" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d08a832"
                            data-id="d08a832" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-ed7e3b3 elementor-widget elementor-widget-heading"
                                    data-id="ed7e3b3" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">অর্ডার করতে নিচের
                                            ফর্মটি সম্পূর্ণ পূরণ করুন।</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-a937aff elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="a937aff" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9c8007f"
                            data-id="9c8007f" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-74c224f elementor-widget elementor-widget-checkout-form"
                                    data-id="74c224f" data-element_type="widget" id="order"
                                    data-widget_type="checkout-form.default">
                                    <div class="elementor-widget-container">
                                        <div class = "wcf-el-checkout-form cartflows-elementor__checkout-form">
                                            <div id="wcf-embed-checkout-form"
                                                class="wcf-embed-checkout-form wcf-embed-checkout-form-two-column  wcf-field-default">
                                                <!-- CHECKOUT SHORTCODE -->

                                                <div class="woocommerce">
                                                    <div class="woocommerce-notices-wrapper"></div>
                                                    <div class="woocommerce-notices-wrapper"></div>
                                                    <form method="post" class="checkout woocommerce-checkout"
                                                        action="{{ route('landing.order.store') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div
                                                            class="wcf-product-option-wrap wcf-yp-skin-cards wcf-product-option-before-customer">
                                                            <h3 id="your_products_heading"> Your Products </h3>
                                                            <div class="wcf-qty-options">
                                                                <div class="wcf-qty-row wcf-qty-row-15972 ">
                                                                    <div class="wcf-item">
                                                                        <div
                                                                            class="wcf-item-selector wcf-item-single-sel">
                                                                            <input type="radio" id="product_1"
                                                                                name="radio_btn"
                                                                                data-image="{{ asset('landingpage/images/product/1.jpeg') }}"
                                                                                data-name="Premium Mabroom Moriom"
                                                                                data-price="1280" data-quantity="1"
                                                                                checked="checked" value="1">
                                                                            <label class="wcf-item-product-label"
                                                                                for="product_1"></label>
                                                                        </div>
                                                                        <div class="wcf-item-image">
                                                                            <img loading="lazy" decoding="async"
                                                                                width="300" height="300"
                                                                                src="{{ asset('landingpage/images/product/1.jpeg') }}"
                                                                                alt="" />
                                                                        </div>
                                                                        <div class="wcf-item-content-options">
                                                                            <label class="wcf-item-wrap"
                                                                                for="product_1">
                                                                                <span class="wcf-display-title">Premium
                                                                                    Mabroom Moriom</span>
                                                                                <span
                                                                                    class="wcf-display-title-quantity"><span
                                                                                        class="dashicons dashicons-no-alt"></span><span
                                                                                        class="wcf-display-quantity">1</span></span>
                                                                            </label>
                                                                            <div class="wcf-price">
                                                                                <div
                                                                                    class="wcf-display-price wcf-field-label">
                                                                                    <span
                                                                                        class="woocommerce-Price-amount amount"><span
                                                                                            class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>1,280</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wcf-qty-row wcf-qty-row-15972 ">
                                                                    <div class="wcf-item">
                                                                        <div
                                                                            class="wcf-item-selector wcf-item-single-sel">
                                                                            <input type="radio" id="product_2"
                                                                                name="radio_btn"
                                                                                data-image="{{ asset('landingpage/images/product/2.jpeg') }}"
                                                                                data-name="Premium Mabroom Moriom"
                                                                                data-price="2450" data-quantity="2" value="2">
                                                                            <label class="wcf-item-product-label"
                                                                                for="product_2"></label>
                                                                        </div>
                                                                        <div class="wcf-item-image">
                                                                            <img loading="lazy" decoding="async"
                                                                                width="300" height="300"
                                                                                src="{{ asset('landingpage/images/product/2.jpeg') }}"
                                                                                alt="" />
                                                                        </div>
                                                                        <div class="wcf-item-content-options">
                                                                            <label class="wcf-item-wrap"
                                                                                for="product_2">
                                                                                <span class="wcf-display-title">Premium
                                                                                    Mabroom Moriom</span>
                                                                                <span
                                                                                    class="wcf-display-title-quantity"><span
                                                                                        class="dashicons dashicons-no-alt"></span><span
                                                                                        class="wcf-display-quantity">2</span></span>
                                                                            </label>
                                                                            <div class="wcf-price">
                                                                                <div
                                                                                    class="wcf-display-price wcf-field-label">
                                                                                    <span
                                                                                        class="woocommerce-Price-amount amount"><span
                                                                                            class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>2,450</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wcf-qty-row wcf-qty-row-15972 ">
                                                                    <div class="wcf-item">
                                                                        <div
                                                                            class="wcf-item-selector wcf-item-single-sel">
                                                                            <input type="radio" id="product_3"
                                                                                name="radio_btn"
                                                                                data-image="{{ asset('landingpage/images/product/4.jpeg') }}"
                                                                                data-name="Premium Mabroom Moriom"
                                                                                data-price="3450" data-quantity="3" value="3">
                                                                            <label class="wcf-item-product-label"
                                                                                for="product_3"></label>
                                                                        </div>
                                                                        <div class="wcf-item-image">
                                                                            <img loading="lazy" decoding="async"
                                                                                width="300" height="300"
                                                                                src="{{ asset('landingpage/images/product/4.jpeg') }}"
                                                                                alt="" />
                                                                        </div>
                                                                        <div class="wcf-item-content-options">
                                                                            <label class="wcf-item-wrap"
                                                                                for="product_3">
                                                                                <span class="wcf-display-title">Premium
                                                                                    Mabroom Moriom</span>
                                                                                <span
                                                                                    class="wcf-display-title-quantity"><span
                                                                                        class="dashicons dashicons-no-alt"></span><span
                                                                                        class="wcf-display-quantity">3</span></span>
                                                                            </label>
                                                                            <div class="wcf-price">
                                                                                <div
                                                                                    class="wcf-display-price wcf-field-label">
                                                                                    <span
                                                                                        class="woocommerce-Price-amount amount"><span
                                                                                            class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>3,450</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wcf-qty-row wcf-qty-row-15972 ">
                                                                    <div class="wcf-item">
                                                                        <div
                                                                            class="wcf-item-selector wcf-item-single-sel">
                                                                            <input type="radio" id="product_5"
                                                                                name="radio_btn"
                                                                                data-image="{{ asset('landingpage/images/product/3.jpeg') }}"
                                                                                data-name="Premium Mabroom Moriom"
                                                                                data-price="5250" data-quantity="5" value="4">
                                                                            <label class="wcf-item-product-label"
                                                                                for="product_5"></label>
                                                                        </div>
                                                                        <div class="wcf-item-image">
                                                                            <img loading="lazy" decoding="async"
                                                                                width="300" height="300"
                                                                                src="{{ asset('landingpage/images/product/3.jpeg') }}"
                                                                                alt="" />
                                                                        </div>
                                                                        <div class="wcf-item-content-options">
                                                                            <label class="wcf-item-wrap"
                                                                                for="product_5">
                                                                                <span class="wcf-display-title">Premium
                                                                                    Mabroom Moriom</span>
                                                                                <span
                                                                                    class="wcf-display-title-quantity"><span
                                                                                        class="dashicons dashicons-no-alt"></span><span
                                                                                        class="wcf-display-quantity">5</span></span>
                                                                            </label>
                                                                            <div class="wcf-price">
                                                                                <div
                                                                                    class="wcf-display-price wcf-field-label">
                                                                                    <span
                                                                                        class="woocommerce-Price-amount amount"><span
                                                                                            class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>5,250</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Repeat for other products -->
                                                            </div>
                                                        </div>

                                                        <div class="wcf-col2-set col2-set" id="customer_details">
                                                            <div class="wcf-col-1 col-1">
                                                                <wc-order-attribution-inputs></wc-order-attribution-inputs>
                                                                <div class="woocommerce-billing-fields">

                                                                    <h3 id="billing_fields_heading">Billing details
                                                                    </h3>



                                                                    <div
                                                                        class="woocommerce-billing-fields__field-wrapper">
                                                                        <p class="form-row form-row-first wcf-column-100 validate-required"
                                                                            id="billing_first_name_field"
                                                                            data-priority="10"><label
                                                                                for="billing_first_name"
                                                                                class="">Name&nbsp;<abbr
                                                                                    class="required"
                                                                                    title="required">*</abbr></label><span
                                                                                class="woocommerce-input-wrapper"><input
                                                                                    type="text" class="input-text "
                                                                                    name="name"
                                                                                    id="billing_first_name"
                                                                                    placeholder="Full Name" required value="{{ old('name') }}"
                                                                                    autocomplete="given-name" /></span>
                                                                        </p>
                                                                        @error('name')
                                                                            <strong
                                                                                class="text-danger">{{ $message }}</strong>
                                                                        @enderror
                                                                        <p class="form-row form-row-wide wcf-column-100 validate-required validate-phone"
                                                                            id="billing_phone_field"
                                                                            data-priority="20"><label
                                                                                for="billing_phone"
                                                                                class="">Phone Number&nbsp;<abbr
                                                                                    class="required"
                                                                                    title="required">*</abbr></label><span
                                                                                class="woocommerce-input-wrapper"><input
                                                                                    type="tel" class="input-text "
                                                                                    name="mobile" id="billing_phone"
                                                                                    placeholder="Number" value="{{ old('mobile') }}" required
                                                                                    autocomplete="tel" /></span></p>
                                                                        @error('mobile')
                                                                            <strong
                                                                                class="text-danger">{{ $message }}</strong>
                                                                        @enderror
                                                                        @error('mobile')
                                                                            <script>
                                                                                Swal.fire({
                                                                                    icon: "error",
                                                                                    title: "Oops...",
                                                                                    text: "Something went wrong!",
                                                                                });
                                                                            </script>
                                                                        @enderror
                                                                        <p class="form-row form-row-wide address-field wcf-column-100 validate-required"
                                                                            id="billing_address_1_field"
                                                                            data-priority="30"><label
                                                                                for="billing_address_1"
                                                                                class="">District&nbsp;<abbr
                                                                                    class="required"
                                                                                    title="required">*</abbr></label><span
                                                                                class="woocommerce-input-wrapper">
                                                                                <select name="district" id="district" class="form-control" required>
                                                                                    <option value="">-- Select --</option>
                                                                                    <option value="dhaka">Dhaka</option>
                                                                                    <option value="faridpur">Faridpur</option>
                                                                                    <option value="gazipur">Gazipur</option>
                                                                                    <option value="gopalganj">Gopalganj</option>
                                                                                    <option value="jamalpur">Jamalpur</option>
                                                                                    <option value="kishoreganj ">Kishoreganj </option>
                                                                                    <option value="madaripur">Madaripur</option>
                                                                                    <option value="manikganj">Manikganj</option>
                                                                                    <option value="munshiganj">Munshiganj</option>
                                                                                    <option value="mymensingh">Mymensingh</option>
                                                                                    <option value="narayanganj">Narayanganj</option>
                                                                                    <option value="Norshingdi">Norshingdi</option>
                                                                                    <option value="Netrokona">Netrokona</option>
                                                                                    <option value="Rajbari">Rajbari</option>
                                                                                    <option value="Shariatpur">Shariatpur</option>
                                                                                    <option value="Sherpur">Sherpur</option>
                                                                                    <option value="Tangail">Tangail</option>
                                                                                    <option value="Bagerhat">Bagerhat</option>
                                                                                    <option value="Chuadanga">Chuadanga</option>
                                                                                    <option value="Jessore">Jessore</option>
                                                                                    <option value="Jhenaidah">Jhenaidah</option>
                                                                                    <option value="Khulna">Khulna</option>
                                                                                    <option value="Kushtia">Kushtia</option>
                                                                                    <option value="Magura">Magura</option>
                                                                                    <option value="Meherpur">Meherpur</option>
                                                                                    <option value="Narail">Narail</option>
                                                                                    <option value="Satkhira">Satkhira</option>
                                                                                    <option value="Bogra">Bogra</option>
                                                                                    <option value="Chapai-Nawabganj">Chapai Nawabganj</option>
                                                                                    <option value="Joypurhat">Joypurhat</option>
                                                                                    <option value="Naogaon">Naogaon</option>
                                                                                    <option value="Natore">Natore</option>
                                                                                    <option value="Pabna">Pabna</option>
                                                                                    <option value="Rajshahi">Rajshahi</option>
                                                                                    <option value="Sirajganj">Sirajganj </option>
                                                                                    <option value="Habiganj">Habiganj</option>
                                                                                    <option value="Moulvibazar">Moulvibazar</option>
                                                                                    <option value="Sunamganj">Sunamganj </option>
                                                                                    <option value="Sylhet">Sylhet </option>
                                                                                    <option value="Barguna">Barguna </option>
                                                                                    <option value="Barisal">Barisal</option>
                                                                                    <option value="Bhola">Bhola</option>
                                                                                    <option value="Jhalokathi">Jhalokathi</option>
                                                                                    <option value="Patuakhali">Patuakhali</option>
                                                                                    <option value="Perojpur">Perojpur</option>
                                                                                    <option value="Bandarban">Bandarban</option>
                                                                                    <option value="Brahmanbaria">Brahmanbaria</option>
                                                                                    <option value="Chandpur">Chandpur</option>
                                                                                    <option value="Chittagong">Chittagong</option>
                                                                                    <option value="comilla">Comilla</option>
                                                                                    <option value="coxs-bazar">Cox's Bazar</option>
                                                                                    <option value="Feni">Feni</option>
                                                                                    <option value="Khagrachari">Khagrachari</option>
                                                                                    <option value="Laksmipur">Laksmipur</option>
                                                                                    <option value="Noakhali">Noakhali</option>
                                                                                    <option value="Rangamati">Rangamati</option>
                                                                                    <option value="Dinajpur">Dinajpur</option>
                                                                                    <option value="Gaibandha">Gaibandha</option>
                                                                                    <option value="Kurigram">Kurigram</option>
                                                                                    <option value="Lalmonirhat">Lalmonirhat</option>
                                                                                    <option value="Nilphamari">Nilphamari</option>
                                                                                    <option value="Panchagarh">Panchagarh</option>
                                                                                    <option value="Rangpur">Rangpur</option>
                                                                                    <option value="Thakurgaon">Thakurgaon</option>
                                                                                </select>
                                                                            </span>
                                                                        </p>
                                                                        @error('district')
                                                                            <strong
                                                                                class="text-danger">{{ $message }}</strong>
                                                                        @enderror
                                                                        <p class="form-row form-row-wide address-field wcf-column-100 validate-required"
                                                                            id="billing_address_1_field"
                                                                            data-priority="30"><label
                                                                                for="billing_address_1"
                                                                                class="">Address&nbsp;<abbr
                                                                                    class="required"
                                                                                    title="required">*</abbr></label><span
                                                                                class="woocommerce-input-wrapper"><input
                                                                                    type="text" class="input-text "
                                                                                    name="address"
                                                                                    id="billing_address_1"
                                                                                    placeholder="House number and street name"
                                                                                    value="{{ old('address') }}" required
                                                                                    autocomplete="address-line1" /></span>
                                                                        </p>
                                                                        @error('address')
                                                                            <strong
                                                                                class="text-danger">{{ $message }}</strong>
                                                                        @enderror
                                                                        <p class="form-row form-row-wide address-field update_totals_on_change wcf-column-100 validate-required"
                                                                            id="billing_country_field"
                                                                            data-priority="40"><label
                                                                                for="billing_country"
                                                                                class="">Country /
                                                                                Region&nbsp;<abbr class="required"
                                                                                    title="required">*</abbr></label><span
                                                                                class="woocommerce-input-wrapper"><strong>Bangladesh</strong><input
                                                                                    type="hidden"
                                                                                    name="billing_country"
                                                                                    id="billing_country"
                                                                                    value="BD"
                                                                                    autocomplete="country"
                                                                                    class="country_to_state"
                                                                                    readonly="readonly" /></span></p>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="row pt-3">
                                                            <div class="col-md-12">
                                                                <h3 id="billing_fields_heading"
                                                                    style="font-size: 20px">Your order</h3>
                                                                <!-- Order Review Table -->
                                                                <div class="table-responsive pt-5">
                                                                    <table
                                                                        class="table table-bordered woocommerce-checkout-review-order-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="product-name">Product</th>
                                                                                <th class="product-total">Subtotal</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <!-- Sample Product Row -->
                                                                            <tr class="cart_item">
                                                                                <td class="product-name">
                                                                                    <div class="wcf-product-image">
                                                                                        <div
                                                                                            class="wcf-product-thumbnail">
                                                                                            <img width="80"
                                                                                                height="80"
                                                                                                src="{{ asset('landingpage/images/product/1.jpeg') }}"
                                                                                                alt="">
                                                                                            <a href="#"
                                                                                                rel="nofollow"
                                                                                                class="wcf-remove-product cartflows-icon cartflows-circle-cross"
                                                                                                data-id="138"
                                                                                                data-item-key="013d407166ec4fa56eb1e1f8cbe183b9"></a>
                                                                                        </div>
                                                                                        <div class="wcf-product-name">
                                                                                            Premium Mabroom Moriom</div>
                                                                                    </div>
                                                                                    <strong
                                                                                        class="product-quantity"></strong>
                                                                                </td>
                                                                                <td class="product-total">
                                                                                    <span
                                                                                        class="woocommerce-Price-amount amount"><bdi>1280.00<span
                                                                                                class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span>
                                                                                </td>
                                                                            </tr>
                                                                            <!-- Add more product rows as needed -->
                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr class="cart-subtotal">
                                                                                <th>Subtotal</th>
                                                                                <td>
                                                                                    <input type="hidden"
                                                                                        name="sub_total"
                                                                                        value="65,500.00"
                                                                                        id="">
                                                                                    <span
                                                                                        class="woocommerce-Price-amount amount"><bdi>1280.00<span
                                                                                                class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span>
                                                                                </td>
                                                                            </tr>

                                                                            <!-- Order Total -->
                                                                            <tr class="order-total">
                                                                                <th>Total</th>
                                                                                <td>
                                                                                    <input type="hidden"
                                                                                        name="total"
                                                                                        value="1280.00">
                                                                                    <strong><span
                                                                                            class="woocommerce-Price-amount amount"><bdi>1280.00<span
                                                                                                    class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span></strong>
                                                                                </td>
                                                                            </tr>
                                                                            <!-- End Order Total -->
                                                                        </tfoot>
                                                                    </table>
                                                                </div>
                                                                <div id="payment"
                                                                    class="woocommerce-checkout-payment">
                                                                    <ul
                                                                        class="wc_payment_methods payment_methods methods">
                                                                        <li
                                                                            class="woocommerce-notice woocommerce-notice--info">
                                                                            <span
                                                                                class="woocommerce-no-available-payment-methods-message e-description">Please
                                                                                fill in your details above to see
                                                                                available payment methods.</span></li>
                                                                    </ul>
                                                                    <div class="form-row place-order">
                                                                        <noscript>
                                                                            Since your browser does not support
                                                                            JavaScript, or it is disabled, please ensure
                                                                            you click the <em>Update Totals</em> button
                                                                            before placing your order. You may be
                                                                            charged more than the amount stated above if
                                                                            you fail to do so. <br /><button
                                                                                type="submit" class="button alt"
                                                                                name="woocommerce_checkout_update_totals"
                                                                                value="Update totals">Update
                                                                                totals</button>
                                                                        </noscript>

                                                                        <div
                                                                            class="woocommerce-terms-and-conditions-wrapper">
                                                                            <div
                                                                                class="woocommerce-privacy-policy-text">
                                                                            </div>
                                                                        </div>


                                                                        <button type="submit" class="button alt"id="place_order"data-value="Place Order">Place
                                                                            Order</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                                <!-- END CHECKOUT SHORTCODE -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>


    <div class="wcf-quick-view-wrapper">
        <div class="wcf-quick-view-bg">
            <div class="wcf-quick-view-loader"></div>
        </div>
        <div id="wcf-quick-view-modal">
            <div class="wcf-content-main-wrapper"><!--
  -->
                <div class="wcf-content-main">
                    <div class="wcf-lightbox-content">
                        <div class="wcf-content-main-head">
                            <a href="#" id="wcf-quick-view-close"
                                class="wcf-quick-view-close-btn cfa cfa-close"><span
                                    class="cartflows-icon-close"></span></a>
                        </div>
                        <div id="wcf-quick-view-content" class="woocommerce single-product"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        {
        <script>
            Swal.fire({
                icon: "success",
                title: "Success...",
                text: "Your order have been success",
            });
        </script>
        }
        @endif
        @if (session('error'))
        {
        <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">Why do I have this issue?</a>'
            });
        </script>
        }
    @endif

    <script>
        $(document).ready(function() {
            $('input[name="radio_btn"]').on('change', function() {
                var productName = $(this).data('name');
                var quantity = $(this).data('quantity');
                var price = $(this).data('price');
                var imageUrl = $(this).data('image');
                updateOrderSection(productName, quantity, price, imageUrl);
            });

            function updateOrderSection(productName, quantity, price, imageUrl) {
                $('.woocommerce-checkout-review-order-table tbody').html(`
                    <tr class="cart_item">
                        <td class="product-name">
                            <div class="wcf-product-image">
                                <div class="wcf-product-thumbnail">
                                    <img width="80" height="80" src="${imageUrl}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">
                                </div>
                                <div class="wcf-product-name">${productName} x <strong class="product-quantity">${quantity}</strong></div>
                            </div>
                        </td>
                        <td class="product-total">
                            <span class="woocommerce-Price-amount amount"><bdi>${price}<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span>
                        </td>
                    </tr>
                `);

                $('input[name="sub_total"]').val(price);
                updateTotal();
            }

            function updateTotal() {
                var subTotal = parseInt($('input[name="sub_total"]').val());
                var total = subTotal;

                $('input[name="total"]').val(total);
                $('.cart-subtotal .woocommerce-Price-amount').html(
                    `<bdi>${subTotal}<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi>`);
                $('.order-total .woocommerce-Price-amount').html(
                    `<bdi>${total}<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi>`);
            }

            // Trigger change event on page load to update initial selection
            $('input[name="radio_btn"]:checked').trigger('change');
        });
    </script>

</body>

</html>
