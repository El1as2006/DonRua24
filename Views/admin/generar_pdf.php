<?php

require "../../fpdf/fpdf.php";
require "../../funcs/conexion.php";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    ob_start();

    $formulario = $_POST["formulario"];
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 14);

    if ($formulario == "admisiones") {
        $sql = "SELECT * FROM admisiones";
        $result = $conn->query($sql);

        $pdf->Cell(0, 10, 'Lista de Aspirantes', 0, 1, 'C');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->SetFillColor(200, 220, 255);
        $pdf->Cell(8, 10, 'ID', 1, 0, 'C', true);
        $pdf->Cell(38, 10, 'Nombre', 1, 0, 'C', true);
        $pdf->Cell(15, 10, 'Edad', 1, 0, 'C', true);
        $pdf->Cell(18, 10, 'Sexo', 1, 0, 'C', true);
        $pdf->Cell(30, 10, 'Nacionalidad', 1, 0, 'C', true);
        $pdf->Cell(30, 10, 'Telefono', 1, 0, 'C', true);
        $pdf->Cell(50, 10, 'Correo', 1, 1, 'C', true);

        $pdf->SetFont('Arial', '', 10);
        while ($row = $result->fetch_assoc()) {
            $pdf->Cell(8, 10, $row['id_admision'], 1);
            $pdf->Cell( 38, 10, mb_convert_encoding($row['nombre'], 'ISO-8859-1', 'UTF-8'), 1);
            $pdf->Cell(15, 10, $row['edad'], 1);
            $pdf->Cell(18, 10, ($row['sexo']), 1);
            $pdf->Cell(30, 10, ($row['nacionalidad']), 1);
            $pdf->Cell(30, 10, $row['tel_contacto'], 1);
            $pdf->Cell(50, 10, $row['correo'], 1, 1);
        }

    } elseif ($formulario == "contactos") {
        $sql = "SELECT * FROM mensajes";
        $result = $conn->query($sql);

        $pdf->Cell(0, 10, 'Lista de Contactos', 0, 1, 'C');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->SetFillColor(200, 220, 255);
        $pdf->Cell(8, 10, 'ID', 1, 0, 'C', true);
        $pdf->Cell(38, 10, 'Nombre', 1, 0, 'C', true);
        $pdf->Cell(30, 10, 'Telefono', 1, 0, 'C', true);
        $pdf->Cell(48, 10, 'Correo', 1, 1, 'C', true);
        $pdf->Cell(50, 10, 'Mensaje', 1, 1, 'C', true);

        $pdf->SetFont('Arial', '', 10);
        while ($row = $result->fetch_assoc()) {
            $pdf->Cell(8, 10, $row['id_mensaje'], 1);
            $pdf->Cell(38, 10, mb_convert_encoding($row['nombre'], 'ISO-8859-1', 'UTF-8'), 1);
            $pdf->Cell(30, 10, $row['numero'], 1);
            $pdf->Cell(48, 10, $row['correo'], 1, 1);
            $pdf->Cell(50, 10, $row['mensaje'], 1, 1);
        }

    } else {
        echo "Formulario no reconocido.";
        exit();
    }

    ob_end_clean();
    $pdf->Output('I', 'reporte.pdf');
    exit();
}