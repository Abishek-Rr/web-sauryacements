 <?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Settings Page
 *
 * Handle settings
 *
 * @package Loan Calculator
 * @since 1.0.0
 */

global $ww_loan_calculator_model;

$loan_all_setting_data =get_option('ww_loan_option');

$back_ground_color = isset( $loan_all_setting_data['back_ground_color'] ) ? $loan_all_setting_data['back_ground_color'] : "#1f497d";
$selected_color = isset( $loan_all_setting_data['selected_color'] ) ? $loan_all_setting_data['selected_color'] : "#1f497d";
$background_light_color = isset( $loan_all_setting_data['background_light_color'] ) ? $loan_all_setting_data['background_light_color'] : "";
$border_color = isset( $loan_all_setting_data['border_color'] ) ? $loan_all_setting_data['border_color'] : "";
$interested_rate = isset( $loan_all_setting_data['interested_rate'] ) ? $loan_all_setting_data['interested_rate'] : "";
$ballon_per = isset( $loan_all_setting_data['ballon_per'] ) ? floatval( $loan_all_setting_data['ballon_per'] ) : "10";
$loan_term = isset( $loan_all_setting_data['loan_term'] ) ? $loan_all_setting_data['loan_term'] : "";
$loan_amount = isset( $loan_all_setting_data['loan_amount'] ) ? $loan_all_setting_data['loan_amount'] : "10000";
$monthly_rate = isset( $loan_all_setting_data['monthly_rate'] ) ? $loan_all_setting_data['monthly_rate'] : "";
$application_fee = isset( $loan_all_setting_data['application_fee'] ) ? $loan_all_setting_data['application_fee'] : "";
$loan_amount_min_value = isset( $loan_all_setting_data['loan_amount_min_value'] ) ? $loan_all_setting_data['loan_amount_min_value'] : "";
$loan_amount_max_value = isset( $loan_all_setting_data['loan_amount_max_value'] ) ? $loan_all_setting_data['loan_amount_max_value'] : "";
$loan_term_min_value = isset( $loan_all_setting_data['loan_term_min_value'] ) ? $loan_all_setting_data['loan_term_min_value'] : "";
$loan_term_max_value = isset( $loan_all_setting_data['loan_term_max_value'] ) ? $loan_all_setting_data['loan_term_max_value'] : "";
$interest_rate_min_value =isset($loan_all_setting_data['interest_rate_min_value'])?$loan_all_setting_data['interest_rate_min_value']:"";
$interest_rate_max_value =isset($loan_all_setting_data['interest_rate_max_value'])?$loan_all_setting_data['interest_rate_max_value']:"";

$application_fee_heading = isset( $loan_all_setting_data['application_fee_heading'] ) ? $loan_all_setting_data['application_fee_heading'] : "";
$total_regular_fees = isset( $loan_all_setting_data['total_regular_fees'] ) ? $loan_all_setting_data['total_regular_fees'] : "";
$total_fees = isset( $loan_all_setting_data['total_fees'] ) ? $loan_all_setting_data['total_fees'] : "";
$monthly_fee_heading = isset( $loan_all_setting_data['monthly_fee_heading'] ) ? $loan_all_setting_data['monthly_fee_heading'] : "";
$equipment_finance_loan_heading = isset( $loan_all_setting_data['equipment_finance_loan_heading'] ) ? $loan_all_setting_data['equipment_finance_loan_heading'] : "";
$equipment_finance_loan_sub_heading_lbl = isset( $loan_all_setting_data['equipment_finance_loan_sub_heading_lbl'] ) ? $loan_all_setting_data['equipment_finance_loan_sub_heading_lbl'] :"";
$equipment_finance_loan_term1 = isset( $loan_all_setting_data['equipment_finance_loan_term1']) ? $loan_all_setting_data['equipment_finance_loan_term1'] : "";
$equipment_finance_loan_term2 = isset( $loan_all_setting_data['equipment_finance_loan_term2'] ) ? $loan_all_setting_data['equipment_finance_loan_term2'] : "";
$equipment_finance_loan_term3 = isset( $loan_all_setting_data['equipment_finance_loan_term3'] ) ? $loan_all_setting_data['equipment_finance_loan_term3'] : "";
$equipment_finance_loan_term4 = isset( $loan_all_setting_data['equipment_finance_loan_term4'] ) ? $loan_all_setting_data['equipment_finance_loan_term4'] : "";
$equipment_finance_loan_term5 = isset( $loan_all_setting_data['equipment_finance_loan_term5'] ) ? $loan_all_setting_data['equipment_finance_loan_term5'] : "";

/* START : Calculation Result */
$regular_repayment_heading = isset( $loan_all_setting_data['regular_repayment_heading'] ) ? $loan_all_setting_data['regular_repayment_heading'] : "";
$per_month_heading = isset( $loan_all_setting_data['per_month_heading'] ) ? $loan_all_setting_data['per_month_heading'] : "";
$years_heading = isset( $loan_all_setting_data['years_heading'] ) ? $loan_all_setting_data['years_heading'] : "";
$total_interests_payable_heading = isset( $loan_all_setting_data['total_interests_payable_heading'] ) ? $loan_all_setting_data['total_interests_payable_heading'] :"";
$over_heading = isset($loan_all_setting_data['over_heading'])?$loan_all_setting_data['over_heading']:"";
$ballon_amt_heading = isset( $loan_all_setting_data['ballon_amt_heading'] ) ? $loan_all_setting_data['ballon_amt_heading'] : "";
/* END : Calculation Result */

/* START : Tab Field Setting */
$loan_feature_product_heading = isset( $loan_all_setting_data['loan_feature_product_heading'] ) ? $loan_all_setting_data['loan_feature_product_heading'] : "";
$video_heading = isset( $loan_all_setting_data['video_heading'] ) ? $loan_all_setting_data['video_heading'] : "";
$loan_table_heading = isset( $loan_all_setting_data['loan_table_heading'] ) ? $loan_all_setting_data['loan_table_heading'] : "";
$repayment_chart_heading = isset( $loan_all_setting_data['repayment_chart_heading'] ) ? $loan_all_setting_data['repayment_chart_heading'] : "";
$youtube_video_link = isset( $loan_all_setting_data['youtube_video_link'] ) ? $loan_all_setting_data['youtube_video_link'] :"" ;

/* END : Tab Field Setting */

/* START : Calculator Disclaimer Setting*/
$contact_info_heading = isset( $loan_all_setting_data['contact_info_heading'] ) ? $loan_all_setting_data['contact_info_heading'] : "" ;
$contact_popup_button_heading = isset( $loan_all_setting_data['contact_popup_button_heading'] ) ? $loan_all_setting_data['contact_popup_button_heading'] : "";
$calculator_disclaimer_heading = isset( $loan_all_setting_data['calculator_disclaimer_heading'] ) ? $loan_all_setting_data['calculator_disclaimer_heading'] :"";
$calculator_disclaimer_description = isset( $loan_all_setting_data['calculator_disclaimer_description'] ) ? $loan_all_setting_data['calculator_disclaimer_description'] :"";
$contact_popup_content = isset( $loan_all_setting_data['contact_popup_content'] ) ? $loan_all_setting_data['contact_popup_content'] :"";

/* END :  Calculator Disclaimer Setting*/

/* START : Tooltip Setting */ 
$loan_amount_tooltip = isset( $loan_all_setting_data['loan_amount_tooltip'] ) ? $loan_all_setting_data['loan_amount_tooltip'] :"";
$loan_terms_tooltip =isset( $loan_all_setting_data['loan_terms_tooltip'] )? $loan_all_setting_data['loan_terms_tooltip'] :"";
$interest_rates_tooltip = isset( $loan_all_setting_data['interest_rates_tooltip'] ) ? $loan_all_setting_data['interest_rates_tooltip'] :"";
/* END : Tooltip Setting */

/* START : Header Link Section*/
$print_label =isset( $loan_all_setting_data['print_label'] ) ? $loan_all_setting_data['print_label'] :"";
$about_this_calculator = isset( $loan_all_setting_data['about_this_calculator'] ) ? $loan_all_setting_data['about_this_calculator'] : "";
$calculator_popup_content = isset( $loan_all_setting_data['calculator_popup_content'] ) ?stripslashes( $loan_all_setting_data['calculator_popup_content'] ) :"" ;
/* END : Header Link Section */
/* START : Calculation Fee Setting Enable */
$calculation_fee_setting_enable = isset( $loan_all_setting_data['calculation_fee_setting_enable'] ) ? $loan_all_setting_data['calculation_fee_setting_enable']:"";
$calculator_heading = isset( $loan_all_setting_data['calculator_heading'] ) ? $loan_all_setting_data['calculator_heading'] : "";
/* END : Calculation Fee Setting Enable */

/* START : Tab Enable Settings */
$enable_repayment_chart = isset( $loan_all_setting_data['enable_repayment_chart'] ) ? $loan_all_setting_data['enable_repayment_chart'] : "";
$enable_video_tab = isset( $loan_all_setting_data['enable_video_tab'] ) ? $loan_all_setting_data['enable_video_tab'] : "";
$enable_loan_mortisation_tab = isset( $loan_all_setting_data['enable_loan_mortisation_tab'] ) ? $loan_all_setting_data['enable_loan_mortisation_tab'] : "";
$print_option_enable = isset( $loan_all_setting_data['print_option_enable'] ) ? $loan_all_setting_data['print_option_enable'] : "";
$print_option_heading = isset( $loan_all_setting_data['print_option_heading'] ) ? $loan_all_setting_data['print_option_heading'] : "";

/* END : Tab Enable Settings */

?>

<style type="text/css">
    :root{
        --calc-background-color: <?php echo esc_html( $back_ground_color );?>;
        --calc-select-color: <?php echo esc_html( $selected_color );?>;
        --calc-bg-light-color:<?php echo esc_html( $background_light_color );?>;
        --calc-border-color:<?php echo esc_html( $border_color );?>
    }
</style>
<section class="heading-section">
    <div class="menu-sec-cls">
        <ul class="heading-sec-link">
            <?php
              if( $print_option_enable ) { ?>
            <li>
                <a href="javascript:;" class="print-table"><i class="fa fa-print" aria-hidden="true"></i><?php echo esc_html( $print_option_heading ); ?></a>
            </li>
            <?php  } ?>
            <li>
                <a href="javascript:;" onclick="jQuery('.about-this-calculator-popup').show();jQuery('body').addClass('body-overflow-hidden');"><i class="fa fa-info-circle" aria-hidden="true"></i><?php echo esc_html( $about_this_calculator ); ?></a>
            </li>
        </ul>
    </div>
    <div class="about-this-calculator-popup" style="display: none;">
        <div class="about-this-calculator-popup-body">
         <a href="javascript:;" class="close-button" onclick="jQuery('.about-this-calculator-popup').hide();jQuery('body').removeClass('body-overflow-hidden');">X</a>
            <?php 
                // very permissive: allows pretty much all HTML to pass - same as what's normally applied to the_content by default
                $allowed_html = wp_kses_allowed_html( 'post' );
                $calculator_popup_content = wp_kses( stripslashes_deep( $calculator_popup_content ), $allowed_html );
            ?>
            <div class="calculator-content"><?php echo $calculator_popup_content;?></div>
        </div>
    </div>
</section>

<section id="main-sec">
    <section class="calculator-heading-section calculator-heading-block">
        <div class="calculator-child-heading">
            <h2><center><strong><?php echo esc_html( $calculator_heading );?></strong></h2></center>
        </div>
    </section>
    <section class="loan-option-text-info">
        <div class="custom-container loan-option-text-info-section">
            <div class="loan-option-text-info-block">
                <div class="first-row">
                    <div class="first-row-sub-child">
                        
                        <label for="loan_amt" class="loan-text" ><?php esc_html_e( 'Loan Amount', 'loan-calculator-wp' ); ?> <i class="fa fa-info-circle" aria-hidden="true" tabindex="1"></i><span class="text-tooltip-disp"><?php esc_html_e( $loan_amount_tooltip, 'loan-calculator-wp' ); ?></span></label>

                        <div class="loan-text-dis">
                            <span class="extra-info">NRs</span>                           
                            <input type="text" name="loan_amount" id="loan_amount" value="" tabindex="2" />
                        </div>
                        <input type="range" min="<?php esc_attr_e( $loan_amount_min_value,'loan-calculator-wp' );?>" max="<?php esc_attr_e( $loan_amount_max_value,'loan-calculator-wp' );?>" value="<?php esc_attr_e( $loan_amount,'loan-calculator-wp' );?>" class="slider" id="loan_amount_range" tabindex="3" step="1000">
                    </div>
                    <div class="first-row-sub-child">
                        <label for="loan_terms" class="loan-text" ><?php esc_html_e( 'Loan Terms', 'loan-calculator-wp' ); ?><i class="fa fa-info-circle" aria-hidden="true" tabindex="4"></i><span class="text-tooltip-disp"><?php esc_html_e( $loan_terms_tooltip, 'loan-calculator-wp' ); ?></span></label>
                        <div class="loan-text-dis">
                            <span class="extra-info"><?php esc_html_e( 'Months', 'loan-calculator-wp' ); ?></span>
                            <input type="text" name="loan_terms" id="loan_terms" value="" tabindex="5" onkeydown="return onlyNos(event,'loan_terms')"/>
                        </div>
                        <input type="range" min="<?php esc_attr_e( $loan_term_min_value,'loan-calculator-wp' );?>" max="<?php esc_attr_e($loan_term_max_value,'loan-calculator-wp');?>" value="<?php esc_attr_e($loan_term,'loan-calculator-wp');?>" class="slider" id="loan_terms_range" tabindex="6" step="12">
                    </div>
                    <div class="first-row-sub-child">
                        <div class="first-row-main-child">
                            <label for="loan_amt" class="loan-text" ><?php esc_html_e(  'Repayment Frequency', 'loan-calculator-wp' ); ?></label>
                            <input type="button" name="monthly" id="loan_terms" value="Monthly" tabindex="7"/>
                        </div>
                        <div class="first-row-main-child">
                            <label for="loan_amt" class="loan-text" ><?php esc_html_e(  'Payment Mode', 'loan-calculator-wp' ); ?></label>
                            <select name="payment_type" id="payment_type" class="payment-opt-drop" onchange="return loan_calculation_process();">
                                <option value="<?php esc_attr_e('In Advance','loan-calculator-wp');?>" selected> <?php esc_html_e( 'In Advance', 'loan-calculator-wp' ); ?></option>
                                <option value="<?php esc_attr_e( 'In Arrears','loan-calculator-wp' );?>" > <?php esc_html_e( 'In Arrears', 'loan-calculator-wp' ); ?></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="second-row">
                    <div class="second-row-sub-child">
                        <label for="loan_amt" class="loan-text" ><?php esc_html_e( 'Interest Rate', 'loan-calculator-wp' ); ?><i class="fa fa-info-circle" aria-hidden="true" tabindex="8"></i><span class="text-tooltip-disp"><?php esc_attr_e( $interest_rates_tooltip,'loan-calculator-wp' );?></span></label>
                        <div class="loan-text-dis">
                            <input type="text" name="interest_rates" id="interest_rates" value="" tabindex="9" onkeydown="return onlyNos(event,'interest_rates')" />
                            <span id="interest_rate_range_dis" class="rate_disp"></span>
                        </div>
                        <input type="range" min="<?php esc_attr_e( $interest_rate_min_value,'loan-calculator-wp' );?>" max="<?php esc_attr_e( $interest_rate_max_value,'loan-calculator-wp' );?>" value="<?php esc_attr_e($interested_rate,'loan-calculator-wp');?>" class="slider" id="interest_rate_range" tabindex="10" step="0.25">
                    </div>
                    <div class="second-row-sub-child">
                        <label for="loan_amt" class="loan-text" ><?php esc_html_e( 'Balloon Amount', 'loan-calculator-wp' ); ?></label>
                        <div class="loan-text-dis">
                            <span class="extra-info">NRs</span>
                            <input type="text" name="ballon_amounts" id="ballon_amounts" value="" tabindex="11" onkeydown="return onlyNos(event,'ballon_amounts')"/>

                            <input type="text" name="ballon_amounts_per" id="ballon_amounts_per" value="" tabindex="12" onkeydown="return onlyNos(event,'ballon_amounts_per')"/>
                            <span id="ballon_amounts_per_dis" class="rate_disp" ></span>
                        </div>
                        <input type="range" min="0" max="50" value="<?php esc_attr_e($ballon_per);?>" class="slider" id="ballon_amount_range" tabindex="13" step="1">
                    </div>
                </div>
            </div>
        </div>
        <?php 
            $full_width_cls ='';
            if( $enable_repayment_chart != 1 && $enable_video_tab != 1 && $enable_loan_mortisation_tab != 1) {
                $full_width_cls ='full-width';
            }
        ?>
        <div class="loan-detail-section <?php esc_attr_e( $full_width_cls );?>">
            <div class="loan-detail-section-child">
                <div class="sub-main-tab">
                    <div class="container">
                    <div class="tabs">

                        <?php
                            $tab1_checked = $tab2_checked =$tab3_checked ="";
                            if( $enable_repayment_chart == 1 ){
                                $tab1_checked  = "checked";
                            }
                            else if( $enable_video_tab == 1 ){
                                $tab2_checked = "checked";
                            }
                            else if( $enable_loan_mortisation_tab == 1 ){
                                $tab3_checked = "checked";
                            }                        
                        ?>
                        <?php
                            if( $enable_repayment_chart == 1 ) {
                        ?>
                        <input type="radio" name="tabs" id="tab1" <?php esc_attr_e($tab1_checked);?>>
                        <label for="tab1">
                            <i class="fa fa-chart-bar"></i>
                            <span class="tooltip-disp"><?php esc_html_e($repayment_chart_heading,'loan-calculator-wp');?></span>
                        </label>
                        <?php  } ?>
                    
                        <?php
                            if( $enable_loan_mortisation_tab == 1 ) {
                        ?>
                        <input type="radio" name="tabs" id="tab3" <?php esc_attr_e($tab3_checked);?>>
                        <label for="tab3">
                            <i class="fa fa-tasks"></i>
                            <span class="tooltip-disp"><?php esc_html_e($loan_table_heading,'loan-calculator-wp');?></span>
                        </label>
                        <?php  } ?>
                        <?php
                            if( $enable_video_tab == 1 ) {
                        ?>
                        <input type="radio" name="tabs" id="tab2" <?php esc_attr_e( $tab2_checked);?>>
                        <label for="tab2">
                            <i class="fa fa-play"></i>
                            <span class="tooltip-disp"><?php esc_html_e( $video_heading,'loan-calculator-wp' );?></span>
                        </label>
                        <?php  } ?>
                        <div id="tab-content1" class="tab-content">
                            <!--<div id="loan-process-graph"></div>-->
                                <canvas id="loan-process-graph" width="400" height="400"></canvas>                   </div>
                            <div id="tab-content2" class="tab-content">
                                <?php 
                                if( !empty( $youtube_video_link ) ) {
                            ?>
                                <iframe height="415" src="<?php echo esc_url($youtube_video_link);?>" style="width:100%;" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                <?php } else { ?>
                                    <div class="no-video-exist-main">
                                        <div class="video-child-sec">
                                            <h1><?php esc_html_e( 'Sorry', 'loan-calculator-wp' ); ?></h1>
                                            <p><?php esc_html_e( 'This video does not exist.', 'loan-calculator-wp' ); ?></p>
                                        </div>
                                    </div>
                                <?php } ?>    
                            </div>
                        
                    <div id="tab-content3" class="tab-content">
                            <table id="loan-process-tbl">
                            <thead>
                            <tr>
                                <th><?php esc_html_e( 'Period', 'loan-calculator-wp' ); ?></th>
                                <th><?php esc_html_e( 'Payment', 'loan-calculator-wp' ); ?></th>
                                <th><?php esc_html_e( 'Interest', 'loan-calculator-wp' ); ?></th>
                                <th><?php esc_html_e( 'Balance', 'loan-calculator-wp' ); ?></th>
                            </tr>
                            </thead>
                            <tbody id="loan_table_data">
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="loan-detail-section-child">
            <div class="loan-detail-cal-desc">
                    <div class="loan-cal-desc">
                        <div class="loan-cal-desc-heading">
                            <label><strong><?php esc_html_e( $regular_repayment_heading, 'loan-calculator-wp' ); ?></strong></label>
                        </div>
                        <div class="loan-cal-desc-val">
                        <label><span><small><?php echo esc_html('NRs'); ?></small><span id="per_month_amount"></span></span>  <?php esc_html_e( 'per month for', 'loan-calculator-wp' ); ?><span id="loan_amount_year"></span> </span></label>
                        </div>
                    </div>
                <div class="loan-cal-desc">
                        <div class="loan-cal-desc-heading">
                            <label><strong><?php esc_html_e( $total_interests_payable_heading, 'loan-calculator-wp' ); ?></strong></label>
                        </div>
                        <div class="loan-cal-desc-val">
                        <label><small><?php echo esc_html('NRs'); ?></small><span id="total_interests_amt"></span>  <?php esc_html_e( 'over', 'loan-calculator-wp' ); ?> <span id="total_interests_years"></span> </label>
                        </div>

                    </div>
                    <div class="loan-cal-desc" id="ballon_amt_section">
                        <div class="loan-cal-desc-heading" >
                            <label><strong><?php esc_html_e( $ballon_amt_heading, 'loan-calculator-wp' ); ?> (<span id="bill_ballon_per"><?php esc_attr_e(number_format( $ballon_per,2 ),'loan-calculator-wp'); ?></span>%)</strong></label>
                        </div>
                        <div class="loan-cal-desc-val">
                        <label><small><?php echo esc_html('NRs'); ?></small><strong><span id="bill_ballon_amt"><?php esc_attr_e(number_format( ( $loan_amount*$ballon_per/100 ),2 ),'loan-calculator-wp' ); ?></span></strong></label>
                        </div>

                    </div>
            </div>
            <?php
                $total_regular_fees_amt = round(floatval( ceil($loan_term) * 120 ) ,2);
                $total_fees_amt = floatval( $total_regular_fees_amt )+floatval( $application_fee );
            ?>
            <?php if( $calculation_fee_setting_enable == 1 ) { ?>
            <div class="loan-detail-fee-desc">
                    <div class="loan-detail-fee-block">
                        <h5><?php esc_html_e($application_fee_heading,'loan-calculator-wp');?></h5>
                        <p>NRs: <?php esc_html_e( $application_fee,'loan-calculator-wp' );?></p>
                    </div>
                    <div class="loan-detail-fee-block">
                        <h5><?php esc_html_e( $monthly_fee_heading,'loan-calculator-wp' );?></h5>
                        <p>NRs: <?php esc_html_e( $monthly_rate,'loan-calculator-wp' );?></p>
                    </div>
                    <div class="loan-detail-fee-block">
                        <h5><?php esc_html_e( $total_regular_fees,'loan-calculator-wp' );?></h5>
                        <p>NRs: <span id="total_regular_fee_amt"><?php esc_html_e( round($total_regular_fees_amt,2),'loan-calculator-wp' );?></span></p>
                    </div>
                    <div class="loan-detail-fee-block">
                        <h5><?php esc_html_e( $total_fees,'loan-calculator-wp' );?></h5>
                        <p>NRs: <span id="total_fee_amt"><?php esc_html_e( $total_fees_amt,'loan-calculator-wp' );?></span></p>
                    </div>
            </div>
        <?php } ?>
            </div>
        </div>
    </section>
    <div class="contact-us-section">
        <h3><?php esc_html_e( $contact_info_heading,'loan-calculator-wp' );?></h3>
        <button class="contact-book-btn"><?php esc_html_e( $contact_popup_button_heading,'loan-calculator-wp' );?></button>
    </div>
    <div class="contact-us-popup" style="display:none;">
        <div class="contact-us-popup-body">
         <a href="javascript:;" class="close-button" onclick="jQuery('.contact-us-popup').hide();jQuery('body').removeClass('body-overflow-hidden');">X</a>
            <?php echo do_shortcode( esc_html( $contact_popup_content ) ); ?>
        </div>
    </div>
    <div class="calculator-disclaimer-section">
        <h4><?php esc_html_e( $calculator_disclaimer_heading, 'loan-calculator-wp' );?></h4>
        <p><?php esc_html_e( $calculator_disclaimer_description, 'loan-calculator-wp' );?></p>
    </div>
</section>