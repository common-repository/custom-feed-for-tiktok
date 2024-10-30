<?php
use WPSocialReviews\Framework\Support\Arr;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$mediaUrl = Arr::get($feed, 'media.url', '');
?>
<div class="wpsr-feed-description-link">
    <p class="wpsr-feed-description-text wpsr-tiktok-feed-content">
        <?php
        if ($content_length) {
            echo esc_html(wp_trim_words($message, $content_length, '...'));
        } else {
            echo esc_html($message);
        }
        ?>
    </p>
</div>