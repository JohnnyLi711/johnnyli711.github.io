
    <div style="background:royalblue; color:white; font-size:1.25em; font-weight:normal; font-family:sans-serif">
        <br/><?php if ($search != '') echo "$search"; ?>
    </div>
    
    <div style="background:silver">ENTER TOPIC TO FIND:
        <form action="/" method="get" name="form1">
            <input type="text" value="<?php echo $search; ?>"
                   name="search" size=18 onclick="this.select()" />
            <input type="submit" value="SEARCH"/>
        </form><br/>
    </div>