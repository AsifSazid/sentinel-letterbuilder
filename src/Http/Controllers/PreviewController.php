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
            return view('letterbuilder::frontend.preview.informal_note');
        }elseif($docId == 6){
            return view('letterbuilder::frontend.preview.meeting_minutes');
        }elseif($docId == 7){
            return view('letterbuilder::frontend.preview.notification_sample');
        }elseif($docId == 8){
            return view('letterbuilder::frontend.preview.office_order_sample');
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
            return view('letterbuilder::frontend.web-preview.informal_note');
        }elseif($docId == 6){
            return view('letterbuilder::frontend.web-preview.meeting_minutes');
        }elseif($docId == 7){
            return view('letterbuilder::frontend.web-preview.notification_sample');
        }elseif($docId == 8){
            return view('letterbuilder::frontend.web-preview.office_order_sample');
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
            return view('letterbuilder::frontend.web-preview.bn.informal_note');
        }elseif($docId == 6){
            return view('letterbuilder::frontend.web-preview.bn.meeting_minutes');
        }elseif($docId == 7){
            return view('letterbuilder::frontend.web-preview.bn.notification_sample');
        }elseif($docId == 8){
            return view('letterbuilder::frontend.web-preview.bn.office_order_sample');
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
            return view('letterbuilder::frontend.details-page.informal_note');
        }elseif($docId == 6){
            return view('letterbuilder::frontend.details-page.meeting_minutes');
        }elseif($docId == 7){
            return view('letterbuilder::frontend.details-page.notification_sample');
        }elseif($docId == 8){
            return view('letterbuilder::frontend.details-page.office_order_sample');
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
            return view('letterbuilder::frontend.bn.details-page.informal_note');
        }elseif($docId == 6){
            return view('letterbuilder::frontend.bn.details-page.meeting_minutes');
        }elseif($docId == 7){
            return view('letterbuilder::frontend.bn.details-page.notification_sample');
        }elseif($docId == 8){
            return view('letterbuilder::frontend.bn.details-page.office_order_sample');
        }elseif($docId == 9){
            return view('letterbuilder::frontend.bn.details-page.semi_govt_letter_sample');
        }
    }
}
