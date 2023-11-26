<div style="font-size:1.25em; text-align:center">
                            <form action="/" method="get" name="form1">
                                <LABEL for="search"><span style="color:navy"><b>FIND</b></span></LABEL>
                                <input type="text" value="<?php echo $search; ?>"
                                       name="search" size=20 accesskey="s"  onclick="this.select()" />
                                       <?php @include "../lib/selecttype.php"; ?>
                                <input type="submit" value="SEARCH" title="CHROME (ALT+S)" /><br/>
                                <small><input type="checkbox" name="highlight" value="on">Highlight</small>
                                <small><input type="checkbox" name="type" value="extra">Extra</small>
                                <br/>
                            </form>
</div>