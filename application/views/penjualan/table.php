 <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Data Penjualan</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    No
                                                </th>
                                                <th>
                                                    Nama Customer
                                                </th>
                                                <th>
                                                    Alamat Pengiriman
                                                </th>
                                                <th>
                                                    No HP
                                                </th>
                                                  <th>
                                                    Judul Buku
                                                </th>
                                                <th>
                                                    Item
                                                </th>
                                                <th>
                                                    Harga Buku
                                                </th>
                                                <th>
                                                    Total Harga Buku
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <?php $no=1; ?>
                                                <?php foreach($dataPenjualan as $order) {?>
                                                <td>
                                                    <?php echo $no ?>
                                                </td>
                                                <td>
                                                   <?php echo $order->nama; ?>
                                                </td>
                                                <td>
                                                     <?php echo $order->alamat; ?>
                                                </td>
                                                <td class="center">
                                                    <?php echo $order->no_hp; ?>
                                                </td>
                                                <td class="center">
                                                   <?php echo $order->judul_buku; ?>
                                                </td>
                                                <td class="center">
                                                   <?php echo $order->item; ?>
                                                </td>
                                                 <td class="center">
                                                 
                                                    <?php echo 'Rp '.number_format($order->harga, 0, ".", "."); ?>
                                                </td>
                                                 <td class="center">
                                                 
                                                    <?php echo 'Rp '.number_format($order->totalharga, 0, ".", "."); ?>
                                                </td>
                                            </tr>
                                            <?php $no++ ?>
                                            <?php } ?>
                                        <tfoot>
                                            
                                        </tfoot>
                                    </table>
                                </div>
                            </div>