<!-- if elseif basic -->
<?php 
    $num=122;  
    if($num<100){  
    echo "$num is less than 100";  
}  elseif($num>100){
    echo "$num is getter than 100"."</br>";
}
?>
<!-- If Elseif basic Condition -->

<?php  
    $marks=80;      
    if ($marks<33){    
        echo "fail";    
    }    
    else if ($marks>=34 && $marks<50) {    
        echo "Congratulation You GOt C";    
    }    
    else if ($marks>=50 && $marks<65) {    
       echo "Congratulation You Got B grade";   
    }    
    else if ($marks>=65 && $marks<80) {    
        echo "Congratulation You Got A";   
    }    
    else if ($marks>=80 && $marks<90) {    
        echo "Congratulation You Got A+";    
    }  
    else if ($marks>=90 && $marks<100) {    
        echo "Congratulation You Got Golden A+";   
    }  
   else {    
        echo "Congratulation Invalid input";    
    }    
?>  