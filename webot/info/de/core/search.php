                <div>
                    <center>
                        <div style="min-height:95px">
                                <form action="/" method="get" name="form1">
                                    <LABEL for="search"><span style="color:navy">SEARCH (ALT-S)</span></LABEL>
                                    <input type="text" value="<?php echo $search; ?>"
                                           name="search" size=20 accesskey="s"  onclick="this.select()" />
<?php @include "$h/lib/selecttype.php"; ?>
                                    <input type="submit" /><br/>
                                    <small><input type="checkbox" name="highlight" value="on">Highlight</small>
                                    <br/>
                                </form>
                        </div>
                    </center>
                </div>