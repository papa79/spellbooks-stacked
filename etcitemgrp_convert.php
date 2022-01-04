<?php

$spellbooks = array(1047, 1048, 1049, 1050, 1051, 1052, 1053, 1054, 1055, 1056, 1057, 1058, 1059, 1095, 1096, 1097, 1098, 1099, 1150, 1151, 1152, 1294, 1370, 1371, 1372, 1377, 1378, 1379, 1380, 1381, 1382, 1383, 1384, 1385, 1386, 1387, 1388, 1389, 1390, 1391, 1392, 1393, 1394, 1395, 1396, 1397, 1398, 1399, 1400, 1401, 1402, 1403, 1404, 1405, 1406, 1407, 1408, 1409, 1410, 1411, 1412, 1413, 1414, 1415, 1416, 1417, 1418, 1512, 1513, 1514, 1515, 1516, 1517, 1518, 1519, 1520, 1521, 1522, 1523, 1524, 1525, 1526, 1527, 1528, 1529, 1530, 1531, 1532, 1533, 1534, 1535, 1536, 1537, 1667, 1668, 1669, 1670, 1671, 1856, 3038, 3039, 3040, 3041, 3042, 3043, 3044, 3045, 3046, 3047, 3048, 3049, 3050, 3051, 3052, 3053, 3054, 3055, 3056, 3057, 3058, 3059, 3060, 3061, 3062, 3063, 3064, 3065, 3066, 3067, 3068, 3069, 3070, 3071, 3072, 3073, 3074, 3075, 3076, 3077, 3078, 3079, 3080, 3081, 3082, 3083, 3084, 3085, 3086, 3087, 3088, 3089, 3090, 3091, 3092, 3093, 3094, 3095, 3096, 3097, 3098, 3099, 3100, 3101, 3102, 3103, 3104, 3105, 3106, 3107, 3108, 3109, 3110, 3111, 3112, 3113, 3114, 3115, 3116, 3117, 3118, 3429, 3430, 3431, 3432, 3940, 3941, 3942, 3943, 3944, 4200, 4201, 4203, 4204, 4205, 4206, 4207, 4208, 4906, 4907, 4908, 4909, 4910, 4911, 4912, 4913, 4914, 4915, 4916, 4917, 4918, 4919, 4920, 4921, 4922, 4923, 4924, 4925, 4926, 4927, 4928, 4929, 4930, 4931, 4932, 4933, 4934, 4935, 5013, 5014, 5015, 5809, 5810, 5811, 5812, 5813, 5814, 5815, 5816, 6350, 6351, 6352, 6395, 6396, 6397, 6398, 7638, 7639, 7640, 7641, 7642, 7643, 7644, 7645, 7646, 7647, 7648, 7649, 7650, 7651, 7652, 7653, 7654, 7655, 7656, 7657, 7658, 7659, 7660, 7661, 7662, 7663, 7664, 7665, 7666, 7667, 7668, 7669, 7670, 7671, 7672, 7673, 7674, 7675, 7676, 7835, 8380, 8381, 8382, 8383, 8384, 8385, 8386, 8387, 8388, 8389, 8390, 8391, 8392, 8393, 8394, 8395, 8396, 8397, 8398, 8399, 8400, 8401, 8402, 8616, 8617, 8618, 8619, 8620, 8621, 8877, 8878, 8879, 8880, 8881, 8882, 8883, 8884, 8885, 8886, 8887, 8888, 8889, 8890, 8891, 8892, 8893, 8894, 8895, 8896, 8897, 8898, 8899, 8900, 8901, 8902, 8903, 8904, 8905, 8906, 8907, 8908, 8909, 8945, 8946);


if (!$fp = @fopen( "input\etcitemgrp.txt" , 'r')) {
	die('cant open input file.');
}

$fp2 = fopen( "output\etcitemgrp.txt", 'w' );

$line_nr=1;
while(!feof($fp)) {
	$line_nr++;
	$line = fgets($fp);

	//empty line
	if ((strlen($line)!=0) and ($line[0] != '/'))
	{
		$p = split("\t", $line);
		$item_id = (int)$p[1];
		
		if ( in_array($item_id, $spellbooks) )
		{
			echo " {$item_id} :: {$p[29]} \r\n";
			$p[29]=2;
			$out = implode("\t", $p);
		}
		else
		{
			$out = $line;
		}
	}
	else
	{
		$out = $line;
	}
	
	fwrite($fp2, $out);

/*
  [0]=>
  string(1) "2"
  [1]=>
  string(3) "687" //id
  [2]=>
  string(1) "0"
  [3]=>
  string(1) "0"
  [4]=>
  string(1) "2"
  [5]=>
  string(1) "5"
  [6]=>
  string(1) "0"
  [7]=>
  string(23) "dropitems.drop_sack_m00"
  [8]=>
  string(0) ""
  [9]=>
  string(0) ""
  [10]=>
  string(26) "dropitemstex.drop_sack_t00"
  [11]=>
  string(0) ""
  [12]=>
  string(0) ""
  [13]=>
  string(24) "icon.etc_scroll_gray_i00"
  [14]=>
  string(0) ""
  [15]=>
  string(0) ""
  [16]=>
  string(0) ""
  [17]=>
  string(0) ""
  [18]=>
  string(3) "100"
  [19]=>
  string(1) "0"
  [20]=>
  string(2) "18"
  [21]=>
  string(1) "0"
  [22]=>
  string(1) "0"
  [23]=>
  string(1) "1"
  [24]=>
  string(0) ""
  [25]=>
  string(1) "1"
  [26]=>
  string(0) ""
  [27]=>
  string(23) "ItemSound.itemdrop_sack"
  [28]=>
  string(0) ""
  [29]=>
  string(1) "0" //0 = stacked, 2 = unstacked
  [30]=>
  string(1) "0"
  [31]=>
  string(2) "0"
*/


}



?>