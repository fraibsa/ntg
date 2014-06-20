<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  </head>
  <body>
    <table width="100%" border="0" cellspacing="0" cellpadding="1" align="center" bgcolor="#CCC">
      <tr>
        <td>
          <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center" bgcolor="#FFF" style="font-family: tahoma, arial, helvetica; font-size: 10px;">
            <tr>
              <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family: tahoma, arial, helvetica; font-size: 11px;">
                  <tr>
                    <td nowrap="nowrap" style="line-height: 1.6em;" valign="middle">
                      
					  
					  <table border="0" cellpadding="1" cellspacing="1" style="width:550px; font-size:8pt;">
						<tbody>
							<tr>
							<td><a href="http://www.naranjatradicionaldegandia.com" title="Naranja Tradicional de Gandia. Auténtica naranja de Valencia"><img alt="Naranja Tradicional de Gandia. Naranjas y mandarinas de Valencia" src="http://www.naranjatradicional.com/sites/default/files/logoNaranjaTradicional4_4.png" title="Naranja Tradicional de Gandia. Auténtica naranja de Valencia" /></a></td>
							<td>
							<p align="center">Naranja Tradicional de Gandia</p>							
							<p align="center">Calle F&aacute;tima, 107 46710 Daim&uacute;s (Valencia)</p>
							<p align="center"><span>Tel. 686922522 </span> <span> email: info@naranjatradicional.com</span</p>
							</td>
							</tr>							
						</tbody>
					</table>
				  
                    
					</td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family: tahoma, arial, helvetica; font-size: 11px;">
                  <tr>
                    <th colspan="2"><?php print t('Order Summary'); ?></th>
                  </tr>
                  <tr>
                    <td colspan="2">

                      <table class="details" width="100%" cellspacing="0" cellpadding="0" style="font-family: tahoma, arial, helvetica; font-size: 1em;">
                        <tr>
                          <td valign="top" width="50%">
                            <br/>
                            <b><?php print t('Account No:'); ?></b> <?php print $info['order_uid']; ?><br/>
                            <br/>
                            <b><?php print t('Order Date:'); ?></b> <?php print date('j F, Y', $info['order_created']); ?><br/>
                            <br/>
                            <b><?php print t('Billing Address:'); ?></b><br />
                            <?php print isset($info['customer_billing']) ? $info['customer_billing'] : ''; ?><br />
                          </td>
                          <td valign="top" width="50%">
                            <br/>
                            <b><?php print t('Web Order No:'); ?></b> <?php print $info['order_number']; ?><br/>
                            <br/>
                            <b><?php print t('Email Address:'); ?></b> <?php print $info['order_mail']; ?><br/>
                            <br/>
                            <b><?php print t('Shipping Address:'); ?></b><br />
                            <?php print isset($info['customer_shipping']) ? $info['customer_shipping'] : ''; ?><br />
                          </td>
                        </tr>
                      </table>
					    <tr>
					     <td>
					       <b><?php print t('Agencia Transporte:'); ?></b><?php print isset($info['order_transportista']) ? $info['order_transportista'] : ''; ?><br />					
					     </td>
					    </tr>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <table class="products" width="100%" border="0" cellspacing="0" cellpadding="0" align="center" style="font-family: tahoma, arial, helvetica; font-size: 11px;">
                  <tbody>
                    <tr>
                      <td class="line-items"><?php print isset($info['line_items']) ? $info['line_items'] : ''; ?></td>
                    </tr>
                    <tr>
                      <td class="order_total"><?php print isset($info['order_total']) ? $info['order_total'] : ''; ?></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <table>
                  <tr>
                    <td colspan="2" style="background: #EEE; color: #666; padding: 1em; font-size: 0.9em; line-height: 1.6em; border-top: #CCC 1px dotted; text-align: center;">
                      <p>PRECIOS CON IVA INCLUIDO</P>
					  <p>NUMERO CUENTA BANCARIA PARA EFECTUAR PAGOS:  Banco SabadellCAM   <strong>ES80 0081-7340-85-0001740680</strong> </p>
					  <p>Sitio web: <a href="http://www.naranjatradicional.com">www.naranjatradicionaldegandia.com</a>   S&iacute;guenos en <a href="https://www.facebook.com/naranjatradicional">Facebook</a></p>
					  
					  
					  
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>
