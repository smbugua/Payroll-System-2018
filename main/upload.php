<?php
    include('header.php');
    require_once 'phpexcel/Classes/PHPExcel.php';
    
    function addComment($object,$cell,$msg) {
        $object->getComment($cell)->setAuthor('Error');
        $object->getComment($cell)->getText()->createTextRun($msg);
    }
    
    $hasError = false;
// Create new PHPExcel object
    $objPHPExcel = PHPExcel_IOFactory::load($_FILES['wagefile']['tmp_name']);
    $highestColumnAsLetters = $objPHPExcel->setActiveSheetIndex(0)->getHighestColumn(); //e.g. 'AK'
    $highestRowNumber = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
    $highestColumnAsLetters++;
    for ($row = 2; $row < $highestRowNumber + 1; $row++) {
        
            $cell = 'A'.$row;
            $name = $objPHPExcel->setActiveSheetIndex(0)->getCell($cell)->getValue();
           
            $cell = 'B'.$row;
            $idno = $objPHPExcel->setActiveSheetIndex(0)->getCell($cell)->getValue();
         
            
            $cell = 'C'.$row;
            $wage = $objPHPExcel->setActiveSheetIndex(0)->getCell($cell)->getValue();
           
            $cell = 'D'.$row;
            $dateadded = $objPHPExcel->setActiveSheetIndex(0)->getCell($cell)->getValue();
            
    }
    if($hasError) {
        ob_end_clean();
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Report.xlsx"');
        header('Cache-Control: max-age=0');
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');
        exit;
    }
    else {
        for ($row = 2; $row < $highestRowNumber + 1; $row++) {
        
           
            $cell = 'A'.$row;
            $name = $objPHPExcel->setActiveSheetIndex(0)->getCell($cell)->getValue();
           
            $cell = 'B'.$row;
            $idno = $objPHPExcel->setActiveSheetIndex(0)->getCell($cell)->getValue();
         
            
            $cell = 'C'.$row;
            $wage = $objPHPExcel->setActiveSheetIndex(0)->getCell($cell)->getValue();
           
            $cell = 'D'.$row;
            $dateadded = $objPHPExcel->setActiveSheetIndex(0)->getCell($cell)->getValue();  
            
        echo "$name <br> $idno <br> $wage <br>$dateadded <br>";
        }
        header("Location: main.php?page=payroll&section=view-wages&alert=success");
    }
    ?>