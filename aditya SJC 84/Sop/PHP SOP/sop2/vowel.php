<html>
    <body bgcolor="Pink">
        <?php
            $chr;
            $str=$_POST["t1"];
            $count=0;
            $len=strlen($str);
            $i=0;
            while($len>$i)
            {
                $chr=substr($str,$i,1);
                if(($chr=='a'||$chr=='e'||$chr=='i'||$chr=='o'||$chr=='u')||($chr=='A'||$chr=='I'||$chr=='E'||$chr=='O'||$chr=='U'))
                {
                    $count=$count+1;
                }
                $i=$i+1;
            }
            echo "<h3> Total Vowels in the String are </h3>".$count;
        ?>
    </body>
</html>