 <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Data Supervisor</h3>
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
                                                    Nama
                                                </th>
                                                <th>
                                                    Jenis Kelamin
                                                </th>
                                                <th>
                                                    No HP
                                                </th>
                                                <th>
                                                    Alamat
                                                </th>
                                                <th>
                                                    Foto
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <?php $no=1; ?>
                                                <?php foreach($dataSPV as $spv) {?>
                                                <td>
                                                    <?php echo $no ?>
                                                </td>
                                                <td>
                                                   <?php echo $spv->nama; ?>
                                                </td>
                                                <td>
                                                     <?php echo $spv->jenis_kelamin; ?>
                                                </td>
                                                <td class="center">
                                                    <?php echo $spv->no_hp; ?>
                                                </td>
                                                <td class="center">
                                                   <?php echo $spv->alamat; ?>
                                                </td>
                                                <td class="center">
                                                   <?php echo $spv->foto; ?>
                                                </td>
                                            </tr>
                                            <?php $no++ ?>
                                            <?php } ?>
                                        <tfoot>
                                            
                                        </tfoot>
                                    </table>
                                </div>
                            </div>