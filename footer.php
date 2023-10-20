<?php 
    $homepage = get_the_ID(10);
    
?>
<!-- style="<?php if($homepage == 10) echo "position: absolute!important; bottom:0;left:0;" ?>" -->

<footer >
        <p>&copy; <?php echo date("Y"); ?> <a href="https://github.com/kadrian98">Adrian Kaczmarek</a>. Wszelkie prawa zastrzeżone.</p>
    </footer>
    <?php wp_footer();?>
    </body>
</html>