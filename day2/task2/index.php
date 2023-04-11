<?php
session_start(); // start the session
$fileName = "employees.xml";
$fileContent = file_get_contents($fileName);
$doc = new DOMDocument();
$doc->preserveWhiteSpace = false;
$doc->loadXML($fileContent);

$lengthOfElements = $doc->getElementsByTagName("employee")->length;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["action"] === "insert") {
        $newEmp = $doc->createElement('employee');

        $empName = $doc->createElement('name');
        $empName_text = $doc->createTextNode($_POST['name']);
        $empName->appendChild($empName_text);

        $empEmail = $doc->createElement('email');
        $empEmail_text = $doc->createTextNode($_POST['email']);
        $empEmail->appendChild($empEmail_text);

        $empPhone = $doc->createElement('phone');
        $empPhone_text = $doc->createTextNode($_POST['phone']);
        $empPhone->appendChild($empPhone_text);

        $empAddress = $doc->createElement('address');
        $empAddress_text = $doc->createTextNode($_POST['address']);
        $empAddress->appendChild($empAddress_text);

        $newEmp->append($empName, $empEmail, $empPhone, $empAddress);

        $root = $doc->documentElement;
        $root->appendChild($newEmp);

        // Save
        $doc->save($fileName);
    }
    $index = $_SESSION["employeeSession"];
    if ($_POST["action"] === "next" && $index < $lengthOfElements-1) {
        $_SESSION["employeeSession"] += 1;
    }

    if ($_POST["action"] === "prev" && $index > 0) {
        $_SESSION["employeeSession"] -= 1;
    }
}



$index = $_SESSION["employeeSession"];
$employees = $doc->documentElement;
$employee = $employees->childNodes[$index];
$name = $employee->childNodes[0]->nodeValue;
$email = $employee->childNodes[1]->nodeValue;
$phone = $employee->childNodes[2]->nodeValue;
$address = $employee->childNodes[3]->nodeValue;

require_once("views/form.php");