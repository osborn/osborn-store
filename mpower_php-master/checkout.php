<?php 

	require 'mpower_php-master/mpower.php';

	MPower_Setup::setMasterKey("4c73bf1a-3e91-4070-9521-a9e9ea1b6b19");
    MPower_Setup::setPublicKey('test_public_j2qnAkSnh97UCOvsU8n94C-uDJc');
    MPower_Setup::setPrivateKey('test_private_Y7fzmxovvSTkaX5p-XDGZhrUEPU');
    MPower_Setup::setMode("test");
    MPower_Setup::setToken('f43f9434d153a0a44506');

    MPower_Checkout_Store::setName("Osborn Store");
    MPower_Checkout_Store::setTagline(" awesome store's awesome tagline");
    MPower_Checkout_Store::setPhoneNumber('0247938174');
    MPower_Checkout_Store::setPostalAddress('1234');

    $co = new MPower_Checkout_Invoice();

    $co->addItem("13' Apple Retina 500 HDD",1,999.99,999.99);
    $co->addItem("Case Logic laptop Bag",2,100.50,201,"Black Color with white stripes");
    $co->addItem("Mordecai's Bag",2,100.50,400);

    $co->setTotalAmount(1200.99);

    $co->setDescription("This is good for packaged pricing tables on your website.");

    

    if($co->create()) {
       header("Location: ". $co->getInvoiceUrl());
    }else{
      echo $co->response_text;
    }

	?>