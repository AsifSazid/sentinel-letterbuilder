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
            return view('letterbuilder::frontend.circular_sample.preview');
        }elseif($docId == 4){
            return view('letterbuilder::frontend.government_letter_sample.preview');
        }elseif($docId == 5){
            return view('letterbuilder::frontend.informal_note.preview');
        }elseif($docId == 6){
            return view('letterbuilder::frontend.meeting_minutes.preview');
        }elseif($docId == 7){
            return view('letterbuilder::frontend.notification_sample.preview');
        }elseif($docId == 8){
            return view('letterbuilder::frontend.office_order_sample.preview');
        }elseif($docId == 9){
            return view('letterbuilder::frontend.preview.semi_govt_letter_sample');
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
            return view('letterbuilder::frontend.government-letter-sample.web-preview');
        }elseif($docId == 5){
            return view('letterbuilder::frontend.informal-note.web-preview');
        }elseif($docId == 6){
            return view('letterbuilder::frontend.meeting-minutes.web-preview');
        }elseif($docId == 7){
            return view('letterbuilder::frontend.notification-sample.web-preview');
        }elseif($docId == 8){
            return view('letterbuilder::frontend.office-order-sample.web-preview');
        }elseif($docId == 9){
            return view('letterbuilder::frontend.web-preview.semi_govt_letter_sample');
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
            return view('letterbuilder::frontend.government-letter-sample.bn.web-preview');
        }elseif($docId == 5){
            return view('letterbuilder::frontend.informal-note.bn.web-preview');
        }elseif($docId == 6){
            return view('letterbuilder::frontend.meeting-minutes.bn.web-preview');
        }elseif($docId == 7){
            return view('letterbuilder::frontend.notification-sample.bn.web-preview');
        }elseif($docId == 8){
            return view('letterbuilder::frontend.office-order-sample.bn.web-preview');
        }elseif($docId == 9){
            return view('letterbuilder::frontend.web-preview.bn.semi_govt_letter_sample');
        }
    }

    public function detailsView($docId)
    {
        if($docId == 1){
            return view('letterbuilder::frontend.notice.details');
        }elseif($docId == 2){
            return view('letterbuilder::frontend.office-memo.details');
        }elseif($docId == 3){
            return view('letterbuilder::frontend.circular-sample.details');
        }elseif($docId == 4){
            return view('letterbuilder::frontend.government-letter-sample.details');
        }elseif($docId == 5){
            return view('letterbuilder::frontend.informal-note.details');
        }elseif($docId == 6){
            return view('letterbuilder::frontend.meeting-minutes.details');
        }elseif($docId == 7){
            return view('letterbuilder::frontend.notification-sample.details');
        }elseif($docId == 8){
            return view('letterbuilder::frontend.office-order-sample.details');
        }elseif($docId == 9){
            return view('letterbuilder::frontend.details-page.semi_govt_letter_sample');
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
            return view('letterbuilder::frontend.government-letter-sample.bn.details');
        }elseif($docId == 5){
            return view('letterbuilder::frontend.informal-note.bn.details');
        }elseif($docId == 6){
            return view('letterbuilder::frontend.meeting-minutes.bn.details');
        }elseif($docId == 7){
            return view('letterbuilder::frontend.notification-sample.bn.details');
        }elseif($docId == 8){
            return view('letterbuilder::frontend.office-order-sample.bn.details');
        }elseif($docId == 9){
            return view('letterbuilder::frontend.bn.details-page.semi_govt_letter_sample');
        }
    }
}
