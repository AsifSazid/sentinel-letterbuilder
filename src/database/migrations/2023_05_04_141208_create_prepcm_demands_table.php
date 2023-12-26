<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrepcmDemandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pcm')->create('prepcm_demands', function (Blueprint $table) {
            $table->increments('id');
            ##ELOQUENTRELATIONSHIPCOLUMNS##
            
            
			$table->uuid('uuid','36');
			$table->bigInteger('prepcm_id')->nullable();
			$table->string('prepcm_uuid', '36')->nullable();
			$table->string('prepcm', '255')->nullable();
			$table->bigInteger('range_id')->nullable();
			$table->string('range_uuid', '36')->nullable();
			$table->string('range', '32')->nullable();
			$table->bigInteger('subrange_id')->nullable();
			$table->string('subrange_uuid', '36')->nullable();
			$table->string('subrange', '64')->nullable();
			$table->bigInteger('office_id')->nullable();
			$table->string('office_uuid', '36')->nullable();
			$table->string('office', '32')->nullable();
			$table->bigInteger('base_unit_institute_id')->nullable();
			$table->string('base_unit_institute_uuid', '36')->nullable();
			$table->string('base_unit_institute', '32')->nullable();
			$table->string('raisor_bdnumber', '16')->nullable();
			$table->bigInteger('budgetcode_id')->nullable();
			$table->string('budgetcode_uuid', '36')->nullable();
			$table->string('budgetcode_old', '16')->nullable();
			$table->string('budgetcode_new', '16')->nullable();
			$table->bigInteger('category_id')->nullable();
			$table->string('category_uuid', '36')->nullable();
			$table->string('category', '64')->nullable();
			$table->bigInteger('item_id')->nullable();
			$table->string('item_uuid', '36')->nullable();
			$table->string('item', '255')->nullable();
			$table->string('item_code', '128')->nullable();
			$table->string('item_ser_no', '128')->nullable();
			$table->string('item_part_no', '64')->nullable(); // utf8 ??
			$table->text('item_note', '255')->nullable();
			$table->string('item_section_ref_no', '32')->nullable();
			$table->string('item_main_eqpt', '64')->nullable();
			$table->string('qty', '32')->nullable();
			$table->float('quantity')->nullable();
			$table->string('qty_unit', '16')->nullable();
			$table->bigInteger('qty_unit_id')->nullable();
			$table->string('qty_unit_uuid', '36')->nullable();
			$table->string('currency', '32')->nullable();
			$table->bigInteger('currency_id')->nullable();
			$table->string('currency_uuid', '36')->nullable();
			$table->char('currency_symbol', '8')->nullable();
			$table->string('recom_qty', '32')->nullable();
			$table->bigInteger('recom_by_opi_dte_id')->nullable();
			$table->string('recom_by_opi_dte_uuid', '36')->nullable();
			$table->string('recom_by_opi_dte_name', '64')->nullable();
			$table->string('ph_baseunit_opi_defined', '32')->nullable();
			$table->string('prepcm_auth_qty', '32')->nullable();
			$table->string('pcm_auth_qty', '32')->nullable();
			$table->string('ph_baseunit', '32')->nullable();
			$table->string('ph_user', '32')->nullable();
			$table->string('ph_engg_flt', '32')->nullable();
			$table->string('ph_engg_jet', '32')->nullable();
			$table->string('ph_engg_mu', '32')->nullable();
			$table->string('ph_engg_total', '64')->nullable();
			$table->string('item_qty_used_sys', '32')->nullable();
			$table->string('ph_cnd_svc', '32')->nullable();
			$table->string('ph_cnd_us', '32')->nullable();
			$table->string('ph_cnd_rs', '32')->nullable();
			$table->string('ph_cnd_rd', '32')->nullable();
			$table->string('ph_cnd_ur', '32')->nullable();
			$table->string('ph_cnd_total', '32')->nullable();
			$table->string('last_year_consumption', '32')->nullable();
			$table->string('last_5year_consumption', '32')->nullable();
			$table->string('last_year_count', '32')->nullable();
			$table->string('second_last_year_count', '32')->nullable();
			$table->string('last_year_demand', '32')->nullable();
			$table->string('estimated_unit_price', '32')->nullable();
			$table->string('estimated_total_cost', '128')->nullable();
			$table->text('remark')->nullable();
			$table->text('justification')->nullable();
			$table->string('opi_estimated_price', '32')->nullable();
			$table->string('opi_estimated_total_price', '32')->nullable();
			$table->string('dropped_by', '32')->nullable();
			$table->string('dropped_reason', '255')->nullable();
			$table->bigInteger('updated_by_office_id')->nullable();
			$table->string('updated_by_office_name', '64')->nullable();
			$table->string('updated_by_office_type', '32')->nullable();
			$table->string('updated_reason', '255')->nullable();
			$table->string('item_section_no', '32')->nullable();
			$table->bigInteger('item_section_id')->nullable();
			$table->string('item_section_uuid', '36')->nullable();
			$table->string('item_ref_no', '32')->nullable();
			$table->bigInteger('item_ref_id')->nullable();
			$table->string('item_ref_uuid', '36')->nullable();
			$table->string('item_description','255')->nullable();
			$table->string('item_model', '64')->nullable();
			$table->string('country_of_origin', '32')->nullable();
			$table->bigInteger('tos_id')->nullable();
			$table->string('tos_uuid', '36')->nullable();
			$table->string('tos_ref_manual_name', '128')->nullable();
			$table->string('tos_ref_manual_page_no', '32')->nullable();
			$table->string('tos_ref_manual_fig_no', '32')->nullable();
			$table->string('tos_ref_manual_code_no', '32')->nullable();
			$table->string('tos_ref_manual_index', '128')->nullable();
			$table->text('tos_ref_description')->nullable();
			$table->string('ph_svc_flt_ri', '32')->nullable();
			$table->string('ph_svc_jet_store', '32')->nullable();
			$table->bigInteger('ph_svc_store_id')->nullable();
			$table->string('ph_svc_store_name', '32')->nullable();
			$table->string('ph_svc_store', '32')->nullable();
			$table->string('ph_unsvc_flt_ri', '32')->nullable();
			$table->string('ph_unsvc_rd', '32')->nullable();
			$table->string('ph_unsvc_rd_store_name', '32')->nullable();
			$table->string('ph_unsvc_ur', '32')->nullable();
			$table->string('ph_unsvc_ur_store_name', '32')->nullable();
			$table->string('ph_unsvc_dr','32')->nullable();
			$table->string('ph_unsvc_dr_store_name', '32')->nullable();
			$table->string('total_svc_unsvc', '32')->nullable();
			$table->string('contracted_for_repair_rd', '128')->nullable();
			$table->string('consumption1', '32')->nullable();
			$table->string('consumption1_fin_year', '16')->nullable();
			$table->string('consumption5', '32')->nullable();
			$table->string('consumption5_fin_year', '16')->nullable();
			$table->string('contract1', '32')->nullable();
			$table->string('contract1_year', '16')->nullable();
			$table->string('contract2', '32')->nullable();
			$table->string('contract2_year', '16')->nullable();
			$table->string('dmd_in_last_year', '32')->nullable();
			$table->string('last_fin_year', '16')->nullable();
			$table->string('dmd_in_current_year', '32')->nullable();
			$table->string('current_fin_year', '16')->nullable();
			$table->bigInteger('eqpt_class_id')->nullable();
			$table->string('eqpt_class_uuid', '36')->nullable();
			$table->string('eqpt_class_name', '16')->nullable();
			$table->bigInteger('trade_id')->nullable();
			$table->string('trade_uuid', '36')->nullable();
			$table->string('trade_name', '32')->nullable();
			$table->bigInteger('eqpt_type_id')->nullable();
			$table->string('eqpt_type_uuid', '36')->nullable();
			$table->string('eqpt_type_name', '32')->nullable();
			$table->bigInteger('aircraft_id')->nullable();
			$table->string('aircraft_uuid', '36')->nullable();
			$table->string('aircraft_name', '32')->nullable();
			$table->string('estb_in_toe', '255')->nullable();
			$table->string('qty_dmd_by_base_unit', '32')->nullable();
			$table->string('final_qty', '32')->nullable();
			$table->string('recom_oic_qty', '32')->nullable();
			$table->string('recom_oic_info', '128')->nullable();
			$table->string('recom_oic_updated_at', '32')->nullable();
			$table->string('recom_oc_qty', '32')->nullable();
			$table->string('recom_oc_info', '128')->nullable();
			$table->string('recom_oc_reason', '128')->nullable();
			$table->string('recom_oc_updated_at', '32')->nullable();
			$table->string('recom_dte_qty', '32')->nullable();
			$table->string('recom_dte_total_cost', '64')->nullable();
			$table->string('recom_dte_reason', '255')->nullable();
			$table->string('recom_dte_updated_at', '32')->nullable();
			$table->bigInteger('item_group_id')->nullable();
			$table->string('item_group_uuid', '36')->nullable();
			$table->string('item_group', '32')->nullable();
			$table->string('final_estimated_unit_price', '32')->nullable();
			$table->string('final_estimated_total_cost', '64')->nullable();
			$table->string('contracted_rd', '32')->nullable();
			$table->string('contract3', '32')->nullable();
			$table->string('contract3_year', '16')->nullable();
			$table->string('component_serno', '255')->nullable();
			$table->text('defect')->nullable();
			$table->string('mfg_at', '16')->nullable();
			$table->string('assigned_ops_life', '64')->nullable();
			$table->string('assigned_ops_life_unit', '32')->nullable();
			$table->string('assigned_cal_life', '64')->nullable();
			$table->string('assigned_cal_life_unit', '32')->nullable();
			$table->string('tsn', '64')->nullable();
			$table->string('tbo', '64')->nullable();
			$table->string('tso', '64')->nullable();
			$table->string('rd_at', '32')->nullable();
			$table->string('proposed_for_foreign_repair', '32')->nullable();
			$table->string('cable_route_from', '128')->nullable();
			$table->string('cable_route_to', '128')->nullable();
			$table->string('cable_core', '32')->nullable();
			$table->string('cable_dia', '32')->nullable();
			$table->string('cable_duct', '32')->nullable();
			$table->string('cable_coil', '32')->nullable();
			$table->string('cable_hdd', '32')->nullable();
			$table->string('cable_len_size', '128')->nullable();
			$table->string('total_estb_in_toe', '128')->nullable();
			$table->string('ba_no', '128')->nullable();
			$table->string('economical_life', '128')->nullable();
			$table->string('economical_life_unit', '128')->nullable();
			$table->string('covered_life', '128')->nullable();
			$table->string('covered_life_unit', '32')->nullable();
			$table->string('recom_aoc_qty', '32')->nullable();
			$table->string('ipc', '128')->nullable();
			$table->string('ph_mt_age_flt', '32')->nullable();
			$table->string('ph_mt_tech_store', '32')->nullable();
			$table->string('ph_mt_all_range', '32')->nullable();
			$table->text('specification', '255')->nullable();
			$table->text('reason', '255')->nullable();
			$table->unsignedBigInteger('created_by')->nullable();
			$table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pcm')->dropIfExists('prepcm_demands');
    }
}