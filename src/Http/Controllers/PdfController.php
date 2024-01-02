<?php

namespace Sentinel\Letterbuilder\Http\Controllers;

class PdfController
{
    public function downloadPdf($docId)
    {
        $pathOrName = $this->pathFinder($docId);


        $preview = view('letterbuilder::frontend.'.$pathOrName.'.pdf');
        $mpdf = new \Mpdf\Mpdf(['format' => 'A4-P']);




        $mpdf->autoScriptToLang = true;
        $mpdf->autoLangToFont   = true;
        // $mpdf->SetHTMLHeader("<p style='text-align: center; font-size: 12px; color: #444; text-transform: uppercase;'>Restricted</p>");
        // $mpdf->SetHTMLFooter('
        //     <table style="width: 100%; padding-left: 4%; padding-right: 4%;">
        //         <tr>
        //             <td colspan="3" style="width: 35%; font-size: 10px; text-align: center;"><p style="text-align: center;"><br>{PAGENO} of {nbpg}</p></td>
        //         </tr>
        //         <tr>
        //             <td style="width: 35%; font-size: 10px;"><i>This Document is Generated by AIMS.</i></td>
        //             <td style="width: 35%; font-size: 12px; text-align: center;"><p style="color: #444; text-transform: uppercase;">Restricted</p></td>
        //             <td style="width: 35%; font-size: 10px; text-align:right"><i>Generated At: '.$generatedTime.'</i></td>
        //         </tr>
        //     </table>');

        $mpdf->WriteHTML($preview);
        $mpdf->Output($pathOrName. '-'. ".pdf", "I");
    }

    private function pathFinder($docId)
    {
        if($docId == 1){
            return "notice";
        }elseif($docId == 2){
            return "office-memo";
        }elseif($docId == 3){
            return "circular-sample";
        }elseif($docId == 4){
            return "government-letter-sample";
        }elseif($docId == 5){
            return "informal-note";
        }elseif($docId == 6){
            return "meeting-minutes";
        }elseif($docId == 7){
            return "notification-sample";
        }elseif($docId == 8){
            return "office-order-sample";
        }elseif($docId == 9){
            return "semi-govt-letter-sample";
        }
    }
}
