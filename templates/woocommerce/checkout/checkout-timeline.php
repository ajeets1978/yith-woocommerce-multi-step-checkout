<ul id="checkout_timeline" class="woocommerce_checkout_timeline">
    <li id="timeline-0" class="login <?php echo ! $is_user_logged_in ? 'active' : '';?>" ><?php echo $labels['login'] ?></li>
    <li id="timeline-1" class="billing <?php echo $is_user_logged_in ? 'active' : '';?>" ><?php echo $labels['billing'] ?></li>
    <li id="timeline-2" class="shipping" ><?php echo $labels['shipping'] ?></li>
    <li id="timeline-3" class="order" ><?php echo $labels['order'] ?></li>
    <li id="timeline-4" class="payment" ><?php echo $labels['payment'] ?></li>
</ul>