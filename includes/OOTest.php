<?php
	require('OOTest1.php');

	$concert= new concert('111');
    $concert->setName('Nepathya');
    $concert->setDestination('Pokhara');

	print "Band_id: ".$concert->getID();
	print '<br/>';
	print "BandName: " .$concert->getName();
    echo "<br/>";
    print "Destination: " .$concert->getDestination();
	echo "<br/>";
	$concert->run();

    echo '<br/><br/>';
    $concert1= new concert('112');
    $concert1->setName('Albatross');
    $concert1->setDestination('Itahari');

	print "Band_id: ".$concert->getID();
	print '<br/>';
	print "BandName: " .$concert->getName();
    echo "<br/>";
    print "Destination: " .$concert->getDestination();
	echo "<br/>";
	$concert->run();

    echo '<br/><br/>';

    $concert2= new concert('113');
    $concert2->setName('The Edge');
    $concert2->setDestination('Dharan');

	print "Band_id: ".$concert->getID();
	print '<br/>';
	print "BandName: " .$concert->getName();
    echo "<br/>";
    print "Destination: " .$concert->getDestination();
	echo "<br/>";
	$concert->run();

    echo '<br/><br/>';

    $concert3= new concert('114');
    $concert3->setName('Krama');
    $concert3->setDestination('Kamalpokhari');

	print "Band_id: ".$concert->getID();
	print '<br/>';
	print "BandName: " .$concert->getName();
    echo "<br/>";
    print "Destination: " .$concert->getDestination();
	echo "<br/>";
	$concert->run();

    echo '<br/><br/>';
    
    $concert4= new concert('115');
    $concert4->setName('The Axe');
    $concert4->setDestination('Dhulikhel');

	print "Band_id: ".$concert->getID();
	print '<br/>';
	print "BandName: " .$concert->getName();
    echo "<br/>";
    print "Destination: " .$concert->getDestination();
	echo "<br/>";
	$concert->run();

    echo '<br/><br/>';

	exit();

	$concert->destruct();  

?>