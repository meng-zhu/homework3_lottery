<?php
    for($i=1;$i<=49;$i++){
        $lottery[]=$i;
    }
    for($j=0;$j<7;$j++){
        $a=rand($j,48);
        $b=$lottery[$a];
        $lottery[$a]= $lottery[$j];
        $lottery[$j]=$b;
    }
?>
<html>
<head>
	<meta charset="UTF-8">
    <title>台灣公益彩券</title>
</head>
<body>
    <TABLE BORDER="1"  WIDTH="70%"> 
        <CAPTION>大樂透開獎號碼</CAPTION> 
        <TR><TH COLSPAN=6>開獎號碼<TH ROWSPAN=1>特別號
        <TR align="center">
            <TD><?php echo $lottery[0];?></TD>
            <TD><?php echo $lottery[1];?></TD>
            <TD><?php echo $lottery[2];?></TD>
            <TD><?php echo $lottery[3];?></TD>
            <TD><?php echo $lottery[4];?></TD>
            <TD><?php echo $lottery[5];?></TD>
            <TD><?php echo $lottery[6];?></TD>
        </TR>
    </TABLE>
</body>
</html>