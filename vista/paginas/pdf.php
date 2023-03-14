
<?php
$mi_pdf = 'Documentos/APA_proyecto.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="'.$mi_pdf.'"');
readfile($mi_pdf);
?>