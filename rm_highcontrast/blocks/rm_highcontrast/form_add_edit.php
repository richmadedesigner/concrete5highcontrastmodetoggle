<?php
defined('C5_EXECUTE') or die('Access Denied');
print Core::make('helper/concrete/ui')->tabs(array(
    array('rm-corestyles', t('RM High Contrast Core style'), true),
    array('rm-custom', t('Add custom css classes'))
));
?>
<!-- Feed Text Color -->
<div id="ccm-tab-content-rm-corestyles" class="ccm-tab-content">
   <!--set header colors-->
	<div class="form-group">
        <?php  echo '<label class="control-label">' . t('Header Tag Background Color') . '</label>'; ?>
        <br>
        <?php
        $color = Core::make('helper/form/color');
        $color->output('rmcontrasth', $rmcontrasth ? $rmcontrasth : "#000000", array('preferredFormat'=>'hex'));
        ?>
    </div>
   <div class="form-group">
        <?php  echo '<label class="control-label">' . t('Header Tag Text Color') . '</label>'; ?>
        <br>
        <?php
        $color = Core::make('helper/form/color');
        $color->output('rmcontrastht', $rmcontrastht ? $rmcontrastht : "#ffffff", array('preferredFormat'=>'hex'));
        ?>
    </div>
	<!--ENDS set header colors-->
	
	<div class="form-group">
        <?php  echo '<label class="control-label">' . t('Content Link Background Color') . '</label>'; ?>
        <br>
        <?php
        $color = Core::make('helper/form/color');
        $color->output('rmcontrastlink', $rmcontrastlink ? $rmcontrastlink : "#000000", array('preferredFormat'=>'hex'));
        ?>
    </div>
   <div class="form-group">
        <?php  echo '<label class="control-label">' . t('Content Link Text Color') . '</label>'; ?>
        <br>
        <?php
        $color = Core::make('helper/form/color');
        $color->output('rmcontrastlinkt', $rmcontrastlinkt ? $rmcontrastlinkt : "#ffffff", array('preferredFormat'=>'hex'));
        ?>
    </div>

		<div class="form-group">
        <?php  echo '<label class="control-label">' . t('Blockquote Background Color') . '</label>'; ?>
        <br>
        <?php
        $color = Core::make('helper/form/color');
        $color->output('rmcontrastblockquote', $rmcontrastblockquote ? $rmcontrastblockquote : "#000000", array('preferredFormat'=>'hex'));
        ?>
    </div>
   <div class="form-group">
        <?php  echo '<label class="control-label">' . t('BLockquote Text Color') . '</label>'; ?>
        <br>
        <?php
        $color = Core::make('helper/form/color');
        $color->output('rmcontrastblockquotet', $rmcontrastblockquotet ? $rmcontrastblockquotet : "#ffffff", array('preferredFormat'=>'hex'));
        ?>
    </div>
	
	
	<!--p tag-->
		<div class="form-group">
        <?php  echo '<label class="control-label">' . t('P Background Color') . '</label>'; ?>
        <br>
        <?php
        $color = Core::make('helper/form/color');
        $color->output('rmhighcontrastp', $rmhighcontrastp ? $rmhighcontrastp : "#000000", array('preferredFormat'=>'hex'));
        ?>
    </div>
   <div class="form-group">
        <?php  echo '<label class="control-label">' . t('P Text Color') . '</label>'; ?>
        <br>
        <?php
        $color = Core::make('helper/form/color');
        $color->output('rmhighcontrastpt', $rmhighcontrastpt ? $rmhighcontrastpt : "#ffffff", array('preferredFormat'=>'hex'));
        ?>
    </div>
	<!--ENDS p tag-->

</div>

<div id="ccm-tab-content-rm-custom" class="ccm-tab-content">
<div class="form-group">
    <?php echo $form->label('rmhighcontrastlabel', t('Add your css style overrides for high contrast here under body.highcontrast'));?>
    <?php echo $form->textarea('rmhighcontraststyle', $rmhighcontraststyle);?>
	  
		   <?php echo $form->label('rmhighcontrastzlabel', t('Set the widget z-index number ie: 99'));?>
    <?php echo $form->text('rmhighcontrastz', $rmhighcontrastz);?>
</div></div>
<br>
<br>



