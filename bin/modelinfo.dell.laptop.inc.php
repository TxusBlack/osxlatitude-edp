<?
 
global $modeldb; 
$modeldb = array(
					//This one have to be empty, its used for when we do custom builds...
					array( 	name 			=> "", 
                      		desc 			=> "",
                      		nullcpu 		=> "",
                      		sleepEnabler 	=> "",                      		
                      		ps2pack 		=> "",
                      		emulatedST 		=> "",                      		
                      		tscsync 		=> "",                      		
                      		batteryKext		=> "1",
                      		loadIOATAFamily	=> "",
                      		loadNatit		=> "yes",
                      		useACPIfix		=> "yes",
                      		patchCPU		=> "",
                      		ethernet		=> "",
                      		audiopack		=> "1",
                      		supports_sl		=> "",
                      		supports_lion	=> "",
                      		supports_ml		=> "",                      		                      		                      		
                      		customCham 		=> "",                      		
                      		customKernel 	=> ""                      		 
                    ), 	


					array( 	name 			=> "Dell_Latitude_13",
                      		desc 			=> "Dell Latitude 13",
                      		nullcpu 		=> "yes",
                      		sleepEnabler 	=> "yes",                      		
                      		ps2pack 		=> "0",
                      		emulatedST 		=> "yes",                      		
                      		tscsync 		=> "yes",                      		
                      		batteryKext		=> "0",
                      		loadIOATAFamily	=> "no",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",
                      		patchCPU		=> "no",
                      		ethernet		=> "",
                      		audiopack		=> "2",
                      		supports_sl		=> "yes",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "no",                      		                      		                      		
                      		customCham 		=> "",                      		
                      		customKernel 	=> ""                     		 
                    ),
                    
					array( 	name 			=> "Dell_Latitude_D4x0",
                      		desc 			=> "Dell Latitude D420 Single core",
                      		type			=> "alias",                          		
                      		nullcpu 		=> "yes",
                      		sleepEnabler 	=> "yes",                      		
                      		ps2pack 		=> "2",
                      		emulatedST 		=> "yes",                      		
                      		tscsync 		=> "yes",                      		
                      		batteryKext		=> "1",
                      		loadIOATAFamily	=> "",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",                      		
                      		ethernet		=> "AppleBCM5751Ethernet.kext",
                      		audiopack		=> "2", 
                      		supports_sl		=> "yes",
                      		supports_lion	=> "no",
                      		supports_ml		=> "no",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                     		 
                    ),
                    					
					array( 	name 			=> "Dell_Latitude_D4x0", 
                      		desc 			=> "Dell Latitude D420 & D430 - Dual core models",
                      		nullcpu 		=> "yes",
                      		sleepEnabler 	=> "yes",                      		
                      		ps2pack 		=> "2",
                      		emulatedST 		=> "yes",                      		
                      		tscsync 		=> "yes",                      		
                      		batteryKext		=> "1",
                      		loadIOATAFamily	=> "",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",                      		
                      		ethernet		=> "AppleBCM5751Ethernet.kext",
                      		audiopack		=> "2",                      		
                      		supports_sl		=> "yes",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "no",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                     		 
                    ),
                    
                    
					array( 	name 			=> "Dell_Latitude_D520", 
                      		desc 			=> "Dell Latitude D520",
                      		nullcpu 		=> "yes",
                      		sleepEnabler 	=> "yes",                      		
                      		ps2pack 		=> "2",
                      		emulatedST 		=> "yes",                      		
                      		tscsync 		=> "yes",                      		
                      		batteryKext		=> "0",
                      		loadIOATAFamily	=> "",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",                      		
                      		ethernet		=> "AppleBCM440XEthernet.kext	",
                      		audiopack		=> "2",                      		                      		
                      		supports_sl		=> "yes",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "no",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                      		 
                    ),
                    
 
 					array( 	name 			=> "Dell_Latitude_D530", 
                      		desc 			=> "Dell Latitude D530",
                      		nullcpu 		=> "yes",
                      		sleepEnabler 	=> "yes",                      		
                      		ps2pack 		=> "2",
                      		emulatedST 		=> "yes",                      		
                      		tscsync 		=> "yes",                      		
                      		batteryKext		=> "0",
                      		loadIOATAFamily	=> "",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",                      		
                      		ethernet		=> "AppleBCM5751Ethernet.kext",
                      		audiopack		=> "2",                      		                      		
                      		supports_sl		=> "yes",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "no",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                      		 
                    ),
                                       
               		array( 	name 			=> "Dell_Latitude_D620-intel", 
                      		desc 			=> "Dell Latitude D620, Intel GMA950 graphics (1280x800)",
                      		nullcpu 		=> "no",
                      		sleepEnabler 	=> "no",                      		
                      		ps2pack 		=> "4",
                      		emulatedST 		=> "yes",                      		
                      		tscsync 		=> "yes",                      		
                      		batteryKext		=> "1",
                      		loadIOATAFamily	=> "",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",                      		
                      		ethernet		=> "AppleBCM5751Ethernet.kext",
                      		audiopack		=> "2",                      		                       		
                      		supports_sl		=> "yes",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "no",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                     		 
                    ),
                    
                    array( 	name 			=> "Dell_Latitude_D620-intel-high", 
                      		desc 			=> "Dell Latitude D620, Intel GMA950 graphics (1440x900)",
                      		nullcpu 		=> "no",
                      		sleepEnabler 	=> "no",                      		
                      		ps2pack 		=> "4",
                      		emulatedST 		=> "yes",                      		
                      		tscsync 		=> "yes",                      		
                      		batteryKext		=> "1",
                      		loadIOATAFamily	=> "",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",                      		
                      		ethernet		=> "AppleBCM5751Ethernet.kext",
                      		audiopack		=> "2",                      		                       		
                      		supports_sl		=> "yes",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "no",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                     		 
                    ),
                    
                	array( 	name 			=> "Dell_Latitude_D620-nvidia", 
                      		desc 			=> "Dell Latitude D620, Nvidia graphics card",
                      		nullcpu 		=> "no",
                      		sleepEnabler 	=> "no",                      		
                      		ps2pack 		=> "4",
                      		emulatedST 		=> "yes",                      		
                      		tscsync 		=> "yes",                      		
                      		batteryKext		=> "0",
                      		loadIOATAFamily	=> "",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",                      		
                      		ethernet		=> "AppleBCM5751Ethernet.kext",
                      		audiopack		=> "2",                      		                      		
                      		supports_sl		=> "yes",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "no",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                      		 
                    ),

               		array( 	name 			=> "Dell_Latitude_D630-intel", 
                      		desc 			=> "Dell Latitude D630, Intel x3100 graphics (1280x800)",
                      		nullcpu 		=> "yes",
                      		sleepEnabler 	=> "yes",                      		
                      		ps2pack 		=> "4",
                      		emulatedST 		=> "yes",                      		
                      		tscsync 		=> "yes",                      		
                      		batteryKext		=> "0",
                      		loadIOATAFamily	=> "yes",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",                      		                    
                      		ethernet		=> "BCM5722D.kext",
                      		audiopack		=> "4",                      		                      		
                      		supports_sl		=> "yes",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "no",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                      		 
                    ),

               		array( 	name 			=> "Dell_Latitude_D630-intel2", 
                      		desc 			=> "Dell Latitude D630, Intel x3100 graphics (1440x900)",
                      		nullcpu 		=> "yes",
                      		sleepEnabler 	=> "yes",                      		
                      		ps2pack 		=> "4",
                      		emulatedST 		=> "yes",                      		
                      		tscsync 		=> "yes",                      		
                      		batteryKext		=> "0",
                      		loadIOATAFamily	=> "yes",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",                     		
                      		ethernet		=> "BCM5722D.kext",
                      		audiopack		=> "4",                      		                      		
                      		supports_sl		=> "yes",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "no",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                      		 
                    ),
                                        
                	array( 	name 			=> "Dell_Latitude_D630-nvidia", 
                      		desc 			=> "Dell Latitude D630, nvidia graphics card",
                      		nullcpu 		=> "yes",
                      		sleepEnabler 	=> "yes",                      		
                      		ps2pack 		=> "4",
                      		emulatedST 		=> "yes",                      		
                      		tscsync 		=> "yes",                      		
                      		batteryKext		=> "0",
                      		loadIOATAFamily	=> "yes",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",                     		
                      		ethernet		=> "BCM5722D.kext",
                      		audiopack		=> "4",                      		                      		
                      		supports_sl		=> "yes",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "yes",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                     		 
                    ),
                    

               		array( 	name 			=> "Dell_Latitude_D820-intel", 
                      		desc 			=> "Dell Latitude D820, Intel x3100 graphics card",
                      		nullcpu 		=> "yes",
                      		sleepEnabler 	=> "yes",                      		
                      		ps2pack 		=> "4",
                      		emulatedST 		=> "yes",                      		
                      		tscsync 		=> "yes",                      		
                      		batteryKext		=> "0",
                      		loadIOATAFamily	=> "",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",                      		                    		
                      		ethernet		=> "AppleBCM5751Ethernet.kext",
                      		audiopack		=> "1",                      		                      		
                      		supports_sl		=> "yes",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "no",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                      		 
                    ),
                    
                	array( 	name 			=> "Dell_Latitude_D820-nvidia", 
                      		desc 			=> "Dell Latitude D820, Nvidia graphics card",
                      		nullcpu 		=> "yes",
                      		sleepEnabler 	=> "yes",                      		
                      		ps2pack 		=> "4",
                      		emulatedST 		=> "yes",                      		
                      		tscsync 		=> "yes",                      		
                      		batteryKext		=> "0",
                      		loadIOATAFamily	=> "",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",                      		
                      		ethernet		=> "AppleBCM5751Ethernet.kext",
                      		audiopack		=> "1",                      		                      		
                      		supports_sl		=> "yes",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "yes",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                     		 
                    ),
                     
                    
               		array( 	name 			=> "Dell_Latitude_D830-intel", 
                      		desc 			=> "Dell Latitude D830, Intel x3100 graphics card",
                      		nullcpu 		=> "yes",
                      		sleepEnabler 	=> "yes",                      		
                      		ps2pack 		=> "4",
                      		emulatedST 		=> "yes",                      		
                      		tscsync 		=> "yes",                      		
                      		batteryKext		=> "0",
                      		loadIOATAFamily	=> "",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",                      		
                      		ethernet		=> "BCM5722D.kext",
                      		audiopack		=> "5",                      		                      		
                      		supports_sl		=> "yes",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "no",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                      		 
                    ),
                    
               		array( 	name 			=> "Dell_Latitude_D830-intel2", 
                      		desc 			=> "Dell Latitude D830, Intel x3100 graphics card (1920x1200 model)",
                      		nullcpu 		=> "yes",
                      		sleepEnabler 	=> "yes",                      		
                      		ps2pack 		=> "4",
                      		emulatedST 		=> "yes",                      		
                      		tscsync 		=> "yes",                      		
                      		batteryKext		=> "0",
                      		loadIOATAFamily	=> "yes",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes", 
                      		ethernet		=> "BCM5722D.kext",
                      		audiopack		=> "5",                      		                      		
                      		supports_sl		=> "yes",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "no",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                      		 
                    ),
                                        
                	array( 	name 			=> "Dell_Latitude_D830-nvidia", 
                      		desc 			=> "Dell Latitude D830, Nvidia graphics card",
                      		nullcpu 		=> "yes",
                      		sleepEnabler 	=> "yes",                      		
                      		ps2pack 		=> "4",
                      		emulatedST 		=> "yes",                      		
                      		tscsync 		=> "yes",                      		
                      		batteryKext		=> "0",
                      		loadIOATAFamily	=> "yes",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",
                      		ethernet		=> "BCM5722D.kext",
                      		audiopack		=> "5",                      		                      		
                      		supports_sl		=> "yes",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "yes",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                     		 
                    ),

                	array( 	name 			=> "Dell_Latitude_e4200", 
                      		desc 			=> "Dell Latitude e4200",
                      		nullcpu 		=> "no",
                      		sleepEnabler 	=> "yes",                      		
                      		ps2pack 		=> "2",
                      		emulatedST 		=> "no",                     		
                      		tscsync 		=> "yes",                      		
                      		batteryKext		=> "0",
                      		loadIOATAFamily	=> "",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",                      		
                      		ethernet		=> "Intel82566MM.kext",
                      		audiopack		=> "1",                      		                      		
                      		supports_sl		=> "yes",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "no",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                      		 
                    ),
                    
                	array( 	name 			=> "Dell_Latitude_e6220", 
                      		desc 			=> "Dell Latitude e6220",
                      		nullcpu 		=> "yes",
                      		sleepEnabler 	=> "yes",                      		
                      		ps2pack 		=> "5",
                      		emulatedST 		=> "no",                      		
                      		tscsync 		=> "no",                      		
                      		batteryKext		=> "0",
                      		loadIOATAFamily	=> "no",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",                      		
                      		ethernet		=> "AppleIntelE1000e.kext",
                      		audiopack		=> "1",                      		                      		
                      		supports_sl		=> "no",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "yes",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                      		 
                    ),
                    
                	array( 	name 			=> "Dell_Latitude_e6230", 
                      		desc 			=> "Dell Latitude e6230",
                      		nullcpu 		=> "yes",
                      		sleepEnabler 	=> "yes",                      		
                      		ps2pack 		=> "5",
                      		emulatedST 		=> "no",                      		
                      		tscsync 		=> "no",                      		
                      		batteryKext		=> "0",
                      		loadIOATAFamily	=> "no",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",                      		
                      		ethernet		=> "AppleIntelE1000e.kext",
                      		audiopack		=> "2",                      		                      		
                      		supports_sl		=> "no",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "yes",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                      		 
                    ),
                    
                    
                	array( 	name 			=> "Dell_Latitude_E6400-E6500", 
                      		desc 			=> "Dell Latitude E6400-E6500",
                      		nullcpu 		=> "no",
                      		sleepEnabler 	=> "no",                      		
                      		ps2pack 		=> "",
                      		emulatedST 		=> "no",                      		
                      		tscsync 		=> "no",                      		
                      		batteryKext		=> "0",
                      		loadIOATAFamily	=> "no",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",                      		
                      		ethernet		=> "Intel82566MM.kext",
                      		audiopack		=> "1",                      		                      		
                      		supports_sl		=> "no",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "no",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                      		 
                    ),
                    
                    
                    
                	array( 	name 			=> "Dell_Latitude_D630-nvidia", 
                      		desc 			=> "Dell Precision M2300",
                      		type			=> "alias",
                      		nullcpu 		=> "yes",
                      		sleepEnabler 	=> "yes",                      		
                      		ps2pack 		=> "4",
                      		emulatedST 		=> "yes",                      		
                      		tscsync 		=> "yes",
                      		loadIOATAFamily	=> "",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",                      		                      		
                      		batteryKext		=> "0",
                      		ethernet		=> "",
                      		audiopack		=> "1",                      		                      		
                      		supports_sl		=> "yes",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "yes",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                     		 
                    ),
                          
                	array( 	name 			=> "Dell_Latitude_D820-nvidia", 
                      		desc 			=> "Dell Precision M65",
                      		type			=> "alias",                      		
                      		nullcpu 		=> "yes",
                      		sleepEnabler 	=> "yes",                      		
                      		ps2pack 		=> "4",
                      		emulatedST 		=> "yes",                      		
                      		tscsync 		=> "yes",                      		
                      		batteryKext		=> "0",
                      		loadIOATAFamily	=> "",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",                      		
                      		ethernet		=> "AppleBCM5751Ethernet.kext",
                      		audiopack		=> "1",                      		                      		
                      		supports_sl		=> "yes",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "yes",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                     		 
                    ),                          
                          
                	array( 	name 			=> "Dell_Precision_M4300", 
                      		desc 			=> "Dell Precision M4300",                     		
                      		nullcpu 		=> "yes",
                      		sleepEnabler 	=> "yes",                      		
                      		ps2pack 		=> "4",
                      		emulatedST 		=> "yes",                      		
                      		tscsync 		=> "yes",                      		
                      		batteryKext		=> "0",
                      		loadIOATAFamily	=> "yes",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes", 
                      		ethernet		=> "BCM5722D.kext",
                      		audiopack		=> "1",                      		                      		
                      		supports_sl		=> "yes",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "yes",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                     		 
                    ),                          
                                                       
                	array( 	name 			=> "Dell_Inspiron_9400", 
                      		desc 			=> "Dell Inspiron 9400",
                      		nullcpu 		=> "yes",
                      		sleepEnabler 	=> "no",                      		
                      		ps2pack 		=> "4",
                      		emulatedST 		=> "yes",                      		
                      		tscsync 		=> "yes",                      		
                      		batteryKext		=> "0",
                      		loadIOATAFamily	=> "",
                      		loadNatit		=> "yes",
                      		useACPIfix		=> "yes",
                      		ethernet		=> "AppleBCM440XEthernet.kext",
                      		audiopack		=> "1",                      		                      		
                      		supports_sl		=> "yes",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "yes",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                     		 
                    ),   

                	array( 	name 			=> "Dell_XPS_m1330", 
                      		desc 			=> "Dell xps m1330",
                      		nullcpu 		=> "yes",
                      		sleepEnabler 	=> "no",                      		
                      		ps2pack 		=> "4",
                      		emulatedST 		=> "yes",                      		
                      		tscsync 		=> "yes",                      		
                      		batteryKext		=> "0",
                      		loadIOATAFamily	=> "",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",                      		
                      		ethernet		=> "",
                      		audiopack		=> "1",                      		                      		
                      		supports_sl		=> "yes",
                      		supports_lion	=> "no",
                      		supports_ml		=> "no",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                     		 
                    ),  

  
                    array( 	name 			=> "Dell_Latitude_E6520-intel", 
                      		desc 			=> "Dell Latitude E6520, Intel HD3000 graphics chip",
                      		nullcpu 		=> "yes",
                      		sleepEnabler 	=> "yes",                      		
                      		ps2pack 		=> "8",
                      		emulatedST 		=> "yes",                      		
                      		tscsync 		=> "yes",                      		
                      		batteryKext		=> "0",
                      		loadIOATAFamily	=> "",
                      		loadNatit		=> "no",
                      		useACPIfix		=> "yes",                      		                    		
                      		ethernet		=> "AppleIntelE1000e.kext",
                      		audiopack		=> "8",                      		                      		
                      		supports_sl		=> "yes",
                      		supports_lion	=> "yes",
                      		supports_ml		=> "yes",                      		
                      		customCham 		=> "no",                      		
                      		customKernel 	=> "no"                      		 
                    ),     
                                                                                                                                                                                                    
             );



?>
