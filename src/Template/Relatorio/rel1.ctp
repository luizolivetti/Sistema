<?php
/**
 * Montagem
 */
$pdf->AddPage('L');
$pdf->SetFont("Arial", '', 6.7);

/*
 * Cabecalho
 */
$pdf->cabecalho($sistema, $titulo, $subtitulo);

/**
 * Corpo
 */
$pdf->corpo($colunas, $dados);

/**
 * Rodape
 */
$pdf->rodape();

$pdf->Output('parcial'.date('dmYhms').'.pdf', 'I');
$pdf->Output('parcial'.date('dmYhms').'.pdf', 'D');

// -----------------------------