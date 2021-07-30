
<?php 

require_once 'makecert.php';



$institucion = ["Universidad de Investigacion y Tecnologia Experimental Yachay", "Junta Electoral"];
$persona=['Mateo Lomas', '1004295729'];
$etiquetasPersona=["Hace constar", "Identificado con documento: "];
$certificacion = ["Elecciones estudiantiles"];
$etiquetaCert = ["Certifica que el estudiante ha votado satisfactoriamente, y ha cumplido con su obligacion a cabalidad y pecho"];
$autoridad=["Juan Perez", "Secretario de la Junta Electoral"];
$EtiquetaAutoridad = ["En constancia firma", ''];


$certificado = new CertificatePdf('L', 'mm', 'A4');
$certificado->renderLogo('yachay_verde.png', 10, 10, 60);
$certificado->renderLogo('logomate.png', 200, 10, 80);
$certificado->renderInstitution($institucion);
$certificado->renderCampo($persona, $etiquetasPersona);
$certificado->renderCampo($etiquetaCert, $certificacion);

$certificado->renderAutoridad($autoridad, $EtiquetaAutoridad);
$certificado->Image("firma.png", 10,165,40);

$certificado->Output();





?>
