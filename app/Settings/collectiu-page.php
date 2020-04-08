<?php
    global $wpdb, $blog_id;

    if (isset($_POST['submit'])) {
        $address_grup = htmlspecialchars(trim($_POST['address_grup']));
        $address_seu = htmlspecialchars(trim($_POST['address_seu']));
        $email = htmlspecialchars(trim($_POST['email']));
        $telf = htmlspecialchars(trim($_POST['telf']));
        $facebook = htmlspecialchars(trim($_POST['facebook']));
        $twitter = htmlspecialchars(trim($_POST['twitter']));
        $instagram = htmlspecialchars(trim($_POST['instagram']));
    
        $wpdb->query($wpdb->prepare("
            UPDATE webs_locals 
            SET address_grup=%s,
                address_seu=%s,
                telf=%s,
                email=%s,
                facebook=%s,
                twitter=%s,
                instagram=%s
            WHERE id=%d
        ", $address_grup, $address_seu, $telf, $email, $facebook, $twitter, $instagram, $blog_id));

        $success = true;
    }

    // get municipi info
    $info = $wpdb->get_row($wpdb->prepare('SELECT * FROM webs_locals WHERE blogid = %d LIMIT 1', $blog_id));
?>
<div>
<?php screen_icon(); ?>
<h2>Informació del col·lectiu</h2>

<?php if(isset($success)): ?>
    <div id="message" class="updated notice notice-success">
        <p>Informació actualitzada a compromis.net i aquesta web.</p>
    </div>
<?php endif; ?>

<p>Ací podeu modificar la informació sobre el vostre col·lectiu que es mostra a <a href="https://compromis.net">compromis.net</a> i a aquesta pàgina web.</p>
<p>Municipi associat: <strong><?php echo $info->id . '-' . $info->ref; ?></strong></p>
<hr />
<h3><?php echo $info->name; ?></h3>
<form method="post">
    <div class="field">
        <label for="address_grup">Adreça del grup municipal</label>
        <input type="text" name="address_grup" id="address_grup" value="<?php echo $info->address_grup; ?>" size="70" />
    </div>
    <div class="field">
        <label for="address_seu">Adreça de la seu municipal</label>
        <input type="text" name="address_seu" id="address_seu" value="<?php echo $info->address_seu; ?>" size="70" />
    </div>
    <div class="field">
        <label for="email">E-mail de contacte</label>
        <input type="email" name="email" id="email" value="<?php echo $info->email; ?>" size="70" />
    </div>
    <div class="field">
        <label for="telf">Telèfon</label>
        <input type="text" name="telf" id="telf" value="<?php echo $info->telf; ?>" size="70" />
    </div>
    <div class="field">
        <label for="facebook">Facebook</label>
        <input type="url" placeholder="https://" name="facebook" id="facebook" value="<?php echo $info->facebook; ?>" size="70" />
    </div>
    <div class="field">
        <label for="twitter">Twitter</label>
        <input type="url" placeholder="https://" name="twitter" id="twitter" value="<?php echo $info->twitter; ?>" size="70" />
    </div>
    <div class="field">
        <label for="instagram">Instagram</label>
        <input type="url" placeholder="https://" name="instagram" id="instagram" value="<?php echo $info->instagram; ?>" size="70" />
    </div>
    <?php submit_button(); ?>
</form>
</div>

<style>
.field {
    padding: 1rem 0;
    border-bottom: 1px #e1e2e3 solid;
}

.field label {
    font-weight: bold;
    display: block;
    margin-bottom: .5rem;
}
</style>