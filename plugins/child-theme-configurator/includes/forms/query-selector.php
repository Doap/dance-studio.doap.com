<?php  
if ( !defined( 'ABSPATH' ) ) exit;
// Query/Selector Panel
        $ctcpage = apply_filters( 'chld_thm_cfg_admin_page', CHLD_THM_CFG_MENU );
?>

<div id="query_selector_options_panel" 
        class="ctc-option-panel<?php echo 'query_selector_options' == $active_tab ? ' ctc-option-panel-active' : ''; ?>" <?php echo $hidechild; ?>>
  <form id="ctc_query_selector_form" method="post" action="?page=<?php echo $ctcpage; ?>">
    <?php wp_nonce_field( apply_filters( 'chld_thm_cfg_action', 'ctc_update' ) ); ?>
    <div class="ctc-input-row clearfix" id="input_row_query">
      <div class="ctc-input-cell"> <strong>
        <?php _e( 'Query', 'chld_thm_cfg' ); ?>
        </strong> </div>
      <div class="ctc-input-cell" id="ctc_sel_ovrd_query_selected">&nbsp;</div>
      <div class="ctc-input-cell">
        <div class="ui-widget">
          <input id="ctc_sel_ovrd_query" />
        </div>
      </div>
    </div>
    <div class="ctc-input-row clearfix" id="input_row_selector">
      <div class="ctc-input-cell"> <strong>
        <?php _e( 'Selector', 'chld_thm_cfg' ); ?>
        </strong> <a href="#" class="ctc-rewrite-toggle"></a></div>
      <div class="ctc-input-cell" id="ctc_sel_ovrd_selector_selected">&nbsp;</div>
      <div class="ctc-input-cell">
        <div class="ui-widget">
          <input id="ctc_sel_ovrd_selector" />
          <div id="ctc_status_sel_ndx"></div>
        </div>
      </div>
    </div>
    <div class="ctc-selector-row clearfix" id="ctc_sel_ovrd_rule_inputs_container" style="display:none">
      <div class="ctc-input-row clearfix">
        <div class="ctc-input-cell"><strong>
          <?php _e( 'Sample', 'chld_thm_cfg' ); ?>
          </strong></div>
        <div class="ctc-input-cell clearfix" style="max-height:150px;overflow:hidden">
          <div class="ctc-swatch" id="ctc_child_all_0_swatch"><?php echo $this->ctc()->swatch_text; ?></div>
        </div>
        <div id="ctc_status_sel_val"></div>
        <div class="ctc-input-cell ctc-button-cell" id="ctc_save_query_selector_cell">
          <input type="button" class="button button-primary ctc-save-input" id="ctc_save_query_selector" 
            name="ctc_save_query_selector" value="<?php _e( 'Save Child Values', 'chld_thm_cfg' ); ?>" disabled />
          <input type="hidden" id="ctc_sel_ovrd_qsid" 
            name="ctc_sel_ovrd_qsid" value="" />
        </div>
      </div>
      <div class="ctc-input-row clearfix" id="ctc_sel_ovrd_rule_header" style="display:none">
        <div class="ctc-input-cell"> <strong>
          <?php _e( 'Rule', 'chld_thm_cfg' ); ?>
          </strong> </div>
        <div class="ctc-input-cell"> <strong>
          <?php _e( 'Parent Value', 'chld_thm_cfg' ); ?>
          </strong> </div>
        <div class="ctc-input-cell"> <strong>
          <?php _e( 'Child Value', 'chld_thm_cfg' ); ?>
          </strong> </div>
      </div>
      <div id="ctc_sel_ovrd_rule_inputs" style="display:none"> </div>
      <div class="ctc-input-row clearfix" id="ctc_sel_ovrd_new_rule" style="display:none">
        <div class="ctc-input-cell"> <strong>
          <?php _e( 'New Rule', 'chld_thm_cfg' ); ?>
          </strong> </div>
        <div class="ctc-input-cell">
          <div class="ui-widget">
            <input id="ctc_new_rule_menu" />
          </div>
        </div>
      </div>
      <div class="ctc-input-row clearfix" id="input_row_selector">
        <div class="ctc-input-cell"> <strong>
          <?php _e( 'Order', 'chld_thm_cfg' ); ?>
          </strong> </div>
        <div class="ctc-input-cell" id="ctc_child_load_order_container">&nbsp;</div>
      </div>
    </div></form><form id="ctc_raw_css_form" method="post" action="?page=<?php echo $ctcpage; ?>">
    <div class="ctc-selector-row clearfix" id="ctc_new_selector_row">
      <div class="ctc-input-cell">
        <div class="ctc-textarea-button-cell" id="ctc_save_query_selector_cell">
          <input type="button" class="button" id="ctc_copy_selector" 
            name="ctc_copy_selector" value="<?php _e( 'Copy Selector', 'chld_thm_cfg' ); ?>"  /> &nbsp;
          <input type="button" class="button button-primary ctc-save-input" id="ctc_save_new_selectors" 
            name="ctc_save_new_selectors" value="<?php _e( 'Save', 'chld_thm_cfg' ); ?>"  disabled />
        </div>
        <strong>
        <?php _e( 'Raw CSS', 'chld_thm_cfg' ); ?>
        </strong>
        <p><?php _e( 'Use to enter shorthand CSS or new @media queries and selectors.', 'chld_thm_cfg' );?></p><p><?php _e( 'Values entered here are merged into existing child styles or added to the child stylesheet if they do not exist in the parent.', 'chld_thm_cfg' ); ?></p>
      </div>
      <div class="ctc-input-cell-wide">
        <textarea id="ctc_new_selectors" name="ctc_new_selectors" wrap="off"></textarea>
      </div>
    </div>
  </form>
</div>
