<?php 
	$list = $this->Mproduct->product_view_max(10);
?>
<div class="content-wrapper">
	<section class="content-header">
		<h1><i class="glyphicon glyphicon-cd"></i> Danh sách sản phẩm bán chạy</h1>
		
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box" id="view">
					<div class="box-header with-border">
						<!-- Search Limit -->
						
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<?php  if($this->session->flashdata('success')):?>
	                        <div class="row">
	                            <div class="alert alert-success">
	                                <?php echo $this->session->flashdata('success'); ?>
	                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                            </div>
	                        </div>
	                    <?php  endif;?>
	                    <?php  if($this->session->flashdata('error')):?>
	                        <div class="row">
	                            <div class="alert alert-error">
	                                <?php echo $this->session->flashdata('error'); ?>
	                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                            </div>
	                        </div>
	                    <?php  endif;?>
						<div class="row" style='padding:0px; margin:0px;'>
							<!--ND-->
							<div class="table-responsive">
								<table class="table table-hover table-bordered">
									<thead>
										<tr>
											<th class='text	-center' style='width:10px;'><input name='checkAll' id='checkAll' type='checkbox'/></th>
											<th class="text-center" style="width:20px">ID</th>
											<th>Hình</th>
											<th>Tên sản phẩm</th>
											<th>Loại sản phẩm</th>
											<th class="text-center" style="width:90px">Tình trạng</th>
											<th class="text-center" style="width:150px">Số lượng đã bán ra</th>
											<!-- <th class="text-center" style="width:90px">Bình luận</th> -->
											
										</tr>
									</thead>
									<tbody>
									<?php foreach ($list as $val):?>
										<tr>
											<td class="text-center" style="width:20px"><input name="checkboxid[]" type="checkbox" value="$id"></td>
											<td class="text-center"><?php echo $val['id'] ?></td>
											<td style="width:50px">
												<img src="public/images/products/<?php echo $val['avatar'] ?>" alt="<?php echo $val['name'] ?>" class="img-responsive">
											</td>
											<td><a href="<?php echo base_url() ?>admin/product/update/<?php echo $val['id'] ?>"><?php echo $val['name'] ?></a></td>
											<?php 
												$namecat = $this->Mcategory->category_name($val['catid']);
											?>
											<td><?php echo $namecat ?></td>
											<td class="text-center">
												<?php $bien = ($val['number'] > 10) ? 'Còn hàng' : 'Hết hàng'; ?>
												<?php $color = ($bien == 'Hết hàng') ? 'red' : 'blue'; ?>
												<p style="color:<?php echo $color ?>"><?php echo $bien; ?></p>
											</td>
											<td class="text-center">
												<?php echo $val['number_buy'] ?>
											</td>
											<!-- <td class="text-center">
												<a class="btn btn-success btn-xs" href="<?php echo base_url() ?>admin/product/comments/<?php echo $val['id']?>" role = "button">
													<span class="fa fa-comment"></span> Bình luận
												</a>
											</td> -->
											
										</tr>
									<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							
							<!-- /.ND -->
						</div>
					</div><!-- ./box-body -->
				</div><!-- /.box -->
		</div>
		<!-- /.col -->
	  </div>
	  <!-- /.row -->
	</section>
<!-- /.content -->
</div><!-- /.content-wrapper -->