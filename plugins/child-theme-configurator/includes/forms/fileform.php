<?php 
if ( !defined( 'ABSPATH' ) ) exit;
// Files Section
// This include is used for both parent template section and the child files section

if ( defined( 'DISALLOW_FILE_EDIT' ) && DISALLOW_FILE_EDIT ):
    $linktext = __( 'The Theme editor has been disabled. Template files must be edited offline.', 'chld_thm_cfg' );
    $editorlink = '';
    $editorlinkend = '';
else:
    $linktext = __( 'Click here to edit template files using the Theme Editor', 'chld_thm_cfg' );
    $adminbase = 'theme-editor.php?theme=' . $this->ctc()->css->get_prop( 'child' )
        . ( 'parnt' == $template ? '&file=functions.php' : '' );
    $editorlink = '<a href="' . ( is_multisite() ? network_admin_url( $adminbase ) : admin_url( $adminbase ) ) . '" title="' . $linktext . '">';
    $editorlinkend = '</a>';
endif;
?>
<div class="ctc-input-row clearfix" id="input_row_<?php echo $template; ?>_templates">
  <form id="ctc_<?php echo $template; ?>_templates_form" method="post" action="?page=<?php echo CHLD_THM_CFG_MENU; ?>&amp;tab=file_options">
    <?php wp_nonce_field( apply_filters( 'chld_thm_cfg_action', 'ctc_update' ) ); ?>
    <div class="ctc-input-cell"> <strong>
      <?php echo 'parnt' == $template ? __( 'Parent Templates', 'chld_thm_cfg' ) : __( 'Child Theme Files', 'chld_thm_cfg' ); ?>
      </strong>
<?php 
if ( 'parnt' == $template ): ?>
      <p class="howto">
    <?php _e( 'Copy PHP template files from the parent theme by selecting them here.', 'chld_thm_cfg' ); ?>
      </p>
      <p><strong>
        <?php _e( 'CAUTION: If your child theme is active, the child theme version of the file will be used instead of the parent immediately after it is copied.', 'chld_thm_cfg' );?>
        </strong></p>
      <p class="howto"> <?php echo sprintf( __( 'The %s file is generated separately and cannot be copied here.', 'chld_thm_cfg' ), 
        $editorlink . '<code>functions.php</code>' . $editorlinkend
        );
else: ?>
      <p class="howto">
      <?php echo $editorlink . $linktext . $editorlinkend; ?>
      </p>
      <p class="howto">
<?php 
    echo ( $this->ctc()->fs ?
        __( 'Delete child theme templates by selecting them here.', 'chld_thm_cfg' ) :
        __( 'Delete child theme templates or make them writable by selecting them here. Writable files are displayed in <span style="color:red">red</span>.', 'chld_thm_cfg' ) 
    ); ?>
      </p>
<?php 
    endif; 
?>
    </div>
    <div class="ctc-input-cell-wide"> <?php echo $inputs; ?></div>
    <div class="ctc-input-cell"> <strong>&nbsp;</strong> </div>
    <div class="ctc-input-cell-wide" style="margin-top:10px;margin-bottom:10px">
              <?php if ( 'child' == $template && !$this->ctc()->fs ): ?>
      <input class="ctc_submit button button-primary" id="ctc_templates_writable_submit" 
              name="ctc_templates_writable_submit" type="submit" 
              value="<?php _e( 'Make Selected Writable', 'chld_thm_cfg' ); ?>" />&nbsp; &nbsp;
              <?php endif; ?>
      <input class="ctc_submit button button-primary" id="ctc_<?php echo $template; ?>_templates_submit" 
              name="ctc_<?php echo $template; ?>_templates_submit" type="submit" 
              value="<?php echo ( 'parnt' == $template ?  __( 'Copy Selected to Child Theme', 'chld_thm_cfg' ) : __( 'Delete Selected', 'chld_thm_cfg' ) ); ?>" />
    </div>
  </form>
</div>