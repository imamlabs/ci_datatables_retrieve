 <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Data Administrator</h3>
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
                                                <?php foreach($dataAdministrator as $adm) {?>
                                                <td>
                                                    <?php echo $no ?>
                                                </td>
                                                <td>
                                                   <?php echo $adm->nama; ?>
                                                </td>
                                                <td>
                                                     <?php echo $adm->jenis_kelamin; ?>
                                                </td>
                                                <td class="center">
                                                    <?php echo $adm->no_hp; ?>
                                                </td>
                                                <td class="center">
                                                   <?php echo $adm->alamat; ?>
                                                </td>
                                                <td class="center">
                                                   <?php echo $adm->foto; ?>
                                                </td>
                                            </tr>
                                            <?php $no++ ?>
                                            <?php } ?>
                                        <tfoot>
                                            
                                        </tfoot>
                                    </table>
                                </div>
                            </div>