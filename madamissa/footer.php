<div id="Footer">
	<table style="width:100%;">
		<tbody style="width:100%;">
			<tr style="color:white;font-size:11px;line-height: 11px;">
				<td width="100%;">
					<div style="text-align:center;margin-top:5px;margin-bottom: 10px;">
						<a id="Divafooter" href="contact.php" style="  border-left: medium none;">Plan du site</a>
						<a id="Divafooter" href="Chartre.php">Charte Ethique </a>
						<a id="Divafooter" href="contact.php">Assistance et contact</a>
						<a id="Divafooter" target="_blank" href="http://www.alanglais.com/">Notre photographe</a>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</div>
</div>
</body>
</html>
<script type="text/javascript">
document.oncontextmenu = new Function("return false");
</script>
        <script type="text/javascript">
        function disableCtrlKeyCombination(e)
        {
                //list all CTRL + key combinations you want to disable
                var forbiddenKeys = new Array("a", "s", "c", "i");
                var key;
                var isCtrl;

                if(window.event)
                {
                        key = window.event.keyCode;     //IE
                        if(window.event.ctrlKey)
                                isCtrl = true;
                        else
                                isCtrl = false;
                }
                else
                {
                        key = e.which;     //firefox
                        if(e.ctrlKey)
                                isCtrl = true;
                        else
                                isCtrl = false;
                }

                //if ctrl is pressed check if other key is in forbidenKeys array
                if(isCtrl)
                {
                    for (i = 0; i < forbiddenKeys.length; i++)
                        {
                                //case-insensitive comparation
                            if (forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase())
                                {
                                    alert("Key combination CTRL + "
                                               + String.fromCharCode(key)
                                               + " has been disabled.");                                    
                                        return false;
                                }
                        }
                }
                return true;
        }
    </script>
 <script type="text/javascript">
        //<!--
                function ffalse()
                {
                        return false;
                }
                function ftrue()
                {
                        return true;
                }
                document.onselectstart = new Function ("return false");
                if(window.sidebar)
                {
                        document.onmousedown = ffalse;
                        document.onclick = ftrue;
                }
        //-->
        </script>
