<?php

class BiblioSearch {

    private function __construct() {}

    public static function factory() {
        return new BiblioSearch();
    }

    function add_actions() {
        add_action('init', array($this, 'request_handler'));
    }

    function request_handler() {
        if(isset($_REQUEST['action'])) {
            switch($_REQUEST['action']) {
                case 'biblio-search':
                    echo $this->doSearch();
                    exit;
            }
        }
    }

    function doSearch() {

        $retval = array('error' => true, 'html' => '');

        // Search Params ( these appear to be hardset for initial search )
        $page_num_value = 1;
        $page_num = "PageNum_SearchResult=".$page_num_value;

        $sort_value = "Author";
        $sort = "SORT=".$sort_value;

        /* Crit1 is the Author Field */
        $crit1_name = "Crit1_FieldName=Author";
        $crit1_type = "Crit1_FieldType=CHAR";
        $crit1_operator = "Crit1_Operator=CONTAINS";
        $crit1_value = rawurlencode(esc_html($_REQUEST['Crit1_Value']));
        $crit1 = "Crit1_Value=".$crit1_value;
        $author_string = $crit1_name."&".$crit1_type."&".$crit1_operator."&".$crit1;

        /* Crit2 is Publication Year */
        $crit2_name = "Crit2_FieldName=Year_of_Issue";
        $crit2_type = "Crit2_FieldType=INT";
        $crit2_operator_value = rawurlencode(esc_html($_REQUEST['Crit2_Operator']));
        $crit2_operator = "Crit2_Operator=".$crit2_operator_value;
        $crit2_value = rawurlencode(esc_html($_REQUEST['Crit2_Value']));
        $crit2 = "Crit2_Value=".$crit2_value;
        $year_string = $crit2_name."&".$crit2_type."&".$crit2_operator."&".$crit2;

        /* Crit3 is Publication Title */
        $crit3_name = "Crit3_FieldName=Title";
        $crit3_type = "Crit3_FieldType=CHAR";
        $crit3_operator_value = rawurlencode(esc_html($_REQUEST['Crit3_Operator']));
        $crit3_operator = "Crit3_Operator=".$crit3_operator_value;
        $crit3_value = rawurlencode(esc_html($_REQUEST['Crit3_Value']));
        $crit3 = "Crit3_Value=".$crit3_value;
        $title_string = $crit3_name."&".$crit3_type."&".$crit3_operator."&".$crit3;

        /* Crit4 is Journal / Periodical Name */
        $crit4_name = "Crit4_FieldName=Periodical_Name";
        $crit4_type = "Crit4_FieldType=CHAR";
        $crit4_operator_value = rawurlencode(esc_html($_REQUEST['Crit4_Operator']));
        $crit4_operator = "Crit4_Operator=".$crit4_operator_value;
        $crit4_value = rawurlencode(esc_html($_REQUEST['Crit4_Value']));
        $crit4 = "Crit4_Value=".$crit4_value;
        $journal_string = $crit4_name."&".$crit4_type."&".$crit4_operator."&".$crit4;

        /* Crit5 is Key Topic dropdown */
        $crit5_name = "Crit5_FieldName=Keywords";
        $crit5_type = "Crit5_FieldType=CHAR";
        $crit5_operator = "Crit5_Operator=CONTAINS";
        $crit5_value = rawurlencode(esc_html($_REQUEST['Crit5_Value']));
        $crit5 = "Crit5_Value=".$crit5_value;
        $keyword_string = $crit5_name."&".$crit5_type."&".$crit5_operator."&".$crit5;

        $search_url_base = "http://planning.nps.gov/flfo/tax_Result.cfm";
        $search_params = "?".$page_num."&".$sort;
        $search_params .= "&".$author_string; // Add author search params
        $search_params .= "&".$year_string; // Add publication year search params
        $search_params .= "&".$title_string; // Add publication title search params
        $search_params .= "&".$journal_string; // Add journal / periodical title search params
        $search_params .= "&".$keyword_string; // Add keyword search params

        $data = file_get_contents($search_url_base.$search_params);

        if($data) {
            $retval['error'] = false;
            $retval['html'] = $data;
        }        

        return json_encode($retval);

    }

}
BiblioSearch::factory()->add_actions();
