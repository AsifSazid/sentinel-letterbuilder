<?php

namespace Sentinel\Letterbuilder\Http\Controllers;

class PreviewController
{
    public function preview($docId)
    {
        if($docId == 1){
            return view('letterbuilder::frontend.notice.preview');
        }elseif($docId == 2){
            return view('letterbuilder::frontend.office_memo.preview');
        }elseif($docId == 3){
            return view('letterbuilder::frontend.circular-sample.preview');
        }elseif($docId == 4){
            return view('letterbuilder::frontend.official-letter.preview');
        }elseif($docId == 5){
            return view('letterbuilder::frontend.informal_note.preview');
        }elseif($docId == 6){
            return view('letterbuilder::frontend.meeting_minutes.preview');
        }elseif($docId == 7){
            return view('letterbuilder::frontend.notification_sample.preview');
        }elseif($docId == 8){
            return view('letterbuilder::frontend.office_order_sample.preview');
        }elseif($docId == 9){
            return view('letterbuilder::frontend.semi_govt_letter_sample.preview');
        }
    }

    public function webPreview($docId){
        if($docId == 1){
            return view('letterbuilder::frontend.notice.web-preview');
        }elseif($docId == 2){
            return view('letterbuilder::frontend.office-memo.web-preview');
        }elseif($docId == 3){
            return view('letterbuilder::frontend.circular-sample.web-preview');
        }elseif($docId == 4){
            return view('letterbuilder::frontend.official-letter.web-preview');
        }elseif($docId == 5){
            return view('letterbuilder::frontend.unofficial-note.web-preview');
        }elseif($docId == 6){
            return view('letterbuilder::frontend.meeting-minutes.web-preview');
        }elseif($docId == 7){
            return view('letterbuilder::frontend.notification-sample.web-preview');
        }elseif($docId == 8){
            return view('letterbuilder::frontend.office-order.web-preview');
        }elseif($docId == 9){
            return view('letterbuilder::frontend.semi-govt-letter-sample.web-preview');
        }
    }

    public function bnWebPreview($docId){
        if($docId == 1){
            return view('letterbuilder::frontend.notice.bn.web-preview');
        }elseif($docId == 2){
            return view('letterbuilder::frontend.office-memo.bn.web-preview');
        }elseif($docId == 3){
            return view('letterbuilder::frontend.circular-sample.bn.web-preview');
        }elseif($docId == 4){
            return view('letterbuilder::frontend.official-letter.bn.web-preview');
        }elseif($docId == 5){
            return view('letterbuilder::frontend.unofficial-note.bn.web-preview');
        }elseif($docId == 6){
            return view('letterbuilder::frontend.meeting-minutes.bn.web-preview');
        }elseif($docId == 7){
            return view('letterbuilder::frontend.notification-sample.bn.web-preview');
        }elseif($docId == 8){
            return view('letterbuilder::frontend.office-order.bn.web-preview');
        }elseif($docId == 9){
            return view('letterbuilder::frontend.semi-govt-letter-sample.bn.web-preview');
        }
    }

    public function detailsView($docId)
    {
        if($docId == 1){
            $doc = $this->get_detail_infos();
            $doc['doc_name'] = "Notice";
            $doc['doc_id'] = "1";
            return view('letterbuilder::frontend.details', compact('doc'));
        }elseif($docId == 2){
            $doc = $this->get_detail_infos();
            $doc['doc_name'] = "Office Memo";
            $doc['doc_id'] = "2";
            return view('letterbuilder::frontend.details', compact('doc'));
        }elseif($docId == 3){
            $doc = $this->get_detail_infos();
            $doc['doc_name'] = "Circular Sample";
            $doc['doc_id'] = "3";
            return view('letterbuilder::frontend.details', compact('doc'));
        }elseif($docId == 4){
            $doc = $this->get_detail_infos();
            $doc['doc_name'] = "Government Letter Sample";
            $doc['doc_id'] = "4";
            return view('letterbuilder::frontend.details', compact('doc'));
        }elseif($docId == 5){
            $doc = $this->get_detail_infos();
            $doc['doc_name'] = "Unofficial Note";
            $doc['doc_id'] = "5";
            return view('letterbuilder::frontend.details', compact('doc'));
        }elseif($docId == 6){
            $doc = $this->get_detail_infos();
            $doc['doc_name'] = "Meeting Minutes";
            $doc['doc_id'] = "6";
            return view('letterbuilder::frontend.details', compact('doc'));
        }elseif($docId == 7){
            $doc = $this->get_detail_infos();
            $doc['doc_name'] = "Notification Sample";
            $doc['doc_id'] = "7";
            return view('letterbuilder::frontend.details', compact('doc'));
        }elseif($docId == 8){
            $doc = $this->get_detail_infos();
            $doc['doc_name'] = "Office Order";
            $doc['doc_id'] = "8";
            return view('letterbuilder::frontend.details', compact('doc'));
        }elseif($docId == 9){
            $doc = $this->get_detail_infos();
            $doc['doc_name'] = "Semi Govt Letter Sample";
            $doc['doc_id'] = "9";
            return view('letterbuilder::frontend.details', compact('doc'));
        }
    }

    public function detailsViewBn($docId)
    {
        if($docId == 1){
            $doc = $this->get_detail_infos_bn();
            $doc['doc_name'] = "Notice";
            $doc['doc_name_bn'] = "নোটিশ";
            $doc['doc_id'] = "1";
            return view('letterbuilder::frontend.bn.details', compact('doc'));
        }elseif($docId == 2){
            $doc = $this->get_detail_infos_bn();
            $doc['doc_name'] = "Office Memo";
            $doc['doc_name_bn'] = "অফিস স্মারক";
            $doc['doc_id'] = "2";
            return view('letterbuilder::frontend.bn.details', compact('doc'));
        }elseif($docId == 3){
            $doc = $this->get_detail_infos_bn();
            $doc['doc_name'] = "Circular Sample";
            $doc['doc_name_bn'] = "পরিপত্রের নমুনা";
            $doc['doc_id'] = "3";
            return view('letterbuilder::frontend.bn.details', compact('doc'));
        }elseif($docId == 4){
            $doc = $this->get_detail_infos_bn();
            $doc['doc_name'] = "Government Letter Sample";
            $doc['doc_name_bn'] = "সরকারি পত্রের নমুনা";
            $doc['doc_id'] = "4";
            return view('letterbuilder::frontend.bn.details', compact('doc'));
        }elseif($docId == 5){
            $doc = $this->get_detail_infos_bn();
            $doc['doc_name'] = "Unofficial Note";
            $doc['doc_name_bn'] = "অনানুষ্ঠানিক নোট";
            $doc['doc_id'] = "5";
            return view('letterbuilder::frontend.bn.details', compact('doc'));
        }elseif($docId == 6){
            $doc = $this->get_detail_infos_bn();
            $doc['doc_name'] = "Meeting Minutes";
            $doc['doc_name_bn'] = "সভার কার্যবিবরণী";
            $doc['doc_id'] = "6";
            return view('letterbuilder::frontend.bn.details', compact('doc'));
        }elseif($docId == 7){
            $doc = $this->get_detail_infos_bn();
            $doc['doc_name'] = "Notification Sample";
            $doc['doc_name_bn'] = "প্রজ্ঞাপনের নমুনা";
            $doc['doc_id'] = "7";
            return view('letterbuilder::frontend.bn.details', compact('doc'));
        }elseif($docId == 8){
            $doc = $this->get_detail_infos_bn();
            $doc['doc_name'] = "Office Order";
            $doc['doc_name_bn'] = "অফিস আদেশের নমুনা";
            $doc['doc_id'] = "8";
            return view('letterbuilder::frontend.bn.details', compact('doc'));
        }elseif($docId == 9){
            $doc = $this->get_detail_infos_bn();
            $doc['doc_name'] = "Semi Govt Letter Sample";
            $doc['doc_name_bn'] = "আধা-সরকারি পত্রের নমুনা";
            $doc['doc_id'] = "9";
            return view('letterbuilder::frontend.bn.details', compact('doc'));
        }
    }

    public function get_detail_infos(){
        $doc = [];
            $docName = '';
            $features = [
                '1' => "Built on top of Vue JS 3.x with Vite JS compitible",
                '2' => "Built on top of Vue JS 3.x with Vite JS compitible",
                '3' => "Built on top of Vue JS 3.x with Vite JS compitible",
                '4' => "Built on top of Vue JS 3.x with Vite JS compitible",
                '5' => "Built on top of Vue JS 3.x with Vite JS compitible",
            ];
            $versionDetails = [
                "last update" => "8 November 2023",
                "published" => "2 June 2020",
            ];
            $technologies = [
                "1" => "html",
                "2" => "css",
                "3" => "js",
                "4" => "html",
                "5" => "css",
                "6" => "js",
            ];
            $changeLogs = [
                "Initial Release" => "Version 1.0 - Dec 30, 2023"
            ];
            $doc = [
                "doc_name" => $docName, 
                "features" => $features, 
                "version_details" => $versionDetails, 
                "technologies" => $technologies, 
                "change_logs" => $changeLogs
            ];
            return $doc;
    }

    public function get_detail_infos_bn(){
        $doc = [];
            $docName = '';
            $features = [
                '1' => "Built on top of Vue JS 3.x with Vite JS compitible",
                '2' => "Built on top of Vue JS 3.x with Vite JS compitible",
                '3' => "Built on top of Vue JS 3.x with Vite JS compitible",
                '4' => "Built on top of Vue JS 3.x with Vite JS compitible",
                '5' => "Built on top of Vue JS 3.x with Vite JS compitible",
            ];
            $versionDetails = [
                "last update" => "8 November 2023",
                "published" => "2 June 2020",
            ];
            $technologies = [
                "1" => "html",
                "2" => "css",
                "3" => "js",
                "4" => "html",
                "5" => "css",
                "6" => "js",
            ];
            $changeLogs = [
                "Initial Release" => "Version 1.0 - Dec 30, 2023"
            ];
            $doc = [
                "doc_name" => $docName, 
                "features" => $features, 
                "version_details" => $versionDetails, 
                "technologies" => $technologies, 
                "change_logs" => $changeLogs
            ];
            return $doc;
    }
}
