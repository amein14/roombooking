<?php
namespace MRBS;

global $using_rtl, $refresh_rate, $custom_css_url;



if (DEBUG)
{
  ?>
  <link href="jquery/ui/css/jquery-ui.structure.css" rel="stylesheet" type="text/css">
  <link href="jquery/ui/css/sunny/jquery-ui.theme.css" rel="stylesheet" type="text/css">
  <link href="jquery/datatables/css/jquery.dataTables.css" rel="stylesheet" type="text/css">
  <link href="jquery/datatables/css/buttons.dataTables.css" rel="stylesheet" type="text/css">
  <link href="jquery/datatables/css/fixedColumns.dataTables.css" rel="stylesheet" type="text/css">
  <link href="jquery/datatables/css/colReorder.dataTables.css" rel="stylesheet" type="text/css">
  <?php
}
else
{
  ?>
  <link href="jquery/ui/css/jquery-ui.structure.min.css" rel="stylesheet" type="text/css">
  <link href="jquery/ui/css/sunny/jquery-ui.theme.min.css" rel="stylesheet" type="text/css">
  <link href="jquery/datatables/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
  <link href="jquery/datatables/css/buttons.dataTables.css" rel="stylesheet" type="text/css">
  <link href="jquery/datatables/css/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css">
  <link href="jquery/datatables/css/colReorder.dataTables.css" rel="stylesheet" type="text/css">
  <?php
}
?>
    <link rel="stylesheet" href="css/mrbs.css.php" type="text/css">
    <?php
    if ($using_rtl)
    {
      ?>
      <link rel="stylesheet" href="css/mrbs-rtl.css.php" type="text/css">
      <?php
    }
    ?>
    <link rel="stylesheet" media="print" href="css/mrbs-print.css.php" type="text/css">
    <!--[if IE]>
    <link rel="stylesheet" href="css/mrbs-ie.css" type="text/css">
    <![endif]-->
    <?php
    if ($using_rtl)
    {
      ?>
      <!--[if IE]>
      <link rel="stylesheet" href="css/mrbs-ie-rtl.css" type="text/css">
      <![endif]-->
      <?php
    }
    
    if (isset($custom_css_url))
    {
      ?>
      <link rel="stylesheet" href="<?php echo $custom_css_url ?>" type="text/css">
      <?php
    }
    ?>
    <meta name="robots" content="noindex, nofollow">
<?php
if (($refresh_rate != 0) && in_array(this_page('.php'), array('day', 'week', 'month')))
{
  // If we're using JavaScript we'll do the refresh by getting a new
  // table using Ajax requests, which means we only have to download
  // the table not the whole page each time
  echo "<noscript>\n";
  echo "<meta http-equiv=\"Refresh\" content=\"$refresh_rate\">\n";
  echo "</noscript>\n";
}

