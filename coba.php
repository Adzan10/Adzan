<?php
$employeeData = '{   
	"nim": 15.01.53.0004,    
	"nama": "Mohammad_Adzan",    
	"phone": "089683485709",    
	"matkul": "web_service",
	"consultant": false
}';
$obj = json_decode($employeeData);
echo $obj->{'nama'};
?>