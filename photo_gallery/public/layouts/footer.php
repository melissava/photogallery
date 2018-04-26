    </div>
    <div id="footer">Copyright <?php echo date("Y", time()); ?>, Melissa van Aalst</div>
  </body>
</html>
<?php if(isset($database)) { $database->close_connection(); } ?>