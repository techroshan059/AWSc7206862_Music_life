<?php
header("Content-type:text/xml");//Tell browser to expect xml
include('db_connect.php');
$query ="SELECT * FROM Music"; 
$result =mysqli_query($conn, $query) or die ("Error in query: $query. ".mysql_error()); 
//Top of xml file
$_xml ='<?xml version="1.0"?>'; 
$_xml .="<concert>"; 
while($row = mysqli_fetch_array($result)){ 
$_xml .="<Music>"; 
$_xml .="<Band_id>".$row['Band_id']."</Band_id>"; 
$_xml .="<BandName>".$row['BandName']."</BandName>"; 
$_xml .="<Destination>".$row['Destination']."</Destination>"; 
$_xml .="</Music>"; 
} 
$_xml .="</concert>"; 
//Parse and create an xml object using the string
$xmlobj=new SimpleXMLElement($_xml);
//And output
print $xmlobj->asXML();
//or we could write to a file
//$xmlobj->asXML(winerys.xml);
?>