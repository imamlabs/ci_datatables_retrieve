<div class="sidebar">            
                                <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <?php  if(($dataAdmin->idlevel)=='2'){ ?>
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-user">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Master User</a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="<?php echo base_url('C_administrator'); ?>"><i class="icon-user"></i>Administrator </a></li>
                                        <li><a href="<?php echo base_url('C_author'); ?>"><i class="icon-user"></i>Author </a></li>
                                        <li><a href="<?php echo base_url('C_spv'); ?>"><i class="icon-user"></i>Supervisor</a></li>
                                    <li><a href="<?php echo base_url('C_customer'); ?>"><i class="icon-user"></i>Customer</a></li>
                                    </ul>
                                </li> 
                                <?php } ?> 
                                 <?php  if((($dataAdmin->idlevel)=='2')||(($dataAdmin->idlevel)=='3')){ ?>
                                 <li><a class="collapsed" data-toggle="collapse" href="#togglePages2"><i class="menu-icon icon-book">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Transaksi</a>
                                    <ul id="togglePages2" class="collapse unstyled">
                                        <li><a href="<?php echo base_url('C_penjualan'); ?>"><i class="icon-user"></i>Penjualan </a></li>
                                   
                                    
                                    </ul>
                                </li>
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages3"><i class="menu-icon icon-book">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Master Stok</a>
                                    <ul id="togglePages3" class="collapse unstyled">
                                        <li><a href="<?php echo base_url('C_buku'); ?>"><i class="icon-user"></i>Stok Buku </a></li>
                                    </ul>
                                </li>
                                <?php } ?>  
                                  <?php  if(($dataAdmin->idlevel)=='2'){ ?> 
                                <li><a href="#"><i class="menu-icon icon-cog"></i>Pengaturan </a></li>
                                <?php } ?>
                                <li><a href="<?php echo base_url('C_login/logout');?>"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                            
                        </div>
                        <br><br><br><br><br><br><br><br><br>