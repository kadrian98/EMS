<footer>
        <p>&copy; <?php echo date("Y"); ?> <a href="https://github.com/kadrian98">Adrian Kaczmarek</a>. Wszelkie prawa zastrzeżone.</p>
        <nav class="nav-list">
            <?php 
            wp_nav_menu(array(
                'theme_location' => 'footerMenuLocation',
                'menu_class' => 'nav-link'
            ));
        ?>
        </nav>
    </footer>
    </body>
</html>