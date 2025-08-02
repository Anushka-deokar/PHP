<?php
 
  header('Content-Type: text/xml');
  
 
  echo '<?xml version="1.0" encoding="UTF-8"?>';
  echo '<products>';
  echo '  <product>';
  echo '    <id>1</id>';
  echo '    <name>HP Laptop</name>';
  echo '    <price>899.99</price>';
  echo '  </product>';
  echo '  <product>';
  echo '    <id>2</id>';
  echo '    <name>Dell XPS</name>';
  echo '    <price>1299.99</price>';
  echo '  </product>';
  echo '  <product>';
  echo '    <id>3</id>';
  echo '    <name>MacBook Pro</name>';
  echo '    <price>1999.99</price>';
  echo '  </product>';
  echo '</products>';
  ?>