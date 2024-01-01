<?php

namespace Sentinel\Letterbuilder\Http\Controllers;

class PreviewController
{
    public function preview($docId)
    {
        if($docId == 1){
            return view('letterbuilder::frontend.notice.preview');
        }elseif($docId == 2){
            return view('letterbuilder::frontend.preview.office_memo');
        }elseif($docId == 3){
            return view('letterbuilder::frontend.preview.circular_sample');
        }elseif($docId == 4){
            return view('letterbuilder::frontend.preview.government_letter_sample');
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
            return view('letterbuilder::frontend.web-preview.office_memo');
        }elseif($docId == 3){
            return view('letterbuilder::frontend.web-preview.circular_sample');
        }elseif($docId == 4){
            return view('letterbuilder::frontend.web-preview.government_letter_sample');
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
            return view('letterbuilder::frontend.web-preview.bn.office_memo');
        }elseif($docId == 3){
            return view('letterbuilder::frontend.web-preview.bn.circular_sample');
        }elseif($docId == 4){
            return view('letterbuilder::frontend.web-preview.bn.government_letter_sample');
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
            return view('letterbuilder::frontend.details-page.office_memo');
        }elseif($docId == 3){
            return view('letterbuilder::frontend.details-page.circular_sample');
        }elseif($docId == 4){
            return view('letterbuilder::frontend.details-page.government_letter_sample');
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
            return view('letterbuilder::frontend.bn.details-page.office_memo');
        }elseif($docId == 3){
            return view('letterbuilder::frontend.bn.details-page.circular_sample');
        }elseif($docId == 4){
            return view('letterbuilder::frontend.bn.details-page.government_letter_sample');
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
