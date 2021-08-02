 <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Data Stok Buku</h3>
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
                                                    Judul Buku
                                                </th>
                                                <th>
                                                    Nama Author
                                                </th>
                                                <th>
                                                    Stok
                                                </th>
                                                <th>
                                                    Harga
                                                </th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <?php $no=1; ?>
                                                <?php foreach($dataBuku as $buku) {?>
                                                <td>
                                                    <?php echo $no ?>
                                                </td>
                                                <td>
                                                   <?php echo $buku->judul_buku; ?>
                                                </td>
                                                <td>
                                                     <?php echo $buku->nama; ?>
                                                </td>
                                                <td class="center">
                                                    <?php echo $buku->stok; ?>
                                                </td>
                                                <td class="center">
                                                   <?php echo 'Rp '.number_format($buku->harga, 0, ".", "."); ?>
                                                </td>
                                             </tr>
                                            <?php $no++ ?>
                                            <?php } ?>
                                        <tfoot>
                                            
                                        </tfoot>
                                    </table>
                                </div>
                            </div>