<?php
add_action('wp_dashboard_setup', function () {
    wp_add_dashboard_widget(
        'xarxa_guide_widget',
        'Xarxa Compromís',
        'xarxa_guide_render'
    ); 
});

function xarxa_guide_render () {
?>
    <style>
        .xarxa-logo img {
            width: 100%;
            max-width: 150px;
        }

        .xarxa-section {
            border-top: 1px #d5d7de solid;
            padding: 1rem 0;
            margin: 1rem 0;
        }

        .xarxa-section h4 {
            font-weight: bold !important;
        }

        .xarxa-message {
            background: #d4edda;
            color: #155724;
            padding: 0.75rem 1rem;
            border-radius: 5px;
            margin-top: 0;
            font-weight: bold;
            display: flex;
        }
    </style>
    <div class="xarxa-logo">
        <img src="<?php echo get_bloginfo("stylesheet_directory") . '/assets/images/admin-logo.svg'; ?>" alt="Xarxa Compromís Local" />
    </div>
    <div class="xarxa-section xarxa-welcome">
        <p class="xarxa-message">
            <span>✅</span>
            <span>Acabem d'actualitzar aquesta web a la nova plantilla local de Compromís.</span>
        </p>
        <p>
            És possible que algun contingut no s'haja transferit correctament a la nova web.
            Si és el cas i el voleu recuperar, contacteu amb <a href="mailto:tecnic@compromis.net">tecnic@compromis.net</a>
        </p>
    </div>
    <div class="xarxa-section xarxa-collectiu">
        <h4>ℹ️ Informació del col·lectiu</h4>
        <p>
            A la pestanya <a href="admin.php?page=collectiu_info">Col·lectiu</a> podeu modificar
            la informació del vostre col·lectiu (adreça, telèfon, xarxes socials, etc.)
            que es mostra a aquesta pàgina i al directori de compromis.net
        </p>
    </div>
    <div class="xarxa-section xarxa-collectiu">
        <h4>👥 Regidors i regidores</h4>
        <p>
            A la pestanya <a href="edit.php?post_type=regidor">Perfils</a> podeu
            afegir els regidors/es del col·lectiu. Per mostrar-los a la web, heu
            de <a href="post-new.php?post_type=page">crear una nova pàgina</a> amb
            <i>Llistat de perfils</i>.
        </p>
    </div>
    <div class="xarxa-section xarxa-help">
        <h4>🤔 Ajuda tècnica</h4>
        Si teniu qualsevol dubte o incidència tècnica, podeu contactar amb
        <a href="mailto:tecnic@compromis.net">tecnic@compromis.net</a>
    </div>
<?php
}