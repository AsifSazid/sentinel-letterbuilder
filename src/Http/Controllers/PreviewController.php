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
            return view('letterbuilder::frontend.notice.details');
        }elseif($docId == 2){
            return view('letterbuilder::frontend.office-memo.details');
        }elseif($docId == 3){
            $doc = [];
            $docName = 'Circular Sample';
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
            $technology = [
                "1" => "html",
                "2" => "css",
                "3" => "js"
            ];
            $changeLog = [
                "Initial Release" => "Version 1.0 - Dec 30, 2023"
            ];
            $doc = [
                "doc_name" => $docName, 
                "features" => $features, 
                "version_details" => $versionDetails, 
                "technology" => $technology, 
                "change_log" => $changeLog
            ];
            return view('letterbuilder::frontend.details', compact('doc'));
        }elseif($docId == 4){
            return view('letterbuilder::frontend.official-letter.details');
        }elseif($docId == 5){
            return view('letterbuilder::frontend.unofficial-note.details');
        }elseif($docId == 6){
            return view('letterbuilder::frontend.meeting-minutes.details');
        }elseif($docId == 7){
            return view('letterbuilder::frontend.notification-sample.details');
        }elseif($docId == 8){
            return view('letterbuilder::frontend.office-order.details');
        }elseif($docId == 9){
            return view('letterbuilder::frontend.semi-govt-letter-sample.details');
        }
    }

    public function detailsViewBn($docId)
    {
        if($docId == 1){
            return view('letterbuilder::frontend.notice.bn.details');
        }elseif($docId == 2){
            return view('letterbuilder::frontend.office_memo.bn.details');
        }elseif($docId == 3){
            return view('letterbuilder::frontend.circular-sample.bn.details');
        }elseif($docId == 4){
            return view('letterbuilder::frontend.official-letter.bn.details');
        }elseif($docId == 5){
            return view('letterbuilder::frontend.unofficial-note.bn.details');
        }elseif($docId == 6){
            return view('letterbuilder::frontend.meeting-minutes.bn.details');
        }elseif($docId == 7){
            return view('letterbuilder::frontend.notification-sample.bn.details');
        }elseif($docId == 8){
            return view('letterbuilder::frontend.office-order.bn.details');
        }elseif($docId == 9){
            return view('letterbuilder::frontend.semi-govt-letter-sample.bn.details');
        }
    }
}
