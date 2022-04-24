<?php
/**
 * @version     1.0
 * @package     mod_jdayusa_charts
 * @copyright   Copyright (C) 2022. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Maarten Blokdijk  / JModules.com
 */
//No Direct Access
defined('_JEXEC') or die;
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>


<canvas id="jmodules_chart<?php echo $module->id ;?>" width="<?php echo $jn_charts_width?>" height="<?php echo $jn_charts_height?>"></canvas>
<script>

new Chart(document.getElementById("jmodules_chart<?php echo $module->id ;?>"), {
    type: '<?php echo $jn_charts_bar?>',
    


    data: {
      labels: [<?php foreach ($jn_charts_data as $item) {?>"<?=$item->jn_charts_label?>", <?php }?>],
      datasets: [
        {
          label: "<?php echo $jn_charts_title  ?>",
          borderColor: "<?php echo $jn_charts_linecolor?>",
          fill:false,
          backgroundColor: [<?php foreach ($jn_charts_data as $item) {?>"<?=$item->jn_charts_color?>",<?php }?>],
          data: [<?php foreach ($jn_charts_data as $item) {echo intval($item->jn_charts_value).",";}?>]
        }
      ]
    },

   




    options: {
      
      title: {
        display: true, 
        text: '<?php echo $jn_charts_title  ?>'
      },
      <?php if ($jn_charts_bar!='doughnut' && $jn_charts_bar!='pie' ){ ?>
      scales: {
        <?php if ($jn_charts_bar=='bar'){echo 'yAxes:';};?>
        <?php if ($jn_charts_bar=='line'){echo 'yAxes:';};?>
        <?php if ($jn_charts_bar=='horizontalBar'){echo 'xAxes:';};?>
         [{
            ticks: {
                beginAtZero:true
            }
        }]
    }
      <?php } 
      ?>
      
    }
}
);
</script>

