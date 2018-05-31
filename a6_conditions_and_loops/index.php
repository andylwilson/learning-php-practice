<html>
<head>
    <title>Assignment 6: Conditions and Loops</title>
</head>

<body>
    <main>
        <?php
        /* I wasn't sure if we were supposed to create this as part of a form
        ** or not, because the instructions say there is no dynamic user input,
        ** and the screenshots only show raw text output. Please let me know if
        ** I need to add a form or anything, thank you!
        */
        
            $cost = 12.50;
            $tip = 2.50;
            $tax = 1.25;
            $total = 16.25;
            $message = '';
        ?>    
            <h1>Total Meal Cost:</h1>
        <?php
            echo 'Meal Cost: $' . $cost . '<br />'; 
            echo 'Tip: $' . $tip . '<br />';
            echo 'Tax: $' . $tax . '<br />'; 
            echo 'Total: $' . $total . '<br />'; 
            
            if ( (!is_numeric($total) ) || $total < 0 ) {
                $message = 'Is this even a number? <br />';
            } else if ($total < 20) {
                $message = 'Good price. <br />';
            } else if ($total > 20 && $total < 40) {
                $message = 'Reasonably priced. <br />';
            } else {
                $message = 'This is pricey. <br />';
            }
        
            echo $message . '<br />';
        ?>
        
        <h1>Random Number Loop</h1>
        
        <?php
            $randnum = rand(5,7);
                       
            for ($i = 0; $i <= 10; $i++) {
                if ($i == $randnum) {
                    echo $i . ' is your random number <br />';
                } else {
                    echo $i . ' <br />';
                }
            }
        ?>
    </main>
</body>
</html>