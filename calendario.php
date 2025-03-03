<html>
    <?php 
        function linha($semana)
        {
            echo "<tr>";

            for ($i = 0; $i < 7; $i++)
            {
                $dia = date('d');
                if (isset($semana[$i]))
                {
                    if ($i == 6)
                    {
                        echo "<td><b>{$semana[$i]}<b\></td>"; 
                    }

                    elseif($i == 0)
                    {
                        echo "<td style= 'color: red'>{$semana[$i]}</td>";
                    }
                    elseif ($semana[$i] == $dia)
                    {
                        echo "<td><b>{$semana[$i]}<b\></td>";    
                    }
                    else
                    {
                        echo "<td>{$semana[$i]}</td>";
                    }
                    
                }

                else
                {
                    echo "<td></td>";
                }
            }
                
            echo "</tr>";
        }
        
        function adiciona_dia()
        {
            $dia = 1;
            $semana = array();

            while($dia <= 31)
            {
                array_push($semana, $dia);
                if (count($semana) == 7)
                {
                    linha($semana);
                    $semana = array();
                    
                }
                

                if($dia == 31)
                {
                    linha($semana);
                    $semana = array();
                }
                $dia++;
            }

            

        }

    ?>

    <table border = "1">

        <tr>
            <th>Dom</th>
            <th>Seg</th>  
            <th>Ter</th>  
            <th>qua</th>  
            <th>qui</th>  
            <th>sex</th>  
            <th>sab</th>     
        </tr>
        <?php
            adiciona_dia();
        ?>
        
    </table>

</html>
