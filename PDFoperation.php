<?php
require_once('tcpdf/tcpdf.php');

//インスタンス化
$pdf = new TCPDF();

//新しいページを追加
$pdf->addPage();

//フォントを指定
$pdf->setFont('kozgopromedium', 'B', 10);

//出力内容を作成
$html = <<<EOF
HTML文章
hogehoge
EOF;

//htmlで書かれた内容をPDFに変換する
$pdf->writeHTML($html);

//出力
$pdf->Output('PDFFile');
